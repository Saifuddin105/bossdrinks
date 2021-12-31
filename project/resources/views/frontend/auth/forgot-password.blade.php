@extends('frontend.layouts.master')

@section('title', 'forgot password')

@section('content')
<div class="password_form">
@if (session()->has('error'))
                      <div class="row" style="display: flex;justify-content: center;">
                        <div class="col-md-4">
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    @endif
                    @if (session()->has('success'))
                      <div class="row" style="display: flex;justify-content: center;">
                        <div class="col-md-4">
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    @endif
            <h4>Reset Your Password</h4>
            <p>We will send you an email to reset your Password</p>

            <form action="{{route('user-forgot-submit')}}" method="POST">
              @csrf
                <div class="forget_pass">
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email...">



                    <button type="submit">Submit</button>
                    <a href="{{route('user.login')}}">Back to Log in</a>

                </div>
            </form>
        </div>
@endsection        
