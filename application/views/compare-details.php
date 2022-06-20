  <?php
    $number_of_car_compare = count(explode(",",$_GET['cars']));

    if($number_of_car_compare == 2){
        $car1 = $compare_data->data->car1;
        $car2 = $compare_data->data->car2;
    }else if($number_of_car_compare == 3){
        $car1 = $compare_data->data->car1;
        $car2 = $compare_data->data->car2;
        $car3 = $compare_data->data->car3;
    }
?>
  <body class="inrpg">
    <section class="comparehdr">
        <header class="compare-header px-4 py-2 bg-white">
            <div id="bactoserc" style="cursor:pointer;">
             <div  class="d-flex align-items-center"><svg width="17" height="17" viewBox="0 0 52 52" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><path d="M50,24H6.83L27.41,3.41a2,2,0,0,0,0-2.82,2,2,0,0,0-2.82,0l-24,24a1.79,1.79,0,0,0-.25.31A1.19,1.19,0,0,0,.25,25c0,.07-.07.13-.1.2l-.06.2a.84.84,0,0,0,0,.17,2,2,0,0,0,0,.78.84.84,0,0,0,0,.17l.06.2c0,.07.07.13.1.2a1.19,1.19,0,0,0,.09.15,1.79,1.79,0,0,0,.25.31l24,24a2,2,0,1,0,2.82-2.82L6.83,28H50a2,2,0,0,0,0-4Z"/></svg>  <span class="ml-2 chngtext"></span></div></div>

             <div class="cmlogo"><img src="<?=base_url()?>assets/images/logo.png" alt=""></div>
             <!-- <div class="d-flex align-items-center">
                <span class="mr-2">CHNAGE CARS</span> 
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17" height="17"
                viewBox="0 0 477.427 477.427" style="enable-background:new 0 0 477.427 477.427;" xml:space="preserve">
                <g>
               <polygon points="101.82,187.52 57.673,143.372 476.213,143.372 476.213,113.372 57.181,113.372 101.82,68.733 80.607,47.519 
                   0,128.126 80.607,208.733 	"/>
               <polygon points="396.82,268.694 375.607,289.907 420,334.301 1.213,334.301 1.213,364.301 420,364.301 375.607,408.694 
                   396.82,429.907 477.427,349.301 	"/>
                </g>
            </svg>
        </div> -->
        </header>
        <div class="comparetitle text-white d-flex align-items-center justify-content-center p-3">
   
                <div class="text-right">
                    <div><?= $car1[0]->title?></div>
                </div>

                <big class="px-4">VS</big>

                <div class="text-left">
                    <div><?=$car2[0]->title?></div>
                </div>

                <?php if($number_of_car_compare == 3){ ?>
        
                    <big class="px-4">VS</big>
       
                    <div class="text-right">
                        <div><?=$car3[0]->title?></div>
                    </div>

                <?php } ?>

                <!-- <big class="px-4">VS</big>

                <div class="text-left">
                    <div>2011 Toyota </div>
                    <div>RAV4</div>
                </div> -->
           
            
        </div>
    </section>

    <section class="comaredtlssec px-4">
        <div id="shocar">
        <div class="row p-0 m-0">
            <div class="col-md-4 mx-auto px-1">
                <div class="mt-2"><img src="<?= $car1[0]->variant->carImage?>" alt="" class="w-100"></div>
            </div>
            <div class="col-md-4 mx-auto px-1">
                <div class="mt-2"><img src="<?= $car2[0]->variant->carImage?>" alt="" class="w-100"></div>
            </div>
            <?php if($number_of_car_compare == 3){ ?>
                <div class="col-md-4 px-1">
                    <div class="mt-2"><img src="<?= $car3[0]->variant->carImage?>" alt="" class="w-100"></div>
                </div>
            <?php } ?>
        </div>
    </div>

        <div id="shocarset">
        <div class="row p-0 m-0">
            <div class="col-md-4 mx-auto px-1">
                <div class="mt-2"><img src="<?= $car1[0]->variant->carImage?>" alt="" class="w-100"></div>
            </div>
            <div class="col-md-4 mx-auto px-1">
                <div class="mt-2"><img src="<?= $car2[0]->variant->carImage?>" alt="" class="w-100"></div>
            </div>
             <?php if($number_of_car_compare == 3){ ?>
            <div class="col-md-4 mx-auto px-1">
                <div class="mt-2"><img src="<?= $car3[0]->variant->carImage?>" alt="" class="w-100"></div>
            </div>
            <?php } ?>
        </div>                 
    </div>


       <div id="comaresec1">
        <div class="d-flex justify-content-center align-iitems-center mt-3 ">
            <button class="comphotobtn"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="3.2"></circle><path d="M9 2L7.17 4H4a2 2 0 00-2 2v12c0 1.1.9 2 2 2h16a2 2 0 002-2V6a2 2 0 00-2-2h-3.17L15 2H9zm3 15a5 5 0 110-10 5 5 0 010 10z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg> Compare Photos</button>
        </div>
       </div>

       <div id="comptotalsec">
        <div class="d-flex justify-content-center align-iitems-center mt-4 sticky">
            <a  href="#Highlights" class="btntb mx-2 page-scroll active">Highlights</a>
            <a href="#Similarities" class="btntb mx-2 page-scroll">Similarities</a>
            <a href="#Differences" class="btntb mx-2 page-scroll">Differences</a>
            <a href="#Specifications" class="btntb mx-2 page-scroll">Specifications</a>
        </div>


        <div id="Highlights">
            <div class="text-center mt-5"><h3 class="section-title">Highlights</h3></div>
            <div class="invert-bg mt-4">
                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->engine?></div>
                        <div class="data-row--label">Engine</div>
                        <div class="data-row--details"><?= $car2[0]->engine?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Engine</div>
                            <div class="data-row--details"><?= $car3[0]->engine?></div>
                        <?php  } ?>
                    </div>                    
                </div>                
                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->seat?></div>
                        <div class="data-row--label">Seat</div>
                        <div class="data-row--details"><?= $car2[0]->seat?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Seat</div>
                            <div class="data-row--details"><?= $car3[0]->seat?></div>
                        <?php }  ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->price?></div>
                        <div class="data-row--label">Price</div>
                        <div class="data-row--details"><?= $car2[0]->price?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Price</div>
                            <div class="data-row--details"><?= $car3[0]->price?></div>
                        <?php  } ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->rcValidity?></div>
                        <div class="data-row--label">RC Validity</div>
                        <div class="data-row--details"><?= $car2[0]->rcValidity?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">RC Validity</div>
                            <div class="data-row--details"><?= $car3[0]->rcValidity?></div>
                        <?php }  ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->insuranceValidity?></div>
                        <div class="data-row--label">Insurance Validity</div>
                        <div class="data-row--details"><?= $car2[0]->insuranceValidity?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Insurance Validity</div>
                            <div class="data-row--details"><?= $car3[0]->insuranceValidity?></div>
                        <?php }  ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= ($car1[0]->isCertified)?'Yes':'No'?></div>
                        <div class="data-row--label">Certified</div>
                        <div class="data-row--details"><?= ($car2[0]->isCertified)?'Yes':'No'?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Certified</div>
                            <div class="data-row--details"><?= ($car3[0]->isCertified)?'Yes':'No'?></div>
                        <?php }  ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->certifiedRefNo?></div>
                        <div class="data-row--label">Certified Ref No</div>
                        <div class="data-row--details"><?= $car1[0]->certifiedRefNo?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Certified Ref No</div>
                            <div class="data-row--details"><?= $car3[0]->certifiedRefNo?></div>
                        <?php }  ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->variant->name?></div>
                        <div class="data-row--label">Variant</div>
                        <div class="data-row--details"><?= $car1[0]->variant->name?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Variant</div>
                            <div class="data-row--details"><?= $car3[0]->variant->name?></div>
                        <?php  } ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->bodyType->name?></div>
                        <div class="data-row--label">Body Type</div>
                        <div class="data-row--details"><?= $car1[0]->bodyType->name?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Body Type</div>
                            <div class="data-row--details"><?= $car3[0]->bodyType->name?></div>
                        <?php }  ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->brand->name?></div>
                        <div class="data-row--label">Brand</div>
                        <div class="data-row--details"><?= $car1[0]->brand->name?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Brand</div>
                            <div class="data-row--details"><?= $car3[0]->brand->name?></div>
                        <?php  } ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->fuelType->name?></div>
                        <div class="data-row--label">Fuel Type</div>
                        <div class="data-row--details"><?= $car1[0]->fuelType->name?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Fuel Type</div>
                            <div class="data-row--details"><?= $car3[0]->fuelType->name?></div>
                        <?php  } ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->model->name?></div>
                        <div class="data-row--label">Model</div>
                        <div class="data-row--details"><?= $car1[0]->model->name?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Model</div>
                            <div class="data-row--details"><?= $car3[0]->model->name?></div>
                        <?php  } ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->color->name?></div>
                        <div class="data-row--label">Color</div>
                        <div class="data-row--details"><?= $car1[0]->color->name?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Color</div>
                            <div class="data-row--details"><?= $car3[0]->color->name?></div>
                        <?php }  ?>
                    </div>
                </div>

                <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"><?= $car1[0]->transmissionType->name?></div>
                        <div class="data-row--label">Transmission Type</div>
                        <div class="data-row--details"><?= $car1[0]->transmissionType->name?></div>
                        <?php if($number_of_car_compare == 3){ ?>
                            <div class="data-row--label">Transmission Type</div>
                            <div class="data-row--details"><?= $car3[0]->transmissionType->name?></div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>


        <div id="Similarities">
            <div class="text-center mt-5"><h3 class="section-title">Similarities</h3></div>
            <div class="invert-bg mt-4">
                 <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"></div>
                        <div class="data-row--label"></div>
                        <div class="data-row--details"></div>
                        <div class="data-row--label"> </div>
                        <div class="data-row--details"></div>
                    </div>                    
                 </div>
            </div>
        </div>




        <div id="Differences">
            <div class="text-center mt-5"><h3 class="section-title">Differences</h3></div>
            <div class="invert-bg mt-4">
                 <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"></div>
                        <div class="data-row--label"></div>
                        <div class="data-row--details"></div>
                        <div class="data-row--label"> </div>
                        <div class="data-row--details"></div>
                    </div>                    
                 </div>                 
            </div>
        </div>



        <div id="Specifications">
            <div class="text-center mt-5"><h3 class="section-title">Specifications</h3></div>
            <div class="invert-bg mt-4">
                 <div class="location-card py-3">
                    <div class="data-row--wrapper">
                        <div class="data-row--details"></div>
                        <div class="data-row--label"></div>
                        <div class="data-row--details"></div>
                        <div class="data-row--label"> </div>
                        <div class="data-row--details"></div>
                    </div>                    
                 </div>               
            </div>
        </div>
       </div>
    </section>



<a href="#" id="toTopBtn" class="" data-abc="true">
    <span>
       <svg width="24" height="24" fill="#e74141" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 384.923 384.923" style="enable-background:new 0 0 384.923 384.923;" xml:space="preserve">
            <path id="Arrow_Upward" d="M321.337,122.567L201.046,3.479c-4.776-4.728-12.391-4.547-17.179,0l-120.291,119.1
                c-4.74,4.704-4.74,12.319,0,17.011c4.752,4.704,12.439,4.704,17.191,0l99.551-98.552v331.856c0,6.641,5.438,12.03,12.151,12.03
                s12.151-5.39,12.151-12.03V41.025l99.551,98.552c4.74,4.704,12.439,4.704,17.179,0C326.089,134.886,326.089,127.27,321.337,122.567
                z"/>
        </svg>
    </span>
</a>      
 

