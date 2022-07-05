<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class=""><div class="container"><div class="" id="pagew"></div></div></div>
<section class="shopbanner text-center text-white" style="background: url(<?=base_url()?>assets/images/storepagebanner.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <h1 class="mb-3 text-white" style="text-shadow: 2px 2px #000;">Have a New Beginning in a Pre-Loved Car of your Own</h1>
                <big class="d-block text-white">Experience re-defined to Perfection @ Cars2day</big>
            </div>
        </div>
    </div>
</section>
<section class="findcarssec py-5">
    <div class="container">
        <div class="shopfindcar mb-5">
            <h2 class="mb-5">Browse by Car Type</h2>            

            <div class="slide5">
                <?php foreach($bodytype as $key=>$value){ ?>
                <div class="carslidethmb text-center">
                    <a href="<?=base_url()?>list?type=<?=$value['name']?>">
                        <div class="carslidethmb">
                            <img src="<?=$value['image']?>" alt="">
                        </div>
                        <h5><?=$value['name']?></h5>
                    </a>
                </div>
                <?php } ?>
            </div>

        </div>
        <div class="shopfindcar py-5">
            <h2 class="mb-5">Choose your preferred Brand</h2>
            
            <div class="slide5">
                <?php foreach($brand as $key=>$value){ ?>
                <div class="carslidethmb text-center">
                    <a href="<?=base_url()?>list?brand=<?=$value['name']?>">
                        <div class="carslidethmb">
                            <img width="150" src="<?=$value['image']?>" alt="">
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        
        <div class="rangesec">
            <h2 class="mb-5">Pick up your Budget Car</h2>
            <div class="row">
                <div class="col-md-7">
                    <div class="rangewrp">
                        <img src="<?=base_url()?>assets/images/rangeimg.jpg" alt="" class="w-100">
                        <div class="rangeslidewrp">
                            <div class="rangeslide">
                                <input type="text" class="js-range-slider" id="slider" name="my_range" value=""
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
                <div class="col-md-5">
                    <div class="pricelist">
                        <ul>
                            <li>
                                <a href="<?=base_url()?>list?price=500000" class="d-flex align-items-center">
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
                                <a href="<?=base_url()?>list?price=1000000" class="d-flex align-items-center">
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
                                <a href="<?=base_url()?>list?price=1500000" class="d-flex align-items-center">
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
                                <a href="<?=base_url()?>list?price=1500000+2000000" class="d-flex align-items-center">
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
                                <a href="<?=base_url()?>list?price=2000000+2500000" class="d-flex align-items-center">
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
                                <a href="<?=base_url()?>list?price=2500000" class="d-flex align-items-center">
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
            </div>
            <div class="text-center mt-4">
                <big class="d-block" style="color:#053361"><strong>Not sure about your spending limit? <a style="color:#e74141" href="#"><u>Get pre-approved</u></a></strong></big>
            </div>
        </div>
        
        
        <div class="productslidesec py-5">
            <h2 class="mb-5 text-center">Shop Cars Near You</h2>
            
            <div class="productslide city_wise_cars">
                 <!-- loaded cars according to city here -->
            </div>
            <div class="text-center mt-5">
                <a href="<?=base_url()?>list" class="btn1">Shop near you</a>
            </div>
        </div>
        
    
    </div>
    <section class="py-5 bgass text-center text-white">
        <div class="container">
            <div class="slide2">
                    <div class="processthmb">
                        <span><img src="<?=base_url()?>assets/images/gryico1.png" alt=""></span>
                        <h4 class="text-white">Instant test drive</h4>
                        <p class="text-white">Take an instant test drive to see if the chosen pre-loved car<br> is what you were looking for & then proceed to buy!</p>
                    </div>
                    <div class="processthmb">
                        <span><img src="<?=base_url()?>assets/images/gryico2.png" alt=""></span>
                        <h4 class="text-white">Free emergency RSA</h4>
                        <p class="text-white">No worries if you are stuck on the road,<br> we give your Free Emergency Roadside Assistance.</p>
                    </div> 
                <div class="processthmb">
                        <span><img src="<?=base_url()?>assets/images/process1.png" alt=""></span>
                        <h4 class="text-white">210-point certification</h4>
                        <p class="text-white">Every car undergoes a 210 point inspection <br>by our highly experienced experts</p>
                    </div>
                    <div class="processthmb">
                        <span><img src="<?=base_url()?>assets/images/process2.png" alt=""></span>
                        <h4 class="text-white">24 hrs loan process</h4>
                        <p class="text-white">We aid you with finance support <br>through our leading loan providers in just 24hrs</p>
                    </div>
                    <div class="processthmb">
                        <span><img src="<?=base_url()?>assets/images/process3.png" alt=""></span>
                        <h4 class="text-white">Same day RC Transfer</h4>
                        <p class="text-white">We give you a hassle free experience <br>by doing same day RC Transfer</p>
                    </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="gyuarsec pt-5">
                <h2 class="text-center mb-5">Why Choose Cars2day?</h2>
                <div class="row">
                    <div class="col-md-4 text-center mb-4">
                        <div class="gurwrp">
                            <img src="<?=base_url()?>assets/images/whyico1.png" alt="">
                            <h3 class="py-2">Flexible Finance</h3>
                            <p>We offer a wide range of <br>flexible finance options tailored <br>for your budget & requirements</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="gurwrp">
                            <img src="<?=base_url()?>assets/images/whyico2.png" alt="">
                            <h3 class="py-2">Quality Inspection</h3>
                            <p>All of our cars are thoroughly given a <br>quality check by our expert technicians to <br>deliver in the best possible condition.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="gurwrp">
                            <img src="<?=base_url()?>assets/images/whyico3.png" alt="">
                            <h3 class="py-2">Warranty & Free services</h3>
                            <p>Enjoy benefits like warranty <br>along  with free services for <br>your purchase of car</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <a href="<?=base_url()?>list" class="btn1">Search all cars</a>
                </div>
            </div>
        </div>
    </section>
</section>


<div class="modal fade featmodal" id="featmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="additional-vehicle-info">
            <div class="header">
                <div class="kmx-typography--display-3 vehicle-header">About this car</div>
                <div class="kmx-typography--body-1 vehicle-identifying-info">
                    <!-- <span>Stock # 22698094</span>  -->
                    <span class="separator">|</span> 
                    <!-- <span>VIN # 3C4PDCAB4HT601141</span> -->
                </div>
            </div>
            <div class="kmx-typography--headline-2 section-title">Base specifications</div>
            <table class="kmx-table">
                <tbody>
                    <tr class="has-label">
                        <td class="label">Vehicle Number</td>
                        <td class="value" id="modal_vehicleNo"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Year</td>
                        <td class="value" id="modal_year"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Mileage</td>
                        <td class="value" id="modal_mileage"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Kilometers</td>
                        <td class="value" id="model_kilometers"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">City, State</td>
                        <td class="value" id="model_city"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Number Of Owners</td>
                        <td class="value" id="model_noofowners"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Seat</td>
                        <td class="value" id="modal_seat"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Warranty</td>
                        <td class="value" id="modal_warranty"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Engine</td>
                        <td class="value" id="modal_engine"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">RC Validity</td>
                        <td class="value" id="modal_rcValidity"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Insurance Validity</td>
                        <td class="value" id="modal_insuranceValidity"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Certified</td>
                        <td class="value" id="modal_isCertified"></td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Certified Ref No</td>
                        <td class="value" id="modal_certifiedRefNo"></td>
                    </tr>
                </tbody>
            </table>
            <!-- <div class="kmx-typography--headline-2 section-title">Colors</div>
            <table class="kmx-table">
                <tbody>
                    <tr class="has-label">
                        <td class="label">Exterior</td>
                        <td class="value">White</td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Interior</td>
                        <td class="value">Black</td>
                    </tr>
                </tbody>
            </table> -->
           <!--  <div class="kmx-typography--headline-2 section-title">Engine</div>
            <table class="kmx-table">
                <tbody>
                    <tr class="has-label">
                        <td class="label">Engine Size</td>
                        <td class="value">2.4L</td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Engine Type</td>
                        <td class="value">Gas</td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Engine Torque</td>
                        <td class="value">166/4400 RPM</td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Horsepower</td>
                        <td class="value">173/6000 RPM</td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Cylinders</td>
                        <td class="value">4</td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Drive Train</td>
                        <td class="value">2WD</td>
                    </tr>
                    <tr class="has-label">
                        <td class="label">Transmission</td>
                        <td class="value">Automatic</td>
                    </tr>
                </tbody>
            </table> -->
            <!-- <div class="kmx-typography--headline-2 section-title">Key features</div>
            <table class="kmx-table">
                <tbody>
                    <tr class="no-label">
                        <td class="one">Fold-Away Third Row</td>
                    <td class="two">Auxiliary Audio Input</td>
                </tr>
                    <tr class="no-label">
                        <td class="one">Cruise Control</td>
                        <td class="two">Overhead Airbags</td>
                    </tr>
                        <tr class="no-label">
                            <td class="one">Traction Control</td>
                        <td class="two">Side Airbags</td>
                    </tr>
                    </tbody></table>
                        <div class="kmx-typography--headline-2 section-title">Highlights</div>
                        <table class="kmx-table">
                            <tbody>
                            <tr class="no-label">
                            <td class="one">All New Tires</td>
                        <td class="two"></td>
                    </tr>
                    </tbody>
                    </table>
                        <div class="kmx-typography--headline-2 section-title">All features</div>
                        <table class="kmx-table">
                            <tbody>
                            <tr class="has-label">
                            <td class="label">Feature Score</td>
                        <td class="value">Well-Equipped (4)</td>
                    </tr>
                        <tr class="no-label">
                            <td class="one">Power Locks</td>
                        <td class="two">Heated Mirrors</td>
                    </tr>
                        <tr class="no-label">
                            <td class="one">Power Windows</td>
                        <td class="two">AM/FM Stereo</td>
                    </tr>
                        <tr class="no-label">
                            <td class="one">Cruise Control</td>
                            <td class="two">Rear Defroster</td>
                        </tr>
                        <tr class="no-label">
                            <td class="one">CD Audio</td>
                            <td class="two">Auxiliary Audio Input</td>
                        </tr>
                        <tr class="no-label">
                            <td class="one">Air Conditioning</td>
                            <td class="two">Automatic Transmission</td>
                        </tr>
                        <tr class="no-label">
                            <td class="one">ABS Brakes</td>
                            <td class="two">Fold-Away Third Row</td>
                        </tr>
                        <tr class="no-label">
                            <td class="one">Power Mirrors</td>
                            <td class="two">Third Row Seat</td>
                        </tr>
                        <tr class="no-label">
                            <td class="one">Cloth Seats</td>
                            <td class="two">Traction Control</td>
                        </tr>
                        <tr class="no-label">
                            <td class="one">Side Airbags</td>
                            <td class="two">Smart Key</td>
                        </tr>
                        <tr class="no-label">
                            <td class="one">Overhead Airbags</td>
                            <td class="two"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="kmx-typography--headline-2 section-title">Ratings &amp; reviews</div>
                <table class="kmx-table">
                    <tbody>
                        <tr class="has-label">
                            <td class="label">Average Rating</td>
                            <td class="value">3.74/5</td>
                        </tr>
                        <tr class="has-label">
                            <td class="label">Number of Reviews</td>
                            <td class="value">23</td>
                        </tr>
                    </tbody>
                </table>-->
            </div> 
      </div>
    </div>
  </div>
</div>

<!-- Car list in slider full design start -->
<!-- <div class="productslideinr">
    <div class="prodthmb">
        <div class="prodthmbimgwrp">
            <a href="#" class="prodthmbimg d-block">
                <img src="<?=base_url()?>assets/images/product1.jpg" alt="" class="w-100">
            </a>
            <a class="btndot" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg fill="#6984b4" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                </svg>
            </a>
            <div class="dropdown-menu">
                        <ul class="proddrop">
                            <li class="compare">
                                <button type="button" class="comparebtn">
                            <svg width="21" height="15" viewBox="0 0 21 15" xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true"><g id="Getting-Into-It-Three-Dots" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Search-Results-Desktop---Compare-ON_none" transform="translate(-575 -480)" fill="#053361"><g id="comparetoggles" transform="translate(562 467)"><g id="comparetoggle" transform="translate(3)"><g id="comparegreytry2" transform="translate(10 13)"><path id="Fill-1" d="M7.647 9.376H0v2.25h7.647V15L12 10.501 7.647 6z"></path><path id="Fill-2" d="M13.353 0L9 4.501 13.353 9V5.626H21v-2.25h-7.647z"></path></g></g></g></g></g></svg> Compare</button>
                            </li>
                            <li class="share"> 
                                <button type="button" class="shbtn">
                                    <svg height="20" width="20" fill="#e74141" class="share-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M0 0h24v24H0z" fill="none"></path><path class="icon" d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"></path></svg> Share</button></li>
                            <li class="features">
                                <button type="button" data-toggle="modal" data-target="#featmodal">
                                    <svg height="20" width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true"><path d="M12.613 3.34a.996.996 0 00-.946-.673H4.333c-.44 0-.806.28-.946.673L2 7.333v5.334c0 .366.3.666.667.666h.666c.367 0 .667-.3.667-.666V12h8v.667c0 .366.3.666.667.666h.666c.367 0 .667-.3.667-.666V7.333L12.613 3.34zM4.333 10c-.553 0-1-.447-1-1 0-.553.447-1 1-1 .554 0 1 .447 1 1 0 .553-.446 1-1 1zm7.334 0c-.554 0-1-.447-1-1 0-.553.446-1 1-1 .553 0 1 .447 1 1 0 .553-.447 1-1 1zM3.333 6.667l1-3h7.334l1 3H3.333z" id="path-1"></path></svg>  Features & Specs</button></li>
                
                </ul>
                      </div>
            <button class="wishbtn" type="button">
                <svg height="26" width="26" fill="#e74141" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 485.3 485.3" style="enable-background:new 0 0 485.3 485.3;" xml:space="preserve">
                            <path d="M349.6,28.95c-36.3,0-70.5,14.2-96.2,39.9l-10.6,10.6L232,68.65c-25.7-25.7-59.9-39.9-96.2-39.9
                                c-36.2,0-70.3,14.1-96,39.8S0,128.35,0,164.65s14.2,70.4,39.9,96.1l190.5,190.5l0.4,0.4c3.3,3.3,7.7,4.9,12,4.9
                                c4.4,0,8.8-1.7,12.1-5l190.5-190.5c25.7-25.7,39.9-59.8,39.9-96.1s-14.1-70.5-39.8-96.1C419.9,43.05,385.8,28.95,349.6,28.95z
                                 M421.2,236.75l-178.3,178.4L64.2,236.45c-19.2-19.2-29.8-44.7-29.9-71.9c0-27.1,10.5-52.6,29.7-71.8
                                c19.2-19.1,44.7-29.7,71.7-29.7c27.2,0,52.7,10.6,72,29.9l22.9,22.9c6.4,6.4,17.8,6.4,24.3,0l22.8-22.8
                                c19.2-19.2,44.8-29.8,71.9-29.8s52.6,10.6,71.8,29.8c19.2,19.2,29.8,44.7,29.7,71.9C451.1,192.05,440.5,217.55,421.2,236.75z"/>
                </svg>
            </button>
        </div>
        <div class="prodcaption">
            <a href="#"><h3>Hyundai i10 Magna</h3></a>
            <div class="prodcat">Petrol  |  Red</div>
            <div class="prodthmbprc">&#8377;3,25,000</div>
            <small class="shipinfo d-block">Free Shipping from Car2Day</small>
        </div>
    </div>
</div> -->
<!-- Car list in slider full design end -->