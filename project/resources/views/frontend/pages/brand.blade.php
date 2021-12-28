@extends('frontend.layouts.master')
@section('styles')

<style type="text/css">
  .brand_amb {
    text-align: center;
    background: skyblue;
    padding: 40px
  }
  .brand_amb p {
    margin-bottom: 30px;
    font-size: 30px;
    font-weight:600;
  }
  .brand_amb h3 {
    margin-bottom: 50px;
    
  }
  .brand_btn {
   text-align: center;
   margin-bottom: 30px;
  }
  .brand_btn button {
     height: 50px;
    width:160px;
    font-size:20px;
    border-radius: 10px;
    background:black;
    color:white;
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
