<?php
    $call_emi = false;
    if($this->uri->segment(2) != null){
        $call_emi = true;
    }
?>
<div class=""><div class="container"><div class="" id="pagew"></div></div></div>
<section class="finncenav">
    <div class="container">
        <ul class="nav nav-pills m-0" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link <?=($call_emi)?'':'active'?>" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">How it works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=(!$call_emi)?'':'active'?>" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">EMI Calculator</a>
          </li>
        </ul>
    </div>
</section>
<div class="tab-content p-0" id="pills-tabContent">
    <div class="tab-pane fade <?=($call_emi)?'':'show active'?>" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="container">
            <div class="text-center py-4">
                <h3 class="">Cars2day Finance – Easy & Simple like never</h3>
            </div>
        </div>
        
        <section class="financebanner text-center text-white" style="background: url(<?=base_url()?>assets/images/finance1banner.jpg);">
            <div class="container">
                <h2>Experience a hassle-free process <br>
to avail finance for your car</h2>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <div class="text-center pb-5">
                    <h3 class="">One-stop Shop for all your Finance Needs</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row align-items-center financezigzag">
                    <div class="col-md-5 mb-4">
                        <img class="w-100" src="<?=base_url()?>assets/images/not-just.jpg" alt="">
                    </div>
                    <div class="col-md-7 mb-4 px-lg-5">
                        <h4 class="mb-2">Not just one, we have a myriad <br>of finance options for you!</h4>
                        <p>Cars2day presents a plethora of choices that includes <br>banks & NBFC institutions that proffers best rates that <br>comes absolutely pocket friendly.</p>
                        <a href="<?=base_url()?>contact" class="btn1">Know more</a>
                    </div>
                </div>
                <div class="row align-items-center financezigzag flex-row-reverse">
                    <div class="col-md-5 mb-4">
                        <img class="w-100" src="<?=base_url()?>assets/images/digital.jpg" alt="">
                    </div>
                    <div class="col-md-7 mb-4 px-lg-5">
                        <h4 class="mb-2">Digital Finance Platform</h4>
                        <p>We are in line with the digital era by offering you <br>digital finance process.<br>Cars2day digital financing encompasses end to end <br>secured process in a digital environment</p>
                    </div>
                    
                </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="py-5 knowhsec">
            <div class="container">
                <h2 class="text-center m-0">Know How it Works?</h2>
                <p class="pb-5 text-center">It simply works like a wonder – easy steps mentioned ahead</p>
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center w-100 mb-4">
                            <div class="knowhico">
                                <img width="65" src="<?=base_url()?>assets/images/knowhico1.png" alt="">
                            </div>
                            <div class="knowhcon pl-3">Enter your<br> 
                            Aadhar number</div>
                        </div>
                    </div>
                            <div class="col-md-6">
                        <div class="d-flex align-items-center w-100 mb-4">
                            <div class="knowhico">
                                <img width="65" src="<?=base_url()?>assets/images/knowhico4.png" alt="">
                            </div>
                            <div class="knowhcon pl-3">You will receive an SMS from<br> UIDAI – Validate it</div>
                        </div>
                    </div>
                            <div class="col-md-6">
                        <div class="d-flex align-items-center w-100 mb-4">
                            <div class="knowhico">
                                <img width="65" src="<?=base_url()?>assets/images/knowhico2.png" alt="">
                            </div>
                            <div class="knowhcon pl-3">Then enter your PAN card number<br> & Account number</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center w-100 mb-4">
                            <div class="knowhico">
                                <img width="65" src="<?=base_url()?>assets/images/knowhico5.png" alt="">
                            </div>
                            <div class="knowhcon pl-3">Answer the questions asked<br> 
                            by the Bank AI</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center w-100 mb-4">
                            <div class="knowhico">
                                <img width="65" src="<?=base_url()?>assets/images/knowhico3.png" alt="">
                            </div>
                            <div class="knowhcon pl-3">Once done, you will get a<br> 
                            pre-approved amount</div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <div class="d-flex align-items-center w-100 mb-4">
                            <div class="knowhico">
                                <img width="65" src="<?=base_url()?>assets/images/knowhico6.png" alt="">
                            </div>
                            <div class="knowhcon pl-3">Accept it & complete the e-KYC<br> & sign the agreement</div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <div class="text-center andthere">
                    <img src="<?=base_url()?>assets/images/andthere.png" alt="">
                </div>
            </div>
        </section>
        <section class="py-5">
            <h2 class="text-center mb-4">Know what works for you!</h2>
            <div class="knowwhat py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="knowwhatslide">
                        <div class="knowwhatslideinr">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="row flex-row-reverse align-items-center">
                                        <div class="col-md-6">
                                            <div class="knowwhatsimg">
                                                <img src="<?=base_url()?>assets/images/xfsvfcv.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="knowwhatscon">
                                                <h4 class="mb-3">Analyse 3 things</h4>
                                                <ul>
                                                    <li>Possible Down Payment </li>
                                                    <li>Maximum Budget</li>
                                                    <li>Credit Score</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="knowwhatslideinr">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="row flex-row-reverse align-items-center">
                                        <div class="col-md-6">
                                            <div class="knowwhatsimg">
                                                <img src="<?=base_url()?>assets/images/finthmb1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="knowwhatscon">
                                                <h4 class="mb-3">Your Down payment <br>can make a difference</h4>
                                                <p>Pay a maximum down payment <br>so that it lowers you monthly <br>payment</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="knowwhatslideinr">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="row flex-row-reverse align-items-center">
                                        <div class="col-md-6">
                                            <div class="knowwhatsimg">
                                                <img src="<?=base_url()?>assets/images/finthmb2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="knowwhatscon">
                                                <h4 class="mb-3">Plan your budget before <br>you get pre-approved</h4>
                                                <p>Use the budget calculator to <br>analyse how your down payment <br>may affect your monthly payment</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <div class="tab-pane fade <?=(!$call_emi)?'':'show active'?>" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="container">
            <div class="text-center py-4 mb-3">
                <h3 class="">Car payment calculator</h3>
            </div>
            <div class="row trdfrm justify-content-center mb-5">
                <div class="col-md-4 pr-lg-4">
                    <div class="form-group">
                        <label>CAR</label>
                        <select class="form-control">
                            <option>Select your car</option>
                            <option>Car1</option>
                            <option>Car2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 pl-lg-4">
                    <div class="form-group">
                        <label>CITY</label>
                        <select class="form-control">
                            <option>Select your city</option>
                            <option>City1</option>
                            <option>City2</option>
                        </select>
                    </div>
                </div>
          </div>
            <h4 class="mb-4 text-center">Calculate a monthly budget that works for you.</h4>
            <div class="p-4 mx-lg-5 bglightblu mb-5">
                <div class="row">
                    <div class="col-md-6 border-right">
                        <div class="calcusec">
                            <div class="calcprclg mb-3">₹ <strong class="emi-res">3958.33</strong>/m <span>EMI for <span class="emi_month_to_year">2</span> years</span></div>
                            <div class="amuntlon">Loan amount - <input id="" type="text" class="js-input amuntlontext" value="0" readonly></div>
                            <div class="range-slider">
                                <input id="pri" type="text" class="redrange"  value=""
                                    data-type="single"
                                    data-min="50000"
                                    data-max="2500000"
                                    data-from="1000000"
                                    data-to="500"
                                    data-grid="false" 
                                   data-prefix="₹" 
                                   data-skin="round" 
                                   data-prettify-separator="," />
                            </div>
                            <div class="extra-controls pb-4 border-bottom">
                                <div class="d-flex align-items-center">
                                    <small>₹50000</small><small class="ml-auto">₹2500000</small>
                                </div>
                                <input id="example_1_input" type="text" class="js-input form-control" value="0" />
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="amuntlon">Tenure - <input id="" type="text" class="js-input2 js-inputminwidth amuntlontext" value="0" readonly>Months</div>
                                    <div class="range-slider">
                                        <input id="" type="text" class="redrange2"  value="" data-type="single" data-min="12"
                                    data-max="60" data-from="24" data-to="500" data-grid="false" data-skin="round" data-step="3" />
                                    </div>
                                    <div class="extra-controls">
                                        <div class="d-flex align-items-center">
                                            <small>12 Months</small><small class="ml-auto">60 Months</small>
                                        </div>
                                        <input id="example_1_input" type="text" class="js-input2 form-control" value="0" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="amuntlon">Interest - <input id="txt" type="text" class="js-input3 js-inputminwidth amuntlontext" value="0" readonly>%</div>
                                    <div class="range-slider">
                                        <input id="" type="text" class="redrange3"  value="" data-type="single" data-min="7"
                                    data-max="14" data-from="9.5" data-to="500" data-grid="false" data-skin="round" data-step="0.5" />
                                    </div>
                                    <div class="extra-controls">
                                        <div class="d-flex align-items-center">
                                            <small>7%</small><small class="ml-auto">14%</small>
                                        </div>
                                        <input id="example_1_input" type="text" class="js-input3 form-control" value="0" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <ul class="calchartbtn nav nav-pills mb-4 justify-content-end" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link" id="pills-Graph-tab" data-toggle="pill" href="#pills-Graph" role="tab" aria-controls="pills-Graph" aria-selected="true">Graph</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" id="pills-Schedule-tab" data-toggle="pill" href="#pills-Schedule" role="tab" aria-controls="pills-Schedule" aria-selected="false">Schedule</a>
                              </li>
                            </ul> -->
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade" id="pills-Graph" role="tabpanel" aria-labelledby="pills-Graph-tab">
                                
                                </div>
                              <div class="tab-pane fade show active" id="pills-Schedule" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="schtblwrp">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Months</th>
                                                    <th>Principle</th>
                                                    <th>Total Interest</th>
                                                    <th>Total Amount Paid</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="td_month">24</span></td>
                                                    <td>₹ <span class="td_principle">1000000</span></td>
                                                    <td>₹ <span class="td_interest"><?= 3958.33 * 24 ?></span></td>
                                                    <td>₹ <span class="td_total"><?= 1000000 + (3958.33 * 24) ?></span></td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>24</td>
                                                    <td>₹1,00,000</td>
                                                    <td>₹1,00,000</td>
                                                    <td>₹1,00,000</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>₹1,00,000</td>
                                                    <td>₹1,00,000</td>
                                                    <td>₹1,00,000</td>
                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td>₹1,00,000</td>
                                                    <td>₹1,00,000</td>
                                                    <td>₹1,00,000</td>
                                                </tr>
                                                <tr>
                                                    <td>60</td>
                                                    <td>₹1,00,000</td>
                                                    <td>₹1,00,000</td>
                                                    <td>₹1,00,000</td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
            <div class="rangesec">
            <h2 class="mb-5 text-center">Shop by price</h2>
            <div class="row align-items-center mb-5">
                <div class="col-md-5">
                    <div class="pricelist">
                        <ul>
                            <li>
                                <a href="" class="d-flex align-items-center">
                                    <span>Under &#8377;5,00,000</span>
                                    <div class="ml-auto">
                                        <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                            <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                            c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                            C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                            C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center">
                                    <span>Under &#8377;10,00,000</span>
                                    <div class="ml-auto">
                                        <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                            <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                            c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                            C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                            C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center">
                                    <span>Under &#8377;15,00,000</span>
                                    <div class="ml-auto">
                                        <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                            <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                            c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                            C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                            C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center">
                                    <span>&#8377;15,00,000 - &#8377;20,00,000</span>
                                    <div class="ml-auto">
                                        <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                            <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                            c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                            C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                            C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center">
                                    <span>&#8377;20,00,000 - &#8377;25,00,000</span>
                                    <div class="ml-auto">
                                        <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                            <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                            c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                            C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                            C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center">
                                    <span>&#8377;25,00,000 and above</span>
                                    <div class="ml-auto">
                                        <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                            <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                            c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                            C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                            C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 calpgrange">
                    <div class="rangewrp">
                        <img src="<?=base_url()?>assets/images/calimg.png" alt="" class="w-100">
                        <div class="rangeslidewrp">
                            <div class="rangeslide">
                                <input type="text" class="js-range-slider" name="my_range" value=""  id="slider"
                                    data-type="single"
                                    data-min="50000"
                                    data-max="2500000"
                                    data-from="1403625"
                                    data-to="500"
                                    data-grid="false" 
                                       data-prefix="₹" 
                                       data-skin="big" 
                                       data-prettify-separator=","
                                />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
      
      <section class="py-5 knowhsec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <img src="<?=base_url()?>assets/images/finan.png" alt="" class="w-100">
                    </div>
                    <div class="col-md-7">
                        <h3 class="mb-3">How financing works at Cars2day</h3>
                        <p>Get pre-approved to get an idea of what you can spend. If you find other financing after you buy, use our 3‑day payoff program.</p>
                        <a href="<?=base_url()?>contact" class="btn1">Know more</a>
                    </div>
                </div>
            </div>
      </section>
    </div>
</div>