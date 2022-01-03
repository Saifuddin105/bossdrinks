@extends('frontend.layouts.master')

@section('title', 'checkout')




@section('content')

    <div class="checkoutMAIN_complete">
        <div class="checkoutMain">



            <div class="shipping">
                <p class="shipping_p">SHIPPING ADDRESS</p>

                <form action="{{route('front.store.shipping.address')}}" method="POST" class="shipping_form">
                    @csrf
                    <input type="text" name="fname" placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last Name" required>
                    <input type="text" name="company" placeholder="Company (Optional)">
                    <input type="text" name="address1" placeholder="Address Line 1" required>
                    <input type="text" name="address2" placeholder="Address Line 2" required>
                    <input type="text" name="city" placeholder="City" required>
                    <input type="text" name="post_code" placeholder="Post Code" required>
                    <input type="number" name="phone" placeholder="Phone" required>

                    <input type="submit" class="adress_submit" value="Continue">

                </form>


            </div>






        </div>
        <div class="shopping_details">
            <div class="shopping-details_title">
                Order Summery
            </div>
            <div class="order-items" id="order-items">

            </div>

            {{-- <div class="coupon">
                <h4>Have a rewards or discount code ?</h4>
                <div class="enter_here">
                    <span>Enter Here</span>
                    <input type="text">
                    <input type="submit" class="OK_BUTTON" value="OK">
                </div>
            </div> --}}

            <div class="subtotal">
                <div class="subtotal_calculation">
                    <h4>Subtotal</h4>
                    <span id="sub-total">0</span>
                </div>
                <div class="subtotal_calculation">
                    <h4>Shipping Fee</h4>
                    <span>0</span>
                </div>
                <div class="subtotal_calculation">
                    <h4>Taxes</h4>
                    <span>0</span>
                </div>
                <hr>
                <div class="subtotal_calculation">
                    <h4>Total</h4>
                    <span id="total">0</span>
                </div>
            </div>

            {{-- <div class="Payment_due">
                <h2>Payment Due</h2>
                <div class="GBP">GBP</div>
                {{-- <span id="payment-due"></span> --}}
            {{-- </div> --}}


        </div>

    </div>


@endsection

@push('script')

    <script>
        window.onload = () => {
            const oldData = JSON.parse(localStorage.getItem('cartDetails'))
            const total = document.getElementById('total')
            const subTotal = document.getElementById('sub-total')
            // const paymentDue = document.getElementById('payment-due')
            const orderItems = document.getElementById('order-items');
            if (oldData?.productDetails?.length > 0) {
                for (let i = 0; i < oldData.productDetails.length; i++) {
                    let addCartItem = ""
                    addCartItem += "<div class='shopping_details_summery' id='shopping_details_summery'>";
                    addCartItem +=
                        "<img src='/img/Energy Boss - IT (13-10-2021) - Blue BG.png' alt='' style='height: 100px;''>";
                    addCartItem += "<div class='shopping_details_type' id='shopping_details_type'>";
                    addCartItem += "<span>" + oldData.productDetails[i].title + "</span>";
                    addCartItem += "<p>" + oldData.productDetails[i].deliveryTitle + "</p>";
                    addCartItem += " </div>";
                    addCartItem += "<div class='shopping_details_price'>" + oldData.productDetails[i].totalAmount.toFixed() +
                        "</div>";
                    addCartItem += "</div>";
                    orderItems.insertAdjacentHTML("beforeend", addCartItem);
                }

                subTotal.innerHTML = oldData.subTotal.toFixed(2);
                total.innerHTML = oldData.subTotal.toFixed(2);
                // paymentDue.innerHTML = oldData.subTotal.toFixed(2);
            }

        }
    </script>

@endpush
