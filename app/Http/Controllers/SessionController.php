<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use App\User;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SessionController extends Controller
{
    public function create(){
 return view('login');
    }
public function generateOTP(){
        $otp= mt_rand(111111,999999);
        return $otp;
}

public function verifyUser(Request $request){
        $credentials=$this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where(["email" => $credentials["email"]])->first();
//        echo $credentials["email"] ."||";
//        echo Hash::make($credentials["password"]). "||";
//        echo $credentials["password"];

        if(isset($user)){
            if (Hash::check($credentials["password"], $user->password))
            {
                //put in session
                $otp =$this->generateOTP();
                $message ='your otp is ' .$otp;
                session (['otp'=>$otp]);


                $resp = $this->otpEmail($message, $user->email);

                return response()->json([
                    "status" => "ok",
                    "msg" => $resp,
                    "hhh" => $otp
                ]);
            }else{
                return response()->json([
                    "status" => "error",
                    "message" => "Incorrect username or password"
                ]);
            }

        }else{
            return response()->json([
                "status" => "error"
            ]);
        }
}
    public function logout(){
        auth()->logout();
        return redirect('/login');
    }


    public function otpEmail($message, $email){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host = 'smtp.mailgun.org';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'postmaster@sandboxda786e86170e4e66b2410b7c33b996a2.mailgun.org';                     // SMTP username
            $mail->Password = '3ef77a9e574ebf68a89c3211a240cb5f-985b58f4-e8f038de';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;

            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress($email, 'User');

            // Content
            $mail->isHTML(true);                                  // Set email format
            $mail->Subject = 'Otp message';
            $mail->Body = $message;

            $mail->send();

            return 'Message has been sent';
        }catch(Exception $e){
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    public function VerifyOtp(Request $request)
    {
        $data =$this->validate($request, [
            'otp' => 'required',
            //'email' => 'required',
            //'password'=>'required'
        ]);
        $enteredOtp = $data['otp'];
        $otp = $request->session()->get('otp');

        if ($otp == $enteredOtp){
            return response()->json([
                "status" => "ok",
                "redirect"=>url('/success')
            ]);

        }else{
            return response()->json([
                "status" => "error",
                "errMsg" => "incorrect otp entered"
                ]);
        }

    }

     }


