@extends('frontend.layouts.master')

@section('title', 'Register')

@section('content')
<h4 id="account_heading">Create account or Login</h4>

<div class="All_button_class">

    <button class="login_btn_class" id="apple_btn">
        <img id="login_img" src="/img/appleFixed.png" alt="">
        <p>Continue with Apple</p>
    </button>
    <a class="login_btn_class2" href="{{route('social-provider',['provider'=>'google'])}}" id="google_btn">
        <img id="login_img" src="/img/google_logo.png" alt="">
        <p>Continue with Google</p>
    </a>
    <a class="login_btn_class3" href="{{route('social-provider',['provider'=>'facebook'])}}" id="facebook_btn">
        <img id="login_img" src="/img/facebook_logo.png" alt="">
        <p>Continue with Facebook</p>
    </a>
</div>

<h4 id="or">or</h4>

<div class="sign_in_form">

    <h4>Sign In</h4>

    <form action="">
        <div class="sign_in">
            <input type="email" placeholder="Email...">
            <input type="password" placeholder="Password...">

            <a href="forgetpass.html">Forget your Password?</a>
            <a id="sign_in_btn" href="/customer_profile.html">Sign In</a>
            <div class="goto_signup">
                <h3>Don't have an account?</h3>
                <a href="user_sign_up.html">Sign Up</a>
            </div>
        </div>
    </form>
</div>



<div class="buisness_customer_reg">
    <h4>Sign Up as a <span>Business Customer</span> ??</h4>
    <a href="stock_register.html">Sign Up</a>
</div>

@endsection

@push('script')

@endpush
