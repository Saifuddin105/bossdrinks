@extends('frontend.layouts.master')

@section('title', 'Cart')

@section('styles')
    <style type="text/css">
        /* .cart-box {
                                                                                                                                                position: relative;
                                                                                                                                            } */

        /* .cart-close-btn {
                                                                                                                                                position: absolute;
                                                                                                                                                right: 0;
                                                                                                                                                border: none;
                                                                                                                                                background: none;
                                                                                                                                                top: -1px;
                                                                                                                                            } */




        /* empty cart design */

        .my_cart_section {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        #cart_H4 {
            margin-top: 20px;
            font-size: 38px;
            letter-spacing: 1px;
            color: deepskyblue;
            margin-bottom: 20px;

        }

        #cart_span {
            font-size: 40px;
            font-weight: 600;
            letter-spacing: 2px;
            color: brown;
        }

        #cart_p {
            margin-top: 20px;
            font-size: 22px;
            margin-bottom: 20px;
            color: cadetblue;
            margin-bottom: 80px;
        }

        .cart_subscription,
        .single_purchase_cart,
        .bulk_purchase_cart {
            display: flex;
            justify-content: space-evenly;
            width: 50%;
            margin-top: 40px;
            margin-left: auto;
            margin-right: auto;
        }

        #my_cart_anchor {
            color: black;
            text-decoration: underline;
            font-size: 20px;
        }

        /* /* empty cart design ends */
        .order_summery {
            background: #CFDAE0;
            padding: 78px;
            display: flex;
            justify-content: space-around;

        }

        .subscription_box {
            width: 98%;

            background: #FFFFFF;
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius: 20px;
            box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);
        }

        .sub_box_info {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .sub_box_image img {
            height: 180px;
            margin-top: 17px;
        }

        .sub_box_details {
            text-align: center;
        }

        #SBD1 {
            font-size: 25px;
            font-weight: 800;
        }

        #SBD4 {
            font-size: 19px;
            font-weight: 600;
            margin-top: 8px;
        }

        #sub_days {
            font-size: 19px;
            font-weight: 600;
        }

        #SBD2 {
            margin-top: 20px;
        }

        #sub_amount {
            font-weight: 700;
            font-size: 20px;
        }

        #sub_box_remove_btn {
            border: 1px solid black;
            width: 54%;
            font-size: 15px;
            padding: 9px;
            border-radius: 20px;
            background: #081F2c;
            color: white;
            margin-top: 30px;
            /* margin-top: -10px; */

        }

        .subscription_part a {
            font-size: 18px;
            color: black;
            text-decoration: underline;
        }

        .subscription_part {
            display: flex;
            gap: 200px;
            margin-bottom: 16px;
        }

        .subscription_part h4 {
            font-size: 19px;
            font-weight: 700;
            color: #081F2c;
        }

        .one_time_p_info {
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .one_time_purchase_box {
            width: 98%;

            background: #FFFFFF;
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius: 20px;
            box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);
            display: flex;
            justify-content: space-around;

        }

        .OTP_counter_box {
            display: flex;
            margin-left: auto;
            margin-right: auto;
            margin-top: 16px;
        }

        #otp_minus {
            width: 40px;
            border-top-left-radius: 18px;
            border-bottom-left-radius: 18px;
            font-size: 21px;
            font-weight: 700;
            /* letter-spacing: 0px; */
            color: white;
            background: #081F2c
        }

        #otp_plus {

            width: 40px;
            border-top-right-radius: 18px;
            border-bottom-right-radius: 18px;
            font-size: 21px;
            font-weight: 700;
            /* letter-spacing: 0px; */
            color: white;
            background: #081F2c
        }

        .Otp_value_div {
            padding-left: 10px;
            padding-right: 10px;
            background-color: #EDEDE8;
            padding-top: 7px;
            width: 50%;
        }

        #otp_remove_btn {
            border: 1px solid black;
            width: 54%;
            font-size: 15px;
            padding: 9px;
            border-radius: 20px;
            background: #081F2c;
            color: white;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
        }

        .one_time_p_imagebox img {
            height: 180px;
            margin-top: 35px;
        }

        .product_total {
            font-size: 25px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        #OTP3 {
            margin-top: 8px;
            font-size: 19px;
            font-weight: 600;
        }

        .one_time_purchase {
            display: flex;
            margin-bottom: 12px;
           justify-content: space-between;
            margin-top: 65px;
        }

        .one_time_purchase h4 {
            font-size: 19px;
            font-weight: 700;
            color: #081F2c;
        }

        .one_time_purchase a {
            font-size: 18px;
            color: black;
            text-decoration: underline;
        }

        .order_summery_box {
            width: 98%;
            text-align: left;
            background: #FFFFFF;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 4px 4px 10px rgb(0 0 0 / 10%);


        }

        .order_product_price,
        .order_product_price_SPO {
            display: flex;
        }

        .productPart,
        .productPart_SPO {
            width: 75%;
        }

        .text_price_total {
            display: flex;
        }

        .text_price_total_SPO {
            display: flex;
        }

        .total_part,
        .total_part_SPO,
        .Final_total_text {
            width: 75%;
            font-weight: 800;
            font-size: 17px;
        }

        #SPO_text {
            margin-top: 60px;
            margin-bottom: 30px;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        #SO_text {
            margin-bottom: 30px;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .SUbtotal_portion {
            margin-top: 60px;
        }

        .subtotal_portion_info,
        .shipping_portion,
        .Final_total {
            display: flex;
        }

        .subTotal,
        .Shipping,
        .Final_total_text {
            width: 75%;
        }

        #checkout_BTN {
            border: 1px solid black;
            width: 98%;
            font-size: 18px;
            padding: 13px;
            border-radius: 20px;
            background: #081F2c;
            color: white;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .order_summery_left {
            width: 33%;
        }

        .order_summery_right {
            width: 30%;
        }

        #order_sum_text {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 25px;
            margin-left: 5px;
        }

        .subscription_part a,
        .one_time_purchase a {
            font-size: 16px!important;
            text-decoration: underline!important;
        }

        @media only screen and (max-width: 576px) {

            #image_empty_cart {
                height: 130px;
            }

            #cart_H4 {
                font-size: 30px !important;
            }

            #cart_span {
                font-size: 25px !important;
            }

            #cart_p {
                font-size: 16px !important;
            }

            .cart_subscription h4,
            .single_purchase_cart h4 {
                font-size: 14px !important;
            }

            #my_cart_anchor {

                font-size: 12px !important;
            }

            .cart_subscription,
            .single_purchase_cart {
                width: 90% !important;
                margin-top: 20px !important;
            }

            .order_summery {
                flex-direction: column !important;
                padding: 15px !important;
            }

            .order_summery_left,
            .order_summery_right {
                width: 100% !important;
            }

            .subscription_part,
            .one_time_purchase {
                flex-direction: column !important;
                gap: 5px !important;
            }

            #sub_days {
                font-size: 15px !important;
            }

            #OTP2,
            #SBD3 {
                font-size: 13px !important;
            }

            #OTP1,
            #SBD1 {
                font-size: 20px !important;
            }

            #OTP3,
            #SBD4 {
                font-size: 15px !important;
            }

            .sub_box_image img,
            .one_time_p_imagebox img {
                height: 150px !important;
            }

            .subscription_part h4,
            .one_time_purchase h4 {
                font-size: 16px !important;
            }

            .subscription_part a,
            .one_time_purchase a {
                font-size: 14px !important;
            }

            #order_sum_text {
                font-size: 16px;
                margin-top: 50px;
                margin-bottom: 13px;
            }

        }



        }

    </style>

@endsection



@section('content')

    <div class="main">

        <div class="my_cart_section">

            <div class="empty_cart" id="empty_cart">
                <div>
                    <img id="image_empty_cart" src="img/emptycart.png" alt="">
                </div>
                <h4 id="cart_H4">OH NO !</h4>
                <span id="cart_span">Your Basket is Empty...</span>
                <p id="cart_p">put your first product on it !</p>
                <div class="cart_subscription">
                    <h4>Subscription</h4>
                    <a id="my_cart_anchor" href="{{ url('user/shop') }}">Add subscriptions</a>

                </div>
                <div class="single_purchase_cart">
                    <h4>Single Purchase</h4>
                    <a id="my_cart_anchor" href="{{ url('user/shop') }}">Add more products</a>

                </div>
            </div>

            <div class="my_cart" id="my_cart">
                <div class="order_summery">

                    <div class="order_summery_left" id="order_summary_left">
                    </div>

                    <div class="order_summery_right" id="order_summary_right">

                    </div>



                </div>
            </div>


        </div>



    </div>


@endsection

@push('script')

    <script>
        const oldData = JSON.parse(localStorage.getItem('cartDetails'))

        window.onload = () => {
            const oldData = JSON.parse(localStorage.getItem('cartDetails'))
            const order_summary_left = document.getElementById('order_summary_left');
            const order_summary_right = document.getElementById('order_summary_right');
            if (oldData?.productDetails?.length > 0) {
                document.getElementById('empty_cart').style = "display:none"
                document.getElementById('my_cart').style = "display:block"

                const subscriptionDataProduct1 = oldData.productDetails.filter(item => item.type === 'subscription')
                const oneTimePurchaseDataProduct1 = oldData.productDetails.filter(item => item.type === 'bulk-purchase')
                const subscriptionTotal = subscriptionDataProduct1.reduce((sum, item) => {
                    return sum + item.totalAmount
                }, 0)
                const oneTimePurchaseTotal = oneTimePurchaseDataProduct1.reduce((sum, item) => {
                    return sum + item.totalAmount
                }, 0)
                console.log(oneTimePurchaseTotal)



                for (let i = 0; i < oldData.productDetails.length; i++) {
                    let addCartItem = ""
                    addCartItem += "<div class='total_one_time_purchase' id='box_" + i +
                        "'>";
                    addCartItem += "<div class='one_time_purchase'>";
                    if (oldData.productDetails[i].type === 'subscription') {
                        addCartItem += "<h4>Subscriptions</h4>";
                    } else {
                        addCartItem += "<h4>One Time Purchase</h4>";
                    }
                    addCartItem += "<a href='{{ url('user/shop') }}'>Add more cases</a>";
                    addCartItem += "</div>";
                    addCartItem += "<div class='one_time_purchase_box'>";
                    addCartItem += "<div class='one_time_p_imagebox'>";
                    addCartItem +=
                        "<img src='/Size_4  50x130px/Energy-Boss---IT-(13-10-2021)---Blue-BG.png' alt='' height='80px'>";
                    addCartItem += "</div>";
                    addCartItem += "<div class='one_time_p_info'>";
                    addCartItem += "<span id='product_total_" + oldData.productDetails[i]
                        .productId + "' class='product_total'>&#163;" + oldData.productDetails[i]
                        .totalAmount.toFixed(2) + "</span>";
                    if (oldData.productDetails[i].type === 'subscription') {

                        addCartItem += "<p id='SBD3'>Delivered every <span id='sub_days'>30</span> Days</p>";
                    } else {

                        addCartItem += "<span id='OTP2'>Delivered once, reorder when you need</span>";
                    }
                    addCartItem += "<span id='OTP3'>Boss Drink Original Blue</span>";
                    if (oldData.productDetails[i].type !== 'subscription') {

                        addCartItem += "<div class='OTP_counter_box'>";
                        addCartItem += "<button  id='otp_minus' onclick='cartQuantityDecrement(" +
                            oldData.productDetails[i].productId + "," + oldData.productDetails[i]
                            .productPrice +
                            ")'>-</button>";
                        addCartItem += "<div class='Otp_value_div'>";
                        addCartItem += "<h4 id='otp_value_" + oldData.productDetails[i]
                            .productId +
                            "'  class='otp_value'>" + oldData.productDetails[i].quantity +
                            "</h4>";
                        addCartItem += "</div>";
                        addCartItem += "<button  id='otp_plus' onclick='cartQuantityIncrement(" +
                            oldData.productDetails[i].productId + "," + oldData.productDetails[i]
                            .productPrice +
                            ")'>+</button>";
                        addCartItem += "</div>";
                    }
                    addCartItem += " <button id='otp_remove_btn' onclick='closeCartItem(event," +
                        i + ")'>Remove</button>";
                    addCartItem += "</div>";
                    addCartItem += "</div>";
                    addCartItem += "</div>";
                    order_summary_left.insertAdjacentHTML("beforeend", addCartItem);
                    document.getElementById('quantity-back').style = "display: flex"

                }




                let addCartItem = ""
                addCartItem += "<h4 id='order_sum_text'>Order Summery</h4>";
                addCartItem += "<div class='order_summery_box'>";
                addCartItem += "<h4 id='SO_text'>Subscription Order</h4>";
                for (let i = 0; i < subscriptionDataProduct1.length; i++) {

                    addCartItem += "<div class='order_product_price'>";
                    addCartItem += "<div class='productPart'>Boss Drink Original Blue</div>";
                    addCartItem += "<div class='pricePart'>&#163;" + subscriptionDataProduct1[i].totalAmount.toFixed(
                        2) + "</div>";
                    addCartItem += "</div>";
                }

                addCartItem +=
                    "<div class='total_calculation'>";
                addCartItem += "<div class='hr_total_price'>";
                addCartItem += "<hr>";
                addCartItem += "<div class='text_price_total'>";
                addCartItem += "<div class='total_part'>Total</div>";
                addCartItem += "<div class='total_pricePart'>&#163;" + subscriptionTotal.toFixed(2) + "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "<h4 id='SPO_text'>Single Purchase order</h4>";
                for (let i = 0; i < oneTimePurchaseDataProduct1.length; i++) {
                    addCartItem += "<div class='order_product_price_SPO'>";

                    addCartItem += "<div class='productPart_SPO'>Boss Drink Original Blue</div>";
                    addCartItem += "<div class='pricePart_SPO'>&#163;" + oneTimePurchaseDataProduct1[i].totalAmount
                        .toFixed(2) + "</div>";
                    addCartItem += "</div>";
                }

                addCartItem += "<div class='total_calculation_SPO'>";
                addCartItem += "<div class='hr_total_price'>";
                addCartItem += "<hr>";
                addCartItem += "<div class='text_price_total_SPO'>";
                addCartItem += "<div class='total_part_SPO'>Total</div>";
                addCartItem += "<div class='total_pricePart_SPO'>&#163;" + oneTimePurchaseTotal.toFixed(2) + "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "<div class='SUbtotal_portion'>";
                addCartItem += "<div class='subtotal_portion_info'>";
                addCartItem += "<div class='subTotal'>SUbtotal</div>";
                addCartItem += "<div class='subTotal_price' id='sub_total'>&#163;" + oldData.subTotal + "</div>";
                addCartItem += "</div>";
                addCartItem += "<div class='shipping_portion'>";
                addCartItem += "<div class='Shipping'>Shipping</div>";
                addCartItem += " <div class='Shipping_price'>&#163;0</div>";
                addCartItem += "</div>";
                addCartItem += "<div class='hr_total_final'>";
                addCartItem += "<div>";
                addCartItem += "<hr>";
                addCartItem += "</div>";
                addCartItem += "<div class='Final_total'>";
                addCartItem += "<div class='Final_total_text'>Total</div>";
                addCartItem += "<div class='Final_total_amount'  id='total'>&#163; " + oldData.subTotal + "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "<div class='checkout_part'>";
                addCartItem += "<button id='checkout_BTN' >Checkout</button>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";
                addCartItem += "</div>";

                order_summary_right.insertAdjacentHTML("beforeend", addCartItem);
                const subTotal = document.getElementById('sub_total')
                console.log(oldData.subTotal);
                const total = document.getElementById('total')
                subTotal.innerHTML = oldData.subTotal.toFixed(2)
                total.innerHTML = oldData.subTotal.toFixed(2)
            } else {
                document.getElementById('my_cart').style = "display:flex"
            }
            cartQuantity()


        }

        const cartQuantityIncrement = (productId, price) => {
            const productIndx = oldData.productDetails.findIndex((element, index) => {
                if (element.productId === productId && element.type === 'bulk-purchase') {
                    return true
                }
            })

            const increments = document.getElementById("otp_value_" + productId)
            const totalAmount = document.getElementById("product_total_" + productId)
            console.log(totalAmount)
            const productDetails = oldData.productDetails[productIndx]
            if (productDetails) {
                productDetails.quantity += 1
                productDetails.totalAmount += price
                increments.innerHTML = productDetails.quantity
                totalAmount.innerHTML = productDetails.totalAmount.toFixed(2)
                localStorage.removeItem('cartDetails')
                localStorage.setItem('cartDetails', JSON.stringify(oldData))
                calculateTotalAmount()
                cartQuantity()
            }
        }

        const cartQuantityDecrement = (productId, price) => {
            const productIndx = oldData.productDetails.findIndex((element, index) => {
                if (element.productId === productId && element.type === 'bulk-purchase') {
                    return true
                }
            })
            const increments = document.getElementById("otp_value_" + productId)
            const totalAmount = document.getElementById("product_total_" + productId)
            const productDetails = oldData.productDetails[productIndx]
            if (productDetails.quantity > 0) {
                productDetails.quantity = productDetails.quantity - 1
                productDetails.totalAmount = productDetails.totalAmount - price
                if (productDetails.totalAmount < 1) {
                    totalAmount.innerHTML = 0
                    productDetails.totalAmount = 0
                } else {
                    totalAmount.innerHTML = productDetails.totalAmount.toFixed(2)
                }
                increments.innerHTML = productDetails.quantity
                localStorage.removeItem('cartDetails')
                localStorage.setItem('cartDetails', JSON.stringify(oldData))
            }
            calculateTotalAmount()
            cartQuantity()

        }

        const calculateTotalAmount = () => {
            const subTotal = document.getElementById('sub_total')
            const total = document.getElementById('total')
            let totalAmount = 0
            if (oldData?.productDetails?.length > 0) {
                for (let i = 0; i < oldData.productDetails.length; i++) {
                    totalAmount += oldData.productDetails[i].totalAmount
                }
                oldData.subTotal = totalAmount
                subTotal.innerHTML = oldData.subTotal.toFixed(2)
                total.innerHTML = oldData.subTotal.toFixed(2)
            } else {
                subTotal.innerHTML = 0
            }
            localStorage.removeItem('cartDetails')
            localStorage.setItem('cartDetails', JSON.stringify(oldData))

        }

        const closeCartItem = (event, productIndx) => {
            event.preventDefault();
            console.log(document.getElementById('box_1'))
            // const productIndx = oldData.productDetails.findIndex((element, index) => {
            //     if (element.productId === productId) {
            //         return true
            //     }
            // })
            oldData.productDetails.splice(productIndx, 1)
            document.getElementById("box_" + productIndx).remove()
            if (oldData?.productDetails?.length < 1) {
                oldData.subTotal = 0
                document.getElementById('my_cart').style = "display:none"
                document.getElementById('empty_cart').style = "display:block"

            }
            localStorage.setItem('cartDetails', JSON.stringify(oldData))
            calculateTotalAmount()
            cartQuantity()
        }

        const cartQuantity = () => {
            let cartQuantity = document.getElementById("cart-quantity")

            if (oldData?.productDetails.length > 0) {
                let productQuantity = 0
                for (let i = 0; i < oldData.productDetails.length; i++) {
                    productQuantity += oldData.productDetails[i].quantity
                }
                cartQuantity.innerText = productQuantity
            } else {

                cartQuantity.innerText = ''
                document.getElementById('quantity-back').style = "display: none"
            }
        }
    </script>

@endpush
