<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/front/resources/css/ambasador-style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Join Now</title>
</head>

<body>


    <nav id="navbar_brand">
        <div class="imglogo_brand">
            <img src="{{asset('assets/front/resources/img/Briton Logo - 400x240px.png')}}" alt="comthing">
        </div>
        <div class="brand_button">
            <button><a href="{{url('/')}}">Home</a></button>
        </div>
    </nav>
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

    <div class="form_container">
        <div class="form_part">
            <div class="form_header">
                <h4>Sign Up for Briton Group</h4>
            </div>
            <form action="{{route('join-ambassedor')}}" method="POST" enctype="multipart/form">
              @csrf
                <div class="main_form">
                    <div class="form_component">
                        <span>Email *</span>
                        <input type="email" name="email">
                    </div>
                    <div class="name_form">
                        <div>
                            <span>First Name *</span>
                            <input id="name_field" name="first_name" type="text">
                        </div>
                        <div>
                            <span>Last Name *</span>
                            <input id="name_field" name="last_name" type="text">
                        </div>
                    </div>
                    <div class="form_component">
                        <span>Why should you be a part of Briton Group team ?</span>
                        <textarea name="description" id="textarea_joinnow" cols="30" rows="3"></textarea>
                        <p id="joinnow_p">Tell us in 3-5 sentences why you'd like to represent!</p>
                    </div>
                    <div class="form_component">
                        <span>Instagram *</span>
                        <div class="social_portion">
                            <div id="social_logo">
                                <h4 id="instagram">@</h4>
                            </div>
                            <input type="text" name="instagram">
                        </div>
                    </div>
                    <div class="form_component">
                        <span>Website</span>
                        <div class="social_portion">
                            <div id="social_logo" style="width: 75px;">
                                <h4 id="website">https://</h4>
                            </div>
                            <input type="text" name="website">
                        </div>
                    </div>
                    <div class="form_component">
                        <span>Facebook</span>
                        <div class="social_portion">
                            <div id="social_logo" style="width: 75px;">
                                <h4 id="facebook">fb.com/</h4>
                            </div>
                            <input type="text" name="facebook">
                        </div>
                    </div>

                    <div class="form_component">
                        <span>Youtube</span>
                        <div class="social_portion">
                            <div id="social_logo" style="width: 190px;">
                                <h4 id="youtube">youtube.com/channel/</h4>
                            </div>
                            <input type="text" name="youtube">
                        </div>
                    </div>
                    <div class="form_component">
                        <span>Twitter</span>
                        <div class="social_portion">
                            <div id="social_logo">
                                <h4 id="instagram">@</h4>
                            </div>
                            <input type="text" name="twitter">
                        </div>
                    </div>

                    <div class="form_component">
                        <span>Paypal Email Address*</span>
                        <input type="email" name="payple_email">
                    </div>

                    <div class="joinnow_selectboxes">
                        <div class="joinnow_checkbox">
                            <input type="checkbox" name="agree_terms">
                            <h3>I agree to the <a href="">terms and conditions *</a></h3>
                        </div>
                        <div class="joinnow_checkbox">
                            <input type="checkbox" name="agree_referral">
                            <h3>I agree to only post my referral link and/or coupon code on my own site and social
                                channels *</h3>
                        </div>
                        <div class="joinnow_checkbox">
                            <input type="checkbox" name="agree_post">
                            <h3>I will not post or submit any referral links or coupon codes to any discount coupon or
                                promotion code aggregator
                                websites, browsers, or social media discount threads *</h3>
                        </div>

                        <div class="join_now_submit_btn">
                            <button type="submit">Create Account</button>
                        </div>



                    </div>



                </div>




            </form>

        </div>
        <div class="policy_part">
            <div class="policy_part_content">
                <p>Welcome to the Briton Group Team application.</p>
                <p>Before you apply, some notes about eligibility:</p>
                <div class="points_policy">
                    <span>1.The social media account(s) you provide must be public.</span>
                    <span>2.The ambassador program is meant for individual name, image, and likeness.</span>
                    <span>3.For inquiries about groups such as teams, companies, academies/associations, and
                        foundations, please visit:
                        https://origin.goaffpro.com/signup/group-signup-for-jocko-fuel-team-by-origin</span>
                </div>

                <p>Thank you for applying!</p>
                <p>-Briton Group Team</p>

            </div>
        </div>

    </div>




</body>

</html>