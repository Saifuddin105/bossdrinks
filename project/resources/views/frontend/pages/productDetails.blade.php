@extends('frontend.layouts.master')

@section('title', 'product-details')




@section('content')






    <div class="addtocart_sidebar">
        <div class="addtocart_sidebar_top">
            <div>
                <button id="sidebar_top_btn">❮</button>
            </div>
            <div style="margin-left: 15px;">
                <img src="/img/Energy Boss - 280x78px.png" alt="">
                <h2>Your Basket</h2>
            </div>

        </div>
        <div class="cart-items" id="cart-items">


        </div>


        <div class="checkout">
            <div>
                Your Subtotal Is <b><span>&euro;</span><b><b><span id='show-total-amount'></span></b>
            </div>
            <div style="display: flex;">
                <input id="i_agree_checkbox" type="checkbox" style="width: 20px;">

                <h4 style="font-size: 12px;">I agree to the <a id="modal_text">Terms and Conditions</a></h4>
            </div>
            <div class="checkout_btn">
                <a href="checkout.html"><button>Proceed to Checkout</button></a>
            </div>
        </div>

    </div>



    <div class="productdetails row productdeitails_web">
        <div class="imgshowclass col-12 col-lg-6 imgshowclass_single">
            <div>
                <img src="/Size_3  193x500px/Energy-Boss---IT-(19-10-2021)---RED-BG.png" alt="something"
                    style="filter: drop-shadow(3px 4px 6px black);">
            </div>

            <div class="TEXT">
                <p>&#8226;SUBSCRIPTION EASY</p>
                <p>&#8226;FREE CANCELLATION ANYTIME</p>
            </div>

        </div>

        <div class="col-12 col-lg-6">
            <div class="drinktitleclass">
                <h3 id="drinktitle " style="">ENERGY BOSS
                    ORIGINAL</h3>
                <!-- <p style="font-size: 19px;
                                                                                                                                                                                                                                                        font-weight: 700;">&euro;30.36</p> -->
            </div>

            <!-- accordion1 starts -->

            <div class="component-accordion accordion_mobile_1">
                <div class="panel-group" id="accordion" role="tablist">
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne" class="collapsed">INGREDIENTS</a>
                            </h4>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <div class="panel-body">
                                    Carbonated Water, Sugar, Glucose-Fructose Syrup, Acid (Citric Acid), Taurine
                                    (0.4%),
                                    Flavourings, Caffeine (0.03%),
                                    Sweeteners (Aspartame, Acesulfame K), Colours (Ammonia Caramel, Riboflavin),
                                    Acidity
                                    Regulator (Sodium Citrate),
                                    Preservative (Sodium Benzoate), Vitamins (Niacin, Pantothenic Acid, Vitamin
                                    B6,
                                    Vitamin B12) , Inositol. Contains a
                                    source of Phenylalanine.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- accordion1 ends -->
            <!-- accordion 2starts -->
            <div class="component-accordion accordion2 accordion_mobile_2">
                <div class="panel-group" id="accordion" role="tablist">
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#collapsetwo" aria-expanded="false"
                                    aria-controls="collapsetwo" class="collapsed">NUTRATIONAL INFORMATION</a>
                            </h4>
                        </div>
                        <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne"
                            aria-expanded="false" style="height: 0px;" data-parent="#accordion">
                            <div class="panel-body">
                                <ul class="nutritional_INFO ">
                                    <li class="row"><span class="left col-7">Serving Size:</span><span
                                            class="right col-5">Per 250ml
                                            Can</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Energy:</span><span
                                            class="right col-5">243kJ/58kcal</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Fat:</span><span
                                            class="right col-5">0.0g</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Of which saturates: </span><span
                                            class="right col-5">0.0g</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Carbohydrate: </span><span
                                            class="right col-5">12.3g</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Protein: </span><span
                                            class="right col-5">0.0g</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Salt: </span><span
                                            class="right col-5">0.05g</span>
                                    </li>
                                    <br>

                                    <li><span class="left" style="font-size: 20px;">Vitamin</span></li>
                                    <li class="row"><span class="left col-7">Niacin: </span><span
                                            class="right col-5">16mg (100%*)</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Vitamin B6: </span><span
                                            class="right col-5">1.4mg (100%*)</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Vitamin B12: </span><span
                                            class="right col-5">1.25µg (50%*)</span>
                                    </li>
                                    <li class="row"><span class="left col-7">Pantothenic Acid: </span><span
                                            class="right col-5">5mg (83%*)</span>
                                    </li>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- accordion 2 ends -->

            <div class="no_contract_text">
                <h3
                    style="font-size: 16px;
                                                                                                                                                                                                                                                        font-weight: 400;">
                    No
                    contract
                    &#8226
                    Free
                    UK
                    delivery
                    &#8226
                    Cancel
                    anytime
                    <h3>
            </div>

            <!-- radio -->
            <label for="subscribe_save" class="dis-blk">
                <div class="radioDIVsingle1">
                    <label class="rad-label">
                        <input id="subscribe_save" type="radio" class="rad-input" name="rad">
                        <div class="rad-design"></div>
                        <div class="rad-text">Subscribe and Save </div>
                    </label>
                    <p class="product_price">&#163; 7.46</p>
                    <div class="small_text1">
                        <p>Pause, skip and cancel anytime</p>
                    </div>

                    <div class="selectbox_firstproduct">
                        <div>
                            <select name="1" id="selectBOX_1" style="color:black;" onchange="getSelectedVAlue(event)">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                            </select>
                            <small>Cases Delivered every</small>

                            <select name="30" id="">
                                <option>30 </option>
                                <option>45 </option>
                                <option>60 </option>
                            </select> <small>Days</small>
                        </div>
                    </div>
                    <div>

                    </div>
                    <div class="cart_button_total">

                        <div class="addtocart-btn">

                            <button class="button-30" id="FirstBOX_btn" onclick="addCartItem(1, 'subscription', 7.46)">
                                <h4 class="button-30_price">&#163;7.46</h4><i class="fa fa-shopping-cart"></i> Add
                                To
                                cart
                            </button>
                        </div>
                    </div>
                </div>

            </label>

            <label for="radio2" class="dis-blk">
                <div class="radioDIV2">
                    <label class="rad-label ">
                        <input id="radio2" type="radio" class="rad-input" name="rad">
                        <div class="rad-design"></div>
                        <div class="rad-text">One-time purchase</div>
                    </label>
                    <p class="product_price">&#163; 8.49</p>
                    <div class="small_text small_text_1">
                        <p>Delivered once, reorder when you need</p>
                    </div>
                    <div class="addtocart-btn">

                        <button class="button-30" role="button" onclick="addCartItem(2, 'one-time-purchase', 7.46)"><i
                                class="fa fa-shopping-cart"></i>Add To
                            cart</button>
                    </div>
                </div>
            </label>

            <label for="RADIO" class="dis-blk">
                <div class="radioDIV2 radioDIV_2">
                    <label class="rad-label ">
                        <input type="radio" class="rad-input" id="RADIO" name="rad">
                        <div class="rad-design"></div>
                        <div class="pdt-price">From <small>&#163; 8.49</small> bulk on time</div>
                    </label>
                    <!-- <p class="product_price"></p> -->
                    <div class="small_text">
                        <p>Order in bulk to save, delivered once</p>
                    </div>

                    <div class="small_radiobox">
                        <label for="smallboxradio1">
                            <div class="smallBOX" id="smallbox1">
                                <div class="radiodetails">
                                    <input type="radio" id="smallboxradio1" name="fav_language" value="HTML">
                                    <label for="html" class="cans">2 cases</label>
                                </div>
                                <p>&#128 8.49 each</p>

                            </div>
                        </label>
                        <label for="smallboxradio2">
                            <div class="smallBOX" id="smallbox2">
                                <div class="radiodetails">
                                    <input type="radio" id="smallboxradio2" name="fav_language" value="HTML">
                                    <label for="smallboxradio2" class="cans">3 cases</label>
                                </div>
                                <p>&#128 8.49 each</p>
                            </div>
                        </label>
                        <label for="smallboxradio3">
                            <div class="smallBOX" id="smallbox3">
                                <div class="radiodetails radiodetails_3">
                                    <input type="radio" id="smallboxradio3" name="fav_language" value="HTML">
                                    <label for="html" class="cans">

                                        <select name="1" id="small_select_box" onchange="getSmallSelectedValue(event)">
                                            <option>4</option>
                                            <option>6</option>
                                            <option>8</option>
                                            <option>10</option>
                                            <option>12</option>
                                            <option>14</option>
                                            <option>16</option>
                                            <option>18</option>
                                            <option>20</option>
                                        </select>
                                        <small>Cases</small>
                                    </label>
                                </div>
                                <p>&#128 8.49 each</p>
                            </div>
                        </label>

                    </div>
                    <div class="addtocart-btn">

                        <button class="button-30" id="button-30_2" role="button"
                            onclick="addCartItem(3, 'bulk-purchase', 7.46)">
                            <h4 class="button-30_price_2">&#163;8.49</h4><i class="fa fa-shopping-cart"></i> Add
                            To
                            cart
                        </button>
                    </div>

                </div>
            </label>






            <!-- radio -->

            <!-- select box -->
            <div class=" selectbox">
                <div>
                    <h4 style="font-size: 20px; font-weight: 700;">SUBSCRIPTION EASY<br>FREE
                        CANCELLATION ANYTIME
                    </h4>

                </div>
                <!-- <div>
                                                                                                                                                                                                                                                                        <div class="select">
                                                                                                                                                                                                                                                                            <select>
                                                                                                                                                                                                                                                                                <option value="1">Every 3 Week(s)</option>
                                                                                                                                                                                                                                                                                <option value="2">Every 6 Week(s)</option>
                                                                                                                                                                                                                                                                                <option value="3">Every 9 Weeks'(s)</option>
                                                                                                                                                                                                                                                                            </select>
                                                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                                                    </div> -->

            </div>



            <!-- add to cart -->

            <!-- social media icon -->
            <div class="socialmedia">
                <div>
                    <h4 style="margin-top: 20px;">Share BOSS Drinks on social media : </h4>
                </div>

                <div class="icons_socilamedia">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>

                        <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>




            <!-- social media icon -->



        </div>


    </div>
    <!-- productdeitails for mobile************************************************************************* -->


    <!-- more information -->
    <div class="container more_info">
        <h2>More Information</h2>
        <div class="accordion_moreinfo">
            <div class="item">
                <div class="title_moreinfo">
                    HOW MUCH CAFFEINE DO ENERGY BOSS DRINK CONTAIN ?
                </div>
                <div class="icon_moreinfo">
                    +
                </div>
                <div class="desc">
                    <p>Our Energy Boss Drink contain 30mg of caffeine per 100ml.<br>We advise that all energy
                        driks are
                        consumed in moderation.<br>The maximum daily consumption of caffeine for adults os
                        400mg(other
                        than pregnant women or people sensetive to caffeine).</p>
                </div>

            </div>
            <div class="item">
                <div class="title_moreinfo">
                    ARE ENERGY BOSS DRINKS SUITABLE FOR VEGETARIANS ?
                </div>
                <div class="icon_moreinfo">
                    +
                </div>
                <div class="desc">
                    <p>All our Energy Boss Drinks are suitable for vegetarians.</p>
                </div>

            </div>
            <div class="item">
                <div class="title_moreinfo">
                    IS ENERGY BOSS DRINK GLUTEN FREE ?
                </div>
                <div class="icon_moreinfo">
                    +
                </div>
                <div class="desc">
                    <p>Yes, all our energy drinks are gluten free, so they are suitable for those with gluten
                        intolerence.
                    </p>
                </div>

            </div>
            <div class="item">
                <div class="title_moreinfo">
                    IS ENERGY BOSS DRINK DAIRY FREE?
                </div>
                <div class="icon_moreinfo">
                    +
                </div>
                <div class="desc">
                    <p>Yes, our Energy Boss Drinks are dairy free</p>
                </div>

            </div>
            <div class="item">
                <div class="title_moreinfo">
                    ADVISORY
                </div>
                <div class="icon_moreinfo">
                    +
                </div>
                <div class="desc">
                    <p>High caffeine content.Not recommended for children or pregnant or breast-feeding women.
                        Consume
                        Moderately. Not to be consumed by under 18.</p>
                </div>

            </div>
        </div>

    </div>






    <!-- ***************************************************************************************888 -->
    <!-- u may also like -->

    <div>
        <h2 class="u_mayalso_like">You May Also Like<h2>
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
                    <a href="fifthproduct.html" class="buy">Add To Cart</a>
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
                    <a href="sixthproduct.html" class="buy">Add To Cart</a>
                </div>



            </div>


        </div>
    </div>
    <!-- u may also like ends********************************************************************** -->
    <!-- sunscription section -->

    <x-newsletter/>



    <!-- sunscription section ends *************************************************************************-->

    <!-- contact us -->
    <div class="contactUS">

        <div>
            <p>Become a BOSS Drinks Stockist</p>
        </div>

        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, omnis!</h3>
        <div class="contactUS_btn">
            <a href="stock_register.html"><button type="button">Register</button></a>
        </div>
    </div>

    <!-- contact us ends ******************************************************************* -->
    <div class="modal-bg">

        <div class="modal_tnc">


            <span class="modal_close">X</span>
            <div class="first_tnc">
                <!-- <h4 id="BGL">BRITON GROUP LIMITED</h4> -->
                <p id="main_heading">Our Website Terms & Conditions</p>

                <h4 id="sub_main_heading">PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY BEFORE USING THIS SITE</h4>

                <h4 id="section_title">Terms of website use</h4>

                <p id="agreement_text">This terms of use (together with the documents referred to in it) tells you the
                    terms of use on which you may make use
                    of our website <a id="email_text">www.bossdrinks.com</a> (our site), whether as a guest or a
                    registered user. Use of our site includes
                    accessing, browsing, or registering to use our site.</p>
                <p id="agreement_text">Please read these terms of use carefully before you start to use our site, as
                    these will apply to your use of our site.
                    We recommend that you print a copy of this for future reference.</p>
                <p id="agreement_text">By using our site, you confirm that you accept these terms of use and that you
                    agree to comply with them.</p>
                <p id="agreement_text">If you do not agree to these terms of use, you must not use our site. If your
                    order is accepted, we will inform you by
                    email. When placing an order, you undertake that all details you provide to us are true and
                    accurate, that you are an
                    authorised user of the credit or debit card, or bank account used to place your order and that there
                    are sufficient
                    funds to cover the cost of the goods. The cost of the international products and services may
                    fluctuate. All prices
                    advertised are subject to such changes.</p>


                <h4 id="section_title">Other applicable terms</h4>
                <p id="agreement_text">These terms of use refer to the following additional terms, which also apply to
                    your use of our site:</p>
                <p id="agreement_text">• <a id="email_text" href="#terms_privacy">Our Privacy Policy</a>, which sets out
                    the terms on which
                    we process any personal
                    data we collect from you, or that you
                    provide to us. Please read this carefully before using this site, and stop using the site
                    immediately if you do not
                    agree with such processing.</p>
                <p id="agreement_text">• <a id="email_text" href="#terms_cookies">Our Cookie Policy</a>, which sets out
                    information about the cookies on our site.
                </p>
                <p id="agreement_text">If you purchase goods from our site, our <a id="email_text"
                        href="#terms_delivery">Terms and
                        conditions of supply</a> will
                    apply to the sales.</p>


                <h4 id="section_title">Information about us</h4>

                <p id="agreement_text"><a href="http://www.bossdrinks.com" id="email_text">www.bossdrinks.com</a> is a
                    site
                    operated by BOSS DRINKS LTD(“We”). We are registered in England and Wales under company
                    number 13717935 and have our registered office at BOSS DRINKS LTD, 3/5 Ripple Road,Barking,
                    Essex IG11 7ND. This is also
                    our main trading. Our VAT number is 32.</p>

                <h4 id="section_title">Changes to these terms</h4>
                <p id="agreement_text">We may revise these terms of use at any time by amending this page.</p>
                <p id="agreement_text">Please check this page from time to time to take notice of any changes we made,
                    as they are binding on you.</p>

                <h4 id="section_title">Changes to our site</h4>
                <p id="agreement_text">We may update our site from time to time, and may change the content at any time.
                    However, please note that any of the
                    content on our site may be out of date at any given time, and we are under no obligation to update
                    it.</p>
                <p id="agreement_text">We do not guarantee that our site, or any content on it, will be free from errors
                    or omissions.</p>

                <h4 id="section_title">Accessing our site</h4>
                <p id="agreement_text">Our site is made available free of charge.</p>
                <p id="agreement_text">We do not guarantee that our site, or any content on it, will always be available
                    or be uninterrupted. Access to our
                    site is permitted on a temporary basis. We may suspend, withdraw, discontinue or change all or any
                    part of our site
                    without notice. We will not be liable to you if for any reason our site is unavailable at any time
                    or for any period.</p>
                <p id="agreement_text">You are responsible for making all arrangements necessary for you to have access
                    to our site.</p>
                <p id="agreement_text">You are also responsible for ensuring that all persons who access our site
                    through your internet connection are aware of
                    these terms of use and other applicable terms and conditions, and that they comply with them.</p>
                <p id="agreement_text">Our site is directed to people residing in the United Kingdom. We do not
                    represent that content available on or through
                    our site is appropriate or available in other locations. We may limit the availability of our site
                    or any service or
                    product described on our site to any person or geographic area at any time. If you choose to access
                    our site from
                    outside the United Kingdom, you do so at your own risk.</p>
                <p id="agreement_text" style="font-weight: 700;">Your account and password</p>
                <p id="agreement_text">If you choose, or you are provided with a user identification code, password or
                    any other piece of information as part
                    of our security procedures, you must treat such information as confidential. You must not disclose
                    it to any third
                    party.</p>
                <p id="agreement_text">We have the right to disable any user identification code or password, whether
                    chosen by you or allocated by us, at any
                    time, if in our reasonable opinion you have failed to comply with any of the provisions of these
                    terms of use.</p>
                <p id="agreement_text">If you know or suspect that anyone other than you knows your user identification
                    code or password, you must promptly
                    notify us at <a id="email_text">info@bossdrinks.com</a></p>
                <p id="agreement_text" style="font-weight: 700;">Intellectual property rights</p>
                <p id="agreement_text">We are the owner or the licensee of all intellectual property rights in our site,
                    and in the material published on it.
                    Those works are protected by copyright laws and treaties around the world. All such rights are
                    reserved.
                </p>
                <p id="agreement_text">You may print off one copy, and may download extracts, of any page(s) from our
                    site for your personal use and you may
                    draw the attention of others within your organisation to content posted on our site.</p>
                <p id="agreement_text">You must not modify the paper or digital copies of any materials you have printed
                    off or downloaded in any way, and you
                    must not use any illustrations, photographs, video or audio sequences or any graphics separately
                    from any accompanying
                    text.</p>
                <p id="agreement_text">Our status (and that of any identified contributors) as the authors of content on
                    our site must always be acknowledged.</p>
                <p id="agreement_text">You must not use any part of the content on our site for commercial purposes
                    without obtaining a licence to do so from
                    us or our licensors.</p>
                <p id="agreement_text">If you print off, copy or download any part of our site in breach of these terms
                    of use, your right to use our site will
                    cease immediately and you must, at our option, return or destroy any copies of the materials you
                    have made.</p>


                <h4 id="section_title">No reliance on information</h4>
                <p id="agreement_text">The content on our site is provided for general information only. It is not
                    intended to amount to advice on which you
                    should rely. You must obtain professional or specialist advice before taking, or refraining from,
                    any action on the
                    basis of the content on our site.</p>
                <p id="agreement_text">Although we make reasonable efforts to update the information on our site, we
                    make no representations, warranties or
                    guarantees, whether express or implied, that the content on our site is accurate, complete or
                    up-to-date.</p>


                <h4 id="section_title">Limitation of our liability</h4>
                <p id="agreement_text">Nothing in these terms of use excludes or limits our liability for death or
                    personal injury arising from our negligence,
                    or our fraud or fraudulent misrepresentation, or any other liability that cannot be excluded or
                    limited by English law.</p>
                <p id="agreement_text">To the extent permitted by law, we exclude all conditions, warranties,
                    representations or other terms which may apply to
                    our site or any content on it, whether express or implied.
                </p>
                <p id="agreement_text">We will not be liable to any user for any loss or damage, whether in contract,
                    tort (including negligence), breach of
                    statutory duty, or otherwise, even if foreseeable, arising under or in connection with:</p>
                <p id="agreement_text">• use of, or inability to use, our site; or<br>
                    • use of or reliance on any content displayed on our site.<br>
                    If you are a business user, please note that in particular, we will not be liable for:

                </p>
                <p id="agreement_text">
                    • loss of profits, sales, business, or revenue;<br>
                    • business interruption;<br>
                    • loss of anticipated savings;<br>
                    • loss of business opportunity, goodwill or reputation; or<br>
                    • any indirect or consequential loss or damage.<br><br>
                    If you are a consumer user, please note that we only provide our site for domestic and private use.
                    You agree not to use
                    our site for any commercial or business purposes, and we have no liability to you for any loss of
                    profit, loss of
                    business, business interruption, or loss of business opportunity.
                </p>
                <p id="agreement_text">We will not be liable for any loss or damage caused by a virus, distributed
                    denial-of-service attack, or other
                    technologically harmful material that may infect your computer equipment, computer programs, data or
                    other proprietary
                    material due to your use of our site or to your downloading of any content on it, or on any website
                    linked to it.</p>


                <p id="agreement_text">We assume no responsibility for the content of websites linked on our site. Such
                    links should not be interpreted as
                    endorsement by us of those linked websites. We will not be liable for any loss or damage that may
                    arise from your use of
                    them.</p>
                <p id="agreement_text">Different limitations and exclusions of liability will apply to liability arising
                    as a result of the supply of any goods
                    by use to you, which will be set out in our <a id="email_text" href="#terms_delivery">Terms and
                        conditions of supply</a>.</p>


                <h4 id="section_title">Viruses</h4>
                <p id="agreement_text">We do not guarantee that our site will be secure or free from bugs or viruses.
                </p>
                <p id="agreement_text">You are responsible for configuring your information technology, computer
                    programmes and platform in order to access our
                    site. You should use your own virus protection software.</p>
                <p id="agreement_text">You must not misuse our site by knowingly introducing viruses, trojans, worms,
                    logic bombs or other material which is
                    malicious or technologically harmful. You must not attempt to gain unauthorised access to our site,
                    the server on which
                    our site is stored or any server, computer or database connected to our site. You must not attack
                    our site via a
                    denial-of-service attack or a distributed denial-of service attack. By breaching this provision, you
                    would commit a
                    criminal offence under the Computer Misuse Act 1990. We will report any such breach to the relevant
                    law enforcement
                    authorities and we will co-operate with those authorities by disclosing your identity to them. In
                    the event of such a
                    breach, your right to use our site will cease immediately.</p>




                <h4 id="section_title">Linking to our site</h4>
                <p id="agreement_text">You may link to our home page, provided you do so in a way that is fair and legal
                    and does not damage our reputation or
                    take advantage of it.</p>
                <p id="agreement_text">You must not establish a link in such a way as to suggest any form of
                    association, approval or endorsement on our part
                    where none exists.</p>
                <p id="agreement_text">You must not establish a link to our site in any website that is not owned by
                    you.</p>
                <p id="agreement_text">Our site must not be framed on any other site, nor may you create a link to any
                    part of our site other than the home
                    page.</p>
                <p id="agreement_text">We reserve the right to withdraw linking permission without notice.</p>
                <p id="agreement_text">If you wish to make any use of content on our site other than that set out above,
                    please contact <a id="email_text">info@bossdrinks.com</a></p>


                <h4 id="section_title">Third party links and resources in our site</h4>
                <p id="agreement_text">Where our site contains links to other sites and resources provided by third
                    parties, these links are provided for your
                    information only.</p>
                <p id="agreement_text">We have no control over the contents of those sites or resources.</p>

                <h4 id="section_title">Applicable law</h4>
                <p id="agreement_text">If you are a consumer, please note that these terms of use, its subject matter
                    and its formation, are governed by
                    English law. You and we both agree to that the courts of England and Wales will have non-exclusive
                    jurisdiction.
                    However, if you are a resident of Northern Ireland you may also bring proceedings in Northern
                    Ireland, and if you are
                    resident of Scotland, you may also bring proceedings in Scotland.</p>
                <p id="agreement_text">If you are a business, these terms of use, its subject matter and its formation
                    (and any non-contractual disputes or
                    claims) are governed by English law. We both agree to the exclusive jurisdiction of the courts of
                    England and Wales.</p>

                <h4 id="section_title">Contact us</h4>

                <p id="agreement_text">To contact us, please email info@bossdrinks.com</p>
                <p id="agreement_text">Thank you for visiting our site.</p>





















                <a id="terms_sale"></a>
                <p id="main_heading">TERMS AND CONDITIONS OF SALE</p>
                <h4 id="section_title">These Terms</h4>
                <p id="agreement_text"><span id="span_1">What these terms cover:</span>
                    These are the terms and conditions on which we supply products to you.</p>
                <p id="agreement_text"><span id="span_1">Why you should read them:</span>
                    Please read these terms carefully before you submit your order to us. These terms tell you who we
                    are, how we will
                    provide products to you, how you and we may change or end the contract, what to do if there is a
                    problem and other
                    important information. If you think that there is a mistake in these terms, please contact us to
                    discuss.</p>


                <p id="agreement_text" style="font-weight: 700;">Information about us and how to contact us:</p>

                <p id="agreement_text"><span id="span_1">Who we are:</span>
                    We are BOSS Drinks a company registered in England and Wales. Our company registration number is
                    13717935 and our
                    registered office is at BOSS Drinks Ltd, 3/5 Ripple Road, Barking, Essex IG11 7ND, UK. Our
                    registered VAT number is 32.</p>
                <p id="agreement_text"><span id="span_1">How to contact us:</span>
                    You can contact us by telephoning our customer service team at 020 000 00 or by writing to us at
                    <a id="email_text">info@bossdrinks.com</a> and
                    our registered office address above.
                </p>
                <p id="agreement_text"><span id="span_1">How we may contact you:</span>
                    If we have to contact you we will do so by telephone or by writing to you at the email address or
                    postal address you
                    provided to us in your order.</p>
                <p id="agreement_text"><span id="span_1">“Writing” includes emails:</span>
                    When we use the words “writing” or “written” in these terms, this includes emails.</p>



                <h4 id="section_title">Our contract with you</h4>
                <p id="agreement_text"><span id="span_1">About You:</span>
                    You confirm that You are over 18 and the valid holder and owner of any credit or debit card used
                    during Services. We
                    reserve the right to refuse your order at our discretion.</p>
                <p id="agreement_text"><span id="span_1">How we will accept your order:</span>
                    Our acceptance of your order will take place when we email you to accept it, at which point a
                    contract will come into
                    existence between you and us.</p>
                <p id="agreement_text"><span id="span_1">If we cannot accept your order:</span>
                    . If we are unable to accept your order, we will inform you of this and will not charge you for the
                    product. This might
                    be because the product is out of stock, because of unexpected limits on our resources which we could
                    not reasonably plan
                    for, because we have identified an error in the price or description of the product or because we
                    are unable to meet a
                    delivery deadline you have specified.</p>
                <p id="agreement_text"><span id="span_1">Your order number:</span>
                    We will assign an order number to your order and tell you what it is when we accept your order. It
                    will help us if you
                    can tell us the order number whenever you contact us about your order.</p>


                <h4 id="section_title">Our products</h4>
                <p id="agreement_text"><span id="span_1">Products may vary slightly from their pictures.</span>
                    The images of the products on our website are for illustrative purposes only. Although we have made
                    every effort to
                    display the colours accurately, we cannot guarantee that a device’s display of the colours
                    accurately reflects the
                    colour of the products. Your product may vary slightly from those images.</p>

                <h4 id="section_title">Providing the products</h4>
                <p id="agreement_text"><span id="span_1">Delivery costs.</span>
                    The costs of delivery will be as displayed to you on our website. We deliver throughout the United
                    Kingdom and the
                    European Union although delivery to remote areas may incur a surcharge. Areas such as parts of
                    Scotland, the Scottish
                    Highlands, Ireland, Northern Ireland, remote areas of Wales and Lands End Cornwall and other areas
                    of Europe as defined
                    by the courier company may incur an additional delivery surcharge. Contact us for further
                    information on courier rates
                    to your address.</p>
                <p id="agreement_text"><span id="span_1">When we will provide the products:</span>
                    . During the order process we will let you know when we will provide the products to you. We will
                    send you an email on
                    the morning of your delivery date with delivery details so you are able to track your order.</p>
                <p id="agreement_text"><span id="span_1">Please notify us in advance of any delivery difficulties, which
                        may be expected.</span>This includes narrow road access or helpful hints and tips of how to find
                    you. Please Note: Delivery vehicles can be
                    very large and adequate space and access is required.</p>
                <p id="agreement_text"><span id="span_1">We are not responsible for delays outside our control.</span>

                    . If our supply of the products is delayed by an event outside our control then we will contact you
                    as soon as possible
                    to let you know and we will take steps to minimise the effect of the delay. Provided we do this we
                    will not be liable
                    for delays caused by the event, but if there is a risk of substantial delay you may contact us to
                    end the contract and
                    receive a refund for any products you have paid for but not received.</p>
                <p id="agreement_text"><span id="span_1">If you are not at home when the product is delivered.</span>

                    . If no one is available at your address to take delivery and the products cannot be posted through
                    your letterbox, we
                    will leave you a note informing you of how to rearrange delivery or collect the products from a
                    local depot.</p>
                <p id="agreement_text"><span id="span_1">If you do not re-arrange delivery.</span>

                    If after a failed delivery to you, you do not re-arrange delivery or collect the products from a
                    delivery depot we
                    will contact you for further instructions and may charge you for storage costs and any further
                    delivery costs. If,
                    despite our reasonable efforts, we are unable to contact you or re-arrange delivery or collection we
                    may end the
                    contract and clause 2 will apply.</p>
                <p id="agreement_text"><span id="span_1">Guarantee against damage in transit.</span>

                    The products are insured against damage in transit.
                    Upon arrival, if there is any present or visible damage to the products, refuse delivery by refusing
                    signature and
                    returning the product with the delivery driver.
                    You must inform the delivery driver of the reason for refusal and the delivery driver must co-sign
                    the delivery note.
                </p>

                <p id="agreement_text" style="font-weight: 700;">Please DO NOT sign for delivery if the product is
                    damaged and DO NOT accept goods as ‘damaged in transit’ as the transit
                    insurance will be void.</p>
                <p id="regular_p" style="margin-top: -10px;">Contact us on +44 020 000 000 immediately to report damages
                    and ensure fast
                    replacement of the products.</p>

                <p id="agreement_text"><span id="span_1">When you become responsible for the product:</span>

                    The product will be your responsibility from the time we deliver the product to the address.
                </p>

                <p id="agreement_text"><span id="span_1">When you own goods:</span>

                    You own a product which is goods once we have received payment in full.
                </p>


                <h4 id="section_title">Reasons we may suspend the supply of products to you</h4>


                <p id="agreement_text"><span id="span_1">We may have to suspend the supply of a product to:</span><br>

                    deal with technical problems or make minor technical changes;<br>
                    update the product to reflect changes in relevant laws and regulatory requirements.

                </p>

                <p id="agreement_text"><span id="span_1">Your rights if we suspend the supply of products:</span>

                    We will contact you in advance to tell you we will be suspending supply of the product, unless the
                    problem is urgent or
                    an emergency. If we have to suspend the product for longer than 30 days we will adjust the price so
                    that you do not pay
                    for products while they are suspended. You may contact us to end the contract for a product if we
                    suspend it, or tell
                    you we are going to suspend it, in each case for a period of more than 30 days and we will refund
                    any sums you have paid
                    in advance for the product in respect of the period after you end the contract.
                </p>
                <p id="agreement_text"><span id="span_1">We may also suspend supply of the products if you do not
                        pay.</span>
                    If you do not pay us for the products when you are supposed to (see clause 4) and you still do not
                    make payment within 7
                    days of us reminding you that payment is due, we may suspend supply of the products until you have
                    paid us the
                    outstanding amounts. We will contact you to tell you we are suspending supply of the products. We
                    will not suspend the
                    products where you dispute the unpaid invoice (see clause 10.6). We will not charge you for the
                    products during the
                    period for which they are suspended. As well as suspending the products we can also charge you
                    interest on your overdue
                    payments (see clause 10.5).
                </p>

                <h4 id="section_title">Your rights to end the contract</h4>
                <p id="agreement_text"><span id="span_1">You can always end your contract with us.
                    </span>
                    Your rights when you end the contract will depend on what you have bought, whether there is anything
                    wrong with it, how
                    we are performing and when you decide to end the contract:
                </p>
                <p id="agreement_text"><span id="span_1">If what you have bought is faulty or misdescribed you may have
                        a legal right to end the contract
                    </span>
                    (or to get the product repaired or replaced or to get some or all of your money back), see clause 9;
                </p>
                <p id="agreement_text"><span id="span_1">If you want to end the contract because of something we have
                        done or have told you we are going to do,
                    </span>
                    see clause 2;


                </p>
                <p id="agreement_text"><span id="span_1">If you have just changed your mind about the product,
                    </span>
                    see clause 3. You may be able to get a refund if you are within the cooling-off period, but this may
                    be subject to
                    deductions and you will have to pay the costs of return of any goods;


                </p>
                <p id="agreement_text"><span id="span_1">In all other cases
                    </span>
                    (if we are not at fault and there is no right to change your mind), see clause 6.


                </p>
                <p id="agreement_text"><span id="span_1">Ending the contract because of something we have done or are
                        going to do.
                    </span>
                    . If you are ending a contract for a reason set out at 2.1 to 6.2.4 below the contract will end
                    immediately and we will
                    refund you in full for any products which have not been provided and you may also be entitled to
                    compensation. The
                    reasons are:


                </p>
                <p id="agreement_text">we have told you about an error in the price or description of the product you
                    have ordered and you do not wish to
                    proceed; there is a risk that supply of the products may be significantly delayed because of events
                    outside our control;
                    we have suspended supply of the products for technical reasons, or notify you we are going to
                    suspend them for technical
                    reasons, in each case for a period of more than 30 days; or
                    you have a legal right to end the contract because of something we have done wrong.
                </p>
                <p id="agreement_text"><span id="span_1">Exercising your right to change your mind (Consumer Contracts
                        Regulations 2013).
                    </span>
                    For most products bought online you have a legal right to change your mind within 14 days and
                    receive a refund. These
                    rights, under the Consumer Contracts Regulations 2013, are explained in more detail in these terms.


                </p>
                <p id="agreement_text"><span id="span_1">Our goodwill guarantee.

                    </span>
                    Please note, these terms reflect the goodwill guarantee offered by BOSS DRINKS LTD of BOSS DRINKS
                    LTD,3/5 Ripple
                    Road,Barking,Essex IG11 7ND, UK to its UK customers, which is more generous than your legal rights
                    under the Consumer
                    Contracts Regulations in the ways set out below. This goodwill guarantee does not affect your legal
                    rights in relation
                    to faulty or misdescribed products (see clause 2):
                </p>
                <p id="agreement_text"><span id="span_1">How our goodwill guarantee is more generous.

                    </span>
                    14 day period to change your mind. Consumer to pay costs of return.
                </p>

                <p id="agreement_text">Please note that to take advantage of our goodwill guarantee, the products must
                    be in their original unused condition,
                    returned in their original packaging with a copy of the original delivery note provided.</p>

                <p id="agreement_text">This does not affect your statutory rights.</p>
                <p id="agreement_text"><span id="span_1">How long do I have to change my mind?

                    </span>
                    You have 14 days after the day you (or someone you nominate) receives the goods, <span
                        id="span_1">unless your
                        goods
                        are split into
                        several deliveries over different days.</span> In this case you have until 14 days after the day
                    you (or
                    someone you nominate)
                    receives the last delivery to change your mind about the goods.
                </p>
                <p id="agreement_text"><span id="span_1">Ending the contract where we are not at fault and there is no
                        right to change your mind.

                    </span>
                    Even if we are not at fault and you do not have a right to change your mind (see clause 1), you can
                    still end the
                    contract before it is completed, but you may have to pay us compensation. A contract for goods is
                    completed when the
                    product is delivered and paid for. If you want to end the contract in these circumstances, just
                    contact us to let us
                    know. The contract will end immediately and we will refund any sums paid by you for products not
                    provided but we may
                    deduct from that refund (or, if you have not made an advance payment, charge you) reasonable
                    compensation for the net
                    costs we will incur as a result of your ending the contract.
                </p>


                <h4 id="section_title">How to end the contract with us (including if you have changed your mind)</h4>


                <p id="agreement_text"><span id="span_1">Tell us you want to end the contract.
                    </span>
                    To end the contract with us, please let us know by doing one of the following:<br>
                    Phone or email. Call customer services on +44 20 000 00 or email us at <a
                        id="email_text">info@bossdrinks.com</a>.
                    Please
                    provide your name,
                    home address, details of the order and, where available, your phone number and email address.

                </p>
                <p id="agreement_text"><span id="span_1">Returning products after ending the contract.
                    </span>
                    . If you end the contract for any reason after products have been dispatched to you or you have
                    received them, you must
                    return them to us. You must either return the goods in person to where you bought them, arrange for
                    them to be returned
                    to our registered address at BOSS DRINKS LTD,3/5 Ripple Road, Barking, Essex IG11 7ND, UK or allow
                    us to collect them
                    from you. Please call customer services on +44 20 000 00 or email us at <a
                        id="email_text">info@bossdrinks.com</a> for a return label or to
                    arrange collection. If you are exercising your right to change your mind you must send off the goods
                    within 30 days of
                    telling us you wish to end the contract.

                </p>
                <p id="agreement_text"><span id="span_1">When we will pay the costs of return.
                    </span>
                    We will only pay the costs of return:<br>
                    if the products are faulty or misdescribed;<br>
                    if you are ending the contract because we have told you of an upcoming change to the product or
                    these terms, an error in
                    pricing or description, a delay in delivery due to events outside our control or because you have a
                    legal right to do so
                    as a result of something we have done wrong; or<br>
                    In all other circumstances (including where you are exercising your right to change your mind) you
                    must pay the costs of
                    return.



                </p>
                <p id="agreement_text"><span id="span_1">What we charge for collection.
                    </span>
                    . If you are responsible for the costs of return and we are collecting the product from you, we will
                    charge you the
                    direct cost to us of collection. The costs of collection will be the same as our charges for
                    standard delivery, see our
                    delivery policy.




                </p>
                <p id="agreement_text"><span id="span_1">How we will refund you.
                    </span>
                    We will refund you the price you paid for the products including delivery costs, by the method you
                    used for payment.
                    However, we may make deductions from the price, as described below.




                </p>

                <p id="agreement_text"><span id="span_1">Deductions from refunds.
                    </span>
                    If you are exercising your right to change your mind:<br>
                    We may reduce your refund of the price (excluding delivery costs) to reflect any reduction in the
                    value of the goods, if
                    this has been caused by your handling them in a way which would not be permitted in a shop. If we
                    refund you the price
                    paid before we are able to inspect the goods and later discover you have handled them in an
                    unacceptable way, you must
                    pay us an appropriate amount.
                </p>
                <p id="agreement_text"><span id="span_1">The maximum refund for delivery costs will be the costs of
                        delivery by the least expensive delivery method we offer.
                    </span>
                    For example, if we offer delivery of a product within 3-5 days at one cost but you choose to have
                    the product
                    delivered within 24 hours at a higher cost, then we will only refund what you would have paid for
                    the cheaper delivery
                    option.

                </p>
                <p id="agreement_text"><span id="span_1">When your refund will be made.
                    </span>
                    We will make any refunds due to you as soon as possible. If you are exercising your right to change
                    your mind then your
                    refund will be made within 14 days from the day on which we receive the product back from you or, if
                    earlier, the day on
                    which you provide us with evidence that you have sent the product back to us.

                </p>


                <h4 id="section_title"></h4>

                <p id="agreement_text"><span id="span_1">We may end the contract if you break it.
                    </span>
                    We may end the contract for a product at any time by writing to you if:<br>
                    you do not make any payment to us when it is due and you still do not make payment within 7 days of
                    us reminding you
                    that payment is due;<br>
                    you do not, within a reasonable time of us asking for it, provide us with information that is
                    necessary for us to
                    provide the products;<br>
                    you do not, within a reasonable time, allow us to deliver the products to you;




                </p>
                <p id="agreement_text"><span id="span_1">You must compensate us if you break the contract
                    </span>
                    If we end the contract in the situations set out in clause 1 we will refund any money you have paid
                    in advance for
                    products we have not provided but we may deduct or charge you reasonable compensation for the net
                    costs we will incur as
                    a result of your breaking the contract.
                </p>


                <h4 id="section_title">If there is a problem with the product</h4>
                <p id="agreement_text"><span id="span_1">How to tell us about problems.
                    </span>
                    . If you have any questions or complaints about the product, please contact us. You can telephone
                    our customer service
                    team at +44 20 000 00 or write to us at our registered office at BOSS DRINKS LTD,3/5 Ripple Road,
                    Barking, Essex IG11
                    7ND, UK or email <a id="email_text">info@bossdrinks.com</a> .
                    Summary of your legal rights. We are under a legal duty to supply products that are in conformity
                    with this contract.
                    See the box below for a summary of your key legal rights in relation to the product. Nothing in
                    these terms will affect
                    your legal rights.


                </p>
                <p id="agreement_text"><span id="span_1">Summary of your key legal rights.
                    </span>

                    This is a summary of your key legal rights. These are subject to certain exceptions. For detailed
                    information please
                    visit the Citizens Advice website <a id="email_text">www.adviceguide.org.uk</a> or call +44 (0) 20
                    000 00. The Consumer Rights Act 2015 says
                    goods must be as described, fit for purpose and of satisfactory quality. During the expected life of
                    your product your
                    legal rights entitle you to the following:up to 30 days: if your item is faulty, then you can get a
                    refund.up to six
                    months: if your faulty item can’t be repaired or replaced, then you’re entitled to a full refund, in
                    most cases.up to
                    six years: if the item can be expected to last up to six years you may be entitled to a repair or
                    replacement, or, if
                    that doesn’t work, some of your money back.

                </p>
                <p id="agreement_text"><span id="span_1">Your obligation to return rejected products.
                    </span>

                    If you wish to exercise your legal rights to reject products you must, arrange delivery of the
                    products back to us.
                    Please call customer services on +44 20 000 00 or email us at <a id="email_text">info@bossdrinks.com</a>
                    for a
                    return label or to arrange
                    collection
                </p>


                <h4 id="section_title">Price and payment</h4>
                <p id="agreement_text"><span id="span_1">Where to find the price for the product.</span>

                    The price of the product (which includes VAT) will be the price indicated on the order pages when
                    you placed your order.
                    We use our best efforts to ensure that the price of the product advised to you is correct. However
                    please see clause 3
                    for what happens if we discover an error in the price of the product you order.
                    We will pass on changes in the rate of VAT. If the rate of VAT changes between your order date and
                    the date we supply
                    the product, we will adjust the rate of VAT that you pay, unless you have already paid for the
                    product in full before
                    the change in the rate of VAT takes effect.

                </p>
                <p id="agreement_text"><span id="span_1">What happens if we got the price wrong.</span>

                    . It is always possible that, despite our best efforts, some of the products we sell may be
                    incorrectly priced. We will
                    normally check prices before accepting your order so that, where the product’s correct price at your
                    order date is less
                    than our stated price at your order date, we will charge the lower amount. If the product’s correct
                    price at your order
                    date is higher than the price stated in our price list, we will contact you for your instructions
                    before we accept your
                    order. If we accept and process your order where a pricing error is obvious and unmistakeable and
                    could reasonably have
                    been recognised by you as a mispricing, we may end the contract, refund you any sums you have paid
                    and require the
                    return of any goods provided to you.

                </p>
                <p id="agreement_text"><span id="span_1">When you must pay and how you must pay.</span>

                    We accept payment by all major credit and debit cards. You must pay for the products before we
                    dispatch them. We will
                    not charge you for the products until we dispatch them to you.
                </p>
                <p id="agreement_text"><span id="span_1">We can charge interest if you pay late.</span>

                    If you do not make any payment to us by the due date we may charge interest to you on the overdue
                    amount at the rate of
                    1.5% a year above the base lending rate of HSBC Bank Plc from time to time. This interest shall
                    accrue on a daily basis
                    from the due date until the date of actual payment of the overdue amount, whether before or after
                    judgment. You must pay
                    us interest together with any overdue amount.
                </p>
                <p id="agreement_text"><span id="span_1">What to do if you think an invoice is wrong.</span>


                    If you think an invoice is wrong please contact us promptly to let us know and we will not charge
                    you interest until we
                    have resolved the issue.
                </p>


                <h4 id="section_title">Our responsibility for loss or damage suffered by you</h4>
                <p id="agreement_text"><span id="span_1">We are responsible to you for foreseeable loss and damage
                        caused by us.</span>


                    If we fail to comply with these terms, we are responsible for loss or damage you suffer that is a
                    foreseeable result of
                    our breaking this contract or our failing to use reasonable care and skill, but we are not
                    responsible for any loss or
                    damage that is not foreseeable. Loss or damage is foreseeable if either it is obvious that it will
                    happen or if, at the
                    time the contract was made, both we and you knew it might happen, for example, if you discussed it
                    with us during the
                    sales process.
                </p>
                <p id="agreement_text"><span id="span_1">We are not liable for business losses.</span>

                    We only supply the products for domestic and private use. If you use the products for any
                    commercial, business or
                    re-sale purpose we will have no liability to you for any loss of profit, loss of business, business
                    interruption, or
                    loss of business opportunity.
                </p>

                <h4 id="section_title">How we may use your personal information</h4>
                <p id="agreement_text"><span id="span_1">How we will use your personal information.</span><br>

                    We will use the personal information you provide to us in accordance with our <a id="email_text">privacy
                        and
                        cookies policy</a>. Please read
                    these carefully.
                </p>

                <h4 id="section_title">Other important terms</h4>

                <p id="agreement_text"><span id="span_1">We may transfer this agreement to someone else.</span>
                    We may transfer our rights and obligations under these terms to another organisation.

                </p>
                <p id="agreement_text"><span id="span_1">You need our consent to transfer your rights to someone
                        else</span>
                    (except that you can always transfer our guarantee). You may only transfer your rights or your
                    obligations under these
                    terms to another person if we agree to this in writing. However, you may transfer our guarantee at
                    clause 4 to a person
                    who has acquired the product. We may require the person to whom the guarantee is transferred to
                    provide reasonable
                    evidence that they are now the owner of the relevant item or property.

                </p>
                <p id="agreement_text"><span id="span_1">Nobody else has any rights under this contract</span>

                    (except someone you pass your guarantee on to). This contract is between you and us. No other person
                    shall have any
                    rights to enforce any of its terms, except as explained in clause 2 in respect of our guarantee.
                    Neither of us will need
                    to get the agreement of any other person in order to end the contract or make any changes to these
                    terms.
                </p>
                <p id="agreement_text"><span id="span_1">If a court finds part of this contract illegal, the rest will
                        continue in force.</span>
                    Each of the paragraphs of these terms operates separately. If any court or relevant authority
                    decides that any of them
                    are unlawful, the remaining paragraphs will remain in full force and effect.
                </p>
                <p id="agreement_text"><span id="span_1">Even if we delay in enforcing this contract, we can still
                        enforce it later.</span>
                    If we do not insist immediately that you do anything you are required to do under these terms, or if
                    we delay in taking
                    steps against you in respect of your breaking this contract, that will not mean that you do not have
                    to do those things
                    and it will not prevent us taking steps against you at a later date. For example, if you miss a
                    payment and we do not
                    chase you but we continue to provide the products, we can still require you to make the payment at a
                    later date.
                </p>

                <p id="agreement_text"><span id="span_1">Which laws apply to this contract and where you may bring legal
                        proceedings.</span>
                    These terms are governed by English law and you can bring legal proceedings in respect of the
                    products in the English
                    courts. If you live in Scotland you can bring legal proceedings in respect of the products in either
                    the Scottish or the
                    English courts. If you live in Northern Ireland you can bring legal proceedings in respect of the
                    products in either the
                    Northern Irish or the English courts.
                </p>



            </div>

            <div class="second_tnc">
                <a id="terms_delivery"></a>
                <p id="main_heading_2">Delivery Terms & Conditions
                <p>


                <h4 id="section_title">Shipping rates – United Kingdom</h4>

                <p id="agreement_text">We have selected several reputable courier services to deliver your parcels. The
                    couriers we have chosen offer quick
                    reliable services to get your parcels to you safely and timely at a reasonable cost. Once your
                    address details have been
                    uploaded to their server, you will receive an email or/and an SMS with a delivery slot. You will
                    then have the ability
                    to change the delivery slot to suit your needs.</p>


                <h4 id="second_tnc_sections">Domestic Free Shipping</h4>

                <div class="P_SPAN_Div">
                    <div class="p_and_span">
                        <p>UK Mainland except some areas in Scotland. (3-5 working days) – </p><span id="dark_text">Orders
                            over
                            £29.00</span>
                    </div>
                    <div class="p_and_span">
                        <p>Next Day* Service (order before 12:00) – </p><span id="dark_text">£4.99</span>
                    </div>
                    <div class="p_and_span">
                        <p>Scottish Highlands & Islands – </p><span id="dark_text">Orders over £99.00</span>
                    </div>
                    <div class="p_and_span">
                        <p>Northern Ireland –</p><span id="dark_text">Orders over £99.00</span>
                    </div>
                    <div class="p_and_span">
                        <p>Isles Of Scilly, Isle Of Man –</p><span id="dark_text">Orders over £99.00</span>
                    </div>
                    <div class="p_and_span">
                        <p>Channel Islands –</p><span id="dark_text">Orders over £59.00</span>
                    </div>



                </div>


                <h4 id="second_tnc_sections">Free Local Pickup</h4>

                <h4 id="second_tnc_sections" style="color: #D99594;">* Temporarily Unavailable until we can establish
                    the new trading rules.
                    Apologies for any inconvenience. We will get our
                    free local pickup services running again as soon as possible.</h4>


                <p id="agreement_text" style="font-weight: 600; color: #244061;">We offer local free local pickup for
                    customers who live
                    near to us, which can be collected from our warehouse in
                    Christchurch, Dorset. Details of our address for collection can be found here.</p>
                <p id="agreement_text" style="font-weight: 600; color: #244061">Orders are normally available for
                    collection 24 hours
                    after being placed. Please have your order number handy when
                    coming to collect, so that we can find your order faster. Upon arrival please call 020 00000</p>


                <h4 id="second_tnc_sections">Domestic Shipping</h4>
                <p id="agreement_text">Please use the shipping calculator on the basket page.</p>

                <h4 id="second_tnc_sections">Tracking</h4>
                <div class="tracking">
                    <p>Royal Mail</p>
                    <p>DPD</p>
                    <p>Parcelforce</p>
                </div>


                <h4 id="second_tnc_sections">International Free Shipping</h4>
                <h4 id="second_tnc_sections" style="color: #D99594;">* Temporarily disabled until we can establish the
                    new trading rules. Apologies for any inconvenience.We will get our
                    export services running again as soon as possible.
                </h4>


                <div class="P_SPAN_Div">
                    <div class="p_and_span">
                        <p>Latvia, Portugal (5-6 working days) –</p><span id="dark_text">Temporarily Unavailable</span>
                    </div>
                    <div class="p_and_span">
                        <p>Italy, Lithuania, Slovakia, Spain, Sweden (5-7 working days) –</p><span
                            id="dark_text">Temporarily
                            Unavailable</span>
                    </div>
                    <div class="p_and_span">
                        <p>Bulgaria, Croatia, Estonia, Finland, Greece, Romania (5-7 working days) –</p><span
                            id="dark_text">Temporarily Unavailable</span>
                    </div>
                    <div class="p_and_span">
                        <p>Belgium, Czech Republic, Germany, Luxembourg, Netherlands, Poland (3-5 working days) –</p>
                        <span id="dark_text">Temporarily Unavailable</span>
                    </div>
                    <div class="p_and_span">
                        <p>Ireland, Austria, Denmark, France, Hungary, Slovenia (4-5 working days) –</p><span
                            id="dark_text">Temporarily Unavailable</span>
                    </div>




                </div>


                <p id="agreement_text">Our courier services do not deliver on weekends or bank holidays so any orders
                    made on Friday before 13:00 will be
                    delivered on the following Monday and any orders made before or on a bank holiday will not be
                    delivered until the
                    following days.</p>

                <p id="agreement_text">*Next day orders must be in before 12:00.</p>
            </div>

            <div class="third_tnc">
                <a id="terms_privacy"></a>
                <p id="main_heading_2">Privacy Policy & Cookies
                <p>
                <h4 id="sub_heading">OUR WEBSITE PRIVACY POLICY & COOKIES POLICY</h4>

                <h4 id="section_title">INTRODUCTION</h4>

                <p id="agreement_text">Welcome to the BOSS DRINKS LTD’s (“our”) privacy notice. We respect your privacy
                    and is committed to protecting your
                    personal data. This privacy notice will inform you as to how we look after your personal data when
                    you visit our website
                    or purchase any items from us and tell you about your privacy rights and how the law protects you.
                </p>

                <h4 id="section_title">1. IMPORTANT INFORMATION AND WHO WE ARE</h4>
                <p id="thrid_tnc_subtext">Purpose of this privacy notice</p>
                <p id="agreement_text">This privacy notice aims to give you information on how we collect and process
                    your personal data through your use of
                    this website, including any data you may provide through this website when you sign up to our
                    newsletter or purchase a
                    product.
                    This website is not intended for anyone under the age of 13 and we do not knowingly collect data
                    relating to children.
                    It is important that you read this privacy notice together with any other privacy notice or fair
                    processing notice we
                    may provide on specific occasions when we are collecting or processing personal data about you so
                    that you are fully
                    aware of how and why we are using your data. This privacy notice supplements the other notices and
                    is not intended to
                    override them.
                </p>
                <p id="thrid_tnc_subtext">Controller</p>
                <p id="agreement_text">BOSS DRINKS LTD is the controller and responsible for your personal data.</p>

                <p id="thrid_tnc_subtext">Contact details</p>
                <p id="contact_details_3" style="margin-top: 15px;">Our full details are:</p>
                <p id="contact_details_3">Email address: info@bossdrinks.com</p>
                <p id="contact_details_3">Postal address: BOSS DRINKS LTD, 3/5 Ripple Road, Barking, Essex IG11 7ND</p>
                <p id="contact_details_3">Telephone number: 020 000 00</p>
                <p id="contact_details_3" style="margin-top:5px;margin-bottom: 20px;">You have the right to make a
                    complaint at any time
                    to the Information
                    Commissioner’s Office (ICO),
                    the UK supervisory
                    authority for data protection issues (www.ico.org.uk). We would, however, appreciate the chance to
                    deal with your
                    concerns before you approach the ICO so please contact us in the first instance.</p>

                <p id="thrid_tnc_subtext">Changes to the privacy notice and your duty to inform us of changes</p>
                <p id="agreement_text">It is important that the personal data we hold about you is accurate and current.
                    Please keep us informed if your
                    personal data changes during your relationship with us.</p>

                <p id="thrid_tnc_subtext">Third-party links</p>
                <p id="agreement_text">This website may include links to third-party websites, plug-ins and
                    applications. Clicking on those links or enabling
                    those connections may allow third parties to collect or share data about you. We do not control
                    these third-party
                    websites and are not responsible for their privacy statements. When you leave our website, we
                    encourage you to read the
                    privacy notice of every website you visit.</p>

                <h4 id="section_title">2. THE DATA WE COLLECT ABOUT YOU</h4>
                <p id="agreement_text">Personal data, or personal information, means any information about an individual
                    from which that person can be
                    identified. It does not include data where the identity has been removed (anonymous data).</p>
                <p id="agreement_text">We may collect, use, store and transfer different kinds of personal data about
                    you which we have grouped together
                    follows:</p>

                <div class="data_3rd_tnc">
                    <div class="data_3rd_tnc_info">
                        <p><span id="span_1">• Identity Data</span>
                            includes first name, maiden name, last name, marital status, title and
                            gender.</p>
                    </div>
                    <div class="data_3rd_tnc_info">
                        <p><span id="span_1">• Contact Data</span>
                            includes billing address, delivery address, email address and telephone
                            numbers.</p>
                    </div>
                    <div class="data_3rd_tnc_info">
                        <p><span id="span_1">• Financial Data</span>
                            includes bank account and payment card details.</p>
                    </div>
                    <div class="data_3rd_tnc_info">
                        <p><span id="span_1">• Transaction Data</span>
                            includes details about payments to and from you and other details of products
                            and services you have purchased from us.</p>
                    </div>
                    <div class="data_3rd_tnc_info">
                        <p><span id="span_1">• Technical Data</span>
                            includes internet protocol (IP) address, your login data, browser type and
                            version, time zone setting and location,
                            browser plug-in types and versions, operating system and platform and other technology on
                            the devices you use to access
                            this website.</p>
                    </div>
                    <div class="data_3rd_tnc_info">
                        <p><span id="span_1">• Profile Data</span>
                            includes your username and password, purchases or orders made by you, your
                            interests, preferences and feedback.</p>
                    </div>
                    <div class="data_3rd_tnc_info">
                        <p><span id="span_1">• Usage Data</span>
                            includes information about how you use our website, products and
                            services.</p>
                    </div>
                    <div class="data_3rd_tnc_info">
                        <p><span id="span_1">• Marketing and Communications Data</span>
                            includes your preferences in receiving marketing from us and your
                            communication preferences.</p>
                    </div>


                </div>

                <p id="agreement_text">We also collect, use and share <span id="span_1">Aggregated Data</span> such as
                    statistical or demographic
                    data for any purpose. Aggregated Data
                    may be derived from your personal data but is not considered personal data in law as this data does
                    <span id="span_1">not</span> directly or
                    indirectly reveal your identity. For example, we may aggregate your Usage Data to calculate the
                    percentage of users
                    accessing a specific website feature. However, if we combine or connect Aggregated Data with your
                    personal data so that
                    it can directly or indirectly identify you, we treat the combined data as personal data which will
                    be used in accordance
                    with this privacy notice.
                </p>

                <p id="agreement_text">We do not collect any <span id="span_1">Special Categories of Personal
                        Data</span> about you (this
                    includes details about your race or ethnicity,
                    religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade union
                    membership,
                    information about your health and genetic and biometric data). Nor do we collect any information
                    about criminal
                    convictions and offences.</p>

                <span id="span_1">If you fail to provide personal data</span>
                <p id="agreement_text" style="margin-top: auto;">Where we need to collect personal data by law, or under
                    the terms of a contract
                    we have with you and you fail to provide
                    that data when requested, we may not be able to perform the contract we have or are trying to enter
                    into with you (for
                    example, to provide you with goods or services). In this case, we may have to cancel a product or
                    service you have with
                    us but we will notify you if this is the case at the time.</p>


                <h4 id="section_title">3. HOW IS YOUR PERSONAL DATA COLLECTED?</h4>
                <p id="agreement_text">We use different methods to collect data from and about you including through:
                </p>

                <p id="agreement_text"><span id="span_1">• Direct interactions.</span>
                    You may give us your Identity, Contact and Financial Data by filling in forms or by corresponding
                    with us by post,
                    phone, email or otherwise. This includes personal data you provide when you order our products,
                    create an account on our
                    website, subscribe to our publications or give us some feedback.</p>
                <p id="agreement_text"><span id="span_1">• Automated technologies or interactions.</span>
                    As you interact with our website, we may automatically collect Technical Data about your equipment,
                    browsing actions and
                    patterns. We collect this personal data by using cookies and other similar technologies. Please see
                    below for further
                    details regarding cookies.</p>
                <p id="agreement_text"><span id="span_1">• Third parties or publicly available sources.</span>We may
                    receive personal data
                    about you from various third parties, such as Technical Data from analytics providers such
                    as Google and Contact, Financial and Transaction Data from providers of technical, payment and
                    delivery services.
                </p>



                <h4 id="section_title">4. HOW WE USE YOUR PERSONAL DATA</h4>
                <p id="agreement_text">We will only use your personal data when the law allows us to. Most commonly, we
                    will use your
                    personal data in the
                    following circumstances:</p>
                <p id="agreement_text">• Where we need to perform the contract we are about to enter into or have
                    entered into with you.</p>
                <p id="agreement_text">• Where it is necessary for our legitimate interests (or those of a third party)
                    and your interests
                    and fundamental
                    rights do not override those interests.</p>
                <p id="agreement_text">• Where we need to comply with a legal or regulatory obligation.</p>
                <p id="agreement_text">Generally, we do not rely on consent as a legal basis for processing your
                    personal data other than in
                    relation to
                    sending third party direct marketing communications to you via email. You have the right to withdraw
                    consent to
                    marketing at any time by contacting us.</p>



                <table class="table_3rc_tnc">
                    <tr>
                        <th>Purpose/Activity</th>
                        <th>Type of data</th>
                        <th>Lawful basis for processing including basis of legitimate interest</th>
                    </tr>
                    <tr>
                        <td>To register you as a new customer</td>
                        <td>
                            <p>(a) Identity</p>
                            <p>(b) Contact</p>
                        </td>
                        <td>Performance of a contract with you</td>
                    </tr>
                    <tr>
                        <td>
                            <p>To process and deliver your order including:</p>
                            <p>(a) Manage payments, fees and charges</p>
                            <p>(b) Collect and recover money owed to us</p>
                        </td>
                        <td>
                            <p>(a) Identity</p>
                            <p>(b) Contact</p>
                            <p>(c) Financial</p>
                            <p>(d) Transaction</p>
                            <p>(e) Marketing and Communications</p>
                        </td>
                        <td>
                            <p>(a) Performance of a contract with you</p>
                            <p>(b) Necessary for our legitimate interests (to recover debts due to us)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>To manage our relationship with you which will include:</p>
                            <p>(a) Notifying you about changes to our terms or privacy policy</p>
                            <p>(b) Asking you to leave a review or take a survey</p>
                        </td>
                        <td>
                            <p>(a) Identity</p>
                            <p>(b) Contact</p>
                            <p>(c) Profile</p>
                            <p>(d) Marketing and Communications</p>
                        </td>
                        <td>
                            <p>(a) Performance of a contract with you</p>
                            <p>(b) Necessary to comply with a legal obligation</p>
                            <p>(c) Necessary for our legitimate interests (to keep our records updated and to study how
                                customers use our
                                products/services)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>To administer and protect our business and this website (including troubleshooting, data
                            analysis, testing, system
                            maintenance, support, reporting and hosting of data)</td>
                        <td>
                            <p>(a) Identity</p>
                            <p>(b) Contact</p>
                            <p>(c) Technical</p>
                        </td>
                        <td>
                            <p>(a) Necessary for our legitimate interests (for running our business, provision of
                                administration and IT services,
                                network security, to prevent fraud and in the context of a business reorganisation or
                                group restructuring exercise)</p>
                            <p>(b) Necessary to comply with a legal obligation</p>
                        </td>
                    </tr>
                    <tr>
                        <td>To deliver relevant website content and advertisements to you and measure or understand the
                            effectiveness of the
                            advertising we serve to you</td>
                        <td>
                            <p>(a) Identity</p>
                            <p>(b) Contact</p>
                            <p>(c) Profile</p>
                            <p>(d) Usage</p>
                            <p>(e) Marketing and Communications</p>
                            <p>(f) Technical</p>
                        </td>
                        <td>Necessary for our legitimate interests (to study how customers use our products/services, to
                            develop them, to grow our
                            business and to inform our marketing strategy)</td>
                    </tr>
                    <tr>
                        <td>To use data analytics to improve our website, products/services, marketing, customer
                            relationships and experiences</td>
                        <td>
                            <p>(a) Technical</p>
                            <p>(b) Usage</p>
                        </td>
                        <td>Necessary for our legitimate interests (to define types of customers for our products and
                            services, to keep our website
                            updated and relevant, to develop our business and to inform our marketing strategy)</td>
                    </tr>
                    <tr>
                        <td>To make suggestions and recommendations to you about goods or services that may be of
                            interest to you</td>
                        <td>
                            <p>(a) Identity</p>
                            <p>(b) Contact</p>
                            <p>(c) Technical</p>
                            <p>(d) Usage</p>
                            <p>(e) Profile</p>
                        </td>
                        <td>Necessary for our legitimate interests (to develop our products/services and grow our
                            business)</td>
                    </tr>

                </table>


                <p id="thrid_tnc_subtext">Marketing</p>

                <p id="agreement_text">We strive to provide you with choices regarding certain personal data uses,
                    particularly around marketing and
                    advertising. We may use your Identity, Contact, Technical, Usage and Profile Data to form a view on
                    what we think you
                    may want or need, or what may be of interest to you. This is how we decide which products, services
                    and offers may be
                    relevant for you (we call this marketing).
                    You will receive marketing communications from us if you have requested information from us or
                    purchased goods from us
                    and, in each case, you have not opted out of receiving that marketing. We will get your express
                    opt-in consent before we
                    share your personal data with any third party for marketing purposes.
                </p>
                <p id="thrid_tnc_subtext">Opting out</p>

                <p id="agreement_text">You can ask us or third parties to stop sending you marketing messages at any
                    time by contacting us.
                    Where you opt out of receiving these marketing messages, this will not apply to personal data
                    provided to us as a result
                    of a product purchase, or other transactions.

                </p>
                <p id="thrid_tnc_subtext">Change of purpose</p>

                <p id="agreement_text">We will only use your personal data for the purposes for which we collected it,
                    unless we reasonably consider that we
                    need to use it for another reason and that reason is compatible with the original purpose. If you
                    wish to get an
                    explanation as to how the processing for the new purpose is compatible with the original purpose,
                    please contact us.
                    If we need to use your personal data for an unrelated purpose, we will notify you and we will
                    explain the legal basis
                    which allows us to do so. Please note that we may process your personal data without your knowledge
                    or consent, in
                    compliance with the above rules, where this is required or permitted by law.


                    <a id="terms_cookies"></a>

                <h4 id="section_title">5. COOKIES</h4>
                <p id="agreement_text">Our website uses cookies to distinguish you from other users of our website. This
                    helps us to provide you with a good
                    experience when you browse our website and also allows us to improve our site. By continuing to
                    browse the site, you are
                    agreeing to our use of cookies.
                    A cookie is a small file of letters and numbers that we store on your browser or the hard drive of
                    your computer if you
                    agree. Cookies contain information that is transferred to your computer’s hard drive.
                </p>

                <p id="agreement_text">We use the following cookies:</p>
                </p>


                <p id="coockies_p"><span id="span_1">• Strictly necessary cookies:</span>
                    These are cookies that are required for the operation of our website. We use cookies in order to
                    store your product
                    selection information into our shopping basket.</p>
                <p id="coockies_p"><span id="span_1">• Analytical/performance cookies:</span>
                    These allow us to recognise and count the number of visitors and to see how visitors move around our
                    website when they
                    are using it. This helps us to improve the way our website works, for example, by ensuring that
                    users are finding what
                    they are looking for easily.</p>
                <p id="coockies_p"><span id="span_1">• Functionality cookies:</span>
                    These are used to recognise you when you return to our website. This enables us to personalise our
                    content for you,
                    greet you by name and remember your preferences (for example, your choice of language or region).
                </p>
                <p id="coockies_p"><span id="span_1">•Targeting cookies:</span>
                    These cookies record your visit to our website, the pages you have visited and the links you have
                    followed. We will use
                    this information to make our website and the advertising displayed on it more relevant to your
                    interests. We may also
                    share this information with third parties for this purpose.
                    Please note that third parties (including, for example, advertising networks and providers of
                    external services like web
                    traffic analysis services) may also use cookies, over which we have no control. These cookies are
                    likely to be
                    analytical/performance cookies or targeting cookies
                    You block cookies by activating the setting on your browser that allows you to refuse the setting of
                    all or some
                    cookies. However, if you use your browser settings to block all cookies (including essential
                    cookies) you may not be
                    able to access all or parts of our site.


                </p>


                <h4 id="section_title">6. DISCLOSURES OF YOUR PERSONAL DATA</h4>

                <p id="regular_p">• Service providers who provide IT and system administration services.</p>
                <p id="regular_p">• Professional advisers including lawyers, bankers, auditors and insurers who provide
                    consultancy, banking, legal,
                    insurance and accounting services.</p>
                <p id="regular_p">• HM Revenue & Customs, regulators and other authorities based in the United Kingdom
                    who require reporting of processing
                    activities in certain circumstances.</p>
                <p id="regular_p">• Third parties to whom we may choose to sell, transfer, or merge parts of our
                    business or our assets. Alternatively, we
                    may seek to acquire other businesses or merge with them. If a change happens to our business, then
                    the new owners may
                    use your personal data in the same way as set out in this privacy notice.</p>
                <p id="regular_p">We require all third parties to respect the security of your personal data and to
                    treat it in accordance with the law.
                    We do not allow our third-party service providers to use your personal data for their own purposes
                    and only permit them
                    to process your personal data for specified purposes and in accordance with our instructions.</p>


                <h4 id="section_title">7. INTERNATIONAL TRANSFERS</h4>
                <p id="regular_p">We may share your personal data outside the European Economic Area (EEA) in some
                    instances to process your order or
                    carry out our services. Whenever we transfer your personal data out of the EEA, we ensure a similar
                    degree of protection
                    is afforded to it by ensuring at least one of the following safeguards is implemented:</p>
                <p id="regular_p">• We will only transfer your personal data to countries that have been deemed to
                    provide an adequate level of protection
                    for personal data by the European Commission.</p>
                <p id="regular_p">• Where we use certain service providers, we may use specific contracts approved by
                    the European Commission which give
                    personal data the same protection it has in Europe.</p>
                <p id="regular_p">• Where we use providers based in the US, we may transfer data to them if they are
                    part of the Privacy Shield which
                    requires them to provide similar protection to personal data shared between the Europe and the US.
                </p>
                <p id="regular_p">Please contact us if you want further information on the specific mechanism used by us
                    when transferring your personal
                    data out of the EEA</p>


                <h4 id="section_title">8. DATA SECURITY</h4>

                <p id="agreement_text">We have put in place appropriate security measures to prevent your personal data
                    from being accidentally lost, used or
                    accessed in an unauthorised way, altered or disclosed. In addition, we limit access to your personal
                    data to those
                    employees, agents, contractors and other third parties who have a business need to know. They will
                    only process your
                    personal data on our instructions and they are subject to a duty of confidentiality.</p>
                <p id="regular_p">We have put in place procedures to deal with any suspected personal data breach and
                    will notify you and any applicable
                    regulator of a breach where we are legally required to do so.</p>



                <h4 id="section_title">9. DATA RETENTION</h4>
                <p id="thrid_tnc_subtext">How long will you use my personal data for?</p>
                <p id="agreement_text">We will only retain your personal data for as long as necessary to fulfil the
                    purposes
                    we collected it for, including
                    for the purposes of satisfying any legal, accounting, or reporting requirements.
                    To determine the appropriate retention period for personal data, we consider the amount, nature, and
                    sensitivity of the
                    personal data, the potential risk of harm from unauthorised use or disclosure of your personal data,
                    the purposes for
                    which we process your personal data and whether we can achieve those purposes through other means,
                    and the applicable
                    legal requirements.
                    By law we have to keep basic information about our customers (including Contact, Identity, Financial
                    and Transaction
                    Data) for six years after they cease being customers.
                    In some circumstances you can ask us to delete your data: see paragraph 10 below for further
                    information.
                </p>


                <h4 id="section_title">10. YOUR LEGAL RIGHTS</h4>
                <p id="agreement_text">Under certain circumstances, you have rights under data protection laws in
                    relation to your personal data. In
                    particular, you have the right to:</p>


                <p id="coockies_p"><span id="span_1">• Request access</span>
                    to your personal data (commonly known as a “data subject access request”). This enables you to
                    receive a copy of the
                    personal data we hold about you and to check that we are lawfully processing it.</p>
                <p id="coockies_p"><span id="span_1">• Request correction</span>
                    of the personal data that we hold about you. This enables you to have any incomplete or inaccurate
                    data we hold about
                    you corrected, though we may need to verify the accuracy of the new data you provide to us.</p>
                <p id="coockies_p"><span id="span_1">• Request erasure</span>
                    of your personal data. This enables you to ask us to delete or remove personal data where there is
                    no good reason for us
                    continuing to process it. You also have the right to ask us to delete or remove your personal data
                    where you have
                    successfully exercised your right to object to processing (see below), where we may have processed
                    your information
                    unlawfully or where we are required to erase your personal data to comply with local law. Note,
                    however, that we may not
                    always be able to comply with your request of erasure for specific legal reasons which will be
                    notified to you, if
                    applicable, at the time of your request.</p>
                <p id="coockies_p"><span id="span_1">• Object to processing</span>
                    of your personal data where we are relying on a legitimate interest (or those of a third party) and
                    there is something
                    about your particular situation which makes you want to object to processing on this ground as you
                    feel it impacts on
                    your fundamental rights and freedoms. You also have the right to object where we are processing your
                    personal data for
                    direct marketing purposes. In some cases, we may demonstrate that we have compelling legitimate
                    grounds to process your
                    information which override your rights and freedoms.</p>
                <p id="coockies_p"><span id="span_1">• Request restriction of processing</span>
                    of your personal data. This enables you to ask us to suspend the processing of your personal data in
                    the following
                    scenarios: (a) if you want us to establish the data’s accuracy; (b) where our use of the data is
                    unlawful but you do not
                    want us to erase it; (c) where you need us to hold the data even if we no longer require it as you
                    need it to establish,
                    exercise or defend legal claims; or (d) you have objected to our use of your data but we need to
                    verify whether we have
                    overriding legitimate grounds to use it.</p>
                <p id="coockies_p"><span id="span_1">• Request the transfer</span>
                    of your personal data to you or to a third party. We will provide to you, or a third party you have
                    chosen, your
                    personal data in a structured, commonly used, machine-readable format. Note that this right only
                    applies to automated
                    information which you initially provided consent for us to use or where we used the information to
                    perform a contract
                    with you.</p>
                <p id="coockies_p"><span id="span_1">• Withdraw consent at any time</span>
                    where we are relying on consent to process your personal data. However, this will not affect the
                    lawfulness of any
                    processing carried out before you withdraw your consent. If you withdraw your consent, we may not be
                    able to provide
                    certain products or services to you. We will advise you if this is the case at the time you withdraw
                    your consent.
                    If you wish to exercise any of the rights set out above, please contact us.
                </p>



            </div>

            <button id="i_agree_btn"><span>I Agree</span></button>

        </div>







    </div>


    <!-- final Footer -->
    <!-- final Footer -->
    <div class="finalFooter">


        <div class="footer_top">
            <div class="footer_top_firstpart">
                <div class="footer_img_icon">
                    <img class="footer_image" src="/img/Energy Boss - 400x300px.png" alt="something">
                    <div class="footer_icon">
                        <i class="fab fa-facebook-f icon"></i>
                        <i class="fab fa-twitter icon"></i>
                        <i class="fab fa-youtube icon"></i>
                        <i class="fab fa-instagram icon"></i>
                    </div>
                </div>


                <div class="address_footer">
                    <h2>Address</h2>
                    <p>BOSS DRINKS LIMITED</p>
                    <p>Unit J10 Middlesex Business Centre,<br> Bridge Road, Southall, England, UB2 4AB</p>
                </div>
            </div>
            <div class="footer_top_secondpart">

                <div class="menu_footer">
                    <ul class="first_collumn_footer">
                        <li><span>Menu</span></li>
                        <li><span><a href="index.html">Home</a></span></li>
                        <li><span>About Us</span></li>
                        <li><span><a href="shop.html">Products</a></span></li>
                        <li><span><a href="shop.html">Buy Drinks</a></span></li>
                        <li><span>Contact Us</span></li>
                    </ul>
                </div>
                <div class="more_links_footer">
                    <ul class="first_collumn_footer">
                        <li><span>More Links</span></li>
                        <li><span><a href="terms.html">Terms and Conditions</a></span></li>
                        <li><span><a href="terms.html">Privacy and Policy</a></span></li>
                        <li><span>Our Mission</span></li>
                        <li><span>Our Vision</span></li>
                        <li><span>Our Community</span></li>
                    </ul>
                </div>
                <div class="other_links_footer">
                    <ul class="first_collumn_footer">
                        <li><span>Other Links</span></li>
                        <li><span>Blogs</span></li>
                        <li><span>Merchandise</span></li>
                        <li><span>Delivery</span></li>
                        <li><span>Returns</span></li>
                        <li><span>Coockies</span></li>
                    </ul>
                </div>
                <div class="footer_contact">
                    <h2>Contact</h2>
                    <div class="footer_info_part">
                        <div class="footer_business_title">

                            <h6>Buisness:</h6>
                            <h6>Sales:</h6>
                            <h6>Websites</h6>

                        </div>
                        <div class="footer_busness_info">
                            <h6>info@bossdrinks.eu</h6>
                            <h6>sales@bossdrinks.eu</h6>
                            <h6>www.bossdrinks.eu</h6>

                        </div>
                    </div>
                </div>

            </div>





        </div>

        <div class="footer_bottom">
            <p>©️ BOSS DRINKS LTD. 2017 - 2021.All rights reserved.ENERGY BOSS and the ENERGY BOSS logo are
                registered
                trademarks of
                BOSS DRINKS.BOSS DRINKS LTD. Registered Office: 3-5, Ripple Road, Barking,Essex, IG11 7ND.ENERGY
                BOSS
                Limited a Company
                incorporated in England and Wales under company number: 13264607. VAT Number: GB326621906
                BOSSDRINKS.COM Online website is owned and provided by BOSS DRINKS Limited -Any reproduction of the
                contents is strictly
                forbidden.</p>
            <p>Develeped By TATAMAX LIMITED</p>
            <!-- <h3>Maintained By</h3>
                                                                                                                                                                                                                                                                <img src="/img/Briton Logo - 400x240px.png" alt=""> -->
        </div>



        <div class="payment_method_web">
            <ul class="Footer__PaymentList HorizontalList">


                <li class="HorizontalList__Item">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24"
                        aria-labelledby="pi-american_express">
                        <title id="pi-american_express">American Express</title>
                        <g fill="none">
                            <path fill="#000"
                                d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z"
                                opacity=".07"></path>
                            <path fill="#006FCF"
                                d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1">
                            </path>
                            <path fill="#FFF"
                                d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z">
                            </path>
                        </g>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0" width="38" height="24"
                        viewBox="0 0 165.521 105.965" xml:space="preserve" aria-labelledby="pi-apple_pay">
                        <title id="pi-apple_pay">Apple Pay</title>
                        <path fill="#000"
                            d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z">
                        </path>
                        <path fill="#FFF"
                            d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875">
                        </path>
                        <g>
                            <g>
                                <path fill="#000"
                                    d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858">
                                </path>
                                <path fill="#000"
                                    d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048">
                                </path>
                            </g>
                            <g>
                                <path fill="#000"
                                    d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z">
                                </path>
                                <path fill="#000"
                                    d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z">
                                </path>
                                <path fill="#000"
                                    d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                        aria-labelledby="pi-diners_club">
                        <title id="pi-diners_club">Diners Club</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <path
                            d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z"
                            fill="#3086C8"></path>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg viewBox="0 0 38 24" width="38" height="24" role="img" aria-labelledby="pi-discover" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <title id="pi-discover">Discover</title>
                        <path fill="#000" opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z" fill="#fff">
                        </path>
                        <path
                            d="M3.57 7.16H2v5.5h1.57c.83 0 1.43-.2 1.96-.63.63-.52 1-1.3 1-2.11-.01-1.63-1.22-2.76-2.96-2.76zm1.26 4.14c-.34.3-.77.44-1.47.44h-.29V8.1h.29c.69 0 1.11.12 1.47.44.37.33.59.84.59 1.37 0 .53-.22 1.06-.59 1.39zm2.19-4.14h1.07v5.5H7.02v-5.5zm3.69 2.11c-.64-.24-.83-.4-.83-.69 0-.35.34-.61.8-.61.32 0 .59.13.86.45l.56-.73c-.46-.4-1.01-.61-1.62-.61-.97 0-1.72.68-1.72 1.58 0 .76.35 1.15 1.35 1.51.42.15.63.25.74.31.21.14.32.34.32.57 0 .45-.35.78-.83.78-.51 0-.92-.26-1.17-.73l-.69.67c.49.73 1.09 1.05 1.9 1.05 1.11 0 1.9-.74 1.9-1.81.02-.89-.35-1.29-1.57-1.74zm1.92.65c0 1.62 1.27 2.87 2.9 2.87.46 0 .86-.09 1.34-.32v-1.26c-.43.43-.81.6-1.29.6-1.08 0-1.85-.78-1.85-1.9 0-1.06.79-1.89 1.8-1.89.51 0 .9.18 1.34.62V7.38c-.47-.24-.86-.34-1.32-.34-1.61 0-2.92 1.28-2.92 2.88zm12.76.94l-1.47-3.7h-1.17l2.33 5.64h.58l2.37-5.64h-1.16l-1.48 3.7zm3.13 1.8h3.04v-.93h-1.97v-1.48h1.9v-.93h-1.9V8.1h1.97v-.94h-3.04v5.5zm7.29-3.87c0-1.03-.71-1.62-1.95-1.62h-1.59v5.5h1.07v-2.21h.14l1.48 2.21h1.32l-1.73-2.32c.81-.17 1.26-.72 1.26-1.56zm-2.16.91h-.31V8.03h.33c.67 0 1.03.28 1.03.82 0 .55-.36.85-1.05.85z"
                            fill="#231F20"></path>
                        <path d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z"
                            fill="url(#pi-paint0_linear)">
                        </path>
                        <path opacity=".65" d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z"
                            fill="url(#pi-paint1_linear)"></path>
                        <path
                            d="M36.57 7.506c0-.1-.07-.15-.18-.15h-.16v.48h.12v-.19l.14.19h.14l-.16-.2c.06-.01.1-.06.1-.13zm-.2.07h-.02v-.13h.02c.06 0 .09.02.09.06 0 .05-.03.07-.09.07z"
                            fill="#231F20"></path>
                        <path
                            d="M36.41 7.176c-.23 0-.42.19-.42.42 0 .23.19.42.42.42.23 0 .42-.19.42-.42 0-.23-.19-.42-.42-.42zm0 .77c-.18 0-.34-.15-.34-.35 0-.19.15-.35.34-.35.18 0 .33.16.33.35 0 .19-.15.35-.33.35z"
                            fill="#231F20"></path>
                        <path d="M37 12.984S27.09 19.873 8.976 23h26.023a2 2 0 002-1.984l.024-3.02L37 12.985z"
                            fill="#F48120">
                        </path>
                        <defs>
                            <linearGradient id="pi-paint0_linear" x1="21.657" y1="12.275" x2="19.632" y2="9.104"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F89F20"></stop>
                                <stop offset=".25" stop-color="#F79A20"></stop>
                                <stop offset=".533" stop-color="#F68D20"></stop>
                                <stop offset=".62" stop-color="#F58720"></stop>
                                <stop offset=".723" stop-color="#F48120"></stop>
                                <stop offset="1" stop-color="#F37521"></stop>
                            </linearGradient>
                            <linearGradient id="pi-paint1_linear" x1="21.338" y1="12.232" x2="18.378" y2="6.446"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F58720"></stop>
                                <stop offset=".359" stop-color="#E16F27"></stop>
                                <stop offset=".703" stop-color="#D4602C"></stop>
                                <stop offset=".982" stop-color="#D05B2E"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24"
                        aria-labelledby="pi-google_pay">
                        <title id="pi-google_pay">Google Pay</title>
                        <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                            fill="#000" opacity=".07"></path>
                        <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF">
                        </path>
                        <path
                            d="M18.093 11.976v3.2h-1.018v-7.9h2.691a2.447 2.447 0 0 1 1.747.692 2.28 2.28 0 0 1 .11 3.224l-.11.116c-.47.447-1.098.69-1.747.674l-1.673-.006zm0-3.732v2.788h1.698c.377.012.741-.135 1.005-.404a1.391 1.391 0 0 0-1.005-2.354l-1.698-.03zm6.484 1.348c.65-.03 1.286.188 1.778.613.445.43.682 1.03.65 1.649v3.334h-.969v-.766h-.049a1.93 1.93 0 0 1-1.673.931 2.17 2.17 0 0 1-1.496-.533 1.667 1.667 0 0 1-.613-1.324 1.606 1.606 0 0 1 .613-1.336 2.746 2.746 0 0 1 1.698-.515c.517-.02 1.03.093 1.49.331v-.208a1.134 1.134 0 0 0-.417-.901 1.416 1.416 0 0 0-.98-.368 1.545 1.545 0 0 0-1.319.717l-.895-.564a2.488 2.488 0 0 1 2.182-1.06zM23.29 13.52a.79.79 0 0 0 .337.662c.223.176.5.269.785.263.429-.001.84-.17 1.146-.472.305-.286.478-.685.478-1.103a2.047 2.047 0 0 0-1.324-.374 1.716 1.716 0 0 0-1.03.294.883.883 0 0 0-.392.73zm9.286-3.75l-3.39 7.79h-1.048l1.281-2.728-2.224-5.062h1.103l1.612 3.885 1.569-3.885h1.097z"
                            fill="#5F6368"></path>
                        <path
                            d="M13.986 11.284c0-.308-.024-.616-.073-.92h-4.29v1.747h2.451a2.096 2.096 0 0 1-.9 1.373v1.134h1.464a4.433 4.433 0 0 0 1.348-3.334z"
                            fill="#4285F4"></path>
                        <path
                            d="M9.629 15.721a4.352 4.352 0 0 0 3.01-1.097l-1.466-1.14a2.752 2.752 0 0 1-4.094-1.44H5.577v1.17a4.53 4.53 0 0 0 4.052 2.507z"
                            fill="#34A853"></path>
                        <path d="M7.079 12.05a2.709 2.709 0 0 1 0-1.735v-1.17H5.577a4.505 4.505 0 0 0 0 4.075l1.502-1.17z"
                            fill="#FBBC04"></path>
                        <path
                            d="M9.629 8.44a2.452 2.452 0 0 1 1.74.68l1.3-1.293a4.37 4.37 0 0 0-3.065-1.183 4.53 4.53 0 0 0-4.027 2.5l1.502 1.171a2.715 2.715 0 0 1 2.55-1.875z"
                            fill="#EA4335"></path>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img"
                        aria-labelledby="pi-maestro">
                        <title id="pi-maestro">Maestro</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                        <circle fill="#00A2E5" cx="23" cy="12" r="7"></circle>
                        <path fill="#7375CF"
                            d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                        </path>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                        aria-labelledby="pi-master">
                        <title id="pi-master">Mastercard</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                        <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                        <path fill="#FF5F00"
                            d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                        </path>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img"
                        aria-labelledby="pi-paypal">
                        <title id="pi-paypal">PayPal</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <path fill="#003087"
                            d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
                        </path>
                        <path fill="#3086C8"
                            d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
                        </path>
                        <path fill="#012169"
                            d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
                        </path>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24"
                        aria-labelledby="pi-shopify_pay">
                        <title id="pi-shopify_pay">Shop Pay</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                            fill="#000"></path>
                        <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z"
                            fill="#5A31F4">
                        </path>
                        <path
                            d="M21.382 9.713c0 1.668-1.177 2.858-2.821 2.858h-1.549a.133.133 0 00-.12.08.127.127 0 00-.01.049v2.192a.129.129 0 01-.13.129h-1.084a.13.13 0 01-.13-.13V6.986a.127.127 0 01.08-.12.129.129 0 01.05-.01h2.9c1.637 0 2.814 1.19 2.814 2.858v-.001zm-1.352 0c0-.958-.658-1.658-1.55-1.658h-1.468a.13.13 0 00-.13.13v3.05a.127.127 0 00.038.092.129.129 0 00.092.038h1.468c.892.005 1.55-.695 1.55-1.652zm1.674 3.791a1.527 1.527 0 01.647-1.317c.423-.316 1.084-.48 2.055-.514l1.033-.036v-.303c0-.607-.41-.863-1.068-.863-.658 0-1.075.231-1.17.61a.127.127 0 01-.125.09h-1.022a.13.13 0 01-.126-.092.125.125 0 01-.004-.055c.152-.898.904-1.58 2.494-1.58 1.692 0 2.303.783 2.303 2.276v3.172a.13.13 0 01-.132.129h-1.03a.13.13 0 01-.13-.13v-.236a.096.096 0 00-.061-.091.1.1 0 00-.107.022c-.31.334-.808.575-1.607.575-1.175 0-1.95-.607-1.95-1.657zm3.735-.687v-.246l-1.339.07c-.705.036-1.115.326-1.115.816 0 .444.376.69 1.034.69.893 0 1.42-.48 1.42-1.33zm2.316 4.6v-.919a.13.13 0 01.049-.1.132.132 0 01.108-.027c.158.029.318.044.479.044a1.229 1.229 0 001.245-.876l.067-.211a.133.133 0 000-.088l-2.145-5.471a.13.13 0 01.06-.165.13.13 0 01.062-.015h1.04a.132.132 0 01.123.085l1.456 3.859a.131.131 0 00.125.088.133.133 0 00.125-.088l1.265-3.848a.13.13 0 01.126-.09h1.076a.134.134 0 01.132.116.134.134 0 01-.008.063l-2.295 6.076c-.528 1.413-1.433 1.773-2.43 1.773a1.959 1.959 0 01-.561-.066.132.132 0 01-.1-.14h.001zM8.57 6.4a5.363 5.363 0 00-3.683 1.427.231.231 0 00-.029.31l.618.839a.236.236 0 00.362.028 3.823 3.823 0 012.738-1.11c2.12 0 3.227 1.584 3.227 3.15 0 1.7-1.163 2.898-2.835 2.921-1.292 0-2.266-.85-2.266-1.974a1.908 1.908 0 01.713-1.48.231.231 0 00.033-.324l-.65-.815a.236.236 0 00-.339-.034 3.43 3.43 0 00-.942 1.183 3.39 3.39 0 00-.337 1.47c0 1.935 1.655 3.452 3.775 3.464h.03c2.517-.032 4.337-1.884 4.337-4.415 0-2.247-1.667-4.64-4.752-4.64z"
                            fill="#fff"></path>
                    </svg>
                </li>
                <li class="HorizontalList__Item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                        aria-labelledby="pi-visa">
                        <title id="pi-visa">Visa</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <path
                            d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                            fill="#142688"></path>
                    </svg>
                </li>
            </ul>



        </div>


    </div>


    <!-- final Footer ends *************************************************************************************-->
    <div class="Footer_for_mobile">
        <div class="Footer_for_Mobile_image">
            <img src="/img/Energy Boss - 400x300px.png" alt="Energy Boss - 400x300px.png">
        </div>
        <div class="footer_icon_mobile">
            <i class="fab fa-facebook-f icon"></i>
            <i class="fab fa-twitter icon"></i>
            <i class="fab fa-youtube icon"></i>
            <i class="fab fa-instagram icon"></i>
        </div>

        <div class="footer_menu_mobile">
            <div>
                <ul class="first_collumn_footer_mobile">
                    <li><span style="font-weight: 700;">More Links</span></li>
                    <li><span><a href="terms.html">Terms and Conditions</a></span></li>
                    <li><span><a href="terms.html">Privacy And Policy</a></span></li>
                    <li><span>Our Mission</span></li>
                    <li><span>Our Vision</span></li>
                    <li><span>Our Community</span></li>
                </ul>
            </div>

            <div>
                <ul class="first_collumn_footer_mobile">
                    <li><span style="font-weight: 700;">Other Links</span></li>
                    <li><span>Blogs</span></li>
                    <li><span>Merchandise</span></li>
                    <li><span>Delivery</span></li>
                    <li><span>Returns</span></li>
                    <li><span>Coockies</span></li>
                </ul>

            </div>



        </div>
        <div class="footer_bottom_mobile">
            <p>©️ BOSS DRINKS LTD. 2017 - 2021.All rights reserved.ENERGY BOSS and the ENERGY BOSS logo are
                registered
                trademarks of
                BOSS DRINKS.BOSS DRINKS LTD. Registered Office: 3-5, Ripple Road, Barking,Essex, IG11 7ND.ENERGY
                BOSS
                Limited a Company
                incorporated in England and Wales under company number: 13264607. VAT Number: GB326621906
                BOSSDRINKS.COM Online website is owned and provided by BOSS DRINKS Limited -Any reproduction of the
                contents is strictly
                forbidden.</p>
            <p>Develeped By TATAMAX LIMITED</p>
            <!-- <h3>Maintained By</h3>
                                                                                                                                                                                                                                                                <img src="/img/Briton Logo - 400x240px.png" alt=""> -->
        </div>

        <div class="payment_method">
            <ul class="Footer__PaymentList HorizontalList">
                <div class="item_first6">
                    <li class="HorizontalList__Item">
                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24"
                            aria-labelledby="pi-american_express">
                            <title id="pi-american_express">American Express</title>
                            <g fill="none">
                                <path fill="#000"
                                    d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z"
                                    opacity=".07"></path>
                                <path fill="#006FCF"
                                    d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1">
                                </path>
                                <path fill="#FFF"
                                    d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z">
                                </path>
                            </g>
                        </svg>
                    </li>
                    <li class="HorizontalList__Item">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0" width="38" height="24"
                            viewBox="0 0 165.521 105.965" xml:space="preserve" aria-labelledby="pi-apple_pay">
                            <title id="pi-apple_pay">Apple Pay</title>
                            <path fill="#000"
                                d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z">
                            </path>
                            <path fill="#FFF"
                                d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875">
                            </path>
                            <g>
                                <g>
                                    <path fill="#000"
                                        d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858">
                                    </path>
                                    <path fill="#000"
                                        d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#000"
                                        d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z">
                                    </path>
                                    <path fill="#000"
                                        d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z">
                                    </path>
                                    <path fill="#000"
                                        d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </li>
                    <li class="HorizontalList__Item">
                        <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                            aria-labelledby="pi-diners_club">
                            <title id="pi-diners_club">Diners Club</title>
                            <path opacity=".07"
                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                            </path>
                            <path fill="#fff"
                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                            </path>
                            <path
                                d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z"
                                fill="#3086C8"></path>
                        </svg>
                    </li>
                    <li class="HorizontalList__Item">
                        <svg viewBox="0 0 38 24" width="38" height="24" role="img" aria-labelledby="pi-discover" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <title id="pi-discover">Discover</title>
                            <path fill="#000" opacity=".07"
                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                            </path>
                            <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z"
                                fill="#fff">
                            </path>
                            <path
                                d="M3.57 7.16H2v5.5h1.57c.83 0 1.43-.2 1.96-.63.63-.52 1-1.3 1-2.11-.01-1.63-1.22-2.76-2.96-2.76zm1.26 4.14c-.34.3-.77.44-1.47.44h-.29V8.1h.29c.69 0 1.11.12 1.47.44.37.33.59.84.59 1.37 0 .53-.22 1.06-.59 1.39zm2.19-4.14h1.07v5.5H7.02v-5.5zm3.69 2.11c-.64-.24-.83-.4-.83-.69 0-.35.34-.61.8-.61.32 0 .59.13.86.45l.56-.73c-.46-.4-1.01-.61-1.62-.61-.97 0-1.72.68-1.72 1.58 0 .76.35 1.15 1.35 1.51.42.15.63.25.74.31.21.14.32.34.32.57 0 .45-.35.78-.83.78-.51 0-.92-.26-1.17-.73l-.69.67c.49.73 1.09 1.05 1.9 1.05 1.11 0 1.9-.74 1.9-1.81.02-.89-.35-1.29-1.57-1.74zm1.92.65c0 1.62 1.27 2.87 2.9 2.87.46 0 .86-.09 1.34-.32v-1.26c-.43.43-.81.6-1.29.6-1.08 0-1.85-.78-1.85-1.9 0-1.06.79-1.89 1.8-1.89.51 0 .9.18 1.34.62V7.38c-.47-.24-.86-.34-1.32-.34-1.61 0-2.92 1.28-2.92 2.88zm12.76.94l-1.47-3.7h-1.17l2.33 5.64h.58l2.37-5.64h-1.16l-1.48 3.7zm3.13 1.8h3.04v-.93h-1.97v-1.48h1.9v-.93h-1.9V8.1h1.97v-.94h-3.04v5.5zm7.29-3.87c0-1.03-.71-1.62-1.95-1.62h-1.59v5.5h1.07v-2.21h.14l1.48 2.21h1.32l-1.73-2.32c.81-.17 1.26-.72 1.26-1.56zm-2.16.91h-.31V8.03h.33c.67 0 1.03.28 1.03.82 0 .55-.36.85-1.05.85z"
                                fill="#231F20"></path>
                            <path d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z"
                                fill="url(#pi-paint0_linear)">
                            </path>
                            <path opacity=".65" d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z"
                                fill="url(#pi-paint1_linear)"></path>
                            <path
                                d="M36.57 7.506c0-.1-.07-.15-.18-.15h-.16v.48h.12v-.19l.14.19h.14l-.16-.2c.06-.01.1-.06.1-.13zm-.2.07h-.02v-.13h.02c.06 0 .09.02.09.06 0 .05-.03.07-.09.07z"
                                fill="#231F20"></path>
                            <path
                                d="M36.41 7.176c-.23 0-.42.19-.42.42 0 .23.19.42.42.42.23 0 .42-.19.42-.42 0-.23-.19-.42-.42-.42zm0 .77c-.18 0-.34-.15-.34-.35 0-.19.15-.35.34-.35.18 0 .33.16.33.35 0 .19-.15.35-.33.35z"
                                fill="#231F20"></path>
                            <path d="M37 12.984S27.09 19.873 8.976 23h26.023a2 2 0 002-1.984l.024-3.02L37 12.985z"
                                fill="#F48120">
                            </path>
                            <defs>
                                <linearGradient id="pi-paint0_linear" x1="21.657" y1="12.275" x2="19.632" y2="9.104"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F89F20"></stop>
                                    <stop offset=".25" stop-color="#F79A20"></stop>
                                    <stop offset=".533" stop-color="#F68D20"></stop>
                                    <stop offset=".62" stop-color="#F58720"></stop>
                                    <stop offset=".723" stop-color="#F48120"></stop>
                                    <stop offset="1" stop-color="#F37521"></stop>
                                </linearGradient>
                                <linearGradient id="pi-paint1_linear" x1="21.338" y1="12.232" x2="18.378" y2="6.446"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F58720"></stop>
                                    <stop offset=".359" stop-color="#E16F27"></stop>
                                    <stop offset=".703" stop-color="#D4602C"></stop>
                                    <stop offset=".982" stop-color="#D05B2E"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </li>
                    <li class="HorizontalList__Item">
                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24"
                            aria-labelledby="pi-google_pay">
                            <title id="pi-google_pay">Google Pay</title>
                            <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                fill="#000" opacity=".07"></path>
                            <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                                fill="#FFF">
                            </path>
                            <path
                                d="M18.093 11.976v3.2h-1.018v-7.9h2.691a2.447 2.447 0 0 1 1.747.692 2.28 2.28 0 0 1 .11 3.224l-.11.116c-.47.447-1.098.69-1.747.674l-1.673-.006zm0-3.732v2.788h1.698c.377.012.741-.135 1.005-.404a1.391 1.391 0 0 0-1.005-2.354l-1.698-.03zm6.484 1.348c.65-.03 1.286.188 1.778.613.445.43.682 1.03.65 1.649v3.334h-.969v-.766h-.049a1.93 1.93 0 0 1-1.673.931 2.17 2.17 0 0 1-1.496-.533 1.667 1.667 0 0 1-.613-1.324 1.606 1.606 0 0 1 .613-1.336 2.746 2.746 0 0 1 1.698-.515c.517-.02 1.03.093 1.49.331v-.208a1.134 1.134 0 0 0-.417-.901 1.416 1.416 0 0 0-.98-.368 1.545 1.545 0 0 0-1.319.717l-.895-.564a2.488 2.488 0 0 1 2.182-1.06zM23.29 13.52a.79.79 0 0 0 .337.662c.223.176.5.269.785.263.429-.001.84-.17 1.146-.472.305-.286.478-.685.478-1.103a2.047 2.047 0 0 0-1.324-.374 1.716 1.716 0 0 0-1.03.294.883.883 0 0 0-.392.73zm9.286-3.75l-3.39 7.79h-1.048l1.281-2.728-2.224-5.062h1.103l1.612 3.885 1.569-3.885h1.097z"
                                fill="#5F6368"></path>
                            <path
                                d="M13.986 11.284c0-.308-.024-.616-.073-.92h-4.29v1.747h2.451a2.096 2.096 0 0 1-.9 1.373v1.134h1.464a4.433 4.433 0 0 0 1.348-3.334z"
                                fill="#4285F4"></path>
                            <path
                                d="M9.629 15.721a4.352 4.352 0 0 0 3.01-1.097l-1.466-1.14a2.752 2.752 0 0 1-4.094-1.44H5.577v1.17a4.53 4.53 0 0 0 4.052 2.507z"
                                fill="#34A853"></path>
                            <path
                                d="M7.079 12.05a2.709 2.709 0 0 1 0-1.735v-1.17H5.577a4.505 4.505 0 0 0 0 4.075l1.502-1.17z"
                                fill="#FBBC04"></path>
                            <path
                                d="M9.629 8.44a2.452 2.452 0 0 1 1.74.68l1.3-1.293a4.37 4.37 0 0 0-3.065-1.183 4.53 4.53 0 0 0-4.027 2.5l1.502 1.171a2.715 2.715 0 0 1 2.55-1.875z"
                                fill="#EA4335"></path>
                        </svg>
                    </li>
                    <li class="HorizontalList__Item">
                        <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img"
                            aria-labelledby="pi-maestro">
                            <title id="pi-maestro">Maestro</title>
                            <path opacity=".07"
                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                            </path>
                            <path fill="#fff"
                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                            </path>
                            <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                            <circle fill="#00A2E5" cx="23" cy="12" r="7"></circle>
                            <path fill="#7375CF"
                                d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                            </path>
                        </svg>
                    </li>
                </div>
                <div class="item_last4">
                    <li class="HorizontalList__Item">
                        <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                            aria-labelledby="pi-master">
                            <title id="pi-master">Mastercard</title>
                            <path opacity=".07"
                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                            </path>
                            <path fill="#fff"
                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                            </path>
                            <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                            <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                            <path fill="#FF5F00"
                                d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                            </path>
                        </svg>
                    </li>
                    <li class="HorizontalList__Item">
                        <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img"
                            aria-labelledby="pi-paypal">
                            <title id="pi-paypal">PayPal</title>
                            <path opacity=".07"
                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                            </path>
                            <path fill="#fff"
                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                            </path>
                            <path fill="#003087"
                                d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
                            </path>
                            <path fill="#3086C8"
                                d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
                            </path>
                            <path fill="#012169"
                                d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
                            </path>
                        </svg>
                    </li>
                    <li class="HorizontalList__Item">
                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24"
                            aria-labelledby="pi-shopify_pay">
                            <title id="pi-shopify_pay">Shop Pay</title>
                            <path opacity=".07"
                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                fill="#000"></path>
                            <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z"
                                fill="#5A31F4">
                            </path>
                            <path
                                d="M21.382 9.713c0 1.668-1.177 2.858-2.821 2.858h-1.549a.133.133 0 00-.12.08.127.127 0 00-.01.049v2.192a.129.129 0 01-.13.129h-1.084a.13.13 0 01-.13-.13V6.986a.127.127 0 01.08-.12.129.129 0 01.05-.01h2.9c1.637 0 2.814 1.19 2.814 2.858v-.001zm-1.352 0c0-.958-.658-1.658-1.55-1.658h-1.468a.13.13 0 00-.13.13v3.05a.127.127 0 00.038.092.129.129 0 00.092.038h1.468c.892.005 1.55-.695 1.55-1.652zm1.674 3.791a1.527 1.527 0 01.647-1.317c.423-.316 1.084-.48 2.055-.514l1.033-.036v-.303c0-.607-.41-.863-1.068-.863-.658 0-1.075.231-1.17.61a.127.127 0 01-.125.09h-1.022a.13.13 0 01-.126-.092.125.125 0 01-.004-.055c.152-.898.904-1.58 2.494-1.58 1.692 0 2.303.783 2.303 2.276v3.172a.13.13 0 01-.132.129h-1.03a.13.13 0 01-.13-.13v-.236a.096.096 0 00-.061-.091.1.1 0 00-.107.022c-.31.334-.808.575-1.607.575-1.175 0-1.95-.607-1.95-1.657zm3.735-.687v-.246l-1.339.07c-.705.036-1.115.326-1.115.816 0 .444.376.69 1.034.69.893 0 1.42-.48 1.42-1.33zm2.316 4.6v-.919a.13.13 0 01.049-.1.132.132 0 01.108-.027c.158.029.318.044.479.044a1.229 1.229 0 001.245-.876l.067-.211a.133.133 0 000-.088l-2.145-5.471a.13.13 0 01.06-.165.13.13 0 01.062-.015h1.04a.132.132 0 01.123.085l1.456 3.859a.131.131 0 00.125.088.133.133 0 00.125-.088l1.265-3.848a.13.13 0 01.126-.09h1.076a.134.134 0 01.132.116.134.134 0 01-.008.063l-2.295 6.076c-.528 1.413-1.433 1.773-2.43 1.773a1.959 1.959 0 01-.561-.066.132.132 0 01-.1-.14h.001zM8.57 6.4a5.363 5.363 0 00-3.683 1.427.231.231 0 00-.029.31l.618.839a.236.236 0 00.362.028 3.823 3.823 0 012.738-1.11c2.12 0 3.227 1.584 3.227 3.15 0 1.7-1.163 2.898-2.835 2.921-1.292 0-2.266-.85-2.266-1.974a1.908 1.908 0 01.713-1.48.231.231 0 00.033-.324l-.65-.815a.236.236 0 00-.339-.034 3.43 3.43 0 00-.942 1.183 3.39 3.39 0 00-.337 1.47c0 1.935 1.655 3.452 3.775 3.464h.03c2.517-.032 4.337-1.884 4.337-4.415 0-2.247-1.667-4.64-4.752-4.64z"
                                fill="#fff"></path>
                        </svg>
                    </li>
                    <li class="HorizontalList__Item">
                        <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                            aria-labelledby="pi-visa">
                            <title id="pi-visa">Visa</title>
                            <path opacity=".07"
                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                            </path>
                            <path fill="#fff"
                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                            </path>
                            <path
                                d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                                fill="#142688"></path>
                        </svg>
                    </li>
            </ul>



        </div>

    </div>


@endsection


@push('script')

   

@endpush
