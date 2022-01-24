{{-- <div id="myFirstCarousel" class="carousel slide " data-ride="carousel">
    <div class="carousel-inner">
        <!-- oreach($rorders as $data) -->
        @foreach ($sliders as $index => $slider)
            <div class="carousel-item @if ($index == 0) {{ 'active' }} @endif">
                <div class="slide-{{ $index + 1 }}">
                    <div class="row FirstCarousel">
                        <div class="text-1-div text-center col-lg-7 col-12 py-1">
                            <h2 class="text-1 font-weight-bold">
                                {{ $slider->details_text }}
                            </h2>
                            <!-- <h4 class="text-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ad.</h4> -->
                            <a href="{{ route('front.shop') }}"><button id="btn-1" type="button"
                                    class="btn btn-light font-weight-bold ">SHOP
                                    NOW</button></a>

                        </div>

                        <div class="imgDiv col-lg-5 col-12 mt-3 text-right">
                            <img class="img1" src="{{ asset('assets/images/sliders/' . $slider->photo) }}"
                                alt="something">
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

        <ol class="carousel-indicators">
            @foreach ($sliders as $index => $slider)
                <li data-target="#myFirstCarousel" data-slide-to="{{ $index }}" class="@if ($index == 0) {{ 'active' }} @endif">
                </li>
            @endforeach
        </ol>

        <a href="#myFirstCarousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" area-hidden="true"></span>
        </a>
        <a href="#myFirstCarousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" area-hidden="true"></span>
        </a>
    </div>
</div> --}}



<style type="text/css">
    .SLIDES {
        position: relative;
        overflow: hidden;
        min-height: 100vh;
        width: 100%;


    }

    .SLIDE {
        height: 100vh;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        animation: sliding 2s ease;
        display: none;
    }

    .SLIDE.slideActive {
        display: block;
    }

    @keyframes sliding {
        from {
            opacity: 0;
            transform: scale(1.1);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }

    }

    .SlideContainer {
        width: 1140px;
        height: 100%;
        margin: auto;
        padding: 0 15px;
        position: relative;

    }

    .CONTENT {
        height: 100%;
        display: flex;
        align-items: flex-end;
        flex-direction: column;
        justify-content: center;
        color: #313131;
        margin-top: 230px;
        gap: 15px;
    }

    .CONTENT h1 {
        font-size: 3rem;
        opacity: 0;
        animation: captionAnimation 0.5s ease-in-out forwards;
        animation-delay: 0.6s;
        font-family: fantasy;
        /* color: green; */
        letter-spacing: 2px;
    }

    .CONTENT p {
        font-size: 20px;
        margin: 5px 0 30px;
        color: #222222;
        text-align: right;
        opacity: 0;
        animation: captionAnimation 0.5s ease-in-out forwards;
        animation-delay: 0.9s;
        font-weight: 500;
    }

    .CONTENT a {
        background-color: #313131;
        padding: 7px 25px;
        text-decoration: none;
        color: #FFFFFF;
        font-size: 20px;
        opacity: 0;
        animation: captionAnimation 0.5s ease-in-out forwards;
        animation-delay: 1.3s;
    }

    .CONTENT_image {
        margin-top: 80px;
    }



    @keyframes captionAnimation {
        from {
            opacity: 0;
            transform: translateY(100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }

    }



    .CONTENT_slide {
        display: flex;
        justify-content: space-between;
        flex-direction: row-reverse;
    }

    .CONTROLS {
        width: 100%;
        margin: 45vh 0;
        position: absolute;
        display: flex;
        justify-content: space-between;
        padding: 0 55px;
    }

    .PREV,
    .NEXT {
        cursor: pointer;
        background-color: #77777757;
        width: 40px;
        height: 40px;
        text-align: center;
        font-size: 20px;
        border-radius: 50%;
        padding: 5px;
        color: #fff;
        opacity: 0.5s;
        transition: 0.5s;
    }

    .indicatorContainer {
        width: 100%;
        text-align: center;
        position: absolute;
        bottom: 30px;
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .indicatorContainer>div {
        border: 3px solid #313131;
        display: inline-block;
        height: 15px;
        width: 15px;
        margin-right: 5px;
        border-radius: 50%;
    }

    .indicatorContainer>div.slideActive {
        background-color: #313131;
    }

    @media (max-width:1140px) {
        .SlideContainer {
            width: 100%;
            padding: 0 15px;
        }

        .SLIDE {
            background-position-x: 30%;
        }
    }

    @media only screen and (max-width: 576px) {
        .CONTENT_image img {
            height: 350px !important;
        }

        .CONTENT_image {
            margin-left: auto;
            margin-right: auto;
        }

        .CONTENT_slide {
            flex-direction: column-reverse !important;
            justify-content: center;
            gap: 20px !important;

        }

        .SLIDE {
            height: 95vh !important;
        }

        .CONTENT {
            margin-top: 40px !important;
            gap: 2px !important;
        }

        .CONTENT h1 {
            font-size: 23px !important;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            letter-spacing: 1px !important;
        }

        .CONTENT p {
            font-size: 14px !important;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .CONTENT a {
            font-size: 13px !important;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .PREV,
        .NEXT {
            width: 28px !important;
            height: 28px !important;
            font-size: 12px !important;
        }

        .CONTROLS {
            padding: 0 10px !important;
            margin: 30vh 0 !important;
        }

        .indicatorContainer {
            bottom: 90px !important;
        }
    }

</style>

<div class="SLIDES">
    <div class="SLIDE slideActive " style="background-color: #D3EACD;">
        <div class="SlideContainer">
            <div class="CONTENT_slide">
                <div class="CONTENT">
                    <h1 style="color: green;">Energy Boss Sports Orange</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, cum?</p>
                    <a href="{{ url('user/shop') }}">Shop Now</a>
                </div>
                <div class="CONTENT_image">
                    <img src="/img/Images_slider/_0000_Energy-Boss-Sports---IT-(BCAA-Orange).png" alt="">

                </div>


            </div>

        </div>
    </div>
    <div class="SLIDE" style="background-color: #AFEEEE;">
        <div class="SlideContainer">
            <div class="CONTENT_slide">
                <div class="CONTENT">
                    <h1 style="color: darkcyan;">Energy Boss Sports Apple</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, ducimus beatae repellat maxime
                        sint tenetur.
                    </p>
                    <a href="{{ url('user/shop') }}">Shop Now</a>
                </div>
                <div class="CONTENT_image">
                    <img src="/img/Images_slider/_0001_Energy-Boss-Sports---IT-(BCAA-Apple).png" alt="">

                </div>


            </div>
        </div>
    </div>
    <div class="SLIDE" style="background-color: #FFCCCB;">
        <div class="SlideContainer">
            <div class="CONTENT_slide">
                <div class="CONTENT">
                    <h1 style="color: crimson;">Energy Boss Original Red</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, cum?</p>
                    <a href="{{ url('user/shop') }}">Shop Now</a>
                </div>
                <div class="CONTENT_image">
                    <img src="/img/Images_slider/_0004_Energy-Boss---IT-(19-10-2021)---RED-BG.png" alt="">

                </div>


            </div>
        </div>
    </div>
    <div class="SLIDE" style="background-color: #C0E1F2;">
        <div class="SlideContainer">
            <div class="CONTENT_slide">
                <div class="CONTENT">
                    <h1 style="color: midnightblue;">Energy Boss Original Blue</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, cum?</p>
                    <a href="{{ url('user/shop') }}">Shop Now</a>
                </div>
                <div class="CONTENT_image">
                    <img src="/img/Images_slider/_0005_Energy-Boss---IT-(13-10-2021)---Blue-BG.png" alt="">

                </div>


            </div>
        </div>
    </div>


    <div class="CONTROLS">
        <div class="PREV">
            <i class="fa fa-arrow-left"></i>
        </div>
        <div class="NEXT">
            <i class="fa fa-arrow-right"></i>
        </div>
    </div>

    <div class="indicatorContainer"></div>

</div>

<script>
    const SLIDES = document.querySelectorAll(".SLIDE");
    const PREV = document.querySelector(".PREV");
    const NEXT = document.querySelector(".NEXT");

    let Index = 0;
    PREV.addEventListener("click", function() {
        prevSlide();
    });
    NEXT.addEventListener("click", function() {
        nextSlide();
    });

    function prevSlide() {
        // console.log("prev");

        if (Index == 0) {
            Index = SLIDES.length - 1;
        } else {
            Index--;
        }
        changeSlide();
    }

    function nextSlide() {
        if (Index == SLIDES.length - 1) {
            Index = 0;
        } else {
            Index++;
        }
        changeSlide();
    }

    function changeSlide() {
        SLIDES.forEach(function(item) {
            item.classList.remove("slideActive");
        });
        SLIDES[Index].classList.add("slideActive");

        let indicators = document.querySelectorAll(".indicatorContainer > div");
        indicators.forEach(function(indicator) {
            indicator.classList.remove("slideActive");
        });
        indicators[Index].classList.add("slideActive");
    }
    const indicatorContainer = document.querySelector(".indicatorContainer");

    function buildIndicator() {
        for (let i = 0; i < SLIDES.length; i++) {
            let Element = document.createElement("div");
            Element.dataset.i = i + 1;
            Element.setAttribute("onclick", "gotoSlide(this)");
            if (i == 0) {
                Element.classList.add("slideActive");
            }
            indicatorContainer.appendChild(Element);
        }
    }
    buildIndicator();

    function gotoSlide(element) {
        let
            k = element.dataset.i;
        Index = k - 1;
        changeSlide();
    }
    let Time = setInterval(nextSlide, 5000);
</script>
