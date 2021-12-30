@extends('frontend.layouts.master')

@section('title', 'Place order')




@section('content')

<div class="Place_order_MAIN">
    <div class="Place_Order">
        <img class="Prodct_image" src="/img/Energy Boss - 280x78px.png" alt="">

        <h4 class="billiing_address">Billing Address</h4>


        <div class="final_billing_address">

            <div class="customer_mail" style="margin-left: 20px;">
                abcd@gmail.com
            </div>
            <div class="Information_details" style="margin-left: 20px;">
                <span>customer name</span>
                <span>customer Address</span>
                <span>City</span>
                <span>COuntry</span>
                <span>01928374677</span>
            </div>

        </div>



        <div class="billing-method">
            <h4>Select Payment Method</h4>
            <div class="billing-system">
                <a href="">PayPal</a>
                <a href="">Pay with card</a>
            </div>

        </div>

        <div class="checkBOX">

            <input type="checkbox">
            <div>
                <h4>Keep me update on Energy Boss news and exclusive offers</h4>
            </div>

        </div>

        <div class="placeorder_text">
            <p>By clicking "Place my order", you confirm that your subscription will automatically renew and your
                credit card will
                automatically be charged the subscription price according to the Order Summary section of this page
                until you cancel
                your subscription. You can cancel your subscription at any time.</p>
        </div>



        <div class="Place_order_btn">
            <button>Place Order</button>
        </div>


    </div>

    <div class="shopping_details shopping_details_placeOrder">
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
                <span id="sub-total">26.5</span>
            </div>
            <div class="subtotal_calculation">
                <h4>Shipping Fee</h4>
                <span>-</span>
            </div>
            <div class="subtotal_calculation">
                <h4>Taxes</h4>
                <span>-</span>
            </div>
            <hr>
            <div class="subtotal_calculation">
                <h4>Total</h4>
                <span id="total">26.5</span>
            </div>
        </div>

        <div class="Payment_due">
            <h2>Payment Due</h2>
            <div class="GBP">GBP</div>
            <span id="payment-due">26.65</span>
        </div>


    </div>











</div>


@endsection

@push('script')

    <script>
        window.onload = () => {
            const oldData = JSON.parse(localStorage.getItem('cartDetails'))
            const total=document.getElementById('total')
            const subTotal=document.getElementById('sub-total')
            const paymentDue=document.getElementById('payment-due')
            const orderItems = document.getElementById('order-items');
            if (oldData?.productDetails?.length > 0) {
                for (let i = 0; i < oldData.productDetails.length; i++) {
                    let addCartItem = ""
                    addCartItem += "<div class='shopping_details_summery' id='shopping_details_summery'>";
                    addCartItem += "<img src='/img/Energy Boss - IT (13-10-2021) - Blue BG.png' alt='' style='height: 100px;''>";
                    addCartItem += "<div class='shopping_details_type' id='shopping_details_type'>";
                    addCartItem += "<span>"+oldData.productDetails[i].title+"</span>";
                    addCartItem += "<p>"+oldData.productDetails[i].deliveryTitle+"</p>";
                    addCartItem += " </div>";
                    addCartItem += "<div class='shopping_details_price'>"+oldData.productDetails[i].totalAmount.toFixed()+"</div>";
                    addCartItem += "</div>";
                    orderItems.insertAdjacentHTML("beforeend", addCartItem);
                }

                subTotal.innerHTML =oldData.subTotal
                total.innerHTML =oldData.subTotal
                paymentDue.innerHTML =oldData.subTotal
            }

        }
    </script>

@endpush
