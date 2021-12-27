@extends('frontend.layouts.master')

@section('title', 'energy-drinks')




@section('content')

  <div class="prdct_details_heading">
            <h4>Energy BOSS Original</h4>
        </div>

        <div class="energydrinks_display">

            <div class="energydrink1">
                <div class="productdisplay_imgbox" style="background: #20B2AA;;">
                    <a href="firstproduct.html">
                        <img id="can_image" src="/Size_3  193x500px/Energy-Boss---IT-(13-10-2021)---Blue-BG.png" alt="">
                    </a>
                </div>
                <div class="productidsplay_contentbox">
                    <h4>Energy BOSS Drink Blue</h4>
                    <span class="price_productDisplay">&#163;40.<small>99</small></span>
                    <a href="firstproduct.html" class="view_details">Veiw Details</a>

                </div>

            </div>
            <div class="energydrink1">
                <div class="productdisplay_imgbox" style="background: #F6E3BA;">
                    <a href="secondproduct.html">
                        <img id="can_image" src="/Size_3  193x500px/Energy-Boss---IT-(19-10-2021)---RED-BG.png" alt="">
                    </a>
                </div>
                <div class="productidsplay_contentbox">
                    <h4>Energy BOSS Drink Red</h4>
                    <span class="price_productDisplay">&#163;40.<small>99</small></span>
                    <a href="secondproduct.html" class="view_details">Veiw Details</a>

                </div>

            </div>
            <div class="energydrink1">
                <div class="productdisplay_imgbox" style="background: paleturquoise;">
                    <a href="thirdproduct.html">
                        <img id="can_image" src="/Size_3  193x500px/Energy-Boss-Silver-Can---IT-(13-10-2021).png"
                            alt="">
                    </a>
                </div>
                <div class="productidsplay_contentbox">
                    <h4>Energy BOSS Drink Silver</h4>
                    <span class="price_productDisplay">&#163;40.<small>99</small></span>
                    <a href="thirdproduct.html" class="view_details">Veiw Details</a>

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
