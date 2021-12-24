@extends('frontend.layouts.master')

@section('title', 'Profile')

@section('content')
<div class="My_account">
            <h3 class="my_account_h3">Welcome To Your Account</h3>

            <div class="profile_setting">
                <button id="customer_profile_btn">
                    Personal Profile
                </button>
                <form action="" class="Profile_info">
                    <input type="text" placeholder="First name..." value="User_First_name">
                    <input type="text" placeholder="Last name..." value="User_Last_name">
                    <input type="email" placeholder="Email..." value="user_email@gmail.com">
                    <input type="password" placeholder="Password..." value="USer_pass">
                    <button type="submit">Update</button>
                </form>
            </div>
            <div class="order_book">
                <button id="order_history_btn">
                    Order History
                </button>


                <table class="Table">
                    <tr>
                        <th>Order #</th>
                        <th>Placed On</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>213123133</td>
                        <td>21/10/2021</td>
                        <td><img class="order_image" src="/Size_4  50x130px/Energy-Boss---IT-(13-10-2021)---Blue-BG.png"
                                alt=""></td>
                        <td>32.45</td>
                        <td><a id="manage" href="">Manage</a></td>
                    </tr>
                    <tr>
                        <td>123131231</td>
                        <td>26/10/2021</td>
                        <td><img class="order_image" src="/Size_4  50x130px/Energy-Boss---IT-(19-10-2021)---RED-BG.png"
                                alt=""></td>
                        <td>29.56</td>
                        <td><a id="manage" href="">Manage</a></td>
                    </tr>

                    <tr>
                        <td>12312312</td>
                        <td>1/11/2021</td>
                        <td><img class="order_image" src="/Size_4  50x130px/Energy-Boss-Sports---DE-(BCAA-Lemon).png"
                                alt=""></td>
                        <td>23.54</td>
                        <td><a id="manage" href="">Manage</a></td>
                    </tr>
                </table>



            </div>

            <div class="account_shop_now">
                <a id="acount_shop_now" href="shop.html">Shop Now</a>
            </div>


@endsection

@push('script')

@endpush










