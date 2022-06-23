<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class=""><div class="container"><div class="" id="pagew"></div></div></div>
<?php if( $this->session->has_userdata('recently_viewed') ){ ?>
<section class="backbnr" style="background-image: url(<?=base_url()?>assets/images/homebase-tablet.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    
    <div class="container">
        <div class="row align-items-center py-3">
            <div class="col-md-8">
                <h3 class="text-white">Love Your Car Guarantee® <small>24-hr test drives & 30-day returns (up to 1500 mi)</small></h3>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="<?=base_url()?>list" class="btn1 shadow">Shop All Cars</a>
            </div>
        </div>
    </div>
    <div class="border-top mb-4"></div>
    <div class="container">
        <div class="backbnrtab">
            <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><rect width="32" height="32" fill="none"></rect><g><g><g><g><path class="filled-path" d="M16.5,4a12,12,0,0,0-12,12H.5l5.19,5.19.09.18L11.17,16h-4a9.36,9.36,0,1,1,2.74,6.59L8,24.48A12,12,0,1,0,16.5,4Zm-1.33,6.67v6.66l5.7,3.39,1-1.61-4.66-2.78V10.67Z"></path></g></g></g></g></svg>  Viewed
                  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <svg viewBox="0 0 32 32" width="32" height="32" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M22.7,19.1H21.6l-.4-.4a9.16,9.16,0,0,0,2.1-5.8A8.81,8.81,0,0,0,14.6,4,8.79,8.79,0,0,0,6,12.9H2.7l5.1,5.5,5.5-5.5H8.6a6.13,6.13,0,0,1,6-6.2,6.13,6.13,0,0,1,6,6.2,6.13,6.13,0,0,1-6,6.2,6,6,0,0,1-2.4-.5l-2,2a8.31,8.31,0,0,0,4.4,1.2,8.21,8.21,0,0,0,5.6-2.2l.4.4v1.1L27.3,28l2-2Z" class="filled-path"></path><g><rect id="bad44000-0b53-4c86-a131-794ad20f5488" width="32" height="32" fill="none"></rect></g></svg>  Wishlist
                  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                  <svg viewBox="0 0 24 24" width="32" height="32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M0,0H24V24H0Z" fill="none"></path><path class="filled-path" d="M3,11h8V3H3ZM5,5H9V9H5Z"></path><path class="filled-path" d="M13,3v8h8V3Zm6,6H15V5h4Z"></path><path class="filled-path" d="M3,21h8V13H3Zm2-6H9v4H5Z"></path><polygon class="filled-path" points="18 13 16 13 16 16 13 16 13 18 16 18 16 21 18 21 18 18 21 18 21 16 18 16 18 13"></polygon>
                    </svg>  You might like
                  </a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div style="text-align: center;" class="recently_viewed_loader">
                        <img src="<?=base_url()?>assets/images/Rolling-loader.gif" style="width:4rem !important">
                    </div>
                    <div class="productslide" id="recently_viewed">
                        
                   
                </div>
                
                </div>

              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div style="text-align: center;" class="wishlist_loader">
                    <img src="<?=base_url()?>assets/images/Rolling-loader.gif" style="width:4rem !important">
                </div>
                <div class="productslide" id="wishlisted_cars">               
                
                
                <!-- <div class="productslideinr">
                    <div class="prodthmb">
                        <div class="prodthmbimgwrp">
                            <a href="#" class="prodthmbimg d-block">
                                <img src="<?=base_url()?>assets/images/product1.jpg" alt="" class="w-100">
                            </a>
                        </div>
                        <div class="prodcaption">
                            <a href="#"><h3>Hyundai i10 Magna</h3></a>
                            <div class="prodcat">Petrol  |  Red</div>
                            <div class="prodthmbprc">&#8377;3,25,000</div>
                            <small class="shipinfo d-block">Free Shipping from Car2Day</small>
                        </div>
                    </div>
                </div> -->

            </div>
                </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div style="text-align: center;" class="first_ten_recomandations_loader">
                    <img src="<?=base_url()?>assets/images/Rolling-loader.gif" style="width:4rem !important">
                </div>
                <div class="productslide" id="first_ten_recomandations">
                
                
                
                <!-- <div class="productslideinr">
                    <div class="prodthmb">
                        <div class="prodthmbimgwrp">
                            <a href="#" class="prodthmbimg d-block">
                                <img src="<?=base_url()?>assets/images/product1.jpg" alt="" class="w-100">
                            </a>
                        </div>
                        <div class="prodcaption">
                            <a href="#"><h3>Hyundai i10 Magna</h3></a>
                            <div class="prodcat">Petrol  |  Red</div>
                            <div class="prodthmbprc">&#8377;3,25,000</div>
                            <small class="shipinfo d-block">Free Shipping from Car2Day</small>
                        </div>
                    </div>
                </div> -->



            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }else{ ?>
<section class="homeslider">
    <section class="homebanner" style="background-image: url(<?=base_url()?>assets/images/homebanner2.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="homebannercaption">
                        <h1 class="mb-3">Shift to <br>better drive. <img class="pl-2 d-inline-block" src="<?=base_url()?>assets/images/double-right-arrow.png" alt="" width="40"></h1>
                        <p>Make your journey impeccable with a Plethora of Memories in your New Pre-loved Car.</p>
                        <a href="<?=base_url()?>store" class="btn1">Find your Dream Car</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homebanner" style="background-image: url(<?=base_url()?>assets/images/homebanner3.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="homebannercaption">
                        <h1 class="mb-3"><span>No Looking Back <br>after Purchase-</span><br>Quality Guaranteed <img class="pl-2 d-inline-block" src="<?=base_url()?>assets/images/double-right-arrow.png" alt="" width="40"></h1>
                        <p>We ensure positive post service experience through our state of the art systems & processes.</p>
                        <a href="<?=base_url()?>store" class="btn1">Find your Dream Car</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homebanner" style="background-image: url(<?=base_url()?>assets/images/homebanner1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <div class="homebannercaption">
                        <h1 class="mb-3"><span>Purchase Used Car with </span> <br>great choice & value for money <img src="<?=base_url()?>assets/images/double-right-arrow.png" alt="" width="40" class="pl-2 d-inline-block"></h1>
                        <p>Select your right match of pre-loved car from a<br> wide spectrum of leading car brands</p>
                        <a href="<?=base_url()?>store" class="btn1">Find your Dream Car</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homebanner" style="background-image: url(<?=base_url()?>assets/images/homebanner4.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="homebannercaption">
                        <h1 class="mb-3"><span>Your Car Service - </span><br>Made Simple <br>& Better <img class="pl-2 d-inline-block" src="<?=base_url()?>assets/images/double-right-arrow.png" alt="" width="40"></h1>
                        <p>Get a Car Service Experience like never before - Quality & Pocket-friendly service Assured!</p>
                        <a href="<?=base_url()?>carvenience" class="btn1">Go to Carvenience</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homebanner" style="background-image: url(<?=base_url()?>assets/images/homebanner5.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="homebannercaption">
                        <h1 class="mb-3"><span class="text-white">Genuine Car <br>Spare Parts for</span><br> your Pre-loved Car <img class="pl-2 d-inline-block" src="<?=base_url()?>assets/images/double-right-arrow.png" alt="" width="40"></h1>
                        <p class="text-white">Choose from a myriad of 5lacs of Replacement Parts & much more</p>
                        <a href="<?=base_url()?>autoteilee" class="btn1">Visit Autoteilee</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<?php } ?>


<section class="findcarssec">
    <div class="container">
        <div class="findcar">
            <h2 class="text-center mb-4">Dream it. Buy it. Drive it.</h2>
            <small class="d-block mb-3 text-center" style="font-size:16px">Find Budget Friendly Cars</small>
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
            <div class="row mt-4 align-items-end">
                <div class="col-lg-8 text-center">
                    <small class="d-block mb-3">Plan your Estimated Spend here</small>
                    <div class="row row5 bugdtcal">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="d-block m-0">Down Payment</label>
                                <div class="d-flex justify-content-center align-items-center">
                                    <span>&#x20B9;</span>
                                    <input type="text" value="4,000" size="5">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="d-block m-0">EMI</label>
                                <div class="d-flex justify-content-center align-items-center">
                                    <span>&#x20B9;</span>
                                    <input type="text" value="2,50,000" size="5">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="d-block m-0">Tenure</label>
                                <select>
                                    <option>Good 700-750...</option>
                                    <option>Good 700-750...</option>
                                    <option>Good 700-750...</option>
                                    <option>Good 700-750...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center mt-md-3">
                    <div class="estbudgt">
                        <h4>Estimated budget <i data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            <svg width="16" height="16" fill="#6984b4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 460 460" style="enable-background:new 0 0 460 460;" xml:space="preserve">
                                    <path d="M230,0C102.975,0,0,102.975,0,230s102.975,230,230,230s230-102.974,230-230S357.025,0,230,0z M268.333,377.36
                                        c0,8.676-7.034,15.71-15.71,15.71h-43.101c-8.676,0-15.71-7.034-15.71-15.71V202.477c0-8.676,7.033-15.71,15.71-15.71h43.101
                                        c8.676,0,15.71,7.033,15.71,15.71V377.36z M230,157c-21.539,0-39-17.461-39-39s17.461-39,39-39s39,17.461,39,39
                                        S251.539,157,230,157z"/>
                            </svg>
                            </i>
                        </h4>
                        <div class="d-flex justify-content-center align-items-center">
                            <span>&#x20B9;</span>
                            <big class="d-block">4,75,000</big>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shopwithbudbtn text-center">
                <a href="" class="btn1">Fetch Cars with Budget</a>
            </div>
        </div>
    </div>
</section>

<section class="wayitsec imgeffect">
    <div class="container" id="contttt"></div>
    <div class="wayitsecbg" style="min-width: 940px; width: 100%;">
        <img src="<?=base_url()?>assets/images/wayitsec.jpg" alt="" class="w-100">
        <span></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="wayit fadeUp in-view">
                    <h3 class="text-center p-3">Why Customers prefer Cars2day?</h3>
                    <div class="wayitlistwrp">
                        <a class="d-flex align-items-center mb-2" href="" data-toggle="modal" data-target="#preferpopup" data-slide="0">
                            <span>
                                <img src="<?=base_url()?>assets/images/wayitico1.png" alt="">
                            </span>
                            <h5>Preowned</h5>
                            <div class="ml-auto">
                                <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                    <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                    c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                    C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                    C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                </svg>
                            </div>
                        </a>
                        <a class="d-flex align-items-center mb-2" href="" data-toggle="modal" data-target="#preferpopup" data-slide="1">
                            <span>
                                <img src="<?=base_url()?>assets/images/wayitico2.png" alt="">
                            </span>
                            <h5>Refurbished</h5>
                            <div class="ml-auto">
                                <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                    <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                    c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                    C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                    C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                </svg>
                            </div>
                        </a>
                        <a class="d-flex align-items-center mb-2" href="" data-toggle="modal" data-target="#preferpopup" data-slide="2">
                            <span>
                                <img src="<?=base_url()?>assets/images/wayitico3.png" alt="">
                            </span>
                            <h5>Certified</h5>
                            <div class="ml-auto">
                                <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                    <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                    c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                    C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                    C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                </svg>
                            </div>
                        </a>
                        <a class="d-flex align-items-center mb-2" href="" data-toggle="modal" data-target="#preferpopup" data-slide="3">
                            <span>
                                <img src="<?=base_url()?>assets/images/wayitico4.png" alt="">
                            </span>
                            <h5>Warranty/Free Service</h5>
                            <div class="ml-auto">
                                <svg width="24" height="24" fill="#e74141" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                    <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                    c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                    C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                    C255,161.018,253.42,157.202,250.606,154.389z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="wayitbtn text-center">
                        <a href="<?=base_url()?>list" class="btn1">Shop all cars</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="instasec">
        <div class="container">
            <h2 class="mb-2">Sharing Moments of Incredible Journey @ Cars2day </h2>
            <small class="mb-5 d-block">#Cars2dayJourneyforever</small>
        </div>
        <div class='sk-ww-instagram-hashtag-feed' data-embed-id='82997'></div><script src='https://widgets.sociablekit.com/instagram-hashtag-feed/widget.js' async defer></script>
        <!-- <div class="instaslide">
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta1.jpg" alt="" class="w-100">
                    <div class="instacap">
                        <div class="d-flex align-items-center text-white">
                            <i>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z" stroke="#ffffff" stroke-width="1.5"/>
                                    <path d="M17.5 6.51L17.51 6.49889" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </i>
                            <span class="pl-2">@customername</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta2.jpg" alt="" class="w-100">
                    <div class="instacap">
                        <div class="d-flex align-items-center text-white">
                            <i>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z" stroke="#ffffff" stroke-width="1.5"/>
                                    <path d="M17.5 6.51L17.51 6.49889" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </i>
                            <span class="pl-2">@customername</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta3.jpg" alt="" class="w-100">
                    <div class="instacap">
                        <div class="d-flex align-items-center text-white">
                            <i>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z" stroke="#ffffff" stroke-width="1.5"/>
                                    <path d="M17.5 6.51L17.51 6.49889" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </i>
                            <span class="pl-2">@customername</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta4.jpg" alt="" class="w-100">
                    <div class="instacap">
                        <div class="d-flex align-items-center text-white">
                            <i>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z" stroke="#ffffff" stroke-width="1.5"/>
                                    <path d="M17.5 6.51L17.51 6.49889" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </i>
                            <span class="pl-2">@customername</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta5.jpg" alt="" class="w-100">
                    <div class="instacap">
                        <div class="d-flex align-items-center text-white">
                            <i>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z" stroke="#ffffff" stroke-width="1.5"/>
                                    <path d="M17.5 6.51L17.51 6.49889" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </i>
                            <span class="pl-2">@customername</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta5.jpg" alt="" class="w-100">
                    <div class="instacap">
                        <div class="d-flex align-items-center text-white">
                            <i>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z" stroke="#ffffff" stroke-width="1.5"/>
                                    <path d="M17.5 6.51L17.51 6.49889" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </i>
                            <span class="pl-2">@customername</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta5.jpg" alt="" class="w-100">
                    <div class="instacap">
                        <div class="d-flex align-items-center text-white">
                            <i>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z" stroke="#ffffff" stroke-width="1.5"/>
                                    <path d="M17.5 6.51L17.51 6.49889" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </i>
                            <span class="pl-2">@customername</span>
                        </div>
                    </div>
                </a>
            </div>
        </div> -->
    </div>
</section>      

<style>
/*.sk_branding{
    display: none !important;
}*/
 body .sk_branding{ display : none !important; } body .sk_branding a{ display : none !important; }
</style>

      
 <section class="seltradsec imgeffect">
    <div class="seltradsecbg">
        <img src="<?=base_url()?>assets/images/tabsliderbg.jpg" alt="" class="w-100">
        <span></span>
    </div>
    <div class="container pb-4">
        <h3 class="mb-4 fadeUp">Selling or Trading - Made Simple</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="fadeUp">
                
                <div class="tradefrmsec p-4 bg-white">
                    <h3 class="mb-1">Give us 2 Minuts - <br>Get your offer NOW</h3>
                    <small class="d-block mb-3">And then your journey beging forever!</small>
                    <div class="tradefrmtab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Selling</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Trading</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="trdfrm">
                                    <form id="Selling" action="<?=base_url();?>home_data">
                                        <input type="hidden" name="type" value="selling">
                                        <div class="form-group">
                                            <input type="text" name="registrationNumber" class="form-control" placeholder="Regd. No."  required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="make" class="form-control" placeholder="Make" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="model" class="form-control"  placeholder="Modal" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="year" class="form-control"  placeholder="Year (Ex. 2015)" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="owner" class="form-control"  placeholder="Owner" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="location" class="form-control"  placeholder="Location" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="kilometers" class="form-control"  placeholder="Kilometers" required>
                                        </div> 
                                        <div class="collapse" id="next1">
                                            <div class="form-group">
                                                <input type="text" id="selling_name" class="form-control" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" id="selling_mobile" class="form-control" placeholder="Phone no." name="mobile">
                                            </div>
                                        </div>
                                        <div class="minsmackup">
                                            <div class="arwdwn" data-toggle="collapse" data-target="#next1">
                                                <i class="fas fa-chevron-down fa-fw"></i>
                                            </div>
                                            <em class="d-block text-center">Get Pre evaluation done at your door step</em>
                                        </div>
                                        <button class="btn1" type="submit">Kick Start your Drive</button>
                                    </form>
                                </div>
                            </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="trdfrm">
                                    <form id="Treading" action="<?=base_url();?>home_data">
                                        <input type="hidden" name="type" value="trading">
                                        <div class="form-group">
                                            <input type="text" name="registrationNumber" class="form-control" placeholder="Regd. No."  required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="make" class="form-control" placeholder="Make" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="model" class="form-control"  placeholder="Modal" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="year" class="form-control"  placeholder="Year (Ex. 2015)" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="owner" class="form-control"  placeholder="Owner" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="location" class="form-control"  placeholder="Location" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="kilometers" class="form-control"  placeholder="Kilometers" required>
                                        </div> 
                                        <div class="collapse" id="next2">
                                            <div class="form-group">
                                                <input type="text" id="treading_name" class="form-control" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" id="treading_mobile" class="form-control" placeholder="Phone no." name="mobile">
                                            </div>
                                        </div>
                                        <div class="minsmackup">
                                            <div class="arwdwn" data-toggle="collapse" data-target="#next2">
                                                <i class="fas fa-chevron-down fa-fw"></i>
                                            </div>
                                            <em class="d-block text-center">Get Pre evaluation done at your door step</em>
                                        </div>
                                        <button class="btn1" type="submit">Kick Start your Drive</button>
                                    </form>
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

<section class="py-5 bg-light">
    <div class="instasec">
        <div class="container">
            <h3 class="mb-4">Know more about Popular Pre-loved Cars & SUVs</h3>
        </div>
        
        <div class="instaslide">
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta1.jpg" alt="" class="w-100">
                    <div class="resecap">
                        <div class="rankings">Rankings</div>
                        <h4>BEST HYBRID CARS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="d-flex align-items-center">
                            
                            <span class="ml-auto">
                                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                <path d="M36 24.0083H12" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 12L36 24L24 36" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta2.jpg" alt="" class="w-100">
                    <div class="resecap">
                        <div class="rankings">Rankings</div>
                        <h4>BEST HYBRID CARS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="d-flex align-items-center">
                           
                            <span class="ml-auto">
                                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                <path d="M36 24.0083H12" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 12L36 24L24 36" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta3.jpg" alt="" class="w-100">
                    <div class="resecap">
                        <div class="rankings">Rankings</div>
                        <h4>BEST HYBRID CARS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="d-flex align-items-center">
                            
                            <span class="ml-auto">
                                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                <path d="M36 24.0083H12" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 12L36 24L24 36" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta4.jpg" alt="" class="w-100">
                    <div class="resecap">
                        <div class="rankings">Rankings</div>
                        <h4>BEST HYBRID CARS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="d-flex align-items-center">
                            
                            <span class="ml-auto">
                                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                <path d="M36 24.0083H12" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 12L36 24L24 36" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta5.jpg" alt="" class="w-100">
                    <div class="resecap">
                        <div class="rankings">Rankings</div>
                        <h4>BEST HYBRID CARS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="d-flex align-items-center">
                            
                            <span class="ml-auto">
                                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                <path d="M36 24.0083H12" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 12L36 24L24 36" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta5.jpg" alt="" class="w-100">
                    <div class="resecap">
                        <div class="rankings">Rankings</div>
                        <h4>BEST HYBRID CARS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="d-flex align-items-center">
                           
                            <span class="ml-auto">
                                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                <path d="M36 24.0083H12" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 12L36 24L24 36" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="instaslideinr">
                <a href="#" class="d-block">
                    <img src="<?=base_url()?>assets/images/insta5.jpg" alt="" class="w-100">
                    <div class="resecap">
                        <div class="rankings">Rankings</div>
                        <h4>BEST HYBRID CARS</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="d-flex align-items-center">
                         
                            <span class="ml-auto">
                                <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                <path d="M36 24.0083H12" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 12L36 24L24 36" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>     
      
<!-- <section class="py-5">
    <div class="container">
        <div class="gplaysec text-center pt-5">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-md-8 text-white">
                    <div class="p-4 p-lg-5">
                        <h3 class="mb-4 text-white">Shop Used Cars in a Click - <br>Simply Select & Start your Ride!</h3>
                        <p>Sit back, relax & <strong>download our app</strong> or mail us at <strong>www.info.cars2day.in</strong> and enjoy a mind of intriguing car choices.<br>You never know - your dream with four wheels may be a click away!</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="" target="_blank" class="appbtn">
                                <img src="<?=base_url()?>assets/images/appstore.png" alt="">
                            </a>
                            <a href="" target="_blank" class="appbtn">
                                <img src="<?=base_url()?>assets/images/playstore.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pl-lg-5">
                    <img src="<?=base_url()?>assets/images/gplaymob.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="py-5">
    <div class="container">
       <div class="px-lg-5 text-center">
        <img src="<?=base_url()?>assets/images/Cars2Day.gif" class="img-fluid" alt="" width="100%">
       </div>
    </div>
</section>

<div class="modal fade bd-example-modal-lg" id="preferpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <svg height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 371.23 371.23" style="enable-background:new 0 0 371.23 371.23;" xml:space="preserve">
                <polygon points="371.23,21.213 350.018,0 185.615,164.402 21.213,0 0,21.213 164.402,185.615 0,350.018 21.213,371.23 
                185.615,206.828 350.018,371.23 371.23,350.018 206.828,185.615 "/>
            </svg>
        </button>
        <section class="tabslidersec py-5">
    <div class="container">
      <div class="px-4 pt-4 bg-white tabsliderbox">


        <div class="slidertab-for my-4">
          <div class="">


            <div class="tabdtlsboxslider">
              <div class="tabdtlsbox">
                <div class="tabdtlsvoxImg mb-3">
                  <span><img src="<?=base_url()?>assets/images/preowned.png" class="w-100" alt=""></span>
                </div>
                <h3>Preowned</h3>
                <p>Cars2day proudly holds a myriad of pre-owned cars form a multitude of experienced, customer friendly independent dealers. When compared to buying a new car, pre-loved cars thoroughly benefits the terms of cost & immense gain on depreciation</p>
              </div>
            </div>
            

            <div class="text-center mb-3"> <a class="btn1 shadow px-lg-5 shadow" href="<?=base_url()?>list">Shop all cars</a></div>



          </div>
          <div class="">

            <div class="tabdtlsboxslider">
              <div class="tabdtlsbox">
                <div class="tabdtlsvoxImg mb-3">
                  <span><img src="<?=base_url()?>assets/images/Refurbished.png" class="w-100" alt=""></span>
                </div>
                <h3>Refurbished</h3>
                <p>Refurbished cars are entirely tested for quality & function of system and also, we replace / repair the necessary parts whenever required. The process of refurbishment proffers buyers the freedom from any expenditure right after their purchase. At Cars2day, Refurbishment is defined by sheer perfection by our experts.</p>
              </div>
            </div>
              <div class="text-center mb-3"> <a class="btn1 shadow px-lg-5 shadow" href="<?=base_url()?>list">Shop all cars</a></div>
          </div>
          <div class="">

            <div class="tabdtlsboxslider">
              <div class="tabdtlsbox">
                <div class="tabdtlsvoxImg mb-3">
                  <span><img src="<?=base_url()?>assets/images/Ceritifed.png" class="w-100" alt=""></span>
                </div>
                <h3>Certified</h3>
               <p>Every car @ Cars2day never misses to undergo a rigorous 210 point inspection by our technical experts. It covers the Mechanical Systems, Body, Chasis in depth for the Mal function, Misalignment and Ensure that its roadworthiness. After Inspection, a Certificate will be issued with the Five Star Rating Scale, based upon the New Car Standards.</p>
              </div>
            </div>
                <div class="text-center mb-3"> <a class="btn1 shadow px-lg-5 shadow" href="<?=base_url()?>list">Shop all cars</a></div>
          </div>
          <div class="">
            
            <div class="tabdtlsboxslider">
            

              <div class="tabdtlsbox">
                <div class="tabdtlsvoxImg mb-3">
                  <span><img src="<?=base_url()?>assets/images/Warranty2.png" class="w-100" alt=""></span>
                </div>
                <h3>Warranty/Free Service</h3>
               <p>Every certified car of Cars2day carries a 25000kms or 1 year comprehensive warranty that covers the major element of engine & gear box. At Cars2day Authorised Network Garages, we proffer two Labour Free services to all our Certified cars in every Six Months or 10000 KMS interval.</p>
              </div>

            </div>

<div class="text-center mb-3"> <a class="btn1 shadow px-lg-5 shadow" href="<?=base_url()?>list">Shop all cars</a></div>
          </div>
        </div>


        <div class="slidertab-nav mx-lg-4">
          <div>
            <a class="crviewbtn active" id="pills-Preowned-tab" data-toggle="pill" href="#pills-Preowned" role="tab"
              aria-controls="pills-Preowned" aria-selected="true">Preowned</a>
          </div>
          <div>
            <a class="crviewbtn" id="pills-Refurbished-tab" data-toggle="pill" href="#pills-Refurbished" role="tab"
              aria-controls="pills-Refurbished" aria-selected="false"> Refurbished</a>
          </div>
          <div>
            <a class="crviewbtn" id="pills-Certified-tab" data-toggle="pill" href="#pills-Certified" role="tab"
              aria-controls="pills-Certified" aria-selected="false"> Certified</a>
          </div>
          <div>
            <a class="crviewbtn" id="pills-Warranty-tab" data-toggle="pill" href="#pills-Warranty" role="tab"
              aria-controls="pills-Warranty" aria-selected="false"> Warranty/Free Service</a>
          </div>
        </div>

      </div>
    </div>
  </section>
      </div>
    </div>
  </div>
</div>  