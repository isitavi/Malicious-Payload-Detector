<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Accounts;
use Intervention\Image\Image as Image;
use App\User;
use App\Withdraw;
use DB;
use Session;

class UsertokenController extends Controller
{

public function __construct(){
   

}

public function generatetoken(){
	return "generatetoken";
}
public function updatelevel(){
	DB::table('users')->whereId(Auth::user()->id)->increment('level');
return redirect()->back()->with('success', ['your message,here']);  
}
public function viewusertree(){
	return "generatetoken";
}



public function updateprofile(Request $request){
     
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',

            'fname' => 'required|max:255',
            'mobile' => 'required',
 
            'pid' => 'required',        
        ]);

        if ($validator->fails()) {
       return redirect()->back()
              ->withInput($request->all())
              ->withErrors($validator->errors()); // will return only the errors
        }


$name= $request->input('name');
$email = $request->input('email');
$fname=$request->input('fname');
$pid=$request->input('pid');
$mobile=$request->input('mobile');



User::where('id', '=', Auth::user()->id)->update([
                            'name' => $name,
                            'email' => $email,
  
                            'fname'=>$fname,
                             'pid'=>$pid,
                            'mobile'=>$mobile,
    ]);
Session::flash('message', "Profile updated Successfully!!");

return redirect()->back();   

}

public function updatepassword(Request $request){
     
        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
       return redirect()->back()
              ->withInput($request->all())
              ->withErrors($validator->errors()); // will return only the errors
        }

$password= $request->input('password');
User::where('id', '=', Auth::user()->id)->update([
                    'password' => bcrypt($password),
]);
Session::flash('message', "Password changed!!");

return redirect()->back(); 

}


public function login(Request $request)
{


        $validator = Validator::make($request->all(), [
            'userid' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
       return redirect()->back()
              ->withInput($request->all())
              ->withErrors($validator->errors()); // will return only the errors
        }

if (Auth::attempt(['loginid' => $request->userid, 'password' => $request->password])) {

        return redirect('dashboard');
} 

else {
    return redirect('/login')->withErrors([
        'error' => 'These credentials do not match our records.',
    ]);
}


}

public function sendmail(Request $request){


        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',         
        ]);

        if ($validator->fails()) {
       return redirect()->back()
              ->withInput($request->all())
              ->withErrors($validator->errors()); // will return only the errors
        }

    $name = $request->input('name');
    $email = $request->input('email');
    $subject = $request->input('subject');
    $message = $request->input('msg');
   
    $email_from = $email;
    $email_to = 'dheutinmarka@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');


Session::flash('message', "Mail Sent!!");

return redirect()->back(); 

}

}