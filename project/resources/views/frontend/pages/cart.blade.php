@extends('frontend.layouts.master')

@section('title', 'Cart')

@section('styles')
<style type = "text/css">
.cart-box{
    position: relative;
}
.cart-close-btn{
    position: absolute;
    right: 0;
    border: none;
    background: none;
    top: -1px;
}
    
</style>

@endsection



@section('content')

    <div class="main">


        <div class="my_cart ">

            <h4 id="shop_cart">Your Shopping Cart</h4>

            <div class="container my_cart_details" id="order-items">
            </div>

            <div class="checkout checkout_cart" id="checkout_cart">
                <div>
                    Your Subtotal is &#163;<span id="sub-total"></span>
                </div>
                <div style="display: flex;">
                    <input id="i_agree_checkbox" type="checkbox" style="width: 20px;">

                    <h4 style="font-size: 12px;">I agree to the <a id="modal_text">Terms and Conditions</a></h4>
                </div>
                <div class="checkout_btn">
                    <a href="{{route('front.showCheckout')}}"><button>Proceed to Checkout</button></a>
                </div>
            </div>
        </div>


        <div class="modal-bg">

            <div class="modal_tnc">


                <span class="modal_close">X</span>
                <div class="first_tnc">
                    <!-- <h4 id="BGL">BRITON GROUP LIMITED</h4> -->
                    <p id="main_heading">Our Website Terms & Conditions</p>

                    <h4 id="sub_main_heading">PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY BEFORE USING THIS SITE
                    </h4>

                    <h4 id="section_title">Terms of website use</h4>

                    <p id="agreement_text">This terms of use (together with the documents referred to in it) tells you
                        the
                        terms of use on which you may make use
                        of our website <a id="email_text">www.bossdrinks.com</a> (our site), whether as a guest or a
                        registered user. Use of our site includes
                        accessing, browsing, or registering to use our site.</p>
                    <p id="agreement_text">Please read these terms of use carefully before you start to use our site, as
                        these will apply to your use of our site.
                        We recommend that you print a copy of this for future reference.</p>
                    <p id="agreement_text">By using our site, you confirm that you accept these terms of use and that
                        you
                        agree to comply with them.</p>
                    <p id="agreement_text">If you do not agree to these terms of use, you must not use our site. If your
                        order is accepted, we will inform you by
                        email. When placing an order, you undertake that all details you provide to us are true and
                        accurate, that you are an
                        authorised user of the credit or debit card, or bank account used to place your order and that
                        there
                        are sufficient
                        funds to cover the cost of the goods. The cost of the international products and services may
                        fluctuate. All prices
                        advertised are subject to such changes.</p>


                    <h4 id="section_title">Other applicable terms</h4>
                    <p id="agreement_text">These terms of use refer to the following additional terms, which also apply
                        to
                        your use of our site:</p>
                    <p id="agreement_text">• <a id="email_text" href="#terms_privacy">Our Privacy Policy</a>, which sets
                        out
                        the terms on which
                        we process any personal
                        data we collect from you, or that you
                        provide to us. Please read this carefully before using this site, and stop using the site
                        immediately if you do not
                        agree with such processing.</p>
                    <p id="agreement_text">• <a id="email_text" href="#terms_cookies">Our Cookie Policy</a>, which sets
                        out
                        information about the cookies on our site.
                    </p>
                    <p id="agreement_text">If you purchase goods from our site, our <a id="email_text"
                            href="#terms_delivery">Terms and
                            conditions of supply</a> will
                        apply to the sales.</p>


                    <h4 id="section_title">Information about us</h4>

                    <p id="agreement_text"><a href="http://www.bossdrinks.com" id="email_text">www.bossdrinks.com</a> is
                        a
                        site
                        operated by BOSS DRINKS LTD(“We”). We are registered in England and Wales under company
                        number 13717935 and have our registered office at BOSS DRINKS LTD, 3/5 Ripple Road,Barking,
                        Essex IG11 7ND. This is also
                        our main trading. Our VAT number is 32.</p>

                    <h4 id="section_title">Changes to these terms</h4>
                    <p id="agreement_text">We may revise these terms of use at any time by amending this page.</p>
                    <p id="agreement_text">Please check this page from time to time to take notice of any changes we
                        made,
                        as they are binding on you.</p>

                    <h4 id="section_title">Changes to our site</h4>
                    <p id="agreement_text">We may update our site from time to time, and may change the content at any
                        time.
                        However, please note that any of the
                        content on our site may be out of date at any given time, and we are under no obligation to
                        update
                        it.</p>
                    <p id="agreement_text">We do not guarantee that our site, or any content on it, will be free from
                        errors
                        or omissions.</p>

                    <h4 id="section_title">Accessing our site</h4>
                    <p id="agreement_text">Our site is made available free of charge.</p>
                    <p id="agreement_text">We do not guarantee that our site, or any content on it, will always be
                        available
                        or be uninterrupted. Access to our
                        site is permitted on a temporary basis. We may suspend, withdraw, discontinue or change all or
                        any
                        part of our site
                        without notice. We will not be liable to you if for any reason our site is unavailable at any
                        time
                        or for any period.</p>
                    <p id="agreement_text">You are responsible for making all arrangements necessary for you to have
                        access
                        to our site.</p>
                    <p id="agreement_text">You are also responsible for ensuring that all persons who access our site
                        through your internet connection are aware of
                        these terms of use and other applicable terms and conditions, and that they comply with them.
                    </p>
                    <p id="agreement_text">Our site is directed to people residing in the United Kingdom. We do not
                        represent that content available on or through
                        our site is appropriate or available in other locations. We may limit the availability of our
                        site
                        or any service or
                        product described on our site to any person or geographic area at any time. If you choose to
                        access
                        our site from
                        outside the United Kingdom, you do so at your own risk.</p>
                    <p id="agreement_text" style="font-weight: 700;">Your account and password</p>
                    <p id="agreement_text">If you choose, or you are provided with a user identification code, password
                        or
                        any other piece of information as part
                        of our security procedures, you must treat such information as confidential. You must not
                        disclose
                        it to any third
                        party.</p>
                    <p id="agreement_text">We have the right to disable any user identification code or password,
                        whether
                        chosen by you or allocated by us, at any
                        time, if in our reasonable opinion you have failed to comply with any of the provisions of these
                        terms of use.</p>
                    <p id="agreement_text">If you know or suspect that anyone other than you knows your user
                        identification
                        code or password, you must promptly
                        notify us at <a id="email_text">info@bossdrinks.com</a></p>
                    <p id="agreement_text" style="font-weight: 700;">Intellectual property rights</p>
                    <p id="agreement_text">We are the owner or the licensee of all intellectual property rights in our
                        site,
                        and in the material published on it.
                        Those works are protected by copyright laws and treaties around the world. All such rights are
                        reserved.
                    </p>
                    <p id="agreement_text">You may print off one copy, and may download extracts, of any page(s) from
                        our
                        site for your personal use and you may
                        draw the attention of others within your organisation to content posted on our site.</p>
                    <p id="agreement_text">You must not modify the paper or digital copies of any materials you have
                        printed
                        off or downloaded in any way, and you
                        must not use any illustrations, photographs, video or audio sequences or any graphics separately
                        from any accompanying
                        text.</p>
                    <p id="agreement_text">Our status (and that of any identified contributors) as the authors of
                        content on
                        our site must always be acknowledged.</p>
                    <p id="agreement_text">You must not use any part of the content on our site for commercial purposes
                        without obtaining a licence to do so from
                        us or our licensors.</p>
                    <p id="agreement_text">If you print off, copy or download any part of our site in breach of these
                        terms
                        of use, your right to use our site will
                        cease immediately and you must, at our option, return or destroy any copies of the materials you
                        have made.</p>


                    <h4 id="section_title">No reliance on information</h4>
                    <p id="agreement_text">The content on our site is provided for general information only. It is not
                        intended to amount to advice on which you
                        should rely. You must obtain professional or specialist advice before taking, or refraining
                        from,
                        any action on the
                        basis of the content on our site.</p>
                    <p id="agreement_text">Although we make reasonable efforts to update the information on our site, we
                        make no representations, warranties or
                        guarantees, whether express or implied, that the content on our site is accurate, complete or
                        up-to-date.</p>


                    <h4 id="section_title">Limitation of our liability</h4>
                    <p id="agreement_text">Nothing in these terms of use excludes or limits our liability for death or
                        personal injury arising from our negligence,
                        or our fraud or fraudulent misrepresentation, or any other liability that cannot be excluded or
                        limited by English law.</p>
                    <p id="agreement_text">To the extent permitted by law, we exclude all conditions, warranties,
                        representations or other terms which may apply to
                        our site or any content on it, whether express or implied.
                    </p>
                    <p id="agreement_text">We will not be liable to any user for any loss or damage, whether in
                        contract,
                        tort (including negligence), breach of
                        statutory duty, or otherwise, even if foreseeable, arising under or in connection with:</p>
                    <p id="agreement_text">• use of, or inability to use, our site; or<br>
                        • use of or reliance on any content displayed on our site.<br>
                        If you are a business user, please note that in particular, we will not be liable for:

                    </p>
                    <p id="agreement_text">
                        • loss of profits, sales, business, or revenue;<br>
                        • business interruption;<br>
                        • loss of anticipated savings;<br>
                        • loss of business opportunity, goodwill or reputation; or<br>
                        • any indirect or consequential loss or damage.<br><br>
                        If you are a consumer user, please note that we only provide our site for domestic and private
                        use.
                        You agree not to use
                        our site for any commercial or business purposes, and we have no liability to you for any loss
                        of
                        profit, loss of
                        business, business interruption, or loss of business opportunity.
                    </p>
                    <p id="agreement_text">We will not be liable for any loss or damage caused by a virus, distributed
                        denial-of-service attack, or other
                        technologically harmful material that may infect your computer equipment, computer programs,
                        data or
                        other proprietary
                        material due to your use of our site or to your downloading of any content on it, or on any
                        website
                        linked to it.</p>


                    <p id="agreement_text">We assume no responsibility for the content of websites linked on our site.
                        Such
                        links should not be interpreted as
                        endorsement by us of those linked websites. We will not be liable for any loss or damage that
                        may
                        arise from your use of
                        them.</p>
                    <p id="agreement_text">Different limitations and exclusions of liability will apply to liability
                        arising
                        as a result of the supply of any goods
                        by use to you, which will be set out in our <a id="email_text" href="#terms_delivery">Terms and
                            conditions of supply</a>.</p>


                    <h4 id="section_title">Viruses</h4>
                    <p id="agreement_text">We do not guarantee that our site will be secure or free from bugs or
                        viruses.
                    </p>
                    <p id="agreement_text">You are responsible for configuring your information technology, computer
                        programmes and platform in order to access our
                        site. You should use your own virus protection software.</p>
                    <p id="agreement_text">You must not misuse our site by knowingly introducing viruses, trojans,
                        worms,
                        logic bombs or other material which is
                        malicious or technologically harmful. You must not attempt to gain unauthorised access to our
                        site,
                        the server on which
                        our site is stored or any server, computer or database connected to our site. You must not
                        attack
                        our site via a
                        denial-of-service attack or a distributed denial-of service attack. By breaching this provision,
                        you
                        would commit a
                        criminal offence under the Computer Misuse Act 1990. We will report any such breach to the
                        relevant
                        law enforcement
                        authorities and we will co-operate with those authorities by disclosing your identity to them.
                        In
                        the event of such a
                        breach, your right to use our site will cease immediately.</p>




                    <h4 id="section_title">Linking to our site</h4>
                    <p id="agreement_text">You may link to our home page, provided you do so in a way that is fair and
                        legal
                        and does not damage our reputation or
                        take advantage of it.</p>
                    <p id="agreement_text">You must not establish a link in such a way as to suggest any form of
                        association, approval or endorsement on our part
                        where none exists.</p>
                    <p id="agreement_text">You must not establish a link to our site in any website that is not owned by
                        you.</p>
                    <p id="agreement_text">Our site must not be framed on any other site, nor may you create a link to
                        any
                        part of our site other than the home
                        page.</p>
                    <p id="agreement_text">We reserve the right to withdraw linking permission without notice.</p>
                    <p id="agreement_text">If you wish to make any use of content on our site other than that set out
                        above,
                        please contact <a id="email_text">info@bossdrinks.com</a></p>


                    <h4 id="section_title">Third party links and resources in our site</h4>
                    <p id="agreement_text">Where our site contains links to other sites and resources provided by third
                        parties, these links are provided for your
                        information only.</p>
                    <p id="agreement_text">We have no control over the contents of those sites or resources.</p>

                    <h4 id="section_title">Applicable law</h4>
                    <p id="agreement_text">If you are a consumer, please note that these terms of use, its subject
                        matter
                        and its formation, are governed by
                        English law. You and we both agree to that the courts of England and Wales will have
                        non-exclusive
                        jurisdiction.
                        However, if you are a resident of Northern Ireland you may also bring proceedings in Northern
                        Ireland, and if you are
                        resident of Scotland, you may also bring proceedings in Scotland.</p>
                    <p id="agreement_text">If you are a business, these terms of use, its subject matter and its
                        formation
                        (and any non-contractual disputes or
                        claims) are governed by English law. We both agree to the exclusive jurisdiction of the courts
                        of
                        England and Wales.</p>

                    <h4 id="section_title">Contact us</h4>

                    <p id="agreement_text">To contact us, please email info@bossdrinks.com</p>
                    <p id="agreement_text">Thank you for visiting our site.</p>





















                    <a id="terms_sale"></a>
                    <p id="main_heading">TERMS AND CONDITIONS OF SALE</p>
                    <h4 id="section_title">These Terms</h4>
                    <p id="agreement_text"><span id="span_1">What these terms cover:</span>
                        These are the terms and conditions on which we supply products to you.</p>
                    <p id="agreement_text"><span id="span_1">Why you should read them:</span>
                        Please read these terms carefully before you submit your order to us. These terms tell you who
                        we
                        are, how we will
                        provide products to you, how you and we may change or end the contract, what to do if there is a
                        problem and other
                        important information. If you think that there is a mistake in these terms, please contact us to
                        discuss.</p>


                    <p id="agreement_text" style="font-weight: 700;">Information about us and how to contact us:</p>

                    <p id="agreement_text"><span id="span_1">Who we are:</span>
                        We are BOSS Drinks a company registered in England and Wales. Our company registration number is
                        13717935 and our
                        registered office is at BOSS Drinks Ltd, 3/5 Ripple Road, Barking, Essex IG11 7ND, UK. Our
                        registered VAT number is 32.</p>
                    <p id="agreement_text"><span id="span_1">How to contact us:</span>
                        You can contact us by telephoning our customer service team at 020 000 00 or by writing to us at
                        <a id="email_text">info@bossdrinks.com</a> and
                        our registered office address above.
                    </p>
                    <p id="agreement_text"><span id="span_1">How we may contact you:</span>
                        If we have to contact you we will do so by telephone or by writing to you at the email address
                        or
                        postal address you
                        provided to us in your order.</p>
                    <p id="agreement_text"><span id="span_1">“Writing” includes emails:</span>
                        When we use the words “writing” or “written” in these terms, this includes emails.</p>



                    <h4 id="section_title">Our contract with you</h4>
                    <p id="agreement_text"><span id="span_1">About You:</span>
                        You confirm that You are over 18 and the valid holder and owner of any credit or debit card used
                        during Services. We
                        reserve the right to refuse your order at our discretion.</p>
                    <p id="agreement_text"><span id="span_1">How we will accept your order:</span>
                        Our acceptance of your order will take place when we email you to accept it, at which point a
                        contract will come into
                        existence between you and us.</p>
                    <p id="agreement_text"><span id="span_1">If we cannot accept your order:</span>
                        . If we are unable to accept your order, we will inform you of this and will not charge you for
                        the
                        product. This might
                        be because the product is out of stock, because of unexpected limits on our resources which we
                        could
                        not reasonably plan
                        for, because we have identified an error in the price or description of the product or because
                        we
                        are unable to meet a
                        delivery deadline you have specified.</p>
                    <p id="agreement_text"><span id="span_1">Your order number:</span>
                        We will assign an order number to your order and tell you what it is when we accept your order.
                        It
                        will help us if you
                        can tell us the order number whenever you contact us about your order.</p>


                    <h4 id="section_title">Our products</h4>
                    <p id="agreement_text"><span id="span_1">Products may vary slightly from their pictures.</span>
                        The images of the products on our website are for illustrative purposes only. Although we have
                        made
                        every effort to
                        display the colours accurately, we cannot guarantee that a device’s display of the colours
                        accurately reflects the
                        colour of the products. Your product may vary slightly from those images.</p>

                    <h4 id="section_title">Providing the products</h4>
                    <p id="agreement_text"><span id="span_1">Delivery costs.</span>
                        The costs of delivery will be as displayed to you on our website. We deliver throughout the
                        United
                        Kingdom and the
                        European Union although delivery to remote areas may incur a surcharge. Areas such as parts of
                        Scotland, the Scottish
                        Highlands, Ireland, Northern Ireland, remote areas of Wales and Lands End Cornwall and other
                        areas
                        of Europe as defined
                        by the courier company may incur an additional delivery surcharge. Contact us for further
                        information on courier rates
                        to your address.</p>
                    <p id="agreement_text"><span id="span_1">When we will provide the products:</span>
                        . During the order process we will let you know when we will provide the products to you. We
                        will
                        send you an email on
                        the morning of your delivery date with delivery details so you are able to track your order.</p>
                    <p id="agreement_text"><span id="span_1">Please notify us in advance of any delivery difficulties,
                            which
                            may be expected.</span>This includes narrow road access or helpful hints and tips of how to
                        find
                        you. Please Note: Delivery vehicles can be
                        very large and adequate space and access is required.</p>
                    <p id="agreement_text"><span id="span_1">We are not responsible for delays outside our
                            control.</span>

                        . If our supply of the products is delayed by an event outside our control then we will contact
                        you
                        as soon as possible
                        to let you know and we will take steps to minimise the effect of the delay. Provided we do this
                        we
                        will not be liable
                        for delays caused by the event, but if there is a risk of substantial delay you may contact us
                        to
                        end the contract and
                        receive a refund for any products you have paid for but not received.</p>
                    <p id="agreement_text"><span id="span_1">If you are not at home when the product is
                            delivered.</span>

                        . If no one is available at your address to take delivery and the products cannot be posted
                        through
                        your letterbox, we
                        will leave you a note informing you of how to rearrange delivery or collect the products from a
                        local depot.</p>
                    <p id="agreement_text"><span id="span_1">If you do not re-arrange delivery.</span>

                        If after a failed delivery to you, you do not re-arrange delivery or collect the products from a
                        delivery depot we
                        will contact you for further instructions and may charge you for storage costs and any further
                        delivery costs. If,
                        despite our reasonable efforts, we are unable to contact you or re-arrange delivery or
                        collection we
                        may end the
                        contract and clause 2 will apply.</p>
                    <p id="agreement_text"><span id="span_1">Guarantee against damage in transit.</span>

                        The products are insured against damage in transit.
                        Upon arrival, if there is any present or visible damage to the products, refuse delivery by
                        refusing
                        signature and
                        returning the product with the delivery driver.
                        You must inform the delivery driver of the reason for refusal and the delivery driver must
                        co-sign
                        the delivery note.
                    </p>

                    <p id="agreement_text" style="font-weight: 700;">Please DO NOT sign for delivery if the product is
                        damaged and DO NOT accept goods as ‘damaged in transit’ as the transit
                        insurance will be void.</p>
                    <p id="regular_p" style="margin-top: -10px;">Contact us on +44 020 000 000 immediately to report
                        damages
                        and ensure fast
                        replacement of the products.</p>

                    <p id="agreement_text"><span id="span_1">When you become responsible for the product:</span>

                        The product will be your responsibility from the time we deliver the product to the address.
                    </p>

                    <p id="agreement_text"><span id="span_1">When you own goods:</span>

                        You own a product which is goods once we have received payment in full.
                    </p>


                    <h4 id="section_title">Reasons we may suspend the supply of products to you</h4>


                    <p id="agreement_text"><span id="span_1">We may have to suspend the supply of a product
                            to:</span><br>

                        deal with technical problems or make minor technical changes;<br>
                        update the product to reflect changes in relevant laws and regulatory requirements.

                    </p>

                    <p id="agreement_text"><span id="span_1">Your rights if we suspend the supply of products:</span>

                        We will contact you in advance to tell you we will be suspending supply of the product, unless
                        the
                        problem is urgent or
                        an emergency. If we have to suspend the product for longer than 30 days we will adjust the price
                        so
                        that you do not pay
                        for products while they are suspended. You may contact us to end the contract for a product if
                        we
                        suspend it, or tell
                        you we are going to suspend it, in each case for a period of more than 30 days and we will
                        refund
                        any sums you have paid
                        in advance for the product in respect of the period after you end the contract.
                    </p>
                    <p id="agreement_text"><span id="span_1">We may also suspend supply of the products if you do not
                            pay.</span>
                        If you do not pay us for the products when you are supposed to (see clause 4) and you still do
                        not
                        make payment within 7
                        days of us reminding you that payment is due, we may suspend supply of the products until you
                        have
                        paid us the
                        outstanding amounts. We will contact you to tell you we are suspending supply of the products.
                        We
                        will not suspend the
                        products where you dispute the unpaid invoice (see clause 10.6). We will not charge you for the
                        products during the
                        period for which they are suspended. As well as suspending the products we can also charge you
                        interest on your overdue
                        payments (see clause 10.5).
                    </p>

                    <h4 id="section_title">Your rights to end the contract</h4>
                    <p id="agreement_text"><span id="span_1">You can always end your contract with us.
                        </span>
                        Your rights when you end the contract will depend on what you have bought, whether there is
                        anything
                        wrong with it, how
                        we are performing and when you decide to end the contract:
                    </p>
                    <p id="agreement_text"><span id="span_1">If what you have bought is faulty or misdescribed you may
                            have
                            a legal right to end the contract
                        </span>
                        (or to get the product repaired or replaced or to get some or all of your money back), see
                        clause 9;
                    </p>
                    <p id="agreement_text"><span id="span_1">If you want to end the contract because of something we
                            have
                            done or have told you we are going to do,
                        </span>
                        see clause 2;


                    </p>
                    <p id="agreement_text"><span id="span_1">If you have just changed your mind about the product,
                        </span>
                        see clause 3. You may be able to get a refund if you are within the cooling-off period, but this
                        may
                        be subject to
                        deductions and you will have to pay the costs of return of any goods;


                    </p>
                    <p id="agreement_text"><span id="span_1">In all other cases
                        </span>
                        (if we are not at fault and there is no right to change your mind), see clause 6.


                    </p>
                    <p id="agreement_text"><span id="span_1">Ending the contract because of something we have done or
                            are
                            going to do.
                        </span>
                        . If you are ending a contract for a reason set out at 2.1 to 6.2.4 below the contract will end
                        immediately and we will
                        refund you in full for any products which have not been provided and you may also be entitled to
                        compensation. The
                        reasons are:


                    </p>
                    <p id="agreement_text">we have told you about an error in the price or description of the product
                        you
                        have ordered and you do not wish to
                        proceed; there is a risk that supply of the products may be significantly delayed because of
                        events
                        outside our control;
                        we have suspended supply of the products for technical reasons, or notify you we are going to
                        suspend them for technical
                        reasons, in each case for a period of more than 30 days; or
                        you have a legal right to end the contract because of something we have done wrong.
                    </p>
                    <p id="agreement_text"><span id="span_1">Exercising your right to change your mind (Consumer
                            Contracts
                            Regulations 2013).
                        </span>
                        For most products bought online you have a legal right to change your mind within 14 days and
                        receive a refund. These
                        rights, under the Consumer Contracts Regulations 2013, are explained in more detail in these
                        terms.


                    </p>
                    <p id="agreement_text"><span id="span_1">Our goodwill guarantee.

                        </span>
                        Please note, these terms reflect the goodwill guarantee offered by BOSS DRINKS LTD of BOSS
                        DRINKS
                        LTD,3/5 Ripple
                        Road,Barking,Essex IG11 7ND, UK to its UK customers, which is more generous than your legal
                        rights
                        under the Consumer
                        Contracts Regulations in the ways set out below. This goodwill guarantee does not affect your
                        legal
                        rights in relation
                        to faulty or misdescribed products (see clause 2):
                    </p>
                    <p id="agreement_text"><span id="span_1">How our goodwill guarantee is more generous.

                        </span>
                        14 day period to change your mind. Consumer to pay costs of return.
                    </p>

                    <p id="agreement_text">Please note that to take advantage of our goodwill guarantee, the products
                        must
                        be in their original unused condition,
                        returned in their original packaging with a copy of the original delivery note provided.</p>

                    <p id="agreement_text">This does not affect your statutory rights.</p>
                    <p id="agreement_text"><span id="span_1">How long do I have to change my mind?

                        </span>
                        You have 14 days after the day you (or someone you nominate) receives the goods, <span
                            id="span_1">unless your
                            goods
                            are split into
                            several deliveries over different days.</span> In this case you have until 14 days after the
                        day
                        you (or
                        someone you nominate)
                        receives the last delivery to change your mind about the goods.
                    </p>
                    <p id="agreement_text"><span id="span_1">Ending the contract where we are not at fault and there is
                            no
                            right to change your mind.

                        </span>
                        Even if we are not at fault and you do not have a right to change your mind (see clause 1), you
                        can
                        still end the
                        contract before it is completed, but you may have to pay us compensation. A contract for goods
                        is
                        completed when the
                        product is delivered and paid for. If you want to end the contract in these circumstances, just
                        contact us to let us
                        know. The contract will end immediately and we will refund any sums paid by you for products not
                        provided but we may
                        deduct from that refund (or, if you have not made an advance payment, charge you) reasonable
                        compensation for the net
                        costs we will incur as a result of your ending the contract.
                    </p>


                    <h4 id="section_title">How to end the contract with us (including if you have changed your mind)
                    </h4>


                    <p id="agreement_text"><span id="span_1">Tell us you want to end the contract.
                        </span>
                        To end the contract with us, please let us know by doing one of the following:<br>
                        Phone or email. Call customer services on +44 20 000 00 or email us at <a
                            id="email_text">info@bossdrinks.com</a>.
                        Please
                        provide your name,
                        home address, details of the order and, where available, your phone number and email address.

                    </p>
                    <p id="agreement_text"><span id="span_1">Returning products after ending the contract.
                        </span>
                        . If you end the contract for any reason after products have been dispatched to you or you have
                        received them, you must
                        return them to us. You must either return the goods in person to where you bought them, arrange
                        for
                        them to be returned
                        to our registered address at BOSS DRINKS LTD,3/5 Ripple Road, Barking, Essex IG11 7ND, UK or
                        allow
                        us to collect them
                        from you. Please call customer services on +44 20 000 00 or email us at <a
                            id="email_text">info@bossdrinks.com</a> for a return label or to
                        arrange collection. If you are exercising your right to change your mind you must send off the
                        goods
                        within 30 days of
                        telling us you wish to end the contract.

                    </p>
                    <p id="agreement_text"><span id="span_1">When we will pay the costs of return.
                        </span>
                        We will only pay the costs of return:<br>
                        if the products are faulty or misdescribed;<br>
                        if you are ending the contract because we have told you of an upcoming change to the product or
                        these terms, an error in
                        pricing or description, a delay in delivery due to events outside our control or because you
                        have a
                        legal right to do so
                        as a result of something we have done wrong; or<br>
                        In all other circumstances (including where you are exercising your right to change your mind)
                        you
                        must pay the costs of
                        return.



                    </p>
                    <p id="agreement_text"><span id="span_1">What we charge for collection.
                        </span>
                        . If you are responsible for the costs of return and we are collecting the product from you, we
                        will
                        charge you the
                        direct cost to us of collection. The costs of collection will be the same as our charges for
                        standard delivery, see our
                        delivery policy.




                    </p>
                    <p id="agreement_text"><span id="span_1">How we will refund you.
                        </span>
                        We will refund you the price you paid for the products including delivery costs, by the method
                        you
                        used for payment.
                        However, we may make deductions from the price, as described below.




                    </p>

                    <p id="agreement_text"><span id="span_1">Deductions from refunds.
                        </span>
                        If you are exercising your right to change your mind:<br>
                        We may reduce your refund of the price (excluding delivery costs) to reflect any reduction in
                        the
                        value of the goods, if
                        this has been caused by your handling them in a way which would not be permitted in a shop. If
                        we
                        refund you the price
                        paid before we are able to inspect the goods and later discover you have handled them in an
                        unacceptable way, you must
                        pay us an appropriate amount.
                    </p>
                    <p id="agreement_text"><span id="span_1">The maximum refund for delivery costs will be the costs of
                            delivery by the least expensive delivery method we offer.
                        </span>
                        For example, if we offer delivery of a product within 3-5 days at one cost but you choose to
                        have
                        the product
                        delivered within 24 hours at a higher cost, then we will only refund what you would have paid
                        for
                        the cheaper delivery
                        option.

                    </p>
                    <p id="agreement_text"><span id="span_1">When your refund will be made.
                        </span>
                        We will make any refunds due to you as soon as possible. If you are exercising your right to
                        change
                        your mind then your
                        refund will be made within 14 days from the day on which we receive the product back from you
                        or, if
                        earlier, the day on
                        which you provide us with evidence that you have sent the product back to us.

                    </p>


                    <h4 id="section_title"></h4>

                    <p id="agreement_text"><span id="span_1">We may end the contract if you break it.
                        </span>
                        We may end the contract for a product at any time by writing to you if:<br>
                        you do not make any payment to us when it is due and you still do not make payment within 7 days
                        of
                        us reminding you
                        that payment is due;<br>
                        you do not, within a reasonable time of us asking for it, provide us with information that is
                        necessary for us to
                        provide the products;<br>
                        you do not, within a reasonable time, allow us to deliver the products to you;




                    </p>
                    <p id="agreement_text"><span id="span_1">You must compensate us if you break the contract
                        </span>
                        If we end the contract in the situations set out in clause 1 we will refund any money you have
                        paid
                        in advance for
                        products we have not provided but we may deduct or charge you reasonable compensation for the
                        net
                        costs we will incur as
                        a result of your breaking the contract.
                    </p>


                    <h4 id="section_title">If there is a problem with the product</h4>
                    <p id="agreement_text"><span id="span_1">How to tell us about problems.
                        </span>
                        . If you have any questions or complaints about the product, please contact us. You can
                        telephone
                        our customer service
                        team at +44 20 000 00 or write to us at our registered office at BOSS DRINKS LTD,3/5 Ripple
                        Road,
                        Barking, Essex IG11
                        7ND, UK or email <a id="email_text">info@bossdrinks.com</a> .
                        Summary of your legal rights. We are under a legal duty to supply products that are in
                        conformity
                        with this contract.
                        See the box below for a summary of your key legal rights in relation to the product. Nothing in
                        these terms will affect
                        your legal rights.


                    </p>
                    <p id="agreement_text"><span id="span_1">Summary of your key legal rights.
                        </span>

                        This is a summary of your key legal rights. These are subject to certain exceptions. For
                        detailed
                        information please
                        visit the Citizens Advice website <a id="email_text">www.adviceguide.org.uk</a> or call +44 (0)
                        20
                        000 00. The Consumer Rights Act 2015 says
                        goods must be as described, fit for purpose and of satisfactory quality. During the expected
                        life of
                        your product your
                        legal rights entitle you to the following:up to 30 days: if your item is faulty, then you can
                        get a
                        refund.up to six
                        months: if your faulty item can’t be repaired or replaced, then you’re entitled to a full
                        refund, in
                        most cases.up to
                        six years: if the item can be expected to last up to six years you may be entitled to a repair
                        or
                        replacement, or, if
                        that doesn’t work, some of your money back.

                    </p>
                    <p id="agreement_text"><span id="span_1">Your obligation to return rejected products.
                        </span>

                        If you wish to exercise your legal rights to reject products you must, arrange delivery of the
                        products back to us.
                        Please call customer services on +44 20 000 00 or email us at <a
                            id="email_text">info@bossdrinks.com</a>
                        for a
                        return label or to arrange
                        collection
                    </p>


                    <h4 id="section_title">Price and payment</h4>
                    <p id="agreement_text"><span id="span_1">Where to find the price for the product.</span>

                        The price of the product (which includes VAT) will be the price indicated on the order pages
                        when
                        you placed your order.
                        We use our best efforts to ensure that the price of the product advised to you is correct.
                        However
                        please see clause 3
                        for what happens if we discover an error in the price of the product you order.
                        We will pass on changes in the rate of VAT. If the rate of VAT changes between your order date
                        and
                        the date we supply
                        the product, we will adjust the rate of VAT that you pay, unless you have already paid for the
                        product in full before
                        the change in the rate of VAT takes effect.

                    </p>
                    <p id="agreement_text"><span id="span_1">What happens if we got the price wrong.</span>

                        . It is always possible that, despite our best efforts, some of the products we sell may be
                        incorrectly priced. We will
                        normally check prices before accepting your order so that, where the product’s correct price at
                        your
                        order date is less
                        than our stated price at your order date, we will charge the lower amount. If the product’s
                        correct
                        price at your order
                        date is higher than the price stated in our price list, we will contact you for your
                        instructions
                        before we accept your
                        order. If we accept and process your order where a pricing error is obvious and unmistakeable
                        and
                        could reasonably have
                        been recognised by you as a mispricing, we may end the contract, refund you any sums you have
                        paid
                        and require the
                        return of any goods provided to you.

                    </p>
                    <p id="agreement_text"><span id="span_1">When you must pay and how you must pay.</span>

                        We accept payment by all major credit and debit cards. You must pay for the products before we
                        dispatch them. We will
                        not charge you for the products until we dispatch them to you.
                    </p>
                    <p id="agreement_text"><span id="span_1">We can charge interest if you pay late.</span>

                        If you do not make any payment to us by the due date we may charge interest to you on the
                        overdue
                        amount at the rate of
                        1.5% a year above the base lending rate of HSBC Bank Plc from time to time. This interest shall
                        accrue on a daily basis
                        from the due date until the date of actual payment of the overdue amount, whether before or
                        after
                        judgment. You must pay
                        us interest together with any overdue amount.
                    </p>
                    <p id="agreement_text"><span id="span_1">What to do if you think an invoice is wrong.</span>


                        If you think an invoice is wrong please contact us promptly to let us know and we will not
                        charge
                        you interest until we
                        have resolved the issue.
                    </p>


                    <h4 id="section_title">Our responsibility for loss or damage suffered by you</h4>
                    <p id="agreement_text"><span id="span_1">We are responsible to you for foreseeable loss and damage
                            caused by us.</span>


                        If we fail to comply with these terms, we are responsible for loss or damage you suffer that is
                        a
                        foreseeable result of
                        our breaking this contract or our failing to use reasonable care and skill, but we are not
                        responsible for any loss or
                        damage that is not foreseeable. Loss or damage is foreseeable if either it is obvious that it
                        will
                        happen or if, at the
                        time the contract was made, both we and you knew it might happen, for example, if you discussed
                        it
                        with us during the
                        sales process.
                    </p>
                    <p id="agreement_text"><span id="span_1">We are not liable for business losses.</span>

                        We only supply the products for domestic and private use. If you use the products for any
                        commercial, business or
                        re-sale purpose we will have no liability to you for any loss of profit, loss of business,
                        business
                        interruption, or
                        loss of business opportunity.
                    </p>

                    <h4 id="section_title">How we may use your personal information</h4>
                    <p id="agreement_text"><span id="span_1">How we will use your personal information.</span><br>

                        We will use the personal information you provide to us in accordance with our <a
                            id="email_text">privacy
                            and
                            cookies policy</a>. Please read
                        these carefully.
                    </p>

                    <h4 id="section_title">Other important terms</h4>

                    <p id="agreement_text"><span id="span_1">We may transfer this agreement to someone else.</span>
                        We may transfer our rights and obligations under these terms to another organisation.

                    </p>
                    <p id="agreement_text"><span id="span_1">You need our consent to transfer your rights to someone
                            else</span>
                        (except that you can always transfer our guarantee). You may only transfer your rights or your
                        obligations under these
                        terms to another person if we agree to this in writing. However, you may transfer our guarantee
                        at
                        clause 4 to a person
                        who has acquired the product. We may require the person to whom the guarantee is transferred to
                        provide reasonable
                        evidence that they are now the owner of the relevant item or property.

                    </p>
                    <p id="agreement_text"><span id="span_1">Nobody else has any rights under this contract</span>

                        (except someone you pass your guarantee on to). This contract is between you and us. No other
                        person
                        shall have any
                        rights to enforce any of its terms, except as explained in clause 2 in respect of our guarantee.
                        Neither of us will need
                        to get the agreement of any other person in order to end the contract or make any changes to
                        these
                        terms.
                    </p>
                    <p id="agreement_text"><span id="span_1">If a court finds part of this contract illegal, the rest
                            will
                            continue in force.</span>
                        Each of the paragraphs of these terms operates separately. If any court or relevant authority
                        decides that any of them
                        are unlawful, the remaining paragraphs will remain in full force and effect.
                    </p>
                    <p id="agreement_text"><span id="span_1">Even if we delay in enforcing this contract, we can still
                            enforce it later.</span>
                        If we do not insist immediately that you do anything you are required to do under these terms,
                        or if
                        we delay in taking
                        steps against you in respect of your breaking this contract, that will not mean that you do not
                        have
                        to do those things
                        and it will not prevent us taking steps against you at a later date. For example, if you miss a
                        payment and we do not
                        chase you but we continue to provide the products, we can still require you to make the payment
                        at a
                        later date.
                    </p>

                    <p id="agreement_text"><span id="span_1">Which laws apply to this contract and where you may bring
                            legal
                            proceedings.</span>
                        These terms are governed by English law and you can bring legal proceedings in respect of the
                        products in the English
                        courts. If you live in Scotland you can bring legal proceedings in respect of the products in
                        either
                        the Scottish or the
                        English courts. If you live in Northern Ireland you can bring legal proceedings in respect of
                        the
                        products in either the
                        Northern Irish or the English courts.
                    </p>

















































                </div>

                <div class="second_tnc">
                    <a id="terms_delivery"></a>
                    <p id="main_heading_2">Delivery Terms & Conditions
                    <p>


                    <h4 id="section_title">Shipping rates – United Kingdom</h4>

                    <p id="agreement_text">We have selected several reputable courier services to deliver your parcels.
                        The
                        couriers we have chosen offer quick
                        reliable services to get your parcels to you safely and timely at a reasonable cost. Once your
                        address details have been
                        uploaded to their server, you will receive an email or/and an SMS with a delivery slot. You will
                        then have the ability
                        to change the delivery slot to suit your needs.</p>


                    <h4 id="second_tnc_sections">Domestic Free Shipping</h4>

                    <div class="P_SPAN_Div">
                        <div class="p_and_span">
                            <p>UK Mainland except some areas in Scotland. (3-5 working days) – </p><span
                                id="dark_text">Orders
                                over
                                £29.00</span>
                        </div>
                        <div class="p_and_span">
                            <p>Next Day* Service (order before 12:00) – </p><span id="dark_text">£4.99</span>
                        </div>
                        <div class="p_and_span">
                            <p>Scottish Highlands & Islands – </p><span id="dark_text">Orders over £99.00</span>
                        </div>
                        <div class="p_and_span">
                            <p>Northern Ireland –</p><span id="dark_text">Orders over £99.00</span>
                        </div>
                        <div class="p_and_span">
                            <p>Isles Of Scilly, Isle Of Man –</p><span id="dark_text">Orders over £99.00</span>
                        </div>
                        <div class="p_and_span">
                            <p>Channel Islands –</p><span id="dark_text">Orders over £59.00</span>
                        </div>



                    </div>


                    <h4 id="second_tnc_sections">Free Local Pickup</h4>

                    <h4 id="second_tnc_sections" style="color: #D99594;">* Temporarily Unavailable until we can
                        establish
                        the new trading rules.
                        Apologies for any inconvenience. We will get our
                        free local pickup services running again as soon as possible.</h4>


                    <p id="agreement_text" style="font-weight: 600; color: #244061;">We offer local free local pickup
                        for
                        customers who live
                        near to us, which can be collected from our warehouse in
                        Christchurch, Dorset. Details of our address for collection can be found here.</p>
                    <p id="agreement_text" style="font-weight: 600; color: #244061">Orders are normally available for
                        collection 24 hours
                        after being placed. Please have your order number handy when
                        coming to collect, so that we can find your order faster. Upon arrival please call 020 00000</p>


                    <h4 id="second_tnc_sections">Domestic Shipping</h4>
                    <p id="agreement_text">Please use the shipping calculator on the basket page.</p>

                    <h4 id="second_tnc_sections">Tracking</h4>
                    <div class="tracking">
                        <p>Royal Mail</p>
                        <p>DPD</p>
                        <p>Parcelforce</p>
                    </div>


                    <h4 id="second_tnc_sections">International Free Shipping</h4>
                    <h4 id="second_tnc_sections" style="color: #D99594;">* Temporarily disabled until we can establish
                        the
                        new trading rules. Apologies for any inconvenience.We will get our
                        export services running again as soon as possible.
                    </h4>


                    <div class="P_SPAN_Div">
                        <div class="p_and_span">
                            <p>Latvia, Portugal (5-6 working days) –</p><span id="dark_text">Temporarily
                                Unavailable</span>
                        </div>
                        <div class="p_and_span">
                            <p>Italy, Lithuania, Slovakia, Spain, Sweden (5-7 working days) –</p><span
                                id="dark_text">Temporarily
                                Unavailable</span>
                        </div>
                        <div class="p_and_span">
                            <p>Bulgaria, Croatia, Estonia, Finland, Greece, Romania (5-7 working days) –</p><span
                                id="dark_text">Temporarily Unavailable</span>
                        </div>
                        <div class="p_and_span">
                            <p>Belgium, Czech Republic, Germany, Luxembourg, Netherlands, Poland (3-5 working days) –
                            </p>
                            <span id="dark_text">Temporarily Unavailable</span>
                        </div>
                        <div class="p_and_span">
                            <p>Ireland, Austria, Denmark, France, Hungary, Slovenia (4-5 working days) –</p><span
                                id="dark_text">Temporarily Unavailable</span>
                        </div>




                    </div>


                    <p id="agreement_text">Our courier services do not deliver on weekends or bank holidays so any
                        orders
                        made on Friday before 13:00 will be
                        delivered on the following Monday and any orders made before or on a bank holiday will not be
                        delivered until the
                        following days.</p>

                    <p id="agreement_text">*Next day orders must be in before 12:00.</p>
                </div>

                <div class="third_tnc">
                    <a id="terms_privacy"></a>
                    <p id="main_heading_2">Privacy Policy & Cookies
                    <p>
                    <h4 id="sub_heading">OUR WEBSITE PRIVACY POLICY & COOKIES POLICY</h4>

                    <h4 id="section_title">INTRODUCTION</h4>

                    <p id="agreement_text">Welcome to the BOSS DRINKS LTD’s (“our”) privacy notice. We respect your
                        privacy
                        and is committed to protecting your
                        personal data. This privacy notice will inform you as to how we look after your personal data
                        when
                        you visit our website
                        or purchase any items from us and tell you about your privacy rights and how the law protects
                        you.
                    </p>

                    <h4 id="section_title">1. IMPORTANT INFORMATION AND WHO WE ARE</h4>
                    <p id="thrid_tnc_subtext">Purpose of this privacy notice</p>
                    <p id="agreement_text">This privacy notice aims to give you information on how we collect and
                        process
                        your personal data through your use of
                        this website, including any data you may provide through this website when you sign up to our
                        newsletter or purchase a
                        product.
                        This website is not intended for anyone under the age of 13 and we do not knowingly collect data
                        relating to children.
                        It is important that you read this privacy notice together with any other privacy notice or fair
                        processing notice we
                        may provide on specific occasions when we are collecting or processing personal data about you
                        so
                        that you are fully
                        aware of how and why we are using your data. This privacy notice supplements the other notices
                        and
                        is not intended to
                        override them.
                    </p>
                    <p id="thrid_tnc_subtext">Controller</p>
                    <p id="agreement_text">BOSS DRINKS LTD is the controller and responsible for your personal data.</p>

                    <p id="thrid_tnc_subtext">Contact details</p>
                    <p id="contact_details_3" style="margin-top: 15px;">Our full details are:</p>
                    <p id="contact_details_3">Email address: info@bossdrinks.com</p>
                    <p id="contact_details_3">Postal address: BOSS DRINKS LTD, 3/5 Ripple Road, Barking, Essex IG11 7ND
                    </p>
                    <p id="contact_details_3">Telephone number: 020 000 00</p>
                    <p id="contact_details_3" style="margin-top:5px;margin-bottom: 20px;">You have the right to make a
                        complaint at any time
                        to the Information
                        Commissioner’s Office (ICO),
                        the UK supervisory
                        authority for data protection issues (www.ico.org.uk). We would, however, appreciate the chance
                        to
                        deal with your
                        concerns before you approach the ICO so please contact us in the first instance.</p>

                    <p id="thrid_tnc_subtext">Changes to the privacy notice and your duty to inform us of changes</p>
                    <p id="agreement_text">It is important that the personal data we hold about you is accurate and
                        current.
                        Please keep us informed if your
                        personal data changes during your relationship with us.</p>

                    <p id="thrid_tnc_subtext">Third-party links</p>
                    <p id="agreement_text">This website may include links to third-party websites, plug-ins and
                        applications. Clicking on those links or enabling
                        those connections may allow third parties to collect or share data about you. We do not control
                        these third-party
                        websites and are not responsible for their privacy statements. When you leave our website, we
                        encourage you to read the
                        privacy notice of every website you visit.</p>

                    <h4 id="section_title">2. THE DATA WE COLLECT ABOUT YOU</h4>
                    <p id="agreement_text">Personal data, or personal information, means any information about an
                        individual
                        from which that person can be
                        identified. It does not include data where the identity has been removed (anonymous data).</p>
                    <p id="agreement_text">We may collect, use, store and transfer different kinds of personal data
                        about
                        you which we have grouped together
                        follows:</p>

                    <div class="data_3rd_tnc">
                        <div class="data_3rd_tnc_info">
                            <p><span id="span_1">• Identity Data</span>
                                includes first name, maiden name, last name, marital status, title and
                                gender.</p>
                        </div>
                        <div class="data_3rd_tnc_info">
                            <p><span id="span_1">• Contact Data</span>
                                includes billing address, delivery address, email address and telephone
                                numbers.</p>
                        </div>
                        <div class="data_3rd_tnc_info">
                            <p><span id="span_1">• Financial Data</span>
                                includes bank account and payment card details.</p>
                        </div>
                        <div class="data_3rd_tnc_info">
                            <p><span id="span_1">• Transaction Data</span>
                                includes details about payments to and from you and other details of products
                                and services you have purchased from us.</p>
                        </div>
                        <div class="data_3rd_tnc_info">
                            <p><span id="span_1">• Technical Data</span>
                                includes internet protocol (IP) address, your login data, browser type and
                                version, time zone setting and location,
                                browser plug-in types and versions, operating system and platform and other technology
                                on
                                the devices you use to access
                                this website.</p>
                        </div>
                        <div class="data_3rd_tnc_info">
                            <p><span id="span_1">• Profile Data</span>
                                includes your username and password, purchases or orders made by you, your
                                interests, preferences and feedback.</p>
                        </div>
                        <div class="data_3rd_tnc_info">
                            <p><span id="span_1">• Usage Data</span>
                                includes information about how you use our website, products and
                                services.</p>
                        </div>
                        <div class="data_3rd_tnc_info">
                            <p><span id="span_1">• Marketing and Communications Data</span>
                                includes your preferences in receiving marketing from us and your
                                communication preferences.</p>
                        </div>


                    </div>

                    <p id="agreement_text">We also collect, use and share <span id="span_1">Aggregated Data</span> such
                        as
                        statistical or demographic
                        data for any purpose. Aggregated Data
                        may be derived from your personal data but is not considered personal data in law as this data
                        does
                        <span id="span_1">not</span> directly or
                        indirectly reveal your identity. For example, we may aggregate your Usage Data to calculate the
                        percentage of users
                        accessing a specific website feature. However, if we combine or connect Aggregated Data with
                        your
                        personal data so that
                        it can directly or indirectly identify you, we treat the combined data as personal data which
                        will
                        be used in accordance
                        with this privacy notice.
                    </p>

                    <p id="agreement_text">We do not collect any <span id="span_1">Special Categories of Personal
                            Data</span> about you (this
                        includes details about your race or ethnicity,
                        religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade
                        union
                        membership,
                        information about your health and genetic and biometric data). Nor do we collect any information
                        about criminal
                        convictions and offences.</p>

                    <span id="span_1">If you fail to provide personal data</span>
                    <p id="agreement_text" style="margin-top: auto;">Where we need to collect personal data by law, or
                        under
                        the terms of a contract
                        we have with you and you fail to provide
                        that data when requested, we may not be able to perform the contract we have or are trying to
                        enter
                        into with you (for
                        example, to provide you with goods or services). In this case, we may have to cancel a product
                        or
                        service you have with
                        us but we will notify you if this is the case at the time.</p>


                    <h4 id="section_title">3. HOW IS YOUR PERSONAL DATA COLLECTED?</h4>
                    <p id="agreement_text">We use different methods to collect data from and about you including
                        through:
                    </p>

                    <p id="agreement_text"><span id="span_1">• Direct interactions.</span>
                        You may give us your Identity, Contact and Financial Data by filling in forms or by
                        corresponding
                        with us by post,
                        phone, email or otherwise. This includes personal data you provide when you order our products,
                        create an account on our
                        website, subscribe to our publications or give us some feedback.</p>
                    <p id="agreement_text"><span id="span_1">• Automated technologies or interactions.</span>
                        As you interact with our website, we may automatically collect Technical Data about your
                        equipment,
                        browsing actions and
                        patterns. We collect this personal data by using cookies and other similar technologies. Please
                        see
                        below for further
                        details regarding cookies.</p>
                    <p id="agreement_text"><span id="span_1">• Third parties or publicly available sources.</span>We may
                        receive personal data
                        about you from various third parties, such as Technical Data from analytics providers such
                        as Google and Contact, Financial and Transaction Data from providers of technical, payment and
                        delivery services.
                    </p>



                    <h4 id="section_title">4. HOW WE USE YOUR PERSONAL DATA</h4>
                    <p id="agreement_text">We will only use your personal data when the law allows us to. Most commonly,
                        we
                        will use your
                        personal data in the
                        following circumstances:</p>
                    <p id="agreement_text">• Where we need to perform the contract we are about to enter into or have
                        entered into with you.</p>
                    <p id="agreement_text">• Where it is necessary for our legitimate interests (or those of a third
                        party)
                        and your interests
                        and fundamental
                        rights do not override those interests.</p>
                    <p id="agreement_text">• Where we need to comply with a legal or regulatory obligation.</p>
                    <p id="agreement_text">Generally, we do not rely on consent as a legal basis for processing your
                        personal data other than in
                        relation to
                        sending third party direct marketing communications to you via email. You have the right to
                        withdraw
                        consent to
                        marketing at any time by contacting us.</p>



                    <table class="table_3rc_tnc">
                        <tr>
                            <th>Purpose/Activity</th>
                            <th>Type of data</th>
                            <th>Lawful basis for processing including basis of legitimate interest</th>
                        </tr>
                        <tr>
                            <td>To register you as a new customer</td>
                            <td>
                                <p>(a) Identity</p>
                                <p>(b) Contact</p>
                            </td>
                            <td>Performance of a contract with you</td>
                        </tr>
                        <tr>
                            <td>
                                <p>To process and deliver your order including:</p>
                                <p>(a) Manage payments, fees and charges</p>
                                <p>(b) Collect and recover money owed to us</p>
                            </td>
                            <td>
                                <p>(a) Identity</p>
                                <p>(b) Contact</p>
                                <p>(c) Financial</p>
                                <p>(d) Transaction</p>
                                <p>(e) Marketing and Communications</p>
                            </td>
                            <td>
                                <p>(a) Performance of a contract with you</p>
                                <p>(b) Necessary for our legitimate interests (to recover debts due to us)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>To manage our relationship with you which will include:</p>
                                <p>(a) Notifying you about changes to our terms or privacy policy</p>
                                <p>(b) Asking you to leave a review or take a survey</p>
                            </td>
                            <td>
                                <p>(a) Identity</p>
                                <p>(b) Contact</p>
                                <p>(c) Profile</p>
                                <p>(d) Marketing and Communications</p>
                            </td>
                            <td>
                                <p>(a) Performance of a contract with you</p>
                                <p>(b) Necessary to comply with a legal obligation</p>
                                <p>(c) Necessary for our legitimate interests (to keep our records updated and to study
                                    how
                                    customers use our
                                    products/services)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>To administer and protect our business and this website (including troubleshooting, data
                                analysis, testing, system
                                maintenance, support, reporting and hosting of data)</td>
                            <td>
                                <p>(a) Identity</p>
                                <p>(b) Contact</p>
                                <p>(c) Technical</p>
                            </td>
                            <td>
                                <p>(a) Necessary for our legitimate interests (for running our business, provision of
                                    administration and IT services,
                                    network security, to prevent fraud and in the context of a business reorganisation
                                    or
                                    group restructuring exercise)</p>
                                <p>(b) Necessary to comply with a legal obligation</p>
                            </td>
                        </tr>
                        <tr>
                            <td>To deliver relevant website content and advertisements to you and measure or understand
                                the
                                effectiveness of the
                                advertising we serve to you</td>
                            <td>
                                <p>(a) Identity</p>
                                <p>(b) Contact</p>
                                <p>(c) Profile</p>
                                <p>(d) Usage</p>
                                <p>(e) Marketing and Communications</p>
                                <p>(f) Technical</p>
                            </td>
                            <td>Necessary for our legitimate interests (to study how customers use our
                                products/services, to
                                develop them, to grow our
                                business and to inform our marketing strategy)</td>
                        </tr>
                        <tr>
                            <td>To use data analytics to improve our website, products/services, marketing, customer
                                relationships and experiences</td>
                            <td>
                                <p>(a) Technical</p>
                                <p>(b) Usage</p>
                            </td>
                            <td>Necessary for our legitimate interests (to define types of customers for our products
                                and
                                services, to keep our website
                                updated and relevant, to develop our business and to inform our marketing strategy)</td>
                        </tr>
                        <tr>
                            <td>To make suggestions and recommendations to you about goods or services that may be of
                                interest to you</td>
                            <td>
                                <p>(a) Identity</p>
                                <p>(b) Contact</p>
                                <p>(c) Technical</p>
                                <p>(d) Usage</p>
                                <p>(e) Profile</p>
                            </td>
                            <td>Necessary for our legitimate interests (to develop our products/services and grow our
                                business)</td>
                        </tr>

                    </table>


                    <p id="thrid_tnc_subtext">Marketing</p>

                    <p id="agreement_text">We strive to provide you with choices regarding certain personal data uses,
                        particularly around marketing and
                        advertising. We may use your Identity, Contact, Technical, Usage and Profile Data to form a view
                        on
                        what we think you
                        may want or need, or what may be of interest to you. This is how we decide which products,
                        services
                        and offers may be
                        relevant for you (we call this marketing).
                        You will receive marketing communications from us if you have requested information from us or
                        purchased goods from us
                        and, in each case, you have not opted out of receiving that marketing. We will get your express
                        opt-in consent before we
                        share your personal data with any third party for marketing purposes.
                    </p>
                    <p id="thrid_tnc_subtext">Opting out</p>

                    <p id="agreement_text">You can ask us or third parties to stop sending you marketing messages at any
                        time by contacting us.
                        Where you opt out of receiving these marketing messages, this will not apply to personal data
                        provided to us as a result
                        of a product purchase, or other transactions.

                    </p>
                    <p id="thrid_tnc_subtext">Change of purpose</p>

                    <p id="agreement_text">We will only use your personal data for the purposes for which we collected
                        it,
                        unless we reasonably consider that we
                        need to use it for another reason and that reason is compatible with the original purpose. If
                        you
                        wish to get an
                        explanation as to how the processing for the new purpose is compatible with the original
                        purpose,
                        please contact us.
                        If we need to use your personal data for an unrelated purpose, we will notify you and we will
                        explain the legal basis
                        which allows us to do so. Please note that we may process your personal data without your
                        knowledge
                        or consent, in
                        compliance with the above rules, where this is required or permitted by law.


                        <a id="terms_cookies"></a>

                    <h4 id="section_title">5. COOKIES</h4>
                    <p id="agreement_text">Our website uses cookies to distinguish you from other users of our website.
                        This
                        helps us to provide you with a good
                        experience when you browse our website and also allows us to improve our site. By continuing to
                        browse the site, you are
                        agreeing to our use of cookies.
                        A cookie is a small file of letters and numbers that we store on your browser or the hard drive
                        of
                        your computer if you
                        agree. Cookies contain information that is transferred to your computer’s hard drive.
                    </p>

                    <p id="agreement_text">We use the following cookies:</p>
                    </p>


                    <p id="coockies_p"><span id="span_1">• Strictly necessary cookies:</span>
                        These are cookies that are required for the operation of our website. We use cookies in order to
                        store your product
                        selection information into our shopping basket.</p>
                    <p id="coockies_p"><span id="span_1">• Analytical/performance cookies:</span>
                        These allow us to recognise and count the number of visitors and to see how visitors move around
                        our
                        website when they
                        are using it. This helps us to improve the way our website works, for example, by ensuring that
                        users are finding what
                        they are looking for easily.</p>
                    <p id="coockies_p"><span id="span_1">• Functionality cookies:</span>
                        These are used to recognise you when you return to our website. This enables us to personalise
                        our
                        content for you,
                        greet you by name and remember your preferences (for example, your choice of language or
                        region).
                    </p>
                    <p id="coockies_p"><span id="span_1">•Targeting cookies:</span>
                        These cookies record your visit to our website, the pages you have visited and the links you
                        have
                        followed. We will use
                        this information to make our website and the advertising displayed on it more relevant to your
                        interests. We may also
                        share this information with third parties for this purpose.
                        Please note that third parties (including, for example, advertising networks and providers of
                        external services like web
                        traffic analysis services) may also use cookies, over which we have no control. These cookies
                        are
                        likely to be
                        analytical/performance cookies or targeting cookies
                        You block cookies by activating the setting on your browser that allows you to refuse the
                        setting of
                        all or some
                        cookies. However, if you use your browser settings to block all cookies (including essential
                        cookies) you may not be
                        able to access all or parts of our site.


                    </p>


                    <h4 id="section_title">6. DISCLOSURES OF YOUR PERSONAL DATA</h4>

                    <p id="regular_p">• Service providers who provide IT and system administration services.</p>
                    <p id="regular_p">• Professional advisers including lawyers, bankers, auditors and insurers who
                        provide
                        consultancy, banking, legal,
                        insurance and accounting services.</p>
                    <p id="regular_p">• HM Revenue & Customs, regulators and other authorities based in the United
                        Kingdom
                        who require reporting of processing
                        activities in certain circumstances.</p>
                    <p id="regular_p">• Third parties to whom we may choose to sell, transfer, or merge parts of our
                        business or our assets. Alternatively, we
                        may seek to acquire other businesses or merge with them. If a change happens to our business,
                        then
                        the new owners may
                        use your personal data in the same way as set out in this privacy notice.</p>
                    <p id="regular_p">We require all third parties to respect the security of your personal data and to
                        treat it in accordance with the law.
                        We do not allow our third-party service providers to use your personal data for their own
                        purposes
                        and only permit them
                        to process your personal data for specified purposes and in accordance with our instructions.
                    </p>


                    <h4 id="section_title">7. INTERNATIONAL TRANSFERS</h4>
                    <p id="regular_p">We may share your personal data outside the European Economic Area (EEA) in some
                        instances to process your order or
                        carry out our services. Whenever we transfer your personal data out of the EEA, we ensure a
                        similar
                        degree of protection
                        is afforded to it by ensuring at least one of the following safeguards is implemented:</p>
                    <p id="regular_p">• We will only transfer your personal data to countries that have been deemed to
                        provide an adequate level of protection
                        for personal data by the European Commission.</p>
                    <p id="regular_p">• Where we use certain service providers, we may use specific contracts approved
                        by
                        the European Commission which give
                        personal data the same protection it has in Europe.</p>
                    <p id="regular_p">• Where we use providers based in the US, we may transfer data to them if they are
                        part of the Privacy Shield which
                        requires them to provide similar protection to personal data shared between the Europe and the
                        US.
                    </p>
                    <p id="regular_p">Please contact us if you want further information on the specific mechanism used
                        by us
                        when transferring your personal
                        data out of the EEA</p>


                    <h4 id="section_title">8. DATA SECURITY</h4>

                    <p id="agreement_text">We have put in place appropriate security measures to prevent your personal
                        data
                        from being accidentally lost, used or
                        accessed in an unauthorised way, altered or disclosed. In addition, we limit access to your
                        personal
                        data to those
                        employees, agents, contractors and other third parties who have a business need to know. They
                        will
                        only process your
                        personal data on our instructions and they are subject to a duty of confidentiality.</p>
                    <p id="regular_p">We have put in place procedures to deal with any suspected personal data breach
                        and
                        will notify you and any applicable
                        regulator of a breach where we are legally required to do so.</p>



                    <h4 id="section_title">9. DATA RETENTION</h4>
                    <p id="thrid_tnc_subtext">How long will you use my personal data for?</p>
                    <p id="agreement_text">We will only retain your personal data for as long as necessary to fulfil the
                        purposes
                        we collected it for, including
                        for the purposes of satisfying any legal, accounting, or reporting requirements.
                        To determine the appropriate retention period for personal data, we consider the amount, nature,
                        and
                        sensitivity of the
                        personal data, the potential risk of harm from unauthorised use or disclosure of your personal
                        data,
                        the purposes for
                        which we process your personal data and whether we can achieve those purposes through other
                        means,
                        and the applicable
                        legal requirements.
                        By law we have to keep basic information about our customers (including Contact, Identity,
                        Financial
                        and Transaction
                        Data) for six years after they cease being customers.
                        In some circumstances you can ask us to delete your data: see paragraph 10 below for further
                        information.
                    </p>


                    <h4 id="section_title">10. YOUR LEGAL RIGHTS</h4>
                    <p id="agreement_text">Under certain circumstances, you have rights under data protection laws in
                        relation to your personal data. In
                        particular, you have the right to:</p>


                    <p id="coockies_p"><span id="span_1">• Request access</span>
                        to your personal data (commonly known as a “data subject access request”). This enables you to
                        receive a copy of the
                        personal data we hold about you and to check that we are lawfully processing it.</p>
                    <p id="coockies_p"><span id="span_1">• Request correction</span>
                        of the personal data that we hold about you. This enables you to have any incomplete or
                        inaccurate
                        data we hold about
                        you corrected, though we may need to verify the accuracy of the new data you provide to us.</p>
                    <p id="coockies_p"><span id="span_1">• Request erasure</span>
                        of your personal data. This enables you to ask us to delete or remove personal data where there
                        is
                        no good reason for us
                        continuing to process it. You also have the right to ask us to delete or remove your personal
                        data
                        where you have
                        successfully exercised your right to object to processing (see below), where we may have
                        processed
                        your information
                        unlawfully or where we are required to erase your personal data to comply with local law. Note,
                        however, that we may not
                        always be able to comply with your request of erasure for specific legal reasons which will be
                        notified to you, if
                        applicable, at the time of your request.</p>
                    <p id="coockies_p"><span id="span_1">• Object to processing</span>
                        of your personal data where we are relying on a legitimate interest (or those of a third party)
                        and
                        there is something
                        about your particular situation which makes you want to object to processing on this ground as
                        you
                        feel it impacts on
                        your fundamental rights and freedoms. You also have the right to object where we are processing
                        your
                        personal data for
                        direct marketing purposes. In some cases, we may demonstrate that we have compelling legitimate
                        grounds to process your
                        information which override your rights and freedoms.</p>
                    <p id="coockies_p"><span id="span_1">• Request restriction of processing</span>
                        of your personal data. This enables you to ask us to suspend the processing of your personal
                        data in
                        the following
                        scenarios: (a) if you want us to establish the data’s accuracy; (b) where our use of the data is
                        unlawful but you do not
                        want us to erase it; (c) where you need us to hold the data even if we no longer require it as
                        you
                        need it to establish,
                        exercise or defend legal claims; or (d) you have objected to our use of your data but we need to
                        verify whether we have
                        overriding legitimate grounds to use it.</p>
                    <p id="coockies_p"><span id="span_1">• Request the transfer</span>
                        of your personal data to you or to a third party. We will provide to you, or a third party you
                        have
                        chosen, your
                        personal data in a structured, commonly used, machine-readable format. Note that this right only
                        applies to automated
                        information which you initially provided consent for us to use or where we used the information
                        to
                        perform a contract
                        with you.</p>
                    <p id="coockies_p"><span id="span_1">• Withdraw consent at any time</span>
                        where we are relying on consent to process your personal data. However, this will not affect the
                        lawfulness of any
                        processing carried out before you withdraw your consent. If you withdraw your consent, we may
                        not be
                        able to provide
                        certain products or services to you. We will advise you if this is the case at the time you
                        withdraw
                        your consent.
                        If you wish to exercise any of the rights set out above, please contact us.
                    </p>



                </div>

                <button id="i_agree_btn"><span>I Agree</span></button>

            </div>







        </div>


    </div>


@endsection

@push('script')

    <script>
        const oldData = JSON.parse(localStorage.getItem('cartDetails'))
        const subTotal = document.getElementById('sub-total')

        window.onload = () => {
            const oldData = JSON.parse(localStorage.getItem('cartDetails'))
            const orderItems = document.getElementById('order-items');
            if (oldData?.productDetails?.length > 0) {
                for (let i = 0; i < oldData.productDetails.length; i++) {
                    let addCartItem = ""
                    addCartItem += "<div class='cart-box' id='box_" + oldData.productDetails[i].productId + "'>";
                        addCartItem += "<button class='cart-close-btn' onclick='closeCartItem(event," + oldData.productDetails[i].productId +
                        ")'>&#10006;</button>";
                    addCartItem += "<div class='cart_img'>";
                    addCartItem += "<img src='/Size_4  50x130px/Energy-Boss---IT-(13-10-2021)---Blue-BG.png' alt=''>";
                    addCartItem += "</div>";
                    addCartItem += "<div class='count_text cart_text'>";
                    addCartItem += "<p>"+oldData.productDetails[i].title+"</p>";
                    addCartItem += "<h4>"+oldData.productDetails[i].deliveryTitle+"</h4>";
                    addCartItem +=
                        "<h4 style='font-size: 17px; margin-top: auto;' class='total-amount'><span>&euro;</span><span class='per-product-total'>" +
                        oldData.productDetails[i].totalAmount.toFixed() + "</span></h4>";
                    addCartItem += "</div>";
                    addCartItem += "<div class='counterBOX cart_counter'>";
                    addCartItem += " <button onclick='cartQuantityDecrement(" + i + "," + oldData.productDetails[i]
                        .productPrice +
                        ")'>-</button>";
                    addCartItem += "<h4 id='ROOT' class='root'>" + oldData.productDetails[i].quantity + "</h4>";
                    addCartItem += "<button onclick='cartQuantityIncrement(" + i + "," + oldData.productDetails[i]
                        .productPrice + ")'>+</button>";
                    addCartItem += "</div>";
                    addCartItem += "<div class='cart_root'>";
                    addCartItem += "<h4 id='ROOT_2'></h4>";
                    addCartItem += "</div>";
                    addCartItem += "</div>";
                    orderItems.insertAdjacentHTML("beforeend", addCartItem);
                }

                subTotal.innerHTML = oldData.subTotal
            }
            else{
               document.getElementById('checkout_cart').style="display:none"
                orderItems.innerText='There are no items in this cart'
            }



        }

        const cartQuantityIncrement = (productIndx, price) => {
            const increments = document.querySelectorAll('.root')
            const totalAmount = document.querySelectorAll('.per-product-total')
            const productDetails = oldData.productDetails[productIndx]
            if (productDetails) {
                productDetails.quantity += 1
                productDetails.totalAmount += price
                increments[productIndx].innerText = productDetails.quantity
                totalAmount[productIndx].innerText = productDetails.totalAmount.toFixed(2)
                localStorage.removeItem('cartDetails')
                localStorage.setItem('cartDetails', JSON.stringify(oldData))
                calculateTotalAmount()
            }
        }

        const cartQuantityDecrement = (productIndx, price) => {
            const increments = document.querySelectorAll('.root')
            const totalAmount = document.querySelectorAll('.per-product-total')
            const productDetails = oldData.productDetails[productIndx]
            if (productDetails.quantity > 0) {
                productDetails.quantity = productDetails.quantity - 1
                productDetails.totalAmount = productDetails.totalAmount - price
                if (productDetails.totalAmount < 1) {
                    totalAmount[productIndx].innerText = 0
                    productDetails.totalAmount = 0
                } else {
                    totalAmount[productIndx].innerText = productDetails.totalAmount.toFixed(2)
                }
                increments[productIndx].innerText = productDetails.quantity
                localStorage.removeItem('cartDetails')
                localStorage.setItem('cartDetails', JSON.stringify(oldData))
            }
            calculateTotalAmount()

        }

        const calculateTotalAmount = () => {
            let totalAmount = 0
            if (oldData?.productDetails?.length > 0) {
                const totalAmountOfPerProduct = document.querySelectorAll('.per-product-total')
                for (let i = 0; i < totalAmountOfPerProduct.length; i++) {
                    totalAmount += parseInt(totalAmountOfPerProduct[i].innerText)
                }
                oldData.subTotal = totalAmount
                subTotal.innerText = totalAmount
            } else {
                subTotal.innerText = 0
            }
            localStorage.removeItem('cartDetails')
            localStorage.setItem('cartDetails', JSON.stringify(oldData))

        }

        const closeCartItem = (event, productId) => {
            event.preventDefault();
            const productIndx = oldData.productDetails.findIndex((element, index) => {
                if (element.productId === productId) {
                    return true
                }
            })
            oldData.productDetails.splice(productIndx, 1)
            document.getElementById("box_" + productId).remove()
            if (oldData?.productDetails?.length < 1) {
                oldData.subTotal = 0
            }
            localStorage.setItem('cartDetails', JSON.stringify(oldData))
            calculateTotalAmount()
        }
    </script>

@endpush
