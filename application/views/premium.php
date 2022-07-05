<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class=""><div class="container"><div class="" id="pagew"></div></div></div>

<section class="homeslider">
    <section class="homebanner premiumpgbnr" style="background-image: url(<?=base_url()?>assets/images/premium-banner1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="homebannercaption">
                        <h1 class="mb-3 text-white">Luxury car classified <img class="d-inline-block" src="<?=base_url()?>assets/images/double-right-arrow-white.png" alt="" width="40"></h1>
                        <p class="text-white">Mark the beginning of an Extra-ordinary Journey.</p>
                        <a href="<?=base_url()?>store" class="btn1">Find your Dream Car</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homebanner premiumpgbnr" style="background-image: url(<?=base_url()?>assets/images/premium-banner2.jpg); background-repeat: no-repeat; background-size: cover; background-position: center top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="homebannercaption">
                        <h1 class="mb-3"><span>Reselling cars is on a whole new level</span> <img class="d-inline-block" src="<?=base_url()?>assets/images/double-right-arrow.png" alt="" width="40"></h1>
                        <p>The ultimate marketplace for buying and selling <br> luxury cars online.</p>
                        <a href="<?=base_url()?>store" class="btn1">Find your Dream Car</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homebanner premiumpgbnr" style="background-image: url(<?=base_url()?>assets/images/premium-banner3.jpg); background-repeat: no-repeat; background-size: cover; background-position: center top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="homebannercaption">
                        <h1 class="mb-3"><span>Car Resale. Pure & Simple</span> <img src="<?=base_url()?>assets/images/double-right-arrow.png" alt="" width="40" class="d-inline-block"></h1>
                        <p>Your exclusive access to a curated collection of <br> high-end vehicles with a hassel-free purchases. </p>
                        <a href="<?=base_url()?>store" class="btn1">Find your Dream Car</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="findcarssec premium-brandlogosec">
    <div class="container pb-5">
        <div class="findcar premium-brandlogowrp">
            <h2 class="text-center mb-4 borderbtm-gradient pb-3">Discover the world of luxury with ease.</h2>
            
            <div class="slide4">
                <?php 
                    $i = 1;
                    $j = 0;
                    foreach($premium_brand as $key=>$value){
                        $i++;
                    ?>
                <?php if($i % 2 == 0){ $j = $i; ?> <div class="premium-brandcol text-center"> <?php } ?>
                    <div class="premium-brandthmb">
                    <a href="<?=base_url()?>list?brand=<?=$value['name']?>">
                        <div class="premium-brandico">
                            <img src="<?=$value['image']?>" alt="" width="160">
                        </div>
                    </a>
                </div>
                <?php if($i == $j+1){ ?> </div> <?php } ?>
                <?php } ?>


                <!-- <div class="premium-brandcol text-center">
                    </div> -->

                <!-- <div class="premium-brandthmb">
                    <a href="<?=base_url()?>list?brand=<?=$value['name']?>">
                        <div class="premium-brandico">
                            <img src="<?=$value['image']?>" alt="" width="160">
                        </div>
                    </a>
                </div> -->
                <!-- <div class="premium-brandthmb">
                        <a href="<?=base_url()?>list?brand=<?=$value['name']?>">
                            <div class="premium-brandico">
                                <img src="<?=$value['image']?>" alt="" width="160">
                            </div>
                        </a>
                    </div> -->
                <!-- <div class="premium-brandcol text-center">
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand3.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand4.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="premium-brandcol text-center">
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand5.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand6.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="premium-brandcol text-center">
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand7.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand8.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="premium-brandcol text-center">
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand4.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand5.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="premium-brandcol text-center">
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand6.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                    <div class="premium-brandthmb">
                        <a href="<?=base_url()?>">
                            <div class="premium-brandico">
                                <img src="<?=base_url()?>assets/images/premium-brand7.png" alt="" width="160">
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
            <div class="shopwithbudbtn text-center">
                <a href="" class="btn1">Fetch Cars with Budget</a>
            </div>
        </div>
    </div>
</section>

<section class="wayitsec imgeffect premium-wayitsec">
    <div class="container" id="contttt"></div>
    <div class="wayitsecbg" style="min-width: 940px; width: 100%;">
        <img src="<?=base_url()?>assets/images/premium-wayitsec.jpg" alt="" class="w-100">
        <span></span>
    </div>
    <div class="container modalreltv">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="wayit fadeUp in-view">
                    <h3 class="text-center p-3 borderbtm-gradient mb-3 text-white">Why Customers prefer Cars2day?</h3>
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
        <div class="modal fade bd-example-modal-lg proferpopup" id="preferpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <svg height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 371.23 371.23" style="enable-background:new 0 0 371.23 371.23;" xml:space="preserve">
                <polygon points="371.23,21.213 350.018,0 185.615,164.402 21.213,0 0,21.213 164.402,185.615 0,350.018 21.213,371.23 
                185.615,206.828 350.018,371.23 371.23,350.018 206.828,185.615 "/>
            </svg>
        </button>
        <section class="tabslidersec">
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
                <p>Cars2day proudly holds a myriad of pre-owned cars form a multitude of experienced, customer <br>friendly independent dealers. When compared to buying a new car, pre-loved cars thoroughly <br>benefits the terms of cost & immense gain on depreciation</p>
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
                <p>Refurbished cars are entirely tested for quality & function of system and also, we replace / repair the necessary <br>parts whenever required. The process of refurbishment proffers buyers the freedom from any expenditure <br>right after their purchase. At Cars2day, Refurbishment is defined by sheer perfection by our experts.</p>
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
               <p>Every car @ Cars2day never misses to undergo a rigorous 210 point inspection by our technical experts. It covers the <br>Mechanical Systems, Body, Chasis in depth for the Mal function, Misalignment and Ensure that its roadworthiness. <br>After Inspection, a Certificate will be issued with the Five Star Rating Scale, based upon the New Car Standards.</p>
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
               <p>Every certified car of Cars2day carries a 25000kms or 1 year comprehensive warranty that covers the <br>major element of engine & gear box. At Cars2day Authorised Network Garages, we proffer two <br>Labour Free services to all our Certified cars in every Six Months or 10000 KMS interval.</p>
              </div>

            </div>

<div class="text-center mb-3"> <a class="btn1 shadow px-lg-5 shadow" href="<?=base_url()?>list">Shop all cars</a></div>
          </div>
        </div>

<div class="pronavbg">
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
    </div>
  </section>
      </div>
    </div>
  </div>
</div>
    </div>
</section>
<section class="py-5 blubg">
    <div class="container">
        <div class="testisec mb-5 pb-5">
            <h2 class="text-center mb-3 borderbtm-gradient pb-3 text-white">Sharing Moments of Incredible Journey @ Cars2day</h2>
            <small class="d-block mb-4 text-center text-red" style="font-size:16px">#CARS2TODAYJOURNEYFOREVER</small>
            <div class="testislide">
                <div class="py-4">
                    <div class="testislideinr text-center text-white">
                        <img src="<?=base_url()?>assets/images/testiopenqut.png" alt="" width="50" class="testiopenqut">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <big class="d-block text-white">- Customer Name</big>
                        <img src="<?=base_url()?>assets/images/testiendqut.png" alt="" width="50" class="testiendqut">
                    </div>
                </div>
                <div class="py-4">
                    <div class="testislideinr text-center text-white">
                        <img src="<?=base_url()?>assets/images/testiopenqut.png" alt="" width="50" class="testiopenqut">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <big class="d-block text-white">- Customer Name</big>
                        <img src="<?=base_url()?>assets/images/testiendqut.png" alt="" width="50" class="testiendqut">
                    </div>
                </div>
                <div class="py-4">
                    <div class="testislideinr text-center text-white">
                        <img src="<?=base_url()?>assets/images/testiopenqut.png" alt="" width="50" class="testiopenqut">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <big class="d-block text-white">- Customer Name</big>
                        <img src="<?=base_url()?>assets/images/testiendqut.png" alt="" width="50" class="testiendqut">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lovedsec">
        <div class="container">
            <h2 class="text-center mb-5 borderbtm-gradient pb-3 text-white">Know more about Popular Pre-loved Luxucr Cars</h2>
        </div>
        <div class="lovedslide">
                <div class="">
                    <div class="row m-0 align-items-center">
                        <div class="col-8 p-0 col-sm-7">
                            <img src="<?=base_url()?>assets/images/lovedimg1.jpg" alt="" class="w-100">
                        </div>
                        <div class="col-4 p-0 col-sm-5">
                            <div class="lovedcon text-white">
                                <h5 class="text-white mb-3">LUXURY</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row m-0 align-items-center">
                        <div class="col-8 p-0 col-sm-7">
                            <img src="<?=base_url()?>assets/images/lovedimg2.jpg" alt="" class="w-100">
                        </div>
                        <div class="col-4 p-0 col-sm-5">
                            <div class="lovedcon text-white">
                                <h5 class="text-white mb-3">LUXURY</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row m-0 align-items-center">
                        <div class="col-8 p-0 col-sm-7">
                            <img src="<?=base_url()?>assets/images/lovedimg3.jpg" alt="" class="w-100">
                        </div>
                        <div class="col-4 p-0 col-sm-5">
                            <div class="lovedcon text-white">
                                <h5 class="text-white mb-3">LUXURY</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="container">
        <div class="px-lg-5 text-center pt-5 mt-5">
            <img src="<?=base_url()?>assets/images/Cars2Day-blu.gif" class="img-fluid" alt="" width="100%">
        </div>
    </div>
</section>

  