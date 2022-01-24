@extends('frontend.layouts.master')

@section('styles')
<style>

       .name_logout {
           display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 50px;
    
       }
       .name_logout h4 {
           font-size: 28px;
    font-weight: 600;
    letter-spacing: 1px;
       }
       #account_log_out_btn {
           width: 15%;
    padding: 8px;
    font-size: 19px;
    background: #081F2c;
    border-radius: 18px;
    font-weight: 600;
    border: 1px solid black;
    cursor: pointer;
    color: white;
    letter-spacing: 1px;
       }
       .details_section {
               width: 60%;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    justify-content: space-between;
    margin-top: 80px;
    
       }

       #sub_btn {
               border: none;
    background: #FFFFFF;
    font-weight: 600;
    font-size: 21px;
    cursor: pointer;
       }
       #PH_btn {
                       border: none;
    background: #FFFFFF;
    color: #777777b3;
    font-weight: 600;
    font-size: 21px;
    cursor: pointer;

       }
       #MD_btn {
           
                       border: none;
    background: #FFFFFF;
    color: #777777b3;
    font-weight: 600;
    font-size: 21px;
    cursor: pointer;

       }
       .my_account_div {
           box-shadow: 0px 2px 5px rgb(0 0 0 / 10%);
           padding-bottom: 40px;
       }
       .subs_section {
           background: #CFDAE0;
    text-align: center;
    padding-top: 100px;
    padding-bottom: 100px;
       }
       .sub_section_BTN {
           margin-top:20px;
           background:#081F2c;
    color: white;
    border-radius: 25px;
    padding: 10px;
    font-size: 12px;
    letter-spacing: 1px;
    font-weight: 400;
    cursor: pointer;
    width: 160px;
    margin-left: auto;
    margin-right: auto;
       }
       .sub_section_BTN a {
           color:white;
       }
       .subs_section h4 {
           font-size: 20px;
    font-weight: 300;
    letter-spacing: 1px;
       }
       .purchase_section {
       background: #CFDAE0;
    padding-top: 100px;
    padding-bottom: 100px;
    padding-left: 20px;
    padding-right: 20px;
    display: flex;
    justify-content: space-around;
    display: none;
       }
       .purchase_section button {

        
                       border: none;
    background: #CFDAE0;
    
    font-weight: 600;
    font-size: 21px;
    cursor: pointer;

       }
       .my_details_section{
           background: #CFDAE0;
           padding-top: 30px;
           padding-bottom: 30px;
       }
       .details_section_info {
           width: 30%;
           margin-left: auto;
           margin-right: auto;
           background: #FFFFFF;
           padding: 30px;
           border-radius: 20px;
           box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);
       }
       .date_CVC {
           display: flex;
    gap: 10px;
    margin-top: 10px;
       }
       .address_info {
           display: flex;
           flex-direction: column;
           gap: 5px;
       }
       .details_section_info input {
    width: 100%;
    padding: 15px;
    border: none;
    background: #F0F5F8;
    border-radius: 18px;
    margin-top: 5px;
    margin-bottom: 5px;
       }
       #DPM_text{
           margin-bottom: 30px;
       }
       #billing_text {
               margin-top: 20px;
    margin-bottom: 10px;
    font-size: 16px;
       }
       #btn_submt {
           width: 45%;
    padding: 7px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: 600;
    background: #081F2c;
    color: white;
       }
       #btn_Submt {
                   width: 45%;
    padding: 7px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: 600;
    background: #081F2c;
    color: white;
       }
       #btn_cancel {
           width: 45%;
    padding: 7px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: 600;
    background: #FFFFFF;
       }
       #btn_Cancel {
                    width: 45%;
    padding: 7px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: 600;
    background: #FFFFFF;
       }
       .buttons_diV {
           display: flex;
           margin-top: 20px;
           justify-content: space-around;
       }
       .shipping_address {
               width: 30%;
    display: flex;
    flex-direction: column;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    background: #FFFFFF;
    padding: 30px;
     border-radius: 20px;
           box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);
       }
       .shipping_address input {
          width: 100%;
    padding: 15px;
    border: none;
    background: #F0F5F8;
    border-radius: 18px;
    margin-top: 5px;
    margin-bottom: 5px;
       
       }

       #DSA_text {
           margin-bottom: 35px;
       }
       #TN_text {
               margin-top: 20px;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;
       }
       .flag_number {
           display: flex;
    flex-direction: row;
    gap: 15px;
       }
       .email_section {
           width: 30%;
    margin-left: auto;
    margin-right: auto;
    background: #FFFFFF;
    padding: 40px;
    border-radius: 20px;
    margin-top: 20px;
    box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);
       }
       #edit_button {
           width: 25%;
    padding: 8px;
    font-size: 19px;
    background: #FFFFFF;
    border-radius: 18px;
    font-weight: 600;
    border: 1px solid black;
    cursor: pointer;
       }

       .email_section input {
                     width: 100%;
    padding: 15px;
    border: none;
    background: #F0F5F8;
    border-radius: 18px;
    margin-top: 5px;
    margin-bottom: 5px;
       }

       .edit_btn_div{
           text-align: end;
           margin-top: 25px;
       }
       .save_cancel_button {
               display: flex;
    flex-direction: row;
    justify-content: space-around;
    margin-top: 20px;
       }

       #save_Btn {
                      width: 45%;
    padding: 7px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: 600;
    background: #081F2c;
    color: white;
       }

       #cancel_Btn {
                      width: 45%;
    padding: 7px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: 600;
    background: #FFFFFF;
       }
       .change_email {
           display: none;
       }

       .password_section {
           width: 30%;
    margin-left: auto;
    margin-right: auto;
    background: #FFFFFF;
    padding: 40px;
    border-radius: 20px;
    margin-top: 20px;
    box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);
       }
       .password_section h4 {
           margin-bottom: 30px;
       }
       .edit_button_pass_div {
               text-align: end;
    margin-top: 25px;
       }
       #edit_button_pass {
           width: 25%;
    padding: 8px;
    font-size: 19px;
    background: #FFFFFF;
    border-radius: 18px;
    font-weight: 600;
    border: 1px solid black;
    cursor: pointer;
       }
       .change_pass {
           margin-top: 20px;
           display: none;
       }

       .password_section input {
           width: 100%;
    padding: 15px;
    border: none;
    background: #F0F5F8;
    border-radius: 18px;
    
    margin-bottom: -18px;
       }
       #Eye_Icon, #Eye_Icon2 {
           margin-top: -12%;
    margin-left: 90%;
       }
       .save_cancel_button_2 {
           display: flex;
    flex-direction: row;
    justify-content: space-around;
    margin-top: 20px;
       }
       #save_Btn_2 {
               width: 45%;
    padding: 7px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: 600;
    background: #081F2c;
    color: white;
       }
       #cancel_Btn_2 {
           width: 45%;
    padding: 7px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: 600;
    background: #FFFFFF;
       }
       .delete_account_section {
               width: 30%;
    margin-left: auto;
    margin-right: auto;
    background: #FFFFFF;
    padding: 40px;
    border-radius: 20px;
    margin-top: 20px;
    box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);
    margin-bottom: 50px;
       }
       .delete_account_section h4{
           margin-bottom: 30px;
       }
      #delete_acnt_btn {
           width: 25%;
    padding: 8px;
    font-size: 19px;
    background: #FFFFFF;
    border-radius: 18px;
    font-weight: 600;
    border: 1px solid black;
    cursor: pointer;
       }
       .delete_account_button {
           text-align: end;
           margin-top: 25px;
       }

       .My_details_section_full {
           display: none;
       }

       

       @media only screen and (max-width: 576px)
           {
               .details_section_info {
                   width: 95% !important;
                   padding: 20px !important;
               }
               .details_section_info input {
                   font-size: 12px !important;
               }
               .details_section {
                   width: 100% !important;
                   margin-top: 50px !important;
               }
               .details_section button {
                   font-size: 14px !important;
               }
               .name_logout h4{
                   font-size: 18px !important;
               }
               #account_log_out_btn {
                   width: 20% !important;
                   font-size: 12px !important;
               }
               .subs_section h4 {
                   font-size: 14px !important;
               }
               .subs_section button {
                   width: 45% !important;
                   padding: 10px !important;
                   font-size: 14px !important;
               }
               .purchase_section button {
                   font-size: 12px !important;
               }
               .purchase_section {
                   padding-top: 50px !important;
                   padding-bottom: 50px !important;
                   padding-left: 2px !important;
                   padding-right: 2px !important;
               }
               #DPM_text {
                   font-size: 18px;
               }
               .date_CVC {
                   flex-direction: column !important;
               }
               .shipping_address {
                   width: 95% !important;
               }
               .shipping_address input {
                   font-size: 12px !important;
               }
               .email_section {
                   width: 95% !important;
               }
               .password_section{
                   width: 95% !important;
               }
               .delete_account_section {
                   width: 95% !important;
               }
           }
       

     



</style>

@endsection

@section('title', 'Profile')

@section('content')



<div class="top-bar bg-light py-2 text-center col-lg-12 col-sm-12 col-12 font-weight-bold">
        FREE SHIPPING ON ALL CASES ORDERS OVER "amount"



    </div>

    <div class="Sidebar_test">
        <div class="sideBar">
            <div class="sidebar_top">
                <img src="/img/Energy Boss - 280x78px.png" alt="">
                <i id="cross_btn" class="fas fa-times"></i>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/home.png" alt="" style="height: 25px; margin-top: 30px"><a
                        href="index.html" class="menu_item_text">HOME</a></div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/customer.png" alt="" style="height: 25px; margin-top: 30px"><a
                        href="user_account.html" class="menu_item_text">My Account</a></div>
            </div>

            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/shopping-bag (1).png" alt=""
                        style="height: 25px; margin-top: 30px"><a href="shop.html" class="menu_item_text">SHOP</a></div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/energy-drink.png" alt=""
                        style="height: 25px; margin-top: 30px"><a href="energydrinks.html" class="menu_item_text">ENERGY
                        DRINKS</a>
                </div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/energy-drink.png" alt=""
                        style="height: 25px; margin-top: 30px"><a href="sport.html" class="menu_item_text">SPORT
                        DRINKS</a>
                </div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/energy-drink.png" alt=""
                        style="height: 25px; margin-top: 30px"><a href="appetiser.html"
                        class="menu_item_text">APPETISER</a>
                </div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/energy-drink.png" alt=""
                        style="height: 25px; margin-top: 30px"><a href="bcca.html" class="menu_item_text">BCAA
                        DRINKS</a>
                </div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/story-removebg-preview.png" alt=""
                        style="height: 25px; margin-top: 30px"><a href="#" class="menu_item_text">STORY</a></div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/blog.png" alt="" style="height: 25px; margin-top: 30px"><a
                        href="#" class="menu_item_text">BLOG</a></div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/help.png" alt="" style="height: 25px; margin-top: 30px"><a
                        href="#" class="menu_item_text">FAQS</a></div>
            </div>
            <div class="Sidebar_menu">
                <div class="menu_items"><img src="/img/information-desk.png" alt=""
                        style="height: 25px; margin-top: 30px"><a href="#" class="menu_item_text">ABOUT US</a></div>
            </div>

        </div>
    </div>

    <div class="sidebar_blur">
    </div>



    <div class="main">
        <nav id="navbar" class="py-3 px-5" style="background-color: #FFFFFF">

            <div class="secondtopbar row">
                <div class="col-lg-4 sm-4 col-3">
                    <div class="flx">
                        <button id="navbar-btn" class="navbar-btn" type="button">
                            <i class="bar-btn fas fa-bars"></i>
                        </button>
                        <a href="shop.html">
                            <h1 class="shop-text font-weight-bold ml-2 m-0">SHOP</h1>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 sm-4 col-6 text-center ">
                    <img class="wow-img text-center " src="/img/Energy Boss - 280x78px.png" alt=" something">
                </div>
                <div class=" third-part col-lg-4 sm-4 col-3  text-center">
                    <!-- <button id="searchbtn" class="navbar-btn" type="button">
                        <i class="fas fa-search"></i>
                    </button> -->
                    <button id="userbtn" class="navbar-btn" type="button">
                        <i class="fas fa-user"></i>
                    </button></a>
                    <a href="cart.html"> <button id="cart-btn" class="navbar-btn " type="button">
                            <img id="cart_btn_image" src="img/cart.png" alt="">
                        </button></a>

                </div>

            </div>





        </nav>
        </div>




        <div class="my_account_div">
            <div class="container name_logout">
                <h4>Hey,<a id="user_name">{{Auth::user()->name}}</a>!</h4>
                @if(Auth::user())
                <a style="text-align:center" id="account_log_out_btn" href="{{route('user-logout')}}">Logout</a>
                 @endif
            </div>
              
              <div class="details_section">
                  <button id="sub_btn">Subscriptions</button>
                  <button id="PH_btn">Purchase History</button>
                  <button id="MD_btn">My Details</button>

              </div>

              

        </div>
        <div class="subs_section">

            <h4>You Currently have no active subscriptions</h4>
            <div class="sub_section_BTN">
            <a href="{{route('front.shop')}}">Add More Packs</a>
            </div>
        
        </div>

        <div>
           
         <div class="purchase_section">
             <button>Past Subscriptions</button>
             <button>Single Purchases</button>
             <button>Bulk Purchases</button>
         </div>

<div class="My_details_section_full">
         <div class="my_details_section">
             <form action="">
             <div class="details_section_info">
                <h4 id="DPM_text">Default Payement Method</h4>

                
                <span>Card number</span><br>
                <input type="text">
                

                <div class="date_CVC">
                    <div class="exp_date">
                        <span>Date of expiry</span><br>
                        <input type="date">
                    </div>
                    <div class="CVC">
                        <span>Security Number</span><br>
                        <input type="number" placeholder="CVC">
                    </div>

                </div>

                <h4 id="billing_text">Enter your Billing Below:</h4>
                <div class="address_info">
                <input type="text" placeholder="Name/Company">
                <input type="text" placeholder="Postcode">
                <input type="text" placeholder="Address Line 1">
                <input type="text" placeholder="Address Line 2(optional)">
                <div class="town_country">
                    <input type="text" placeholder="Town/City">
                    <input type="text" placeholder="Country(optional)">
                </div>
                </div>
                 <div class="buttons_diV" style="margin-top: 20px;">
                <button id="btn_submt" type="submit">Save</button>
                <button id="btn_cancel">Cancel</button>
                </div>
                </form>
           </div>

               

                
                 
                
                
               
                
             
            <form action="">
                <div class="shipping_address">
                    <h4 id="DSA_text">Default Shipping Address</h4>
                    <span style="margin-bottom: 20px;">Enter yout shipping address below :</span>
                    <input type="text" placeholder="Name/Company">
                    <input type="number" placeholder="Postcode">
                    <input type="text" placeholder="Address Line 1">
                    <input type="text" placeholder="Address Line 2 (optional)">
            
                    <div class="town_country">
                        <input type="text" placeholder="Town/City">
                        <input type="text" placeholder="Country(optional)">
                    </div>
            
                    <h4 id="TN_text">Telephone Number (optional)</h4>
                    <div class="flag_number">
                        <img src="img/united-kingdom.png" alt="" style="height: 35px; margin-top: 15px;">
                        <input type="number">
                    </div>

                    <div class="buttons_diV" style="margin-top: 20px;">
                        <button id="btn_Submt" type="submit">Save</button>
                        <button id="btn_Cancel">Cancel</button>
                    </div>
            
            
                </div>

            </form>


            <div class="email_section">
                <h4 style="margin-bottom: 30px;">Your Boss Drinks Email</h4>
                <div class="current_email">
                   
                       
                    <span id="user_email">saifxunaid@gmail.com</span>
                      <div class="edit_btn_div">
                    <button id="edit_button">Edit</button>
                    </div>
                    </div>
                    <div class="change_email" style="margin-top: 20px;">

                     <span>Change your email address below:</span>
                     <form action="" style="margin-top: 10px;">
                     <input type="email" placeholder="Email">
                     <input type="email" placeholder="Confirm Email">
                      <div class="save_cancel_button"">
                     <button type="submit" id="save_Btn">Save</button>
                     <button id="cancel_Btn">Cancel</button>
                    </div>
                       
                     </form>
                    </div>

            </div>

            <div class="password_section">
                <h4>Your Boss Drinks password</h4>



                <div class="current_pass">
                                    <span id="user_password">********</span>
                                    <div class="edit_button_pass_div">
                                    <button id="edit_button_pass">Edit</button>
                                    </div>
                </div>
                <div class="change_pass">
                    <span>Reset your password below:</span>
                    <form action="" style="margin-top: 10px;">
                        <input type="password" placeholder="New Password" id="new_password">
                        <img src="img/eye.png" alt="" id="Eye_Icon" onclick="togglePass()" style="height:20px">
                        <input type="password" placeholder="Confirm New Password" id="confirm_new_pass">
                        <img src="img/eye.png" alt="" id="Eye_Icon2" onclick="togglePass2()" style="height:20px">
                        <div class="save_cancel_button_2">
                            <button type="submit" id="save_Btn_2">Save</button>
                            <button id="cancel_Btn_2">Cancel</button>
                        </div>
                    </form>
                </div>


            </div>


            <div class="delete_account_section">

                <h4>Delete Account</h4>
                <div class="delete_account">
                    <span>Delete Your Account Data</span>
                    <div class="delete_account_button">
                    <button id="delete_acnt_btn">Delete</button>
                    </div>
                </div>

                
            </div>
</div>
</div>
                        

@endsection
@push('script')
<script>
    const current_email = document.querySelector(".current_email");
const change_email = document.querySelector(".change_email");
const email_edit_btn = document.getElementById("edit_button");
const email_cancel_btn = document.getElementById("cancel_Btn");

email_edit_btn.addEventListener("click", (e) => {
  e.preventDefault();
  change_email.style.display = "block";

  current_email.style.display = "none";
});

email_cancel_btn.addEventListener("click", (e) => {
  e.preventDefault();
  change_email.style.display = "none";
  current_email.style.display = "block";
});

const New_password = document.getElementById("new_password");
const Confirm_new_pass = document.getElementById("confirm_new_pass");
const eye_icon_pass = document.getElementById("Eye_Icon");
const eye_icon_pass_confirm = document.getElementById("Eye_Icon2");

function togglePass() {
  if (New_password.getAttribute("type") === "password") {
    New_password.setAttribute("type", "text");
    eye_icon_pass.style.color = "crimson";
  } else {
    New_password.setAttribute("type", "password");
    eye_icon_pass.style.color = "black";
  }
}

function togglePass2() {
  if (Confirm_new_pass.getAttribute("type") === "password") {
    Confirm_new_pass.setAttribute("type", "text");
    eye_icon_pass_confirm.style.color = "crimson";
  } else {
    Confirm_new_pass.setAttribute("type", "password");
    eye_icon_pass_confirm.style.color = "black";
  }
}

const current_pass = document.querySelector(".current_pass");
const change_pass = document.querySelector(".change_pass");
const pass_edit_btn = document.getElementById("edit_button_pass");
const pass_cancel_btn = document.getElementById("cancel_Btn_2");

pass_edit_btn.addEventListener("click", (e) => {
  e.preventDefault();
  change_pass.style.display = "block";

  current_pass.style.display = "none";
});

pass_cancel_btn.addEventListener("click", (e) => {
  e.preventDefault();
  change_pass.style.display = "none";
  current_pass.style.display = "block";
});

const Sub_btn = document.getElementById("sub_btn");
const PH_button = document.getElementById("PH_btn");
const MD_btn = document.getElementById("MD_btn");

const Subscription_section = document.querySelector(".subs_section");
const Purchase_section = document.querySelector(".purchase_section");
const My_details_section = document.querySelector(".My_details_section_full");

PH_button.addEventListener("click", (e) => {
  e.preventDefault();
  Purchase_section.style.display = "flex";
  Subscription_section.style.display = "none";
  My_details_section.style.display = "none";
  Sub_btn.style.color = "#777777b3";
  PH_button.style.color = "black";
  MD_btn.style.color = "#777777b3";
  // PH_button.style.fontSize = "24px";
  // Sub_btn.style.fontSize = "21px";
  // MD_btn.style.fontSize = "21px";
});
MD_btn.addEventListener("click", (e) => {
  e.preventDefault();
  Purchase_section.style.display = "none";
  Subscription_section.style.display = "none";
  My_details_section.style.display = "block";
  Sub_btn.style.color = "#777777b3";
  PH_button.style.color = "#777777b3";
  MD_btn.style.color = "black";
  // MD_btn.style.fontSize = "24px";
  // PH_button.style.fontSize = "21px";
  // Sub_btn.style.fontSize = "21px";
});
Sub_btn.addEventListener("click", (e) => {
  e.preventDefault();
  Purchase_section.style.display = "none";
  Subscription_section.style.display = "block";
  My_details_section.style.display = "none";
  Sub_btn.style.color = "black";
  PH_button.style.color = "#777777b3";
  MD_btn.style.color = "#777777b3";
  // Sub_btn.style.fontSize = "24px";
  // PH_button.style.fontSize = "21px";
  // MD_btn.style.fontSize = "21px";
});

    </script>
@endpush










