<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/front/resources/css/ambasador-style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Ambassedor</title>
</head>

<body>

    <nav id="navbar_brand">
        <div class="imglogo_brand">
            <img src="{{asset('assets/front/resources/img/Briton Logo - 400x240px.png')}}" alt="comthing">
        </div>
        <div class="brand_button">
            <button><a href="{{url('/')}}">Home</a></button>
        </div>
    </nav>

    <div class="slider_brand">
        <div class="slider_text">
            <h4>Profit From our experiences</h4>
            <p>Earn up to 10% commission for every successful referral</p>
            <div class="join_button">
                <button><a href="{{route('join-ambassedor')}}">Join Now</a></button>

            </div>
        </div>


    </div>


    <div class="three_boxes">
        <div class="BOX_content">
            <div class="svg_image">
                <img src="{{asset('assets/front/resources/img/9yZrDjSCaxrj.svg')}}" alt="">
            </div>
            <div class="heading_content">
                <h4>Join</h4>
            </div>
            <div class="text_content">
                <p>It's free and easy to join.</p>
                <p>Get up and running today.</p>
            </div>
            <div class="btn_content">
                <a href="{{route('join-ambassedor')}}">Join Now</a>
            </div>

        </div>
        <div class="BOX_content">
            <div class="svg_image">
                <img src="{{asset('assets/front/resources/img/share.svg')}}" alt="">
            </div>
            <div class="heading_content">
                <h4>Promote</h4>
            </div>
            <div class="text_content">
                <p>Choose from our products to promote to your customers.</p>
                <p>Whether you are a large marketplace, content site, social media influencer or blogger, we have simple
                    linking tools to
                    meet your promotion needs and help you monetize</p>
            </div>
            <div class="btn_content">
                <a href="">Linking Tools</a>
            </div>

        </div>
        <div class="BOX_content">
            <div class="svg_image">
                <img src="{{asset('assets/front/resources/img/win.svg')}}" alt="">
            </div>
            <div class="heading_content">
                <h4>Win</h4>
            </div>
            <div class="text_content">
                <p>Get up to 10% in commissions on successful referrals. Earn commissions from all qualifying purchases,
                    not just the
                    products you promoted. Plus, our competitive conversion rates help you maximize your earnings.</p>

            </div>
            <div class="btn_content">
                <a href="">Product Commission</a>
            </div>

        </div>
    </div>

    <div class="Join_Now">
        <button><a href="{{route('join-ambassedor')}}">Join Now</a></button>
    </div>

</body>

</html>