

<style type="text/css">

#account_Heading {
   font-size: 18px;
    font-weight: 600;
    margin-top: 16px;
    padding-left: 37px;
    letter-spacing: 1px;
}
.heading_for_form {
        display: flex;
    flex-direction: row;
    gap: 100px;
}

   
#eye-icon {
    margin-top: -32px;
    margin-left: 290px;
    color: darkolivegreen;
}

.login_modal_bg {
    z-index: 9999;
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    background: rgb(0, 0, 0, .6);
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.5s;
}

.login_bg_active {
    visibility: visible;
    opacity: 1;
}

#cart_btn_image{
 height: 42px;

} 
.login_modal {

    margin-top: 20px;

    height: 95vh;

    width: 30%;
    margin-left: auto;

    margin-right: auto;
    background: #FFFFFF;
    border-radius: 28px;
    padding-top: 13px;
    overflow-y: auto;
    padding-bottom: 20px;
}

.login_form_options {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}

.login_form_options button {
    border: none;
    background: #FFFFFF;
    cursor: pointer;
    font-size: 16px;
    color: black;
    font-weight: 500;
}

#signup_button {
    color: #777777c2;
}


.LOGIN_FORM {
    display: flex;
    flex-direction: column;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    /* gap: 4px; */
}

.LOGIN_FORM input {
    background: #F0F5F8;
    padding: 16px;
    border-radius: 16px;
    border: 1px solid #FFF;
    width: 100%;
    margin-top: 4px;
    margin-bottom: 2px;
    font-size: 12px;
}


.SIGNUP_FORM {
    display: flex;
    flex-direction: column;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    gap: 8px;
    display: none;


}

.NAMES {
    display: flex;
    gap: 10px;
}

.NAMES input {
    width: 50%;
    background: #F0F5F8;
    padding: 16px;
    border-radius: 10px;
    border: 1px solid #FFF;
}

.checkbox_DIV {
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    gap: 14px;
    margin-bottom: 15px;
}

.SIGNUP_FORM input {
    background: #F0F5F8;
    padding: 16px;
    border-radius: 15px;
    border: 1px solid #FFF;
    width: 100%;
    margin-top: 2px;
    margin-bottom: 2px;
    font-size: 12px;

}

#login_form_checkbox {

    height: 20px;
    width: 20px;

}

#H-4 {
    font-size: 13px;
    color: #777;
    font-weight: 400;
}

#Anchor {
    font-size: 13px;
    color: brown;
}

#continue_btn {
    background: #08152C;
    color: white;
    border-radius: 10px;
    padding: 10px;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 600;
    cursor: pointer;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}

#login_cross_btn {
    border: none;
    background: #FFFFFF;
    font-size: 30px;
    margin-top: 2px;
    margin-right: 5px;
    font-weight: 700;
    width: 45px;
    cursor: pointer;
}

#P_TAG {
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 23px;
    font-size: 12px;
    letter-spacing: 1px;
    margin-top: 12px;
}

.forget_pss_div {
    margin-top: 1px;
    margin-bottom: 20px;
    display: flex;
    gap: 100px;
    padding-left: 30px;

}

.remember_me span {
    font-size: 13px;
}

.remember_me {
    display: flex;
    gap: 10px;
    margin-top: 3px;
}

/* #eye_icon {
    margin-left: 355px;
    margin-top: -80px;
} */

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

.apple_btn_class {
    display: flex;
    flex-direction: row;
    margin-left: auto;
    margin-right: auto;
    width: 85%;
    border-radius: 20px;
    height: 48px;
    background: #081F2c;
}
.apple_btn_class p {
    color: white;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
}
.google_btn_class {
        display: flex;
    flex-direction: row;
    margin-left: auto;
    margin-right: auto;
    width: 85%;
    border-radius: 20px;
    height: 48px;
    background: #FFFFFF;
}
.google_btn_class p {
    margin-left: auto;
    margin-right: auto;
    margin-top: 8px;
    font-weight: 600;
}
.facebook_btn_class {
        display: flex;
    flex-direction: row;
    margin-left: auto;
    margin-right: auto;
    width: 85%;
    border-radius: 20px;
    height: 48px;
    background: #4267B2;
}
.facebook_btn_class p {
    

    margin-left: auto;
    margin-right: auto;
    margin-top: 8px;
    font-weight: 600;
}
.pass{
  width: 100%;
  display: flex;
  align-items: center;
  background: #F0F5F8;border: 1px solid black;
  border-radius: 16px;border: 1px solid #fff;
}
#login_modal_pass:hover {
  width:'120%'
}


@media only screen and (max-width: 576px) {

    /* new design updated */

    .login_modal {
        width: 90% !important;
        height: 76vh !important;
    }

    #eye_icon {
        margin-left: 296px !important;
    }
}

</style>








<nav id="navbar" class="py-3 px-5">

  <div class="secondtopbar row">
    <div class="col-lg-4 sm-4 col-3">
      <div class="flx">
        <button id="navbar-btn" class="navbar-btn" type="button">
          <i class="bar-btn fas fa-bars"></i>
        </button>
        <a href="{{route('front.shop')}}">
          <h1 class="shop-text font-weight-bold ml-2 m-0">SHOP</h1>
        </a>
      </div>
    </div>

    <div class="col-lg-4 sm-4 col-6 text-center ">
      <img class="wow-img text-center " src="/img/Energy Boss - 280x78px.png" alt=" something">
    </div>
    <div class=" third-part col-lg-4 sm-4 col-3  text-center">
      <button id="searchbtn" class="navbar-btn" type="button">
        <i class="fas fa-search"></i>
      </button>
      <button id="userbtn" class="navbar-btn" type="button">
                            <i class="fas fa-user"></i>
                        </button></a>
      <a href="{{route('front.showCart')}}"> <button id="cart-btn" class="navbar-btn " type="button">
          <i class="cart-btn fas fa-shopping-cart"></i>
        </button></a>
        @if(Auth::user())
        <a href="{{route('user-logout')}}"> Log Out</a>
        @endif

    </div>

  </div>



      <div class="login_modal_bg">
        <div class="login_modal">
            <div class="heading_for_form">
                <h4 id="account_Heading">Create account or Login</h4>
                <button id="login_cross_btn">x</button>
            </div>
            <p id="P_TAG">We are a subscription-first business. For you to change or skip a delivery in the future, you will
                need a BOSS Drink account.</p>
    
            <div class="All_button_class">

    
                <a class="apple_btn_class" id="apple_btn">
                    <img id="login_img" src="/img/appleFixed.png" alt="">
                    <p>Continue with Apple</p>
                </a>
                
                <a class="google_btn_class" href="{{route('social-provider',['provider'=>'google'])}}"  id="google_btn">
                    <img id="login_img" src="/img/google_logo.png" alt="">
                    <p>Continue with Google</p>
</a>
                <a class="facebook_btn_class" href="{{route('social-provider',['provider'=>'facebook'])}}"  id="facebook_btn">
                    <img id="login_img" src="/img/facebook_logo.png" alt="">
                    <p>Continue with Facebook</p>
</a>
            </div>
    
            <h4 id="or">or</h4>
    
            <div class="login_form_options">
                <button id="login_BUTTON">Log in</button>
    
                <button id="signup_button">Sign up</button>
            </div>
    
            <div class="alert alert-info validation" style="display: none;">
                    <p class="text-left"></p> 
                  </div>
                 <div class="alert alert-success validation" style="display: none;">
                    <button type="button" class="close alert-close"><span>×</span></button>
                    <p class="text-left"></p> 
                </div>
                 <div class="alert alert-danger validation" style="display: none;">
                 <button type="button" class="close alert-close"><span>×</span></button>
            	    <p class="text-left"></p> 
                 </div>
            <form class="bs_login" action="{{route('user.login.submit')}}" method="POST">
            @csrf
                <div class="LOGIN_FORM">
                    <input type="email" name="email" placeholder="Email">
                    <div class="pass">
                    <input id="login_modal_pass" style="border:none" name="password" type="password" placeholder="Password">
                    <img src="img/eye.png" alt="" id="eye_icon" onclick="togglePW()" style="height:20px">
                    
                    </div>
                   
                    
                    <div class="forget_pss_div">
                        <div class="remember_me ">
                            <input type="checkbox" style="width: auto;">
                            <span>Remember Me</span>
                        </div>
                        <div>
                            <a href="{{route('user-forgot')}}">Forget Password ?</a>
                        </div>
                    </div>
                    <div style="text-align: center;">
                      <button type="submit" id="continue_btn" type="submit">Continue
                      <i id="btn_loading1"></i>
                      </button>
                    </div>
                </div>
    
                </form>

                <form class="bs_signup" action="{{route('user-register-submit')}}" method="POST">
                @csrf
                <div class="SIGNUP_FORM">
    
                    <div class="NAMES">
                        <input type="text" name="first_name" placeholder="First Name">
                        <input type="text" name="last_name" placeholder="Last Name">
                    </div>
                    <input type="email" name="email" placeholder="email" required="required">
                    <input id="signup_pass" name="password" type="password" placeholder="Password" required="required">
                    <img src="img/eye.png" alt="" id="eye_icon" onclick="togglePW1()" style="height:20px">
                    <input id="signup_pass_confirm" name="password_confirmation" type="password" placeholder="Confirm Password" required="required" style="margin-top: -12px;">
                    <img src="img/eye.png" alt="" id="eye_icon" onclick="togglePW()" style="height:20px">
    
    
                    <div class="checkbox_DIV">
                        <input type="checkbox" id="login_form_checkbox">
                        <h4 id="H-4">I confirm I have read and agree to the <a id="Anchor" href="terms.html  ">Terms and
                                Conditions</a></h4>
                    </div>
                    <div style="text-align: center;">
                    <button class="submit-btn" id="continue_btn" type="submit">
                      Continue
                      <i id="btn_loading"></i>
                    </button>                
                  </div>
                </div>
    
                
            </form>
               
        </div>
    </div>
    





</nav>


<script>

$(".bs_login").on('submit', function (e) {
      var $this = $(this).parent();
      e.preventDefault();
      $this.find('button.submit-btn').prop('disabled', true);
      let btnLoading = document.getElementById("btn_loading1");
      $this.find('.alert-info').show();
      var authdata = $this.find('.mauthdata').val();
      btnLoading.setAttribute("class", "fa fa-refresh fa-spin")
      console.log(btn_loading, 'test')
      $('.signin-form .alert-info p').html(authdata);
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if ((data.errors)) {
            $this.find('.alert-success').hide();
            $this.find('.alert-info').hide();
            $this.find('.alert-danger').show();
            $this.find('.alert-danger ul').html('');
            for (var error in data.errors) {
              console.log(data.errors[error], 'error');
              $('.alert-danger p').html(data.errors[error]);
            }
          } else {
            $this.find('.alert-info').hide();
            $this.find('.alert-danger').hide();
            $this.find('.alert-success').show();
            $this.find('.alert-success p').html('Success !');
            if (data == 1) {
              window.location = '{{ route("user-dashboard") }}';
            } else {
              window.location = data;
            }

          }
          $this.find('button.submit-btn').prop('disabled', false);
          btnLoading.classList.remove('fa')
          btnLoading.classList.remove('fa-refresh')
          btnLoading.classList.remove('fa-spin')
        }

      });

    });

    $(".bs_signup").on('submit', function (e) {
      e.preventDefault();
      var $this = $(this).parent();
      $this.find('button.submit-btn').prop('disabled', true);
      $this.find('.alert-info').show();
      var processdata = $this.find('.mprocessdata').val();
      let btnLoading = document.getElementById("btn_loading");
      btnLoading.setAttribute("class", "fa fa-refresh fa-spin")
      $this.find('.alert-info p').html(processdata);
      $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if (data == 1) {
            window.location = '{{ route("user-dashboard") }}';
          } else {

            if ((data.errors)) {
              $this.find('.alert-success').hide();
              $this.find('.alert-info').hide();
              $this.find('.alert-danger').show();
              $this.find('.alert-danger ul').html('');
              for (var error in data.errors) {
                $this.find('.alert-danger p').html(data.errors[error]);
              }
              $this.find('button.submit-btn').prop('disabled', false);
            } else {
              $this.find('.alert-info').hide();
              $this.find('.alert-danger').hide();
              $this.find('.alert-success').show();
              $this.find('.alert-success p').html(data);
              $this.find('button.submit-btn').prop('disabled', false);
            }
          }

          btnLoading.classList.remove('fa')
          btnLoading.classList.remove('fa-refresh')
          btnLoading.classList.remove('fa-spin')
        }
      });

    });

const Fromloginbtn = document.getElementById("login_BUTTON");
const FormsignupBtn = document.getElementById("signup_button");

const loginForm = document.querySelector(".LOGIN_FORM");
const signupForm = document.querySelector(".SIGNUP_FORM");

Fromloginbtn.addEventListener("click", () => {
  signupForm.style.display = "none";
  loginForm.style.display = "block";
  FormsignupBtn.style.color = "#777777c2";
  Fromloginbtn.style.color = "black";
});

FormsignupBtn.addEventListener("click", () => {
  loginForm.style.display = "none";

  signupForm.style.display = "block";
  Fromloginbtn.style.color = "#777777c2";
  FormsignupBtn.style.color = "black";
});

const USERBTN = document.getElementById("userbtn");
const LoginModal = document.querySelector(".login_modal_bg");
const login_modal_close = document.getElementById("login_cross_btn");

USERBTN.addEventListener("click", () => {
  LoginModal.classList.add("login_bg_active");
});
login_modal_close.addEventListener("click", () => {
  LoginModal.classList.remove("login_bg_active");
});

const Login_pass = document.getElementById("login_modal_pass");

function togglePW() {
  const Login_pass = document.getElementById("login_modal_pass");
  const eye_icon = document.getElementById("eye_icon");
  const Signup_pass = document.getElementById("signup_pass");
  const signup_pass_confirm = document.getElementById("signup_pass_confirm");

  if (Login_pass.getAttribute("type") === "password") {
    Login_pass.setAttribute("type", "text");
    eye_icon.style.color = "crimson";
  } else {
    Login_pass.setAttribute("type", "password");
    eye_icon.style.color = "black";
  }
  if (signup_pass_confirm.getAttribute("type") === "password") {
    signup_pass_confirm.setAttribute("type", "text");
    eye_icon.style.color = "crimson";
  } else {
    signup_pass_confirm.setAttribute("type", "password");
    eye_icon.style.color = "black";
  }
}
function togglePW1() {
  const eye_icon = document.getElementById("eye_icon");
  const Signup_pass = document.getElementById("signup_pass");
  if (Signup_pass.getAttribute("type") === "password") {
    Signup_pass.setAttribute("type", "text");
    eye_icon.style.color = "crimson";
  } else {
    Signup_pass.setAttribute("type", "password");
    eye_icon.style.color = "black";
  }
}


  </script>

 