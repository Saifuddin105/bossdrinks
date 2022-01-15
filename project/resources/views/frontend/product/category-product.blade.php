@extends('frontend.layouts.master')

@section('title', 'energy-drinks')




@section('content')

    <div class="prdct_details_heading">
        <h4>{{$cat->name}}</h4>
    </div>

    <div class="product_details_complete">



    @foreach ($products as $product)

        <div class="card card2">
            <div class="productdisplayimgBOX">
                <a href="firstproduct.html">
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


    <div>
        <div class="container more_info" style="margin-top: 100px;">
            <h2>More Information</h2>
            <div class="accordion_moreinfo">
                @foreach($faqs as $faq)
                <div class="item">
                    <div class="title_moreinfo">
                        {{$faq->title}}
                    </div>
                    <div class="icon_moreinfo">
                        +
                    </div>
                    <div class="desc">
                        <p>{{$faq->details}}</p>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
<!-- 
    <x-newsletter/>

    <div class="contactUS">

        <div>
            <p>Become a BOSS Drinks Stockist</p>
        </div>

        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, omnis!</h3>
        <div class="contactUS_btn">
            <a href="stock_register.html"><button type="button">Register</button></a>
        </div>
    </div> -->

@endsection

@push('script')

@endpush
