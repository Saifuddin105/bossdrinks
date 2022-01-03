@extends('frontend.layouts.master')

@section('title', 'Contact-Us')

@section('content')

<div class="contactUS_section">
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
            <form action="{{route('front.contact.submit')}}" method="post" enctype="multipart/form">
                @csrf
                <div class="NAME">
                    <div class="first_name">
                        <h4>*First Name</h4>
                        <input type="text" name="first_name" required>
                    </div>
                    <div class="first_name">
                        <h4>*Last Name</h4>
                        <input type="text" name="last_name" required>
                    </div>



                </div>

                <div class="OCCUPATION">
                    <div class="first_name">
                        <h4>*Occupation</h4>
                        <input type="text" name="occupation" required>
                    </div>
                    <div class="first_name">
                        <h4>*Industry</h4>
                        <input type="text" name="industry" required>
                    </div>
                </div>


                <div class="website">
                    <h4>Company Website (if available)</h4>
                    <input type="text" name="website">
                </div>
                <div class="CITY">
                    <div class="first_name">
                        <h4>*City</h4>
                        <input type="text" name="city" required>
                    </div>
                    <div class="first_name">
                        <h4>*State</h4>
                        <input type="text" name="state" required>
                    </div>



                </div>

                <div class="COUNTRY">
                    <h4>*Country</h4>
                    <input type="text" name="country" required>
                </div>


                <div class="selectboxes">
                    <h4>*Preffered Way Of collaboration</h4>
                    <div class="four_selectboxes">
                        <div>
                            <input type="checkbox" value="Distribution" name="collaboration[]">
                            <span>Distribution</span>
                        </div>
                        <div>
                            <input type="checkbox" value="Retail" name="collaboration[]">
                            <span>Retail</span>
                        </div>
                        <div>
                            <input type="checkbox" value="Online Sales" name="collaboration[]">
                            <span>Online Sales</span>
                        </div>
                        <div>
                            <input type="checkbox" value="others" name="collaboration[]">
                            <span>Others</span>
                        </div>
                    </div>
                </div>


                <div class="channel_type">
                    <h4>*Channel Type</h4>
                    <div class="fullsection_selectboxes">
                        <div class="checkboxes">
                            <div>
                                <input type="checkbox" value="Vape Store" name="channel_type[]">
                                <span>Vape Store</span>
                            </div>
                            <div><input type="checkbox" value="Electronic Store" name="channel_type[]">
                                <span>Electronic Store</span>
                            </div>
                            <div><input type="checkbox" value="Restaurant" name="channel_type[]">
                                <span>Restaurant</span>
                            </div>
                        </div>
                        <div class="checkboxes">
                            <div><input type="checkbox" value="CVS/Gas Station" name="channel_type[]">
                                <span>CVS/Gas Station</span>
                            </div>
                            <div><input type="checkbox" value="GrocEry Store " name="channel_type[]">
                                <span>Grocery Store</span>
                            </div>
                            <div><input type="checkbox" value="Lifestyle" name="channel_type[]">
                                <span>Lifestyle</span>
                            </div>
                        </div>
                        <div class="checkboxes">
                            <div><input type="checkbox" value="Tobacco/Alcohol Store" name="channel_type[]">
                                <span>Tobacco/Alcohol Store</span>
                            </div>
                            <div><input type="checkbox" value="Hypermarket/Supermarket" name="channel_type[]">
                                <span>Hypermarket/Supermarket</span>
                            </div>
                            <div><input type="checkbox" id="other_channel">
                                <span>Other, please specify</span>
                            </div>
                        </div>



                    </div>
                    <input hidden id="channel-type" type="text" name="channel_type_specify" placeholder="Enter your channel type">
                </div>

                <div class="store_connections">
                    <h4>*How many retail stores/affiliates connections</h4>
                    <input type="number" placeholder="Enter Number" name="retail_store_qty">

                </div>



                <div class="real_store">

                    <h4>*Do you own retail stores?</h4>
                    <div class="open_store_checkboxes">
                        <div>
                            <input type="radio" name="is_retail_store" value="Yes">
                            <span>Yes</span>
                        </div>
                        <div><input type="radio" name="is_retail_store" value="No">
                            <span>No</span>
                        </div>
                        <div><input type="radio" name="is_retail_store" value="Plan to Open">
                            <span>Plan to open</span>
                        </div>
                    </div>
                </div>

                <div class="investment">
                    <h4>*What is your minimum initial investment amount in USD?</h4>

                    <div class="investment_full">
                        <div class="investment_info">
                            <div>
                                <input type="radio" name="investment" value="Under $5,000">
                                <span>Under $5,000</span>
                            </div>
                            <div>
                                <input type="radio" name="investment" value="Between $10,000 and $30,000">
                                <span>Between $10,000 and $30,000</span>
                            </div>
                        </div>
                        <div class="investment_info">
                            <div>
                                <input type="radio" name="investment" value="Between $5,000 and $9,999">
                                <span>Between $5,000 and $9,999</span>
                            </div>
                            <div>
                                <input type="radio" name="investment" value="Over $30,000">
                                <span>Over $30,000</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mobile_no">
                    <h4>*Mobile Phone</h4>


                    <div class="phone_Number_contact">
                        <select name="countryCode" id="country_number_contact">
                            <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                            <option data-countryCode="US" value="1">Norway (+47)</option>
                            <optgroup label="Other countries">
                                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                <option data-countryCode="AO" value="244">Angola (+244)</option>
                                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                <option data-countryCode="AU" value="61">Australia (+61)</option>
                                <option data-countryCode="AT" value="43">Austria (+43)</option>
                                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                <option data-countryCode="CA" value="1">Canada (+1)</option>
                                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                <option data-countryCode="CL" value="56">Chile (+56)</option>
                                <option data-countryCode="CN" value="86">China (+86)</option>
                                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                <option data-countryCode="CG" value="242">Congo (+242)</option>
                                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                <option data-countryCode="FI" value="358">Finland (+358)</option>
                                <option data-countryCode="FR" value="33">France (+33)</option>
                                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                <option data-countryCode="DE" value="49">Germany (+49)</option>
                                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                <option data-countryCode="GR" value="30">Greece (+30)</option>
                                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                <option data-countryCode="GU" value="671">Guam (+671)</option>
                                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                <option data-countryCode="IN" value="91">India (+91)</option>
                                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                <option data-countryCode="IR" value="98">Iran (+98)</option>
                                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                <option data-countryCode="IL" value="972">Israel (+972)</option>
                                <option data-countryCode="IT" value="39">Italy (+39)</option>
                                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                <option data-countryCode="JP" value="81">Japan (+81)</option>
                                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                <option data-countryCode="LA" value="856">Laos (+856)</option>
                                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                <option data-countryCode="LY" value="218">Libya (+218)</option>
                                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                <option data-countryCode="MO" value="853">Macao (+853)</option>
                                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                <option data-countryCode="ML" value="223">Mali (+223)</option>
                                <option data-countryCode="MT" value="356">Malta (+356)</option>
                                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                <option data-countryCode="NE" value="227">Niger (+227)</option>
                                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                <option data-countryCode="NU" value="683">Niue (+683)</option>
                                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                <option data-countryCode="NO" value="47">Norway (+47)</option>
                                <option data-countryCode="OM" value="968">Oman (+968)</option>
                                <option data-countryCode="PW" value="680">Palau (+680)</option>
                                <option data-countryCode="PA" value="507">Panama (+507)</option>
                                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                <option data-countryCode="PE" value="51">Peru (+51)</option>
                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                <option data-countryCode="PL" value="48">Poland (+48)</option>
                                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                <option data-countryCode="RO" value="40">Romania (+40)</option>
                                <option data-countryCode="RU" value="7">Russia (+7)</option>
                                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                <option data-countryCode="ES" value="34">Spain (+34)</option>
                                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                <option data-countryCode="SI" value="963">Syria (+963)</option>
                                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                <option data-countryCode="TG" value="228">Togo (+228)</option>
                                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)
                                </option>
                                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                            </optgroup>
                        </select>
                        <input type="number" name="number" id="phone_number_contact" placeholder="12 34 56 78">
                    </div>

                </div>


                <div class="contact_email">
                    <h4>*Contact Email</h4>
                    <input type="email" name="email" required>
                </div>

                <div class="other_methods">
                    <h4>Other preferred method of contact</h4>

                    <div class="other_methods_info">
                        <select name="social_platform" id="other_methods">
                            <option value="select">select</option>
                            <option value="WhatsApp">WhatsApp</option>
                            <option value="Wechat">Wechat</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Viber">Viber</option>
                        </select>

                        <input type="text" name="social_info" placeholder="Enter your contact info">

                    </div>
                </div>


                <div class="open_store">
                    <h4>*Would you consider investing or opening an exclusive Briton store?</h4>
                    <div class="openstore_checkbox">
                        <div>
                            <input type="radio" name="is_open_store" value="Yes">
                            <span>Yes</span>

                        </div>
                        <div>
                            <input type="radio" name="is_open_store" value="No">
                            <span>No</span>

                        </div>
                    </div>
                </div>


                <div class="which_city">
                    <h4>Which City</h4>
                    <input type="text" name="which_city" placeholder="Enter the city">

                </div>

                <div class="why_work">
                    <h4>Why do you want to work with Briton Group?</h4>
                    <textarea name="why_work" id="text_AREA" cols="30" rows="3"></textarea>
                </div>

                <div class="referrence">
                    <h4>Were you referred by a Briton Group employee? If so, please provide their full name.</h4>
                    <input type="text" name="referrence">
                </div>


                <div class="ending_checkbox">
                    <div>
                        <input type="checkbox" name="subscribe" value="1">
                        <span>Subscribe to receive newsletters / Marketing information.</span>
                    </div>
                    <div>
                        <input type="checkbox" name="agree_terms" value="1">
                        <span>We take your privacy very seriously and will only use your personal information to provide
                            the
                            products and services you
                            requested.<p>To continue, please read and agree to Briton Group's <a id="A1"
                                    href="{{route('privacy')}}">Privacy
                                    Policy</a> and <a id="A1" href="{{route('front.term')}}">Terms Conditions.</a></p>
                        </span>
                    </div>
                </div>


                <div class="contact_Submit_btn">
                    <button id="contact_submit_btn" type="submit">Submit</button>

                </div>
            </form>


        </div>





@endsection

@push('script')
<script>
    const checkbox = document.getElementById('other_channel')
    const other =  document.getElementById('channel-type')
    checkbox.addEventListener('click', ()=> {
        if(checkbox.checked){
            other.removeAttribute('hidden')
        }else{
            other.setAttribute('hidden',true)
        }
    })
</script>
@endpush
