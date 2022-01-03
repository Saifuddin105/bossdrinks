@extends('frontend.layouts.master')
@section('styles')

<style type="text/css">
.imglogo_brand {
     text-align: center;
 }

 .imglogo_brand img {
     height: 140px;
 }

 #navbar_brand {
     height: 140px;
 }

 a {
     text-decoration: none;
 }

 .brand_button {
     text-align: end;
     margin-top: -120px;


 }



 .brand_button button {
     background: black;
     height: 38px;
     width: 85px;
     font-size: 17px;
     font-weight: 500;
     margin-right: 20px;

 }

 .slider_brand {
     background: #7C7C7D;
     padding: 50px;
 }

 .slider_text {
     text-align: center;
 }

 .slider_text h4 {
     font-size: 18px;
     font-family: 'Oswald', sans-serif;
     color: white;
     font-weight: 400;
     letter-spacing: 1px;
 }

 .slider_text p {
     font-size: 30px;
     margin-top: -15px;
     font-family: 'Oswald', sans-serif;
     color: white;
     font-weight: 400;
 }

 .join_button {
     margin-top: -10px;
 }

 .brand_button a {
     color: white;
     letter-spacing: 1px;
     font-family: initial;
     font-family: 'Oswald', sans-serif;
 }

 .join_button button {
     height: 40px;
     width: 100px;
     font-size: 17px;
     background: black;
     font-weight: 400;
 }

 .join_button a {
     color: white;
     font-family: 'Oswald', sans-serif;
     letter-spacing: 1px;
 }

 .svg_image img {
     height: 70px;
     margin-top: 35px;
 }

 .heading_content h4 {
     margin-top: 1px;
     font-size: 25px;
     font-family: 'Oswald';
     letter-spacing: 2px;
     font-weight: 700;
 }

 .text_content {
     margin-top: -15px;
 }

 .text_content p {
     font-family: 'Oswald';
     font-size: 15px;

     font-weight: 600;
     letter-spacing: 1px;
 }

 .three_boxes {
     display: flex;
     flex-direction: row;
     justify-content: center;
     margin-top: 90px;
 }

 .btn_content a {
     color: cornflowerblue;
     font-family: 'Oswald';
     font-weight: 600;
     letter-spacing: 1px;
     font-size: 18px;
     cursor: pointer;
 }

 .BOX_content {
     border: 1px solid lightgray;
     height: 350px;
     width: 350px;
     text-align: center;
     padding-left: 20px;
     padding-right: 20px;
 }

 .Join_Now {
     text-align: center;
 }

 .Join_Now button {

     margin-top: 50px;
     text-align: center;
     margin-bottom: 50px;
     height: 40px;
     width: 100px;
     font-size: 17px;
     background: black;
     font-weight: 400;
     cursor: pointer;
 }

 .Join_Now a {
     color: white;
     font-family: 'Oswald', sans-serif;
     letter-spacing: 1px;

 }

</style>

@endsection

@section('title', 'brand')


@section('carousel')
@include('frontend.layouts.partials.carousel')

@endsection('carousel')
@section('content')




@endsection

@push('script')

@endpush
