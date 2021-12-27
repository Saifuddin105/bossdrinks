@extends('frontend.layouts.master')
@section('styles')

<style type="text/css">
  .brand_amb {
    text-align: center;
    background: skyblue;
    padding: 40px
  }
  .brand_amb p {
    margin-bottom: 30px;
    font-size: 30px;
    font-weight:600;
  }
  .brand_amb h3 {
    margin-bottom: 50px;
    
  }
  .brand_btn {
   text-align: center;
   margin-bottom: 30px;
  }
  .brand_btn button {
     height: 50px;
    width:160px;
    font-size:20px;
    border-radius: 10px;
    background:black;
    color:white;
  }

</style>

@endsection

@section('title', 'Home Page')


@section('carousel')
@include('frontend.layouts.partials.carousel')

@endsection('carousel')
@section('content')


<div id="shopnowDiv" class="container py-5 text-center">
  <div class="shopnowbox">
    <div class="shopnowtext">
      <p style="font-size: 21px;">Live Like A BOSS</p>
      <p style="font-size: 24px;">Think Like A BOSS</p>
      <p style="font-size: 27px;">Drink Like A BOSS</p>
    </div>
    <div class="row" style="margin-top: 35px;">
      <div class="col-4 imgshow_firstcollum">
        <img src="/img/115Energy Boss - IT (13-10-2021) - Blue BG.png" alt="">
        <img src="/img/115Energy Boss - IT (19-10-2021) - RED BG.png" alt="">
        <img src="/img/115Energy Boss Silver Can - IT (13-10-2021).png" alt="">
        <!-- <img class="box-pic" src="boxpic2.png" alt="something"> -->
      </div>

      <div class="col-lg-4">
        <a href="shop.html"><button id="btn-shopnow" type="button" class="btn btn-light font-weight-bold">SHOP
            NOW</button></a>
      </div>
      <div class="col-4 imgshow_secondcollum">
        <img src="/img/115Energy Boss Sports - DE (BCAA Lemon).png" alt="">
        <img src="img/115Energy Boss Sports - IT (BCAA Apple).png" alt="">
        <img src="/img/115Energy Boss Sports - IT (BCAA Orange).png" alt="">
        <!-- <img class="box-pic" src="boxpic2.png" alt="something"> -->
      </div>

    </div>


  </div>
</div>

<div class="container py-5 ICONS">
  <div class="icons">

    <div class="icon_1">
      <img src="/img/icon2.png" alt="something" class="icon_class">
      <br>
      <h4 class="h4text">Sports Drink</h4>
    </div>

    <div class="icon_2">
      <img src="/img/Icon-05.png" alt="something" class="icon_class">
      <br>
      <h4 class="h4text">Gluten Free</h4>
    </div>


    <div class="icon_3">
      <img src="/img/Icon-06.png" alt="something" class="icon_class">
      <br>
      <h4 class="h4text">Natural & Cocktail</h4>
    </div>
    <div class="icon_4">
      <img src="/img/Icon-08.png" alt="something" class="icon_class">
      <br>
      <h4 class="h4text">Vegan Friendly</h4>
    </div>


    <div class="icon_5">
      <img src="/img/Icon-09.png" alt="something" class="icon_class">
      <br>
      <h4 class="h4text">Vitamin B</h4>
    </div>


  </div>

</div>
<div class="container py-5 icons_mobile">
  <div class="icons_mobile">
    <div class="first_2_icons">
      <div class="icon_1">
        <img src="/img/icon2.png" alt="something" class="icon_class">
        <br>
        <h4 class="h4text">Sports Drink</h4>
      </div>
      <div class="icon_2">
        <img src="/img/Icon-05.png" alt="something" class="icon_class">
        <br>
        <h4 class="h4text">Gluten Free</h4>
      </div>
    </div>
    <div class="last_2_icons">
      <div class="icon_3">
        <img src="/img/Icon-06.png" alt="something" class="icon_class">
        <br>
        <h4 class="h4text">Natural & Cocktail</h4>
      </div>
      <div class="icon_4">
        <img src="/img/Icon-08.png" alt="something" class="icon_class">
        <br>
        <h4 class="h4text">Vegan Friendly</h4>
      </div>
    </div>
    <div class="last_icon">
      <div class="icon_5">
        <img src="/img/Icon-09.png" alt="something" class="icon_class">
        <br>
        <h4 class="h4text">Vitamin B</h4>
      </div>
    </div>

  </div>

</div>
<!-- ******************************************************************************************* -->
<div class="container product_variety">
  <!-- <div>
    <a href="energydrinks.html">ENERGY</a>
  </div>
  <div><a href="sport.html">SPORT </a></div>
  <div><a href="appetiser.html">APPETISER</a></div>
  <div><a href="bcca.html">SPORT-BCCA </a></div> -->
  @foreach($categories as $category)
  <div>
    <a href="{{route('front.category', $category->id)}}">{{$category->name}}</a>
  </div>
  @endforeach

</div>
<!-- <img src="/img/wave down.svg" alt="something" style="margin-top:-190px"> -->
<!-- <div class="MAINDIV_productdetails"></div> -->
<div class="productdetails productdetailshome row">

  <!-- first product details -->
  <div class="col-5 firstProductdetaisHOME" style="background: #7FFFD4;">
    <div class="img_price_class">


      <div class="imgshowclass">

        <img src="/Size_2  135x350px/Energy-Boss---IT-(13-10-2021)---Blue-BG.png" alt="something" style="filter: drop-shadow(3px 4px 6px black);">
      </div>
      <div class="price_class">
        <p>&euro;30.36</p>
      </div>

    </div>

    <div class="drinktitleclass">
      <h3 id="drinktitle">Energy BOSS Drink</h3>
      <!-- <p>&euro;30.36</p> -->
    </div>



    <!-- accordion1 starts -->

    <div class="component-accordion accordion_home">
      <div class="panel-group" id="accordion" role="tablist">
        <div class="panel">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">INGREDIENTS</a>
            </h4>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;" data-parent="#accordion">
              <div class="panel-body">
                Carbonated Water, Sugar, Glucose-Fructose Syrup, Acid (Citric Acid), Taurine
                (0.4%),
                Flavourings, Caffeine (0.03%),
                Sweeteners (Aspartame, Acesulfame K), Colours (Ammonia Caramel, Riboflavin),
                Acidity
                Regulator (Sodium Citrate),
                Preservative (Sodium Benzoate), Vitamins (Niacin, Pantothenic Acid, Vitamin B6,
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
    <div class="component-accordion accordion_home " style="margin-top: 25px;">
      <div class=" panel-group" id="accordion" role="tablist">
        <div class="panel">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo" class="collapsed">NUTRATIONAL INFORMATION</a>
            </h4>
          </div>
          <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;" data-parent="#accordion">
            <div class="panel-body">
              <ul class="nutritional_INFO ">
                <li class="row"><span class="left col-7">Serving Size:</span><span class="right col-5">Per 250ml
                    Can</span>
                </li>
                <li class="row"><span class="left col-7">Energy:</span><span class="right col-5">243kJ/58kcal</span>
                </li>
                <li class="row"><span class="left col-7">Fat:</span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Of which saturates: </span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Carbohydrate: </span><span class="right col-5">12.3g</span>
                </li>
                <li class="row"><span class="left col-7">Protein: </span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Salt: </span><span class="right col-5">0.05g</span>
                </li>
                <br>

                <li><span class="left" style="font-size: 20px;">Vitamin</span></li>
                <li class="row"><span class="left col-7">Niacin: </span><span class="right col-5">16mg
                    (100%*)</span>
                </li>
                <li class="row"><span class="left col-7">Vitamin B6: </span><span class="right col-5">1.4mg (100%*)</span>
                </li>
                <li class="row"><span class="left col-7">Vitamin B12: </span><span class="right col-5">1.25µg (50%*)</span>
                </li>
                <li class="row"><span class="left col-7">Pantothenic Acid: </span><span class="right col-5">5mg (83%*)</span>
                </li>


              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- accordion 2 ends -->


    <div>
      <h3 id="accordion_home_text" style="font-size: 16px;
    font-weight: 400;">No contract &#8226 Free UK delivery &#8226 Cancel anytime<h3>
    </div>
    <div id="Button_forproductdetails">
      <a href="shop.html"><button id="btn-shopnow" type="button" class="btn btn-light font-weight-bold">SHOP
          NOW</button></a>
    </div>



    <!-- social media icon -->
    <div class="socialmedia socialmedia_homepage">
      <div>
        <h4 class="socialmedia_text">Share BOSS Drinks on social media : </h4>
      </div>

      <div>
        <ul class="ULsocialmedia" style="margin-right: 25px;">
          <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>

          <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>

    </div>
    <!-- social media icon ends-->



  </div>
  <!-- **************************************************************************** -->

  <!-- blank div col-2 -->
  <!-- <div class="col-2">

        </div> -->
  <!-- second product details starts -->


  <div class="col-5 firstProductdetaisHOME" style="background: #B9B8CC;">
    <div class="img_price_class">
      <div class="imgshowclass">

        <img src="/Size_2  135x350px/Energy-Boss-Sports---IT-(BCAA-Apple).png" alt="something" style="filter: drop-shadow(3px 4px 6px black);">
      </div>

      <div class="price_class">
        <p>&euro;30.36</p>
      </div>


    </div>

    <div class="drinktitleclass">
      <h3 id="drinktitle">Energy BOSS Appetiser</h3>
      <!-- <p>&euro;30.36</p> -->
    </div>



    <!-- accordion1 starts -->

    <div class="component-accordion accordion_home">
      <div class="panel-group" id="accordion" role="tablist">
        <div class="panel">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" href="#collapseTWO" aria-expanded="false" aria-controls="collapseTWO" class="collapsed">INGREDIENTS</a>
            </h4>
            <div id="collapseTWO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;" data-parent="#accordion">
              <div class="panel-body">
                Carbonated Water, Sugar, Glucose-Fructose Syrup, Acid (Citric Acid), Taurine
                (0.4%),
                Flavourings, Caffeine (0.03%),
                Sweeteners (Aspartame, Acesulfame K), Colours (Ammonia Caramel, Riboflavin),
                Acidity
                Regulator (Sodium Citrate),
                Preservative (Sodium Benzoate), Vitamins (Niacin, Pantothenic Acid, Vitamin B6,
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
    <div class="component-accordion accordion_home" style="margin-top: 25px;">
      <div class="panel-group" id="accordion" role="tablist">
        <div class="panel">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" href="#collapsetwo2" aria-expanded="false" aria-controls="collapsetwo2" class="collapsed">NUTRATIONAL INFORMATION</a>
            </h4>
          </div>
          <div id="collapsetwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;" data-parent="#accordion">
            <div class="panel-body">
              <ul class="nutritional_INFO ">
                <li class="row"><span class="left col-7">Serving Size:</span><span class="right col-5">Per
                    250ml
                    Can</span>
                </li>
                <li class="row"><span class="left col-7">Energy:</span><span class="right col-5">243kJ/58kcal</span>
                </li>
                <li class="row"><span class="left col-7">Fat:</span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Of which saturates: </span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Carbohydrate: </span><span class="right col-5">12.3g</span>
                </li>
                <li class="row"><span class="left col-7">Protein: </span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Salt: </span><span class="right col-5">0.05g</span>
                </li>
                <br>

                <li><span class="left" style="font-size: 20px;">Vitamin</span></li>
                <li class="row"><span class="left col-7">Niacin: </span><span class="right col-5">16mg
                    (100%*)</span>
                </li>
                <li class="row"><span class="left col-7">Vitamin B6: </span><span class="right col-5">1.4mg
                    (100%*)</span>
                </li>
                <li class="row"><span class="left col-7">Vitamin B12: </span><span class="right col-5">1.25µg (50%*)</span>
                </li>
                <li class="row"><span class="left col-7">Pantothenic Acid: </span><span class="right col-5">5mg (83%*)</span>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- accordion 2 ends -->


    <div>
      <h3 id="accordion_home_text" style="font-size: 16px;
    font-weight: 400;">No contract &#8226 Free UK delivery &#8226 Cancel anytime<h3>
    </div>
    <div id="Button_forproductdetails">
      <a href="shop.html"><button id="btn-shopnow" type="button" class="btn btn-light font-weight-bold">SHOP
          NOW</button></a>
    </div>



    <!-- social media icon -->
    <div class="socialmedia socialmedia_homepage">
      <div>
        <h4 class="socialmedia_text">Share BOSS Drinks on social
          media : </h4>
      </div>

      <div>
        <ul class="ULsocialmedia" style="margin-right: 25px;">
          <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>

          <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        </ul>

      </div>

    </div>
    <!-- social media icon ends-->


    <!-- second product details ends -->
    <!-- ************************************************************************888888 -->


  </div>
</div>
<div class="productdetails productdetailshome row">

  <!-- first product details -->
  <div class="col-5 firstProductdetaisHOME" style="background: #F5ACBA;;">
    <div class="img_price_class">

      <div class="imgshowclass">

        <img src="/Size_2  135x350px/Energy-Boss-Sports---DE-(BCAA-Lemon).png" alt="something" style="filter: drop-shadow(3px 4px 6px black);">
      </div>
      <div class="price_class">
        <p>&euro;30.36</p>
      </div>


    </div>

    <div class="drinktitleclass">
      <h3 id="drinktitle">Energy BOSS Appetiser</h3>
      <!-- <p>&euro;30.36</p> -->
    </div>



    <!-- accordion1 starts -->

    <div class="component-accordion accordion_home">
      <div class="panel-group" id="accordion" role="tablist">
        <div class="panel">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree" class="collapsed">INGREDIENTS</a>
            </h4>
            <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;" data-parent="#accordion">
              <div class="panel-body">
                Carbonated Water, Sugar, Glucose-Fructose Syrup, Acid (Citric Acid), Taurine
                (0.4%),
                Flavourings, Caffeine (0.03%),
                Sweeteners (Aspartame, Acesulfame K), Colours (Ammonia Caramel, Riboflavin),
                Acidity
                Regulator (Sodium Citrate),
                Preservative (Sodium Benzoate), Vitamins (Niacin, Pantothenic Acid, Vitamin B6,
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
    <div class="component-accordion accordion_home" style="margin-top: 25px;">
      <div class="panel-group" id="accordion" role="tablist">
        <div class="panel">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" href="#collapsethree2" aria-expanded="false" aria-controls="collapsethree2" class="collapsed">NUTRATIONAL INFORMATION</a>
            </h4>
          </div>
          <div id="collapsethree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;" data-parent="#accordion">
            <div class="panel-body">
              <ul class="nutritional_INFO ">
                <li class="row"><span class="left col-7">Serving Size:</span><span class="right col-5">Per 250ml
                    Can</span>
                </li>
                <li class="row"><span class="left col-7">Energy:</span><span class="right col-5">243kJ/58kcal</span>
                </li>
                <li class="row"><span class="left col-7">Fat:</span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Of which saturates: </span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Carbohydrate: </span><span class="right col-5">12.3g</span>
                </li>
                <li class="row"><span class="left col-7">Protein: </span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Salt: </span><span class="right col-5">0.05g</span>
                </li>
                <br>

                <li><span class="left" style="font-size: 20px;">Vitamin</span></li>
                <li class="row"><span class="left col-7">Niacin: </span><span class="right col-5">16mg
                    (100%*)</span>
                </li>
                <li class="row"><span class="left col-7">Vitamin B6: </span><span class="right col-5">1.4mg (100%*)</span>
                </li>
                <li class="row"><span class="left col-7">Vitamin B12: </span><span class="right col-5">1.25µg (50%*)</span>
                </li>
                <li class="row"><span class="left col-7">Pantothenic Acid: </span><span class="right col-5">5mg (83%*)</span>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- accordion 2 ends -->


    <div>
      <h3 id="accordion_home_text" style="font-size: 16px;
        font-weight: 400;">No contract &#8226 Free UK delivery &#8226 Cancel anytime<h3>
    </div>
    <div id="Button_forproductdetails">
      <a href="shop.html"><button id="btn-shopnow" type="button" class="btn btn-light font-weight-bold">SHOP
          NOW</button></a>
    </div>



    <!-- social media icon -->
    <div class="socialmedia socialmedia_homepage">
      <div>
        <h4 class="socialmedia_text">Share BOSS Drinks on social
          media : </h4>
      </div>

      <div>
        <ul class="ULsocialmedia" style="margin-right: 25px;">
          <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>

          <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>

    </div>
    <!-- social media icon ends-->



  </div>
  <!-- **************************************************************************** -->

  <!-- blank div col-2 -->
  <!-- <div class="col-2">

            </div> -->
  <!-- second product details starts -->


  <div class="col-5 firstProductdetaisHOME" style="background: #ff000033; ">
    <div class="img_price_class">

      <div class="imgshowclass">

        <img src="/Size_2  135x350px/Energy-Boss---IT-(19-10-2021)---RED-BG.png" alt="something" style="filter: drop-shadow(3px 4px 6px black);">
      </div>
      <div class="price_class">
        <p>&euro;30.36</p>
      </div>


    </div>
    <div class="drinktitleclass">
      <h3 id="drinktitle">Energy BOSS Drink</h3>
      <!-- <p>&euro;30.36</p> -->
    </div>


    <!-- accordion1 starts -->

    <div class="component-accordion accordion_home">
      <div class="panel-group" id="accordion" role="tablist">
        <div class="panel">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour" class="collapsed">INGREDIENTS</a>
            </h4>
            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;" data-parent="#accordion">
              <div class="panel-body">
                Carbonated Water, Sugar, Glucose-Fructose Syrup, Acid (Citric Acid), Taurine
                (0.4%),
                Flavourings, Caffeine (0.03%),
                Sweeteners (Aspartame, Acesulfame K), Colours (Ammonia Caramel, Riboflavin),
                Acidity
                Regulator (Sodium Citrate),
                Preservative (Sodium Benzoate), Vitamins (Niacin, Pantothenic Acid, Vitamin B6,
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
    <div class="component-accordion accordion_home" style="margin-top: 25px;">
      <div class="panel-group" id="accordion" role="tablist">
        <div class="panel">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" href="#collapsefour2" aria-expanded="false" aria-controls="collapsefour2" class="collapsed">NUTRATIONAL INFORMATION</a>
            </h4>
          </div>
          <div id="collapsefour2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;" data-parent="#accordion">
            <div class="panel-body">
              <ul class="nutritional_INFO ">
                <li class="row"><span class="left col-7">Serving Size:</span><span class="right col-5">Per
                    250ml
                    Can</span>
                </li>
                <li class="row"><span class="left col-7">Energy:</span><span class="right col-5">243kJ/58kcal</span>
                </li>
                <li class="row"><span class="left col-7">Fat:</span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Of which saturates: </span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Carbohydrate: </span><span class="right col-5">12.3g</span>
                </li>
                <li class="row"><span class="left col-7">Protein: </span><span class="right col-5">0.0g</span>
                </li>
                <li class="row"><span class="left col-7">Salt: </span><span class="right col-5">0.05g</span>
                </li>
                <br>

                <li><span class="left" style="font-size: 20px;">Vitamin</span></li>
                <li class="row"><span class="left col-7">Niacin: </span><span class="right col-5">16mg
                    (100%*)</span>
                </li>
                <li class="row"><span class="left col-7">Vitamin B6: </span><span class="right col-5">1.4mg
                    (100%*)</span>
                </li>
                <li class="row"><span class="left col-7">Vitamin B12: </span><span class="right col-5">1.25µg (50%*)</span>
                </li>
                <li class="row"><span class="left col-7">Pantothenic Acid: </span><span class="right col-5">5mg (83%*)</span>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- accordion 2 ends -->


    <div>
      <h3 id="accordion_home_text" style="font-size: 16px;
        font-weight: 400;">No contract &#8226 Free UK delivery &#8226 Cancel anytime<h3>
    </div>
    <div id="Button_forproductdetails">
      <a href="shop.html"><button id="btn-shopnow" type="button" class="btn btn-light font-weight-bold">SHOP
          NOW</button></a>
    </div>


    <!-- social media icon -->
    <div class="socialmedia socialmedia_homepage">
      <div>
        <h4 class="socialmedia_text">Share BOSS Drinks on social
          media : </h4>
      </div>

      <div>
        <ul class="ULsocialmedia" style="margin-right: 25px;">
          <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>

          <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>

    </div>
    <!-- social media icon ends-->


    <!-- second product details ends -->
    <!-- ************************************************************************888888 -->


  </div>
</div>
<!-- productsow details home ends -->

<!-- product landing  -->

<div class="MainProductDisplaySection">

  <div class="productdisplaysection">
    @foreach ($products1 as $product)
    <div class="card card2">
      <div class="productdisplayimgBOX">
        <a href="{{route('front.product', $product->slug)}}">
          <img src="/img/PDSEnergy Boss Original Blue.png" alt="comething">
        </a>
      </div>
      <div class="product_display_contentbox">
        <h4>{{$product->name}}</h4>
        <h4 class="price">&#128 {{$product->price}}</h4>
        <a href="{{route('front.product', $product->slug)}}" class="buy">Veiw Details</a>
      </div>



    </div>
    @endforeach

    <!-- <div class="card card2">
      <div class="productdisplayimgBOX">
        <a href="secondproduct.html">
          <img src="/img/PDSEnergy Boss Original Red.png" alt="comething">
        </a>
      </div>
      <div class="product_display_contentbox">
        <h4>Energy BOSS Original</h4>
        <h4 class="price">&#128 40.<small>99</small></h4>
        <a href="secondproduct.html" class="buy">Veiw Details</a>
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
        <a href="thirdproduct.html" class="buy">Veiw Details</a>
      </div>



    </div> -->


  </div>
  <div class="productdisplaysection productdisplaysection2">
    @foreach ($products2 as $product)
    <div class="card card2">
      <div class="productdisplayimgBOX">
        <a href="{{route('front.product', $product->slug)}}">
          <img src="/img/PDSEnergy Boss Sports - IT (BCAA Apple).png" alt="comething">
        </a>
      </div>
      <div class="product_display_contentbox">
        <h4>{{$product->name}}</h4>
        <h4 class="price">&#128 {{$product->price}}</h4>
        <a href="{{route('front.product', $product->slug)}}" class="buy">Veiw Details</a>
      </div>



    </div>
    @endforeach
    <!--
    <div class="card card2">
      <div class="productdisplayimgBOX">
        <a href="fourthproduct.html">
          <img src="/img/PDSEnergy Boss Sports - IT (BCAA Apple).png" alt="comething">
        </a>
      </div>
      <div class="product_display_contentbox">
        <h4>Energy BOSS Appetiser</h4>
        <h4 class="price">&#128 40.<small>99</small></h4>
        <a href="fourthproduct.html" class="buy">Veiw Details</a>
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
        <a href="fifthproduct.html" class="buy">Veiw Details</a>
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



    </div> -->


  </div>
</div>

<!-- carousel 2 -->
<div id="carouselExampleIndicators" class="carousel slide carousel2" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="secondcarousel">
        <div class="card-hading">
          <h3>What our customers have to say!</h3>
        </div>
        <div class="card">
          <div class="sliderimage"><img class="d-block w-100 imageclass" src="/img/Icon-07.png" alt="First slide"></div>
          <div class="nameclass">
            <h2>John Doe</h2>
          </div>
          <div class="designation">
            <h3>CEO</h3>
          </div>
          <div class="textclass">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet
              consectetur.</p>
          </div>
        </div>
      </div>




    </div>
    <div class="carousel-item">
      <div class="secondcarousel">
        <div class="card-hading">
          <h3>What our customer have to say!</h3>
        </div>
        <div class="card">
          <div class="sliderimage"><img class="d-block w-100 imageclass" src="/img/Icon-07.png" alt="First slide"></div>
          <div class="nameclass">
            <h2>John Doe</h2>
          </div>
          <div class="designation">
            <h3>CEO</h3>
          </div>
          <div class="textclass">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet
              consectetur.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="secondcarousel">
        <div class="card-hading">
          <h3>What our customer have to say!</h3>
        </div>
        <div class="card">
          <div class="sliderimage"><img class="d-block w-100 imageclass" src="/img/Icon-07.png" alt="First slide"></div>
          <div class="nameclass">
            <h2>John Doe</h2>
          </div>
          <div class="designation">
            <h3>CEO</h3>
          </div>
          <div class="textclass">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet
              consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- carousel 2 ends *************************************************************-->

<!-- newsletter section -->

<x-newsletter/>

<!-- newsletter section ends *************************************************************************-->


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

<div class="brand_amb">
  <div>
    <p>Become a Boss Drink Brand Ambassedor</p>
  </div>
    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, omnis!</h3>
  <div class="brand_btn">
    <a href=""><button type="button">Register</button></a>
  </div>

  
  

</div>


@endsection

@push('script')

@endpush
