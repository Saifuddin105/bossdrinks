<?php

namespace App\Http\Controllers\User;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use App\Models\Generalsetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class ForgotController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showForgotForm()
    {
        return view('frontend.auth.forgot-password');
    }

    public function forgot(Request $request)
    {
        $gs = Generalsetting::findOrFail(1);
        $input = $request->all();
        $user = User::where('email', '=', $request->email);
        if ($user->count() > 0) {
            // user found
            $userGet = $user->first();
            $random = Str::random(8);
            $token = bcrypt($random);
            $setup = Generalsetting::find(1);
            $temp = EmailTemplate::where('email_type', '=', 'reset_password_tamplate')->first();
            $body = preg_replace("/{customer_name}/", $userGet->name, $temp->email_body);
            $body = preg_replace("/{website_title}/", $setup->title, $body);
            $body = preg_replace("/{reset_password_url}/", route('user-reset-password', ['token' => $token, 'id' => $userGet->id]), $body);

            // $data = [
            //     'email_body' => $body
            // ];

            //mail($request->email,$subject,$msg,$headers);
            $user->update(['remember_token' => $token]);
            $data = [
                'to' => $request->email,
                'subject' => "Password Reset Link",
                'body' => $body];
            $mailer = new GeniusMailer();
            $mailer->sendCustomMail($data);

            return redirect()->route('user-forgot')->with('success', "Please Check your email Address.");

            //   $admin = User::where('email', '=', $request->email)->firstOrFail();
            //   $autopass = Str::random(8);
            //   $input['password'] = bcrypt($autopass);
            //   $admin->update($input);
            //   $subject = "Reset Password Request";
            //   $msg = "Your New Password is : ".$autopass;
            //  //We have e-mailed your password reset link!
            //  //Your password has been reset!.
            //   if($gs->is_smtp == 1)
            //   {
            //       $data = [
            //               'to' => $request->email,
            //               'subject' => $subject,
            //               'body' => $msg,
            //       ];

            //       $mailer = new GeniusMailer();
            //       $mailer->sendCustomMail($data);
            //   }
            //   else
            //   {
            //       $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
            //       mail($request->email,$subject,$msg,$headers);
            //   }
            //   return response()->json('Your Password Reseted Successfully. Please Check your email for new Password.');
        } else {
            // user not found
            //
            return redirect()->route('user-forgot')->with('error', "We can't find a user with that e-mail address")->withInput();
            //return response()->json(array('errors' => [ 0 => 'No Account Found With This Email.' ]));
        }
    }

    public function resetPassword($token, $id)
    {
        $user = User::where('id', '=', $id);
        $userGet = $user->first();
        if ($user->count() > 0 && $userGet->remember_token === $token) {
            return redirect()->route('user-password-form', ['id' => $id])->with('success', "Please Create New Password")->withInput();

        }else{
          return redirect('user/login#login_form')->with('error', 'Token is not valid!');

        }
    }

    public function resetPasswordForm(Request $request)
    {
        return view('frontend.auth.reset-password');
    }

    public function passwordUpdate(Request $request)
    {
        $user = User::find($request->user_id);
        if($user){
          $rules = [
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password|min:8',

        ];
        $validator = Validator::make($request->all(), $rules, $message = [
            'password_confirmation.same' => 'The :attribute does not match.',

        ]);

        if ($validator->fails()) {
            return redirect('user/password/form')->withErrors($validator, 'login')->withInput();
        }
         $user->password= bcrypt($request->password);
         $status = $user->save();
        
        if ($status) {
            return redirect('user/login#login_form')->with('success', 'Password Updated successfully, please login now !!');
        }
         }else{
          return redirect('user/login#login_form')->with('error', 'sometimes wrong!!');

          }
      
    }

}
