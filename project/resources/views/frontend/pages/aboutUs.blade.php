@extends('frontend.layouts.master')

@section('title', 'about-us')

@section('styles')
    <style type="text/css">
        .our_people {
            width: 85%;
            /* background: #D3EACD; */
            padding: 20px;
            border-radius: 10px;
            /* box-shadow: 0px 2px 5px rgb(0 0 0 / 10%); */
            display: flex;

            justify-content: space-around;
        }

        .About_us_section {
            padding: 70px;
            display: flex;
            flex-direction: column;
            gap: 100px;
            background: #D3EACD;
            align-items: center;
            text-align: center;
        }

        .our_leadership_team {
            width: 85%;
            /* background: #C0E1F2; */
            padding: 20px;
            border-radius: 10px;
            /* box-shadow: 0px 2px 5px rgb(0 0 0 / 10%); */
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-around;

        }

        .our_career {
            width: 85%;
            /* background: #AFEEEE; */
            padding: 20px;
            border-radius: 10px;
            /* box-shadow: 0px 2px 5px rgb(0 0 0 / 10%); */
            display: flex;
            justify-content: space-around;

        }

        .AU_firstpart {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .OP_text {
            width: 50%;
            margin-top: 50px;
        }

        .OP_text p {
            font-size: 28px;
            font-weight: 700;
            font-family: 'Poppins';
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .OP_text h3 {
            font-size: 35px;
            font-weight: 500;
            color: darkgreen;
        }

        .OP_text h4 {
            font-size: 19px;
            font-family: sans-serif;
            letter-spacing: 1px;
            margin-top: 25px;
            line-height: inherit;
        }

        .OP_image img {
            height: 450px;
        }

        .OLT_text {
            width: 50%;
            margin-top: 40px;
        }

        .OLT_text h4 {
            font-size: 35px;
            font-weight: 500;
            color: #1c9599;
        }

        .OLT_text p {
            font-size: 19px;
            font-family: sans-serif;
            letter-spacing: 1px;
            margin-top: 25px;
        }

        .OC_image img {
            height: 350px;
        }

        .OC_text h4 {
            font-size: 35px;
            font-weight: 500;
            color: darkslateblue;
        }

        .OC_text {
            width: 50%;
            margin-top: 40px;
        }

        .OC_text p {
            font-size: 19px;
            font-family: sans-serif;
            letter-spacing: 1px;
            margin-top: 25px;
        }

        @media only screen and (max-width: 576px) {
            .our_people {
                flex-direction: column-reverse !important;
                width: 100% !important;
            }

            .our_leadership_team {
                flex-direction: column-reverse !important;
                width: 100% !important;
            }

            .our_career {
                flex-direction: column-reverse !important;
                width: 100% !important;
            }

            .About_us_section {
                padding: 5px !important;
                gap: 20px !important;
            }

            .OP_image img {
                height: 300px !important;
            }

            .OLT_image img {
                height: 178px !important;
            }

            .OC_image img {
                height: 200px !important;
            }

            .OP_text,
            .OC_text,
            .OLT_text {
                width: 100% !important;
            }

            .OP_text {
                margin-top: 1px !important;
            }

            .OP_text p {
                font-size: 18px !important;
            }

            .OP_text h4,
            .OLT_text p,
            .OC_text p {
                font-size: 14px !important;
            }

            .OP_text h3,
            .OC_text h4,
            .OLT_text h4 {
                font-size: 28px !important;
            }
        }

    </style>
@endsection


@section('content')

    <div class="About_us_section">


        <div class="our_people">
            <div class="OP_text">

                <h3>Our People</h3>

                <p> "It's what's inside that counts"</p>
                <h4>
                    Our talented and dedicated workforce joined us from over 4 continents from around the world, bringing
                    their expertise and diverse experiences to deliver the best products and services for our global
                    customer base.

                    Backed by science. Using the most potent ingredients.

                    Affordable price – without quality compromiser.

                    Only what your body needs.
                    No sketchy additives. While most high-street products contain nasty bulking agents, synthetic fillers
                    and cheap ingredients with ridiculously excessive doses - our formula works for you, not against you.

                </h4>
            </div>


            <div class="OP_image">
                <img src="/img/Images_slider/ourpeople-removebg-preview.png" alt="">
            </div>







        </div>

        <div class="our_leadership_team">
            <div class="OLT_text">
                <h4>Our Leadership Team</h4>
                <p>At the helm of our business, is a stable executive team that has led the growth and success of the Briton
                    Group. Our executive leaders continue to drive innovation and build on our foundations for long-term
                    success</p>
            </div>
            <div class="OLT_image">
                <img src="/img/Images_slider//our-team.png" alt="">
            </div>
        </div>


        <div class="our_career">
            <div class="OC_text">
                <h4>Career With Us</h4>
                <p>A career with us is an opportunity to work with some of the most brilliant minds in the industry, to
                    contribute to a world class experience that people have come to know and love. You will be part of a
                    highly driven, bold workforce keen on delivering the most innovative products and services</p>
            </div>
            <div class="OC_image">
                <img src="/img/Images_slider//CAREER.png" alt="">
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script>
        const navbarBack=document.getElementById('navbar')
        navbarBack.style.background="#D3EACD"
    </script>
@endpush
