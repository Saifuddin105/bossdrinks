@extends('frontend.layouts.master')

@section('title', 'shop')




@section('content')

    <div class="container product_variety">
        <div>
            <a href="energydrinks.html">ENERGY</a>
        </div>
        <div><a href="sport.html">SPORT </a></div>
        <div><a href="appetiser.html">APPETISER</a></div>
        <div><a href="bcca.html">SPORT-BCCA </a></div>

    </div>

    <div class="MainProductDisplaySection">

        <div class="productdisplaysection">

            <div class="card card2">
                <div class="productdisplayimgBOX">
                    <a href="firstproduct.html">
                        <img src="/img/PDSEnergy Boss Original Blue.png" alt="comething">
                    </a>
                </div>
                <div class="product_display_contentbox">
                    <h4>Energy BOSS Original</h4>
                    <h4 class="price">&#128 40.<small>99</small></h4>
                    <a href="firstproduct.html" class="buy">View Details</a>
                </div>



            </div>
            <div class="card card2">
                <div class="productdisplayimgBOX">
                    <a href="secondproduct.html">
                        <img src="/img/PDSEnergy Boss Original Red.png" alt="comething">
                    </a>
                </div>
                <div class="product_display_contentbox">
                    <h4>Energy BOSS Original</h4>
                    <h4 class="price">&#128 40.<small>99</small></h4>
                    <a href="secondproduct.html" class="buy">View Details</a>
                </div>



            </div>
            <div class="card card2">
                <div class="productdisplayimgBOX">
                    <a href="thirdproduct.html">
                        <img src="/img/PDSEnergy Boss Original Silver.png" alt="comething">
                    </a>
                </div>
                <div class="product_display_contentbox">
                    <h4>Energy BOSS Original</h4>
                    <h4 class="price">&#128 40.<small>99</small></h4>
                    <a href="thirdproduct.html" class="buy">View Details</a>
                </div>



            </div>


        </div>
        <div class="productdisplaysection productdisplaysection2">

            <div class="card card2">
                <div class="productdisplayimgBOX">
                    <a href="fourthproduct.html">
                        <img src="/img/PDSEnergy Boss Sports - IT (BCAA Apple).png" alt="comething">
                    </a>
                </div>
                <div class="product_display_contentbox">
                    <h4>Energy BOSS Appetiser</h4>
                    <h4 class="price">&#128 40.<small>99</small></h4>
                    <a href="fourthproduct.html" class="buy">View Details</a>
                </div>



            </div>
            <div class="card card2 card_5">
                <div class="productdisplayimgBOX">
                    <a href="fifthproduct.html">
                        <img src="/img/PDSEnergy Boss Sports - IT (BCAA Lemon).png" alt="comething">
                    </a>
                </div>
                <div class="product_display_contentbox">
                    <h4>Energy BOSS Sport</h4>
                    <h4 class="price">&#128 40.<small>99</small></h4>
                    <a href="fifthproduct.html" class="buy">View Details</a>
                </div>



            </div>
            <div class="card card2 final_card">
                <div class="productdisplayimgBOX">
                    <a href="sixthproduct.html">
                        <img src="/img/PDSEnergy Boss Sports - IT (BCAA Orange).png" alt="comething">
                    </a>
                </div>
                <div class="product_display_contentbox">
                    <h4>Energy BOSS Appetiser</h4>
                    <h4 class="price">&#128 40.<small>99</small></h4>
                    <a href="sixthproduct.html" class="buy">Veiw Details</a>
                </div>



            </div>


        </div>
    </div>

    <!-- newsletter section -->


    <div class="newsletter_sb">
        <form action="">

            <h1>Join our Newsletter</h1>


            <div class="email-box_newsletter">
                <i class="fas fa-envelope"></i>
                <input class="newsletter_email" type="email" name="" placeholder="Enter Your Email"
                    onchange="diplay_wide(event)">
                <button class="newsletter_btn" id="newsletter_bttn" type="button">Subscribe</button>

            </div>

        </form>

        <div class="upper-wrapper">
            <div class="wrapper">
                <input type="checkbox" id="switch">
                <label for="switch" class="switch_label">
                    <span class="onf_btn"></span>
                </label>
            </div>
            <div class="switch_box_text">
                <p>I have read the <a href="#" style="color: wheat;font-size: 15px;">Terms And Conditions</a> which
                    tells me how Energy Boss Drink will manage my personal information</p>
            </div>
        </div>


    </div>

    <div class="contactUS">

        <div>
            <p>Become a BOSS Drinks Stockist</p>
        </div>

        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, omnis!</h3>
        <div class="contactUS_btn">
            <a href="stock_register.html"><button type="button">Register</button></a>
        </div>
    </div>
@endsection

@push('script')

@endpush
