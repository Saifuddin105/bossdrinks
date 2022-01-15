@extends('frontend.layouts.master')

@section('styles')

<style>

    
.pass_recovery_div {
    background: #CFDAE0;
    width: 100%;
    height: 500px;
    padding-top: 60px;
}

.recover_form {
    display: flex;
    flex-direction: column;
}

.recovery_card {
    width: 30%;
    background: #FFFFFF;
    padding: 30px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 20px;

    box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);
}

#RP_h3 {
    font-size: 20px;
    /* font-family: 'Poppins'; */
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 25px;
    margin-top: 5px;
}

#RP_span {
    font-size: 12px;
    letter-spacing: 1px;
}

#RP_p {
    margin-top: 25px;
    font-size: 14px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 10px;
}

#RP_input {
    background: #F0F5F8;
    padding: 16px;
    border-radius: 16px;
    border: 1px solid #FFF;
    width: 100%;
    margin-top: 4px;
    margin-bottom: 2px;
    font-size: 12px;
}

#RP_button {
    margin-top: 20px;
    background: #08152C;
    color: white;
    border-radius: 17px;
    padding: 10px;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 600;
    cursor: pointer;
    width: 100%;
    margin-left: auto;
    margin-right: auto;

}

@media only screen and (max-width: 576px)

{
 .recovery_card {
     width: 90% !important;
 }

}



</style>
@endsection

@section('title', 'forgot password')

@section('content')


<div>


<!-- 
            <form action="{{route('user-forgot-submit')}}" method="POST">
              @csrf
                <div class="forget_pass">
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email..." required>

                    <button type="submit">Submit</button>
                    <a href="{{route('user.login')}}">Back to Log in</a>

                </div>
            </form> -->
            <div class="pass_recovery_div">
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
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    @endif
<div class="recovery_card">
    <h3 id="RP_h3">Recover Password</h3>
    <span id="RP_span">Don't worry.It happens to the best of us.</span>

    <p id="RP_p">Please enter your email below :</p>
    <form action="{{route('user-forgot-submit')}}" method="POST"class="recover_form">
    @csrf
    <input id="RP_input" type="email" value="{{old('email')}}" placeholder="Email..." required>

    <button id="RP_button" type="submit">Send a Recovery link</button>

    </form>

</div>

</div>
        </div>
@endsection        
