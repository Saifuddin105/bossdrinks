@extends('frontend.layouts.master')

@section('title', 'bcca-drinks')




@section('content')

    <div class="prdct_details_heading">
        <h4>Boss BCCA Drink</h4>
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



        </div>


    </div>






















    <div>
        <div class="container more_info" style="margin-top: 100px;">
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
                        <p>Our Energy Boss Drink contain 30mg of caffeine per 100ml.<br>We advise that all
                            energy
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
                        <p>Yes, all our energy drinks are gluten free, so they are suitable for those with
                            gluten
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
                        <p>High caffeine content.Not recommended for children or pregnant or breast-feeding
                            women.
                            Consume
                            Moderately. Not to be consumed by under 18.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <x-newsletter/>


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
