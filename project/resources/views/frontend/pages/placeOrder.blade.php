@extends('frontend.layouts.master')

@section('title', 'Place order')

@section('styles')
    <style type="text/css">
        .payPal {
            display: none;
        }

        .PaywithCard {
            display: none;
        }

        .payment_system {
            font-weight: 600;
            color: #ea5119;
        }

    </style>

@endsection




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
                    <span>{{ $shipping_address['fname'] }} {{ $shipping_address['lname'] }}</span>
                    <span>customer Address</span>
                    <span>{{ $shipping_address['city'] }}</span>
                    <span>COuntry</span>
                    <span>{{ $shipping_address['phone'] }}</span>
                </div>

            </div>


            <form action="{{route('front.store.checkout.order')}}" method="POST" id="checkout_form">
                @csrf
                <textarea name="cart_details" id="cart_details" value="" hidden></textarea>
                <div class="billing-method">
                    <h4>Select Payment Method</h4>
                    <div class="billing-system">
                        <label class="payment_system">
                            <input id="radio_ONE" type="radio" name="RADIOagain" value="paypal"> PayPal
                        </label>
                        <div class="payPal">
                            PayPal window
                        </div>


                        <label class="payment_system">
                            <input id="radio_two" type="radio" name="RADIOagain" value="card"> Pay With Card
                        </label>
                        <div class="PaywithCard">
                            <input type="hidden" name="method" value="Stripe">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form-control card-elements" required name="cardNumber" type="text"
                                        placeholder="{{ $langg->lang163 }}" autocomplete="off"
                                        oninput="validateCard(this.value);" />
                                    <span id="errCard"></span>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control card-elements" required name="cardCVC" type="text"
                                        placeholder="{{ $langg->lang164 }}" autocomplete="off"
                                        oninput="validateCVC(this.value);" />
                                    <span id="errCVC"></span>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control card-elements" required name="month" type="text"
                                        placeholder="{{ $langg->lang165 }}" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control card-elements" required name="year" type="text"
                                        placeholder="{{ $langg->lang166 }}" />
                                </div>
                            </div>


                            <script type="text/javascript" src="{{ asset('assets/front/js/payvalid.js') }}"></script>
                            <script type="text/javascript" src="{{ asset('assets/front/js/paymin.js') }}"></script>
                            <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
                            <script type="text/javascript" src="{{ asset('assets/front/js/payform.js') }}"></script>


                            <script type="text/javascript">
                                var cnstatus = false;
                                var dateStatus = false;
                                var cvcStatus = false;

                                function validateCard(cn) {
                                    cnstatus = Stripe.card.validateCardNumber(cn);
                                    if (!cnstatus) {
                                        $("#errCard").html('{{ $langg->lang781 }}');
                                    } else {
                                        $("#errCard").html('');
                                    }



                                }

                                function validateCVC(cvc) {
                                    cvcStatus = Stripe.card.validateCVC(cvc);
                                    if (!cvcStatus) {
                                        $("#errCVC").html('{{ $langg->lang782 }}');
                                    } else {
                                        $("#errCVC").html('');
                                    }

                                }
                            </script>
                        </div>

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
            <button type="submit" id="submit_btn">Place Order</button>
        </div>

            </form>
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




        @if(session()->has('msg'))
        <div class="alert alert-success">
            {{ session()->get('msg') }}
        </div>
       @endif






    </div>


@endsection

@push('script')
<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_API_KEY')}}"></script>
    <script>
    const oldData = JSON.parse(localStorage.getItem('cartDetails'))
    const submitBtn = document.getElementById('submit_btn')
    const formId = document.getElementById('checkout_form')

const createOrderHandler = (_, actions) => {
    const totalAmount = (Number(oldData?.subTotal) || 0).toFixed(2) * 1
    return actions.order.create({
      purchase_units: [{
        amount:
        {
          currency_code: @json($curr->name),
          value: totalAmount,
        },
      }],
    })
  }

  const onApproveHanlder = (_, actions) => {
  const order = actions.order.capture()
  console.log(order);
  order.then(result => {
    if (typeof formId !== 'undefined' && formId !== null) {
      const input = document.createElement('input')
      input.setAttribute('type', 'hidden')
      input.setAttribute('name', 'paypal_transaction_id')
      input.setAttribute('value', result.id)
      formId.appendChild(input)
      if (!submitBtn) {
        submitBtn = document.createElement('input')
        submitBtn.setAttribute('type', 'submit')
        submitBtn.style.display = 'none'
        formId.appendChild(submitBtn)
      }
      formId.submit()
    }
  })
}

         const paymentradio1 = document.getElementById("radio_ONE")
const PaypalWindow = document.querySelector(".payPal")
paymentradio1.addEventListener("click", e => {


    
    if (paymentradio1.value == "paypal") {
        PaypalWindow.innerHTML = ''
        PaypalWindow.style.display = "block"
        PayCardWindow.style.display = "none"
        submitBtn.style.display = "none"
        const btnProps = {}
        btnProps.createOrder = (data, actions) => createOrderHandler(data, actions)
        btnProps.onApprove = (data, actions) => onApproveHanlder(data, actions)
        paypal.Buttons(btnProps).render(PaypalWindow)
    }

        })


const paymentradio2 = document.getElementById("radio_two")
const PayCardWindow = document.querySelector(".PaywithCard")
        paymentradio2.addEventListener("click", e => {
            if (paymentradio2.value == "card") {
                PayCardWindow.style.display = "block"
                PaypalWindow.style.display = "none"
                submitBtn.style.display = "block"
            }
        })

        window.onload = () => {
            const total = document.getElementById('total')
            const subTotal = document.getElementById('sub-total')
            const paymentDue = document.getElementById('payment-due')
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
                    addCartItem += "<div class='shopping_details_price'>" + oldData.productDetails[i].totalAmount
                        .toFixed() + "</div>";
                    addCartItem += "</div>";
                    orderItems.insertAdjacentHTML("beforeend", addCartItem);
                }

                subTotal.innerHTML = oldData.subTotal
                total.innerHTML = oldData.subTotal
                paymentDue.innerHTML = oldData.subTotal
            }

        document.getElementById('cart_details').value = JSON.stringify(oldData)
      

        }
    </script>

@endpush
