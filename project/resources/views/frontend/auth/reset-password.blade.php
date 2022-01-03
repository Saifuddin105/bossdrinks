@extends('frontend.layouts.master')

@section('title', 'Register')

@section('content')
<h4 id="account_heading">Reset Password Form</h4>

<div class="sign_in_form" id="login_form">
@php
$id="";
$token="";
if(isset($_GET['id'])){
  $id=$_GET['id'];
}else{
  $id = old('user_id');
}
if(isset($_GET['token'])){
  $token=$_GET['token'];
}else{
  $token = old('token');
}
@endphp
    <form action="{{route('user-password-update')}}" method="POST" >
      @csrf
        <div class="sign_in">
        <div>
          <input type="hidden" value="{{$id}}" name="user_id"> 
          <input type="hidden" value="{{$token}}" name="token"> 
                    <input type="password" name="password" value="{{ old('password') }}" placeholder="Password...">
                    <br/>
                    @if ($errors->login->has('password'))
                                <span class="text-danger" role="alert">
                                <strong>{{ $errors->login->first('password') }}</strong>
                            </span>
                            @endif
                    </div>
                   
                    <div>
                    <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Confirm Password...">
                    <br/>
                    @if ($errors->login->has('password_confirmation'))
                                <span class="text-danger" role="alert">
                                <strong>{{ $errors->login->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                    </div>
                    


                    <button type="submit">Update</button>
        </div>
    </form>
</div>



@endsection

@push('script')

@endpush
