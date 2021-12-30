@extends('frontend.layouts.master')

@section('title', 'Register')

@section('content')
<h4 id="account_heading">Create account or Login</h4>

<div class="All_button_class">

    <a href="" class="login_btn_class" id="apple_btn">
        <img id="login_img" src="/img/appleFixed.png" alt="">
        <p>Continue with Apple</p>
    </a>
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

                @if (session()->has('success'))
                      <div class="row" style="display: flex;justify-content: center;">
                        <div class="col-md-6">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    @endif

                    @if (session()->has('error'))
                      <div class="row" style="display: flex;justify-content: center;">
                        <div class="col-md-4">
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    @endif
                    

    <h4>Sign In</h4>

    <form action="{{route('user.login.submit')}}" method="POST">
      @csrf
        <div class="sign_in">
            <input type="email" value="{{old('email')}}" name="email" placeholder="Email...">
            <input type="password" value="{{old('password')}}" name="password"  placeholder="Password...">

            <a href="{{route('user-forgot')}}">Forget your Password?</a>
            <button type="submit">Sign In</button>
            <div class="goto_signup">
                <h3>Don't have an account?</h3>
                <a href="{{route('user-register')}}">Sign Up</a>
            </div>
        </div>
    </form>
</div>


<div class="buisness_customer_reg">
    <h4>Sign Up as a <span>Business Customer</span> ??</h4>
    <a href="">Sign Up</a>
</div>

@endsection

@push('script')

@endpush
