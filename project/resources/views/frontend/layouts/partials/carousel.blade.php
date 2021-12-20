<div id="myFirstCarousel" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <!-- oreach($rorders as $data) -->
    @foreach($sliders as $index => $slider)
    <div class="carousel-item @if($index==0) {{'active'}} @endif">
      <div class="slide-{{$index+1}}">
        <div class="row FirstCarousel">
          <div class="text-1-div text-center col-lg-7 col-12 py-1">
            <h2 class="text-1 font-weight-bold">
              {{$slider->details_text}}
            </h2>
            <!-- <h4 class="text-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ad.</h4> -->
            <a href="shop.html"><button id="btn-1" type="button" class="btn btn-light font-weight-bold ">SHOP
                NOW</button></a>

          </div>

          <div class="imgDiv col-lg-5 col-12 mt-3 text-right">
            <img class="img1" src="{{asset('assets/images/sliders/'.$slider->photo)}}" alt="something">
          </div>
        </div>

      </div>
    </div>
    @endforeach

    <ol class="carousel-indicators">
      @foreach($sliders as $index => $slider)
      <li data-target="#myFirstCarousel" data-slide-to="{{$index}}" class="@if($index==0) {{'active'}} @endif"></li>
      @endforeach
    </ol>

    <a href="#myFirstCarousel" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" area-hidden="true"></span>
    </a>
    <a href="#myFirstCarousel" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon" area-hidden="true"></span>
    </a>
  </div>
</div>