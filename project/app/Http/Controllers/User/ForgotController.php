<?php

namespace App\Http\Controllers\User;

use App\Models\Generalsetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Validator;
use App\Models\EmailTemplate;

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
      $input =  $request->all();
      $user = User::where('email', '=', $request->email);
      if ($user->count() > 0) {
      // user found

      $random = Str::random(8);
      $token = bcrypt($random);
      $setup = Generalsetting::find(1);
      $temp = EmailTemplate::where('email_type','=','reset_password_tamplate')->first();
      $body = preg_replace("/{customer_name}/", $user->name ,$temp->email_body);
      $body = preg_replace("/{website_title}/", $setup->title ,$body);
      $body = preg_replace("/{reset_password_url}/", route('user-reset-password',['token'=>$token]) ,$body);

      $data = [
          'email_body' => $body
      ];
        

        //mail($request->email,$subject,$msg,$headers); 
      $user->update(['remember_token' => $token]);
      $objDemo = new \stdClass();
      $objDemo->to = $request->email;
      $objDemo->from = $setup->from_email;
      $objDemo->title = $setup->from_name;
      $objDemo->subject = $temp->email_subject;

        
        try{
          Mail::send('admin.email.mailbody',$data, function ($message) use ($objDemo) {
              $message->from($objDemo->from,$objDemo->title);
              $message->to($objDemo->to);
              $message->subject($objDemo->subject);
          });

      }
      catch (\Exception $e){
           //die($e->getMessage());
      }
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
      }
      else{
      // user not found
      //
      return redirect()->route('user-forgot')->with('error', "We can't find a user with that e-mail address")->withInput();
      //return response()->json(array('errors' => [ 0 => 'No Account Found With This Email.' ]));    
      }  
    }

}
