@extends('frontend.layouts.master')

@section('styles')

@endsection

@section('UK-REGISTER', 'Profile')

@section('content')

@if (session()->has('success'))
                      <div class="row" style="display: flex;justify-content: center;">
                        <div class="col-md-8">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    @endif
@if($step === 1)
<div class="conatainr int_registration">
        <div class="int_reg_info">
            <h4>New Customer Registration</h4>
            <p>Thanks for choosing to open an account with BOSS Drinks.Pleasse make sure you are eligible to apply</p>
            <div class="bullet_text" style="display: flex; flex-direction: column   ;">
                <small>&#8226;You're aged 18 or over</small>
                <small>&#8226;You are the owner or a dirctor of the business you're applying on behalf of</small>

            </div>
            <small>To register as a new customer please start by entering your email address</small>
            <div class="int-reg-form">
                <form action="{{route('vendor.inter.register')}}" method="post" enctype="multipart/form">
                  @csrf
                  <input type="hidden" name="step" value="1"/>
                    <div class="only_email">
                        <h4>Email Address:</h4>
                        <input type="email" id="email_int_reg" name="email">
                        @if ($errors->error->has('email'))
                                <span class="text-danger" role="alert">
                                <strong>{{ $errors->error->first('email') }}</strong>
                            </span>
                            @endif
                    </div>
                    <button type="submit">SUBMIT</button>
                </form>
            </div>

        </div>

    </div>
@elseif($step === 2)

<div class="container full_int_reg_section">
        <h4>New Customer Registration</h4>
        <form action="{{route('vendor.inter.register')}}" method="post" enctype="multipart/form">
                  @csrf
                  <input type="hidden" name="email" value="@if(Session::has('vendor_inter_email')){{ Session::get('vendor_inter_email')}}@endif">
        <div class="first_form_int">
            <div class="form_int_1">
                <div class="reg_title">Title:</div>
                <input type="text" name="title">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Customer Name:</div>
                <input type="text" name="customer_name">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Contact Name:</div>
                <input type="text" name="contact_name" placeholder="optional">
            </div>
        </div>

        <h4>Business Details</h4>

        <div class="first_form_int">
            <div class="form_int_1">
                <div class="reg_title">Business Name:</div>
                <input type="text" name="busi_name">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Business Adreess:</div>
                <input type="text" name="busi_address1">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Business Address:</div>
                <input type="text" name="busi_address2">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Business Address</div>
                <input type="text" name="busi_address3" placeholder="optional">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Business Postcode:</div>
                <input type="text" name="busi_post_code">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Business Tel No:</div>
                <input type="text" name="busi_tel_no">
            </div>
            <div class="form_int_1">
                <div class="reg_title">VAT Number:</div>
                <input type="text" name="busi_vat">
            </div>

        </div>

        <h4>Your Details</h4>

        <div class="first_form_int">
            <div class="form_int_1">
                <div class="reg_title">Home Address:</div>
                <input type="text" name="address_1">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Home Adreess:</div>
                <input type="text" name="address_2">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Home Address:</div>
                <input type="text" name="address_3" placeholder="optional">
            </div>
            <div class="form_int_1">
                <div class="reg_title" name="post_code">Home Postcode:</div>
                <input type="text">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Home Tel No:</div>
                <input type="text" name="home_tel_no">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Mobile No:</div>
                <input type="text" name="mobile_no">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Email Address:</div>
                <input type="text" name="persional_email">
            </div>
            <div class="form_int_1">
                <div class="reg_title">Where did you hear about us ?</div>
                <select name="recom" id="">
                    <option value="">(Please Select)</option>
                    <option value="Company Website">Company Website</option>
                    <option value="Search Engine">Search Engine</option>
                    <option value="Existing Customer Recommendation">Existing Customer Recommendation</option>
                    <option value="Depot Visit">Depot Visit</option>
                </select>
            </div>



            <div class="Final_part_reg">
                <div class="checkbox_part"><input type="checkbox" name="terms_condition" id="int_reg_checkbox"></div>

                <div class="TandC_text">By submitting, I agree with the <a href="" id="T_and_C">Terms and
                        Conditions</a>. I am over 18 and
                    I confirm the
                    information provided is accurate and truthful.

                    BOSS Drinks reserve the right to amend these terms and conditions without notice.</div>
            </div>

            <div class="send_button">
                <button type="submit">Send</button>
            </div>


        </div>

    </div>


    <div class="modal-bg">
        <div class="modal_tnc">
            <span class="modal_close">X</span>
            <p id="main_heading">TERMS AND CONDITIONS OF SALE
            <p>

            <h4 id="section_title">1. INTERPRETATION</h4>


            <p id="p1">1.1 In these Terms the following
                definitions apply:</p>

            <div>

                <div class="term_meaning">
                    <p id="term_name">“BGL”</p>
                    <p id="term_description">Briton Group Limited (Registered in England under number 11873983)
                        whose

                        registered office is at 3 Ripple Road, Barking,Essex, IG11 7ND – United Kingdom</p>
                </div>
                <div class="term_meaning">
                    <p id="term_name">“Buyer”</p>
                    <p id="term_description">The party identified on the Order for the Goods accepted by BGL;</p>
                </div>
                <div class="term_meaning">
                    <p id="term_name">“Contract”</p>
                    <p id="term_description">The contract for the sale and purchase of the Goods incorporating these
                        terms
                        and the Order;</p>
                </div>

                <div class="term_meaning">
                    <p id="term_name">“Goods”</p>
                    <p id="term_description">the goods identified on the Order (including any instalment of the
                        goods or any
                        parts for them) which BGL is to supply in accordance with the Contract;</p>
                </div>

                <div class="term_meaning">
                    <p id="term_name">"Order"</p>
                    <p id="term_description">Means an order for the supply of Goods from BGL placed by the Buyer in
                        accordance with these Terms;</p>
                </div>
                <div class="term_meaning">
                    <p id="term_name">"Order Confirmation"</p>
                    <p id="term_description">has the meaning given to it in clause 3.3.</p>
                </div>




            </div>

            <h4 id="terms">“Terms”</h4>

            <p id="terms_text">1.2 In these Terms, unless the context requires otherwise: (i) any clause, schedule
                or other
                headings in these
                Conditions is included for convenience only and shall have no effect on the interpretation of the
                Conditions; (ii) a
                reference to a ‘party’ includes that party’s personal representatives, successors and permitted
                assigns;
                (iii) a
                reference to a ’company’ includes any company, corporation or other body corporate, wherever and
                however
                incorporated or
                established; (iv) any words that follow 'include', 'includes', 'including', ‘in particular’ or any
                similar words and
                expressions shall be construed as illustrative only and shall not limit the sense of any word,
                phrase,
                term, definition
                or description preceding those words; (v) a reference to ‘writing’ or ‘written’ includes any method
                of
                reproducing words
                in a legible and non-transitory form; and (vi) a reference to legislation is a reference to that
                legislation as amended,
                extended, re-enacted or consolidated from time to time and a reference to legislation includes all
                subordinate
                legislation made from time to time under that legislation.</p>

            <h4 id="section_title">2. AGREEMENT</h4>

            <p id="agreement_text">2.1 BGL shall sell and the Buyer shall purchase the Goods subject to these Terms
                which shall govern
                the
                Contract, and
                any terms which the Buyer may purport to apply are expressly excluded. They supersede any previously
                issued terms and
                conditions of purchase or supply.</p>

            <p id="agreement_text">2.2 No variation to these Terms shall be binding unless agreed by a director of
                BGL. Acceptance of
                delivery of the Goods
                shall be deemed conclusive evidence of the Buyer’s acceptance of these Conditions.</p>

            <p id="agreement_text">2.3 The agents of BGL are not authorised to make any representations concerning
                the Goods unless
                confirmed by BGL in
                writing and in entering into the Contract the Buyer acknowledges that it does not rely on any such
                representations which
                are not so confirmed. Any advice or recommendation given to the Buyer by agents of BGL as to the
                storage, application or
                use of the Goods which is not confirmed in writing by BGL is followed or acted on entirely at the
                Buyer’s own risk, and
                accordingly BGL shall not be liable for any such advice or recommendation which is not so confirmed.
            </p>

            <p id="agreement_text">2.4 Marketing and other promotional material relating to the Goods are
                illustrative only and do not
                form
                part of the
                Contract.</p>

            <h4 id="section_title">3. ORDERS AND SPECIFICATIONS</h4>

            <p id="agreement_text"> 3.1 The Buyer shall from time to time submit written Orders to BGL stating the
                Buyer’s requirements
                for
                the Goods. Each
                such Order shall constitute an offer to purchase the Goods specified in the Order subject to these
                Terms.</p>

            <p id="agreement_text">3.2 The Buyer shall be responsible to BGL for ensuring the accuracy of the Order
                submitted by the
                Buyer,
                and for giving
                BGL any necessary information relating to the Goods within a sufficient time to enable BGL to
                perform
                the Contract.</p>

            <p id="agreement_text">3.3 An Order shall not be accepted, and no binding obligation to supply any Goods
                shall arise, until
                the
                earlier of (i)
                BGL’s written acceptance of the Order or (ii) BGL dispatching the Goods or notifying the Buyer that
                they
                are available
                for collection (as the case may be) ("Order Confirmation").</p>

            <p id="agreement_text">3.4 The quantity, quality and description of the Goods and any specification for
                them shall be as
                set
                out in the Order
                submitted by the Buyer (subject to acceptance by BGL) and BGL shall use its reasonable endeavours to
                meet the
                requirements of the Buyer for the supply of the Goods under the Contract. Notwithstanding the above
                there shall be no
                obligation upon BGL to continue to supply the Goods and BGL shall remain entitled to make such
                alterations to the
                description or specification of the Goods as it may think fit, or as are otherwise required to
                conform
                with any
                applicable statutory or EU requirements subject to clause 4.4.</p>

            <p id="agreement_text">3.5 No Order which has been accepted by BGL may be cancelled by the Buyer except
                with the agreement
                in
                writing of BGL
                and on terms that the Buyer shall indemnify BGL in full against all loss (including loss of profit),
                costs (including
                the cost of all labour and materials used), damages, charges and expenses incurred by BGL as a
                result of
                cancellation.</p>

            <p id="agreement_text">3.6 No Goods are supplied on a sale or return basis; all Goods are offered for
                sale subject to
                availability; and Orders
                shall be for the minimum quantities (in terms of volume and or value) specified by BGL from time to
                time.</p>

            <h4 id="section_title">4. PRICE</h4>

            <p id="agreement_text">4.1 The price of the Goods shall be BGL’s quoted price or, where no price has
                been quoted (or a
                quoted
                price is no
                longer valid), the price listed in the Price List. All prices quoted are valid for 90 days only or
                until
                earlier
                acceptance by the Buyer, after which time they may be altered by BGL without giving notice to the
                Buyer.
            <p>

            <p id="agreement_text">4.2 BGL reserves the right, by giving written notice to the Buyer at any time
                before delivery, to
                increase the price of
                the Goods to reflect any increase in the cost to BGL which is due to any factor beyond the control
                of
                BGL (such as,
                without limitation, any foreign exchange fluctuation, currency regulation, alteration of duties,
                significant increase in
                the costs of labour, materials or other costs of manufacture), any change in delivery dates,
                quantities
                or
                specifications for the Goods which is requested by the Buyer, or any delay caused by any
                instructions of
                the Buyer or
                failure of the Buyer to give BGL adequate information or instructions.</p>

            <p id="agreement_text">4.3 The price is exclusive of any applicable value added tax, levies, assessments
                and other fees
                imposed
                on the purchase
                or import of the Goods for which the Buyer shall be additionally liable to pay to BGL.</p>

            <p id="agreement_text">4.4 The Buyer shall be responsible for compliance with all laws, registrations
                and regulations
                applicable in the
                location in which the Goods are to be re-sold by the Buyer and all associated costs.</p>

            <p id="agreement_text">4.5 The Buyer shall indemnify BGL in full against all losses (including loss of
                profit), costs
                (including the cost of
                all labour and materials used), damages, charges, claims, penalties, fines and expenses incurred by
                BGL
                as a result of
                the Buyer's failure to comply with its obligations</p>

            <p id="agreement_text">4.6 If pallets and/or returnable containers are delivered with the Goods to the
                Buyer then the Buyer shall be required
                to retain and maintain in good condition any such pallets and/or returnable containers until such
                time as they are
                collected by or on behalf of BGL. The Buyer hereby agrees to indemnify BGL against any costs
                incurred by BGL in the
                purchase of replacement pallets and/or returnable containers if the Buyer fails to make the pallets
                or returnable
                containers available for collection or if the pallets and/or returnable containers are otherwise
                found upon collection
                to be no longer in a useable condition.
            </p>

            <h4 id="section_title">5. PAYMENT</h4>

            <p id="agreement_text">5.1 Subject to any special terms agreed in writing between the Buyer and BGL, BGL
                may invoice the Buyer for the price of
                the Goods on or at any time after delivery of the Goods, unless the Goods are to be collected by the
                Buyer or the Buyer
                wrongfully fails to take delivery of the Goods in which event BGL shall be entitled to invoice the
                Buyer for the price
                at any time after BGL has notified the Buyer that the Goods are ready for collection or (as the case
                may be) BGL has
                tendered delivery of the Goods


            </p>
            <p id="agreement_text">
                5.2 The Buyer shall pay the price of the Goods (less any discount to which the Buyer is entitled,
                but without any other
                deduction) within 30 days of the date of BGL’s invoice (or as otherwise agreed between the parties
                and notified to the
                Buyer on the invoice), and BGL shall be entitled to recover the price, notwithstanding that delivery
                may not have taken
                place and the property in the Goods has not passed to the Buyer.
            </p>
            <p id="agreement_text">
                5.3 Payment shall be in the currency as set out in the invoice. If payment is to be made in the
                currency of the Euro and
                the Euro ceases to be a lawful currency in the place of domicile or incorporation of the Buyer
                payment shall be made in
                the currency as notified by BGL at its sole discretion.

            </p>
            <p id="agreement_text">
                5.4 The time of payment shall be of the essence of the Contract. Receipts for payment will be issued
                only on request.
            </p>
            <p id="agreement_text">
                5.5 If the Buyer fails to make any payment in full on the due date then, without limiting any other
                right or remedy
                available to BGL, BGL may: (i) cancel the Contract and/or suspend any further deliveries of Goods to
                the Buyer; and/or
                (ii) charge the Buyer interest (both before and after any judgment) on the amount unpaid, at the
                rate of 4% per cent per
                annum above National Westminster Bank base rate from time to time, until payment in full is made (a
                part of a month
                being treated as a full month for the purpose of calculating interest).
            </p>

            <h4 id="section_title">6. DELIVERY</h4>
            <p id="agreement_text">6.1 An Order shall specify whether the Goods are to be (i) delivered by BGL, or
                by a carrier appointed by BGL, to the
                delivery location on the date(s) specified in the Order; or (ii) made available for collection by
                the Buyer at BGL's, or
                carrier's, premises set out in the Order (as the case may be). The Buyer shall collect the Goods
                within the period
                specified in the Order.</p>
            <p id="agreement_text">6.2 The Goods shall be deemed delivered: (i) if delivered by BGL or a carrier
                appointed by BGL, on completion of
                unloading of the Goods at the delivery location; or (ii) if collected by the Buyer or a carrier
                appointed by Buyer, when
                BGL makes the Goods available for collection at BGL's, or carrier's premises (as the case may be).
            </p>
            <p id="agreement_text">6.3 Any dates quoted for delivery of the Goods are approximate only and BGL shall
                not be liable for any delay in
                delivery of the Goods however caused. Time for delivery shall not be of the essence of the Contract
                unless previously
                agreed by BGL in writing. The Goods may be delivered by BGL in advance of the quoted delivery date
                on giving reasonable
                notice to the Buyer.
            </p>
            <p id="agreement_text">6.4 Where the Goods are to be delivered in instalments, each delivery shall
                constitute a separate contract and failure
                by BGL to deliver any one or more of the instalments in accordance with the Contract or any claim by
                the Buyer in
                respect of any one or more instalments shall not entitle the Buyer to treat the Contract as a whole
                as repudiated</p>
            <p id="agreement_text">6.5 If the Buyer fails to take delivery of the Goods or fails to give BGL
                adequate delivery instructions at the time
                stated for delivery (otherwise than by reason of any cause beyond the Buyer’s reasonable control or
                by reason of BGL’s
                fault) then, without limiting any other right or remedy available to BGL, BGL may: (i) store the
                Goods until actual
                delivery and charge the Buyer for the reasonable costs (including insurance) of storage; or (ii)
                sell the Goods at the
                best price readily obtainable and (after deducting all reasonable storage and selling expenses)
                account to the Buyer for
                the excess over the price under the Contract or charge the Buyer for any shortfall below the price
                under the Contract.
            </p>
            <p id="agreement_text">6.6 If the Buyer fails to accept delivery of the Goods or fails to collect the
                Goods, as applicable: (i) the Goods shall
                be deemed delivered; (ii) risk in the Goods shall pass to the Buyer (iii) BGL shall invoice the
                Buyer for the full price
                of the Goods.
            </p>


            <h4 id="section_title">7. RISK AND PROPERTY</h4>

            <p id="agreement_text">7.1 Risk of damage to or loss of the Goods shall pass to the Buyer on delivery.
            </p>
            <p id="agreement_text">7.2 Notwithstanding delivery and the passing of risk in the Goods, or any other
                provision of the Contract, the property
                in the Goods shall not pass to the Buyer until BGL has received in cash or cleared funds payment in
                full for all debts
                owed by the Buyer to BGL (including payment for the Goods) at any given time.
            </p>
            <p id="agreement_text">7.3 Until such time as the property in the Goods passes to the Buyer, the Buyer
                shall hold the Goods as BGL’s fiduciary
                agent and bailee, and shall keep the Goods separate from those of the Buyer and third parties and
                properly stored,
                protected and insured and identified as BGL’s property, but the Buyer may resell or use the Goods in
                the ordinary course
                of its business.</p>
            <p id="agreement_text">7.4 Until such time as the property in the Goods passes to the Buyer (and
                provided the Goods are still in existence and
                have not been resold), BGL may at any time require the Buyer to deliver up the Goods to BGL and, if
                the Buyer fails to
                do so forthwith, enter on any premises of the Buyer or any third party where the Goods are stored
                and repossess the
                Goods</p>
            <p id="agreement_text">7.5 The Buyer shall not be entitled to pledge or in any way charge by way of
                security for any indebtedness any of the
                Goods which remain the property of BGL, but if the Buyer does so all monies owing by the Buyer to
                BGL shall (without
                limiting any other right or remedy of BGL) forthwith become due and payable.</p>


            <h4 id="section_title">8. WARRANTY</h4>

            <p id="agreement_text">8.1 Subject to the following provisions, BGL warrants that the Goods shall on
                delivery (i) conform in all material
                respects to the Order and agreed specification; and (ii) be of satisfactory quality within the
                meaning of the Sale of
                Goods Act 1979 and fit for human consumption.</p>
            <p id="agreement_text">8.2 BGL shall not be liable for any failure of the Goods to comply with clause
                8.1: (i) where such failure arises by
                reason of the Buyer's wilful damage or negligence; (ii) to the extent caused by the Buyer's failure
                to comply with BGL's
                instructions in relation to the Goods, including any instructions on proper storage of the Goods;
                (iii) to the extent
                caused by BGL following any specification or requirement of the Buyer in relation to the Goods; (iv)
                where the Buyer
                uses any of the Goods after notifying BGL that they do not comply with clause 8.1 or (v) if the
                total price for the
                Goods has not

                been paid by the due date for payment
            </p>
            <p id="agreement_text">8.3 Subject as expressly provided in the Contract, and except where the Goods are
                sold to a person dealing as a consumer
                (within the meaning of the Unfair Contract Terms Act 1977), all warranties, conditions or other
                terms implied by statute
                or common law are excluded to the fullest extent permitted by law.

            </p>
            <p id="agreement_text">8.4 A claim by the Buyer which is based on any defect in the quality or condition
                of the Goods or their failure to
                correspond with specification shall (whether or not delivery is refused by the Buyer) be notified to
                BGL within 48 hours
                from the time of delivery or (where the defect or failure was not apparent on reasonable inspection)
                within a reasonable
                time after discovery of the defect or failure. If delivery is not refused, and the Buyer does not
                notify BGL
                accordingly, the Buyer shall not be entitled to reject the Goods and BGL shall have no liability for
                such defect or failure, and the Buyer shall be bound to pay the
                price as if the Goods had been delivered in accordance with the Contract.</p>
            <p id="agreement_text">8.5 Where a valid claim in respect of any of the Goods which is based on a defect
                in the quality or condition of the
                Goods or their failure to meet specification is notified to BGL in accordance with the Contract, BGL
                may replace the
                Goods (or the part in question) free of charge or, at BGL’s sole option, refund to the Buyer the
                price of the Goods (or
                a proportionate part of the price), in which case BGL shall have no further liability to the Buyer.
                The provisions of
                these Conditions, including the warranties set out in clause 8.1, shall apply to any Goods that are
                replaced with effect
                from delivery of the replaced Goods.</p>
            <p id="agreement_text" style="color: red;">8.6 Each party warrants that it shall comply with all
                applicable laws and regulations as are required of it from time to
                time to perform its obligations under or in connection with the Contract including the Bribery Act
                2010, Modern Slavery
                Act 2015 and the Criminal Finances Act 2017.
            </p>

            <h4 id="section_title">9. LIABILITY
            </h4>
            <p id="agreement_text">9.1 Nothing in these Terms shall limit or exclude BGL's liability for (i) death
                or personal injury caused by its
                negligence, or the negligence of its employees, agents or subcontractors (as applicable) (ii) fraud
                or fraudulent
                misrepresentation (iii) breach of these Terms implied by Section 12 of the Sale of Goods Act 1979
                (iv) defective
                products under the Consumer Protection Act 1987 or any matter in respect of which it would be
                unlawful for BGL to
                exclude or restrict liability.</p>
            <p id="agreement_text">9.2 Subject to clauses 9.1, BGL shall under no circumstances whatsoever be liable
                to the Buyer, whether in contract,
                tort (including negligence), breach of statutory duty or otherwise for loss of profit (whether
                direct or indirect), loss
                of goodwill, loss of business, loss of revenue or for any indirect or consequential loss or damage
                arising under or in
                connection with the Contract or the use or resale of the Goods by the Buyer.</p>
            <p id="agreement_text">9.3 Subject to clauses 9.1 and 9.2, BGL's total liability to the Buyer in respect
                of all other losses arising under or
                in connection with the Contract, whether in tort (including negligence), breach of statutory duty,
                or otherwise, shall
                in no circumstances exceed the price of the Goods supplied under the Contract.</p>
            <p id="agreement_text">9.4 BGL shall not be liable to the Buyer or be deemed to be in breach of the
                Contract by reason of any delay in
                performing, or any failure to perform, any of BGL’s obligations in relation to the Goods if the
                delay or failure was due
                to any cause beyond BGL’s reasonable control. Without limiting the foregoing, the following shall be
                regarded as causes
                beyond BGL’s reasonable control: (i)act of God, explosion, flood, tempest, fire or accident;(ii) war
                or threat of war,
                sabotage, insurrection, civil disturbance or requisition, acts, restrictions, regulations, bye-laws,
                prohibitions,
                import or export regulations or embargoes or measures of any kind on the part of any governmental,
                parliamentary or
                local authority; or (iii) strikes, lock-outs or other industrial actions or trade disputes (whether
                involving employees
                of BGL or of a third party) or difficulties in obtaining raw materials, labour, fuel, parts or
                machinery or power
                failure or breakdown in machinery.</p>

            <h4 id="section_title">10. INSOLVENCY OF BUYER</h4>

            <p id="agreement_text">If the Buyer makes a voluntary arrangement with its creditors or (being an
                individual or firm) becomes bankrupt or
                (being a company) becomes subject to an administration order or goes into liquidation (otherwise
                than for the purposes
                of amalgamation or reconstruction) or an encumbrancer takes possession, or a receiver is appointed,
                of any of the
                property or assets of the Buyer or the Buyer ceases, or threatens to cease, to carry on business or
                BGL reasonably
                apprehends that any of the events mentioned above is about to occur in relation to the Buyer and
                notifies the Buyer
                accordingly then without limiting any other right or remedy available to BGL BGL may cancel the
                Contract or suspend any
                further deliveries under the Contract without any liability to the Buyer, and if the Goods have been
                delivered but not
                paid for the price shall become immediately due and payable notwithstanding any previous agreement
                or arrangement to the
                con-trary</p>


            <h4 id="section_title">11. STORAGE AND HANDLING</h4>

            <p id="agreement_text">11.1 The Buyer shall store and onsell the Goods supplied to it under the Contract
                in accordance with all applicable
                generally accepted industry standards and practices, statutory and regulatory requirements, and
                BGL's instructions which
                shall include: (i) storing the Goods at temperatures between 3°C to 20°C; (ii) sheltering the Goods
                from excessive light
                or ultra violet rays; (iii) ensuring traceability of the Goods and rotating the Goods so that the
                oldest are sold first;
                and (iv) immediately removing any defective (or allegedly defective) Goods from sale (v) protecting
                the Goods from
                exposure to contaminants and environments where condensation can occur.</p>
            <p id="agreement_text">11.2 The Buyer shall obtain and maintain in force at all times all licences,
                permissions, authorisations, consents and
                permits needed to import, purchase, store, handle, receive delivery of and onsell the Goods.</p>
            <p id="agreement_text">11.3 The Buyer shall indemnify BGL from and against any losses, damages,
                liability, costs (including legal fees) and
                expenses which BGL may suffer or incur directly or indirectly from the Buyer's failure to store,
                display or handle the
                Goods in accordance with BGL's instructions or requirements.</p>



            <h4 id="section_title">12. PRODUCT RECALL
            </h4>
            <p id="agreement_text">12.1 The Buyer shall immediately notify BGL if it becomes aware of any complaint
                or claim which indicates that the Goods
                may be defective, faulty or unsafe in any way. On receipt of any complaint or claim, the Buyer must
                send to BGL: (i) a
                copy of the claim or complaint, and any correspondence exchanged with the complainant or third
                party; and (ii) details
                of the relevant Goods supplied, the batch numbers of the relevant Goods, the date on which the
                relevant Goods were
                supplied by BGL to the Buyer, and the date on which the Buyer supplied it to the complainant (or
                other third party).</p>
            <p id="agreement_text">12.2 The Buyer is required to keep and maintain appropriate records to enable all
                Goods supplied by BGL to be traced.
                These records shall include batch numbers, delivery dates and details of the party who purchased the
                products from the
                Buyer, if applicable. The records which are kept must be sufficiently thorough to allow a recall of
                the relevant Goods
                or corrective action to be effectively and efficiently implemented by BGL.</p>
            <p id="agreement_text">12.3 BGL has the right to initiate a product recall and/or any other corrective
                action which it deems necessary and
                appropriate, without requiring agreement from the Buyer. Any decision relating to the implementation
                of a recall or
                corrective action shall be made at BGL's discretion. BGL also has the right to notify any
                appropriate regulatory bodies
                about any such recall or corrective action</p>
            <p id="agreement_text">12.4 The Buyer shall provide BGL with the assistance and information that it may
                require in order to implement a recall
                or corrective action. This assistance shall include the provision of any information which may be
                required to allow BGL
                to identify third parties who purchased affected Goods from the Buyer.</p>
            <p id="agreement_text">12.5 At BGL's request, the Buyer shall immediately cease sale, delivery and
                distribution of any Goods specified by BGL.
                The Buyer shall place these Goods into quarantine, until BGL confirms whether they should be
                returned to BGL or whether
                they are suitable for onward sale.</p>
            <p id="agreement_text">12.6 The Buyer shall not implement or initiate any recall or corrective action
                without BGL's prior express consent,
                unless the Buyer is directed to do so by a relevant regulatory authority.</p>



            <h4 id="section_title">13. EXPORT TERMS
            </h4>
            <p id="agreement_text">13.1 Where the Goods are supplied for export from the United Kingdom, the
                provisions of this clause 11 shall (subject to
                any special terms agreed in writing between the Buyer and BGL) apply notwithstanding any other
                provision of the
                Contract.</p>
            <p id="agreement_text">13.2 The Buyer shall be responsible for complying with any legislation or
                regulations governing the importation of the
                Goods into the country of destination and for the payment of any duties on them and shall indemnify
                BGL in full against
                all direct or indirect losses (including loss of profit), costs (including the cost of all labour
                and materials used),
                damages, charges and expenses incurred by BGL as a result of the Buyer's failure to comply with this
                clause 13.2.</p>
            <p id="agreement_text">13.3 Unless otherwise agreed in writing between the Buyer and BGL or where
                expressly stated in BGL's quote, the Goods
                shall be delivered Ex Works (Incoterms) at BGL's premises.</p>
            <p id="agreement_text">13.4 The Buyer shall be responsible for arranging for testing and inspection of
                the Goods at BGL’s

                premises before shipment. BGL shall have no liability for any claim in respect of any defect in the
                Goods which would be
                apparent on inspection and which is made after shipment, or in respect of any damage during transit
            </p>
            <p id="agreement_text">13.5 The Buyer shall not offer the Goods for resale in any country other than
                that country or those countries notified
                to, and agreed by, BGL at or before the time the Buyer’s Order is placed, or sell the Goods to any
                person if the Buyer
                knows or has reason to believe that that person intends to resell the Goods in any such country.</p>
            <p id="agreement_text">13.6 The Buyer will promptly obtain and maintain all licences, clearances and
                other consents that are necessary for the
                supply of the Goods (including import licences) and will at its own cost provide to BGL, or (where
                local laws or
                regulations require BGL to do so) assist BGL in procuring, any documents necessary under applicable
                laws and regulations
                for BGL to export the Goods to the delivery location in accordance with such laws and regulations.
            </p>

            <h4 id="section_title">14. DISPUTE RESOLUTION</h4>
            <p id="agreement_text">14.1 The parties shall use all reasonable endeavours to reach a negotiated
                resolution of any dispute arising between the
                parties out of or in connection with the Contract through the following procedures:

                (i) within 7 days of service of the notice, the contract manager of the parties shall meet to
                discuss the dispute and
                attempt to resolve it and (ii) if the dispute has not been resolved within 7 days of the first
                meeting of the contract
                managers, then the matter shall be referred to the chief executives (or persons of equivalent
                seniority). The chief
                executives (or equivalent) shall meet within 7 days to discuss the dispute and attempt to resolve
                it.
            </p>
            <p id="agreement_text">14.2 Until the parties have completed the steps referred to in clause 14.1, and
                have failed to resolve the dispute,
                neither party shall commence formal legal proceedings or arbitration except that either party may at
                any time seek
                urgent interim relief from the courts or emergency arbitrator relief.</p>


            <h4 id="section_title">15. CONFIDENTIALITY AND ANNOUNCEMENTS</h4>
            <p id="agreement_text">15.1 The Buyer shall keep confidential all confidential information of BGL and
                shall only use the same as required to
                perform the Contract. The provisions of this clause shall not apply to: (i) any information which
                was in the public
                domain at the date of the Contract; (ii) any information which comes into the public domain
                subsequently other than as a
                consequence of any breach of the Contract or any related agreement; (iii) any information which is
                independently
                developed by the Buyer without using information supplied by BGL; or (iv) any disclosure required by
                law or a regulatory
                authority or otherwise by the provisions of the Contract.</p>
            <p id="agreement_text">15.2 The Buyer shall not make any public announcement or disclose any information
                regarding the Contract, except to the
                extent required by law or regulatory authority.
            </p>
            <p id="agreement_text">15.3 This clause 13 shall remain in force in perpetuity.</p>

            <h4 id="section_title" style="color: red;">16. DATA PROTECTION</h4>
            <p id="agreement_text" style="color: red;">16.1 For the purpose of this clause 16, "Data Controller",
                "Data Processor", "Personal Data" "Process", "Processed",
                "Processing", and "Data Processor" shall have the meanings given to them in the Data Protection
                Legislation. Data
                Protection Legislation means any law, statute, declaration, decree, directive, legislative
                enactment, order, ordinance,
                regulation, rule or other binding restriction as updated and amended from time to time which relates
                to the protection
                of individuals with regards to the Processing of Personal Data to which a party is subject,
                including the Data
                Protection Act 1998 and the Privacy and Electronic Communications (EC Directive) Regulations 2003
                and the General Data
                Protection Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016
                on the protection of
                natural persons with regard to the Processing of Personal Data and repealing Directive 95/46/EC
                (General Data Protection
                Regulation) OJ L 119/1, 4.5.2016 ("GDPR") and the Data Protection 2018.</p>
            <p id="agreement_text">16.2 The parties each acknowledge and agree that they may need to Process
                Personal Data relating to each party's
                representatives (in their respective capacities as Data Controllers) in order to (as appropriate):
                (a) administer and
                provide the Goods; (b) request and receive the Goods; (c) compile, dispatch and manage the payment
                of invoices relating
                to the Goods; (d) compile, dispatch and manage the payment of invoices relating to the Goods; (e)
                manage the Contract
                and resolve any disputes relating to it; (f) respond and/or raise general queries relating to the
                Goods.</p>
            <p id="agreement_text">16.3 Each party shall Process such Personal Data relating to each party's
                representatives for the purposes set out in
                clause 16.2 in accordance with their respective privacy policies. The parties acknowledge that they
                may be required to
                share Personal Data with their affiliates, group companies and other relevant parties, within the
                EEA, in order to carry
                out the activities listed in clause 16.1, and in doing so each party will ensure that the sharing
                and use of this
                Personal Data complies with applicable Data Protection Legislation.</p>


            <h4 id="section_title">17. INTELLECTUAL PROPERTY</h4>

            <p id="agreement_text">The Buyer acknowledges and agrees that all intellectual property rights in and to
                the Goods are owned by BGL, or its
                licensors and shall, notwithstanding any other term of the Contract, remain vested in BGL or its
                licensors. The Buyer
                shall not acquire any proprietary rights, title or interest in or to any intellectual property
                rights in the Goods.</p>

            <h4 id="section_title">18. GENERAL</h4>
            <p id="agreement_text">18.1 A notice required or permitted to be given by either party to the other
                under the Contract shall be in writing
                addressed to that other party at its registered office or principal place of business or such other
                address as may at
                the relevant time have been notified pursuant to this provision to the party giving the notice</p>
            <p id="agreement_text">18.2 No waiver by BGL of any breach of the Contract by the Buyer shall be
                considered as a waiver of any subsequent
                breach of the same or any other provision.
            </p>
            <p id="agreement_text">18.3 If any provision of the Contract is held by a court or other competent
                authority to be invalid or unenforceable in
                whole or in part the validity of the other provisions of the Contract and the remainder of the
                provision in question
                shall not be affected.
            </p>
            <p id="agreement_text">18.4 The parties are independent persons and are not partners, principal and
                agent or employer and employee and the
                Contract does not establish any joint venture, trust, fiduciary or other relationship between them,
                other than the
                contractual relationship expressly provided for in it. None of the parties shall have, nor shall
                represent that they
                have, any authority to make any commitments on the other party's behalf.
            </p>
            <p id="agreement_text" style="color: red;">18.5 The language of the Contract is English. All documents,
                notices, waivers, variations and other written
                communications relating to the Contract shall be in English. If the Contract and any document
                relating to it is
                translated, the English version shall prevail.
            </p>
            <p id="agreement_text">18.6 The Contract and any dispute or claim arising out of, or in connection with,
                it, its subject matter or formation
                (including non-contractual disputes or claims) shall be governed by, and construed in accordance
                with, the laws of
                England and Wales. The parties irrevocably agree that the courts of England and Wales shall have
                exclusive jurisdiction
                to settle any dispute or claim arising out of, or in connection with, the Contract, its subject
                matter or formation
                (including non-contractual disputes or claims) save that this shall not prevent BGL issuing
                proceedings (whether
                concurrently or not with proceedings in the English courts) against the Buyer in the delivery
                location to the extent
                permitted by the law applicable in that jurisdiction</p>
            <p id="agreement_text" style="color: red;">18.7 To the extent permitted by law, the Convention on the
                International Sale of Goods 1980 and all international and
                domestic legislative (or other) implementations of that Convention and the Uniform Laws on
                International Sales Act 1967,
                will not apply in relation to the Contract.</p>
            <button id="i_agree_btn"><span>I Agree</span></button>


        </div>


    </div>
</form>
@endif
@endsection    