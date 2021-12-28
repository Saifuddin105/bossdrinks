<?php

namespace App\Http\Controllers\Front;

use App\Ambassedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmbassedorController extends Controller
{
    public function index(){
        return view('frontend.pages.brand-ambassedor');
     }

    public function registerForm(){
        return view('frontend.pages.join-now');
    }

    public function crateAmbassedor(Request $request){
        $data = $request->all();
        $data['agree_terms'] = $request->agree_terms == 'on' ? 1 : 0;
        $data['agree_referral'] = $request->agree_referral == 'on' ? 1 : 0;
        $data['agree_post'] = $request->agree_post == 'on' ? 1 : 0;
        $status = Ambassedor::create($data);
        if($status){
            return redirect()->route('join-ambassedor')->with('success', 'sign up Successfully done!!');
         }
     }
}
