@extends('frontend.layouts.master')

@section('title', 'shop')




@section('content')

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

        </div>
    </div>

    <!-- newsletter section -->

    <!-- <x-newsletter/>


    <div class="contactUS">

        <div>
            <p>Become a BOSS Drinks Stockist</p>
        </div>

        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, omnis!</h3>
        <div class="contactUS_btn">
            <a href=""><button type="button">Register</button></a>
        </div>
    </div> -->
@endsection

@push('script')

@endpush
