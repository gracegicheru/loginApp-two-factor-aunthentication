<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class RegistrationController extends Controller
{
    public function index(){
        return view ('register');
    }
    public function store(Request $request){
        //validate the form
        $validatedData = $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required',
//
            ]);
//        //register and save users
//        $user=User::create(request(['name','email','password']));
        $user= new User;
        $user->name=$validatedData['name'];
        $user->email=$validatedData['email'];
        $user->password= Hash::make($validatedData['password']);
        $user->save();
//
//        //sign them in

//      auth()->login($user);
//        protected function validator(array $data)
//        {
//            return Validator::make($data, [
//                'name' => 'required|string|max:255',
//                'email' => 'required|string|email|max:255|unique:users',
//                'password' => 'required|string|min:6|confirmed',
//            ]);
//            return view ('register');
//        }
//
//        protected function create(array $data)
//        {
//            return User::create([
//                'name' => $data['name'],
//                'email' => $data['email'],
//                'password' => bcrypt($data['password']),
//            ]);
//        }




        return redirect('/success');
// $input=$request->all();
//      return response()->json([
//            'status' => 'ok',
            //'redirect' => url('/login');
//        ]);
 }
}
