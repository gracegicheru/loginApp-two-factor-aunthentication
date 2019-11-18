<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/register', function(){
//    return view('register');
//});
    Route::get('/register', 'RegistrationController@index');
    Route::post('/register', 'RegistrationController@store');
//Route::get('/login', function (){
//    return view('login');
//});

    Route::get('/login', 'SessionController@create');
    Route::post('/login', 'SessionController@login');
    Route::post('/otp','SessionController@VerifyOtp');
    Route::get('/success', 'SuccessController@success');

    Route::post('/verifyuser', 'SessionController@verifyUser');

Route::get('/logout', 'SessionController@logout');
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('send_email', function(){
//    $resp = Mail::raw('sending mails is easy', function($message){
//        $message->subject('Mailgun and laravel is awesome');
//        $message->to('gracegicheru3@gmail.com');
////        $message->from('no-reply@sandboxda786e86170e4e66b2410b7c33b996a2.mailgun.org');
//
//    });
//
//    var_dump($resp);
//    echo "jdfjjhf";
//});

Route::get('/otp', 'SessionController@otpEmail')->name('otpEmail');
//Route::post('/otpVerify', 'SessionController@VerifyOtp');