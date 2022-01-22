@extends('frontend.layouts.master')

@section('styles')

@endsection

@section('vendor-types', 'Profile')

@section('content')
<div class="container account_info">
        <h2>NEW ACCOUNT APPLICATION</h2>
        <div class="registers">
            <div class="UK_register">
                <a href="{{route('vendor.register.form',['type'=>'uk'])}}">
                    <div class="UK_Map">
                        <img src="/img/map-removebg-preview.png" alt="">
                    </div>
                </a>
                <div class="uk_map_text">
                    <span>UK CUSTOMER</span>
                    <p>(UK Registered Business)</p>
                </div>
            </div>
            <div class="UK_register">
                <a href="{{route('vendor.register.form',['type'=>'international'])}}">
                    <div class="UK_Map">
                        <img src="/img/worldwide-removebg-preview.png" alt="">
                    </div>
                </a>
                <div class="uk_map_text">
                    <span>INTERNATIONAL CUSTOMER</span>
                    <p>(International Registered Business)</p>
                </div>
            </div>





        </div>
        <hr style="margin-top: 50px;">


        <div class="already_register">
            <h4>Already have an account ??</h4>
            <a href="stock_login.html">Log In</a>

        </div>
    </div>

@endsection