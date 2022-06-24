<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
    if(!empty($car_details)){
        $car_details = $car_details[0];
?>
<section class="testdrivesec text-white py-4" style="margin-top: 10rem;">
   <div class="container">
       <div class="d-flex align-items-center justify-content-between flex-column flex-md-row">
        <div class="d-flex align-items-center">
           <!-- <a class="bckbtn" href="#"><i class="fas fa-angle-left"></i></a> -->
           <div class="ml-3">
               <h5 class="text-white"><?=$car_details['title']?></h5>
               <span class="d-block"><?=$car_details['year']?> | <?=$car_details['kilometers']?> Kms | <?=$car_details['fuelType']->name?></span>
           </div>
        </div>

        <div class="d-flex align-items-center flex-column flex-md-row mt-3 mt-md-0">
            <div class="ml-0 ml-md-5 mt-3 mt-md-0">
                <h5 class="text-white">₹ <?=$car_details['price']?></h5>
                <span class="d-block">Fixed Price</span>
            </div>

            <div class="ml-0 ml-md-5 mt-3 mt-md-0">
                <h5 class="text-white">₹12,500/month</h5>
                <span class="d-block">Zero downpayment</span>
            </div>

            <div class="ml-0 ml-md-5 mt-3 mt-md-0">
               <a class="btn1 shadow" data-toggle="modal" data-target="#bookTestDrivemodl">Book Test Drive</a>

               <!-- <a class="btn1 shadow" href="<?=base_url()?>">Book Test Drive</a> -->
            </div>

        </div>
       </div>
   </div>
</section>
<section class="cardetailsbanner text-center text-white mt-3" style="background: url(<?=$car_details['image']?>);">
    <?php
        if($car_details['isCertified']){
    ?>
    <div class="container">

       <!-- <div class="certifiedbox">
           <div class="certifiedboximg px-5 pt-4 pb-5 bg-white"><img src="<?=base_url()?>assets/images/certified.png" alt=""></div>
           <div class="certifiedboxbdy  py-4">
                <h4 class="text-white px-4">This Car is  Cars2day Certified</h4>
                <div class="px-5">Every car we sell undergoes an  extensive reconditioning process  to meet our high standards.</div>

                <ul class="mt-2 ">
                    <li><img class="mr-2" src="<?=base_url()?>assets/images/check.png" alt="">No major dents or dings</li>
                    <li><img class="mr-2" src="<?=base_url()?>assets/images/check.png" alt="">Tires and wheels checked 15 ways</li>
                    <li><img class="mr-2" src="<?=base_url()?>assets/images/check.png" alt=""> Deep cleaned interior</li>
                    <li><img class="mr-2" src="<?=base_url()?>assets/images/check.png" alt="">No frame or flood damage</li>
                </ul>

           </div>
       </div> -->

       <div class="certifiedbox">
           <div class="certifiedboximg px-5 pt-4 pb-5 bg-white" data-toggle="collapse" data-target="#certcolspace">
               <img src="<?=base_url()?>assets/images/certified.png" alt="">
           </div>
           <div class="collapse" id="certcolspace">
               <div class="certifiedboxbdy  py-4">
                    <h4 class="text-white px-4">This Car is  Cars2day Certified</h4>
                    <div class="px-5">Every car we sell undergoes an  extensive reconditioning process  to meet our high standards.</div>

                    <ul class="mt-2 ">
                        <li><img class="mr-2" src="<?=base_url()?>assets/images/check.png" alt="">No major dents or dings</li>
                        <li><img class="mr-2" src="<?=base_url()?>assets/images/check.png" alt="">Tires and wheels checked 15 ways</li>
                        <li><img class="mr-2" src="<?=base_url()?>assets/images/check.png" alt=""> Deep cleaned interior</li>
                        <li><img class="mr-2" src="<?=base_url()?>assets/images/check.png" alt="">No frame or flood damage</li>
                    </ul>

               </div>
           </div>
       </div>
                
    </div>
    <?php } ?>
</section>


<section class="py-5 carviewsec">
   <div class="container">
    <ul class="nav nav-pills m-0" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="crviewbtn active" id="pills-360view-tab" data-toggle="pill" href="#pills-360view" role="tab" aria-controls="pills-360view" aria-selected="true">360&deg; &nbsp; View</a>
        </li>
        <li class="nav-item">
          <a class="crviewbtn" id="pills-Exterior-tab" data-toggle="pill" href="#pills-Exterior" role="tab" aria-controls="pills-Exterior" aria-selected="false"> Exterior</a>
        </li>
        <li class="nav-item">
            <a class="crviewbtn" id="pills-Interior-tab" data-toggle="pill" href="#pills-Interior" role="tab" aria-controls="pills-Interior" aria-selected="false"> Interior</a>
          </li>
          <li class="nav-item">
            <a class="crviewbtn" id="pills-Remarks-tab" data-toggle="pill" href="#pills-Remarks" role="tab" aria-controls="pills-Remarks" aria-selected="false"> Remarks</a>
          </li>
      </ul>
       <!--  <div class="crdtlssliderbox text-center">
                       <a href="" data-toggle="modal" data-target="#detailsmodal">
                           <img src="<?=base_url()?>assets/images/360slider.png" class="w-100" alt="">
                           <div class="mt-2">Dash Board View</div>
                       </a>
                   </div> -->
        <div class="tab-content p-0 mt-4" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-360view" role="tabpanel" aria-labelledby="pills-360view-tab">
                <div class="container px-lg-5 mx-lg-5">
                    <div class="slider360 360view">

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Exterior" role="tabpanel" aria-labelledby="pills-Exterior-tab">
                <div class="container px-lg-5 mx-lg-5">
                    <div class="slider360 exterior">

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Interior" role="tabpanel" aria-labelledby="pills-Interior-tab">
                <div class="container px-lg-5 mx-lg-5">
                    <div class="slider360 interior">

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Remarks" role="tabpanel" aria-labelledby="pills-Remarks-tab">
                
            </div>
        </div>


   </div>
</section>

<section class="py-5 cardetlssec">
    <div class="container">
         <h3 class="text-center">Car Details</h3>
          
         <ul class="nav nav-pills m-0 mt-4" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="crviewbtn active" id="pills-COverview-tab" data-toggle="pill" href="#pills-COverview" role="tab" aria-controls="pills-COverview" aria-selected="true">Overview</a>
            </li>
            <li class="nav-item">
              <a class="crviewbtn" id="pills-CFeatures-tab" data-toggle="pill" href="#pills-CFeatures" role="tab" aria-controls="pills-CFeatures" aria-selected="false"> Features</a>
            </li>
            <li class="nav-item">
                <a class="crviewbtn" id="pills-CSpecification-tab" data-toggle="pill" href="#pills-CSpecification" role="tab" aria-controls="pills-CSpecification" aria-selected="false"> Specification</a>
              </li>
           
          </ul>

          <div class="tab-content p-0 mt-5" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-COverview" role="tabpanel" aria-labelledby="pills-COverview-tab">

                <div class="container px-lg-5">

                    <div class="row srdtlstable">
                        <div class="col-12 col-md-6 p-0 border-right">
                            <div class="">
                                <table class="table">
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <img src="<?=base_url()?>assets/images/cardetails1.png" alt="">
                                              <div class="ml-2">Registration</div>
                                          </div>
                                      </td>
                                      <td><strong><?=$car_details['vehicleNo']?></strong></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails2.png" alt="">
                                                <div class="ml-2">Kilometers Driven</div>
                                            </div>
                                        </td>
                                        <td><strong><?=$car_details['kilometers']?> Kms</strong></td>
                                      </tr>

                                      <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails3.png" alt="">
                                                <div class="ml-2">Year of Purchase</div>
                                            </div>
                                        </td>
                                        <td><strong><?=$car_details['year']?></strong></td>
                                      </tr>


                                      <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails4.png" alt="">
                                                <div class="ml-2">Fuel Type</div>
                                            </div>
                                        </td>
                                        <td><strong><?=$car_details['fuelType']->name?></strong></td>
                                      </tr>

                                      <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails5.png" alt="">
                                                <div class="ml-2">Transmission</div>
                                            </div>
                                        </td>
                                        <td><strong><?=$car_details['transmissionType']->name?></strong></td>
                                      </tr>
     
                                 </table>
                             </div>
                        </div>
                        <div class="col-12 col-md-6 p-0">
                            <div class="">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails6.png" alt="">
                                                <div class="ml-2">Owner</div>
                                            </div>
                                        </td>
                                        <td><strong><?=$car_details['noofowner']?></strong></td>
                                      </tr>

                                      <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails7.png" alt="">
                                                <div class="ml-2">Non-Accidental</div>
                                            </div>
                                        </td>
                                        <td><strong>-</strong></td>
                                      </tr>

                                      <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails8.png" alt="">
                                                <div class="ml-2">Body type</div>
                                            </div>
                                        </td>
                                        <td><strong><?=$car_details['bodyType']->name?></strong></td>
                                      </tr>

                                      <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails9.png" alt="">
                                                <div class="ml-2">Last Service</div>
                                            </div>
                                        </td>
                                        <td><strong>-</strong></td>
                                      </tr>

                                      <tr >
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/cardetails10.png" alt="">
                                                <div class="ml-2">Insurance</div>
                                            </div>
                                        </td>
                                        <td><strong><?=$car_details['lookupInsuranceType']->tag?></strong>
                                            <div  style="line-height: 1;"></div>
                                        </td>
                                      </tr>
  
                                   
                                 </table>
                             </div>
                        </div>
                    </div>
                   
                </div>

            </div>

          <div class="tab-pane fade" id="pills-CFeatures" role="tabpanel" aria-labelledby="pills-CFeatures-tab">
            <div class="container px-lg-5">

                <div class="row srdtlstable2">
                    <div class="col-12 col-md-6">
                        <div class="">
                            <table class="table">
                                <tr>
                                  <td>Airbags </td>
                                  <td class="ftrrghtdtls"></td>
                                </tr>
                                <tr>
                                    <td>Seat Upholstery </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>

                                  <tr>
                                    <td>Rear AC </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>

                                  <tr>
                                    <td>Power Windows </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>

                                  <tr>
                                    <td>Anti-Lock Breaking System (ABS) </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>
                             </table>
                         </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="">
                            <table class="table">
                                <tr>
                                    <td>Central Locking </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Integrated (in-dash) Music System </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>

                                  <tr>
                                    <td>Outside Rear View Mirrors (ORVMs) </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>
                                  <tr>
                                    <td>Headlamps </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>
                                  <tr>
                                    <td>Parking Sensors </td>
                                    <td class="ftrrghtdtls"></td>
                                  </tr>                               
                             </table>
                         </div>
                    </div>
                </div>
               
            </div>

          </div>
          <div class="tab-pane fade" id="pills-CSpecification" role="tabpanel" aria-labelledby="pills-CSpecification-tab">
           .......
          </div>
         <div class="text-center mt-5"> <a class="btn1 shadow" href="#">View Full Specifications</a></div>
    </div>
</section>
<?php } ?>
<section class="py-5">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
              <div class="d-flex align-items-center cardtlsofrbvox">
                <div class="cardtlsofrbvoximg"><img src="<?=base_url()?>assets/images/Need-Financing.png" class="img-fluid" alt=""></div>
                <div class="ml-3">
                    <h4>Need Financing</h4>
                    <div class="mt-1 mt-lg-2">You can do that with us. Start here.</div>
                    <a class="ofrbtn1" href="GET PRE-APPROVED">GET PRE-APPROVED <img src="<?=base_url()?>assets/images/arrow.png" alt=""></a>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <div class="d-flex align-items-center cardtlsofrbvox">
              <div class="cardtlsofrbvoximg"><img src="<?=base_url()?>assets/images/get-offer.png" class="img-fluid" alt=""></div>
              <div class="ml-3">
                  <h4>Get an Offer on Your Car</h4>
                  <div class="mt-1 mt-lg-2">Selling or trading in? We want your car.</div>
                  <a class="ofrbtn1" href="GET PRE-APPROVED">GET YOUR OFFER <img src="<?=base_url()?>assets/images/arrow.png" alt=""></a>
              </div>
            </div>
        </div>
      </div>
  </div>
</section>    
    
    
<div class="modal fade modallarge" id="detailsmodal" tabindex="-1" role="dialog" aria-labelledby="bookTestDrivemodlTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="vehicle-detail-banner banner-content clearfix">
            <div class="banner-slider align-items-center">
                <div class="slider slider-nav thumb-image car_image_thumb">

                   
                    
                </div>
                <div class="slider slider-for car_image_main">
                                    
                </div>                
            </div>
        </div>
      </div> 
    </div>
  </div>
</div>

 <!-- <div class="thumbnail-image">
    <div class="thumbImg">
        <img src="<?=base_url()?>assets/images/product1.jpg" alt="slider-img">
    </div>
</div> -->

<!-- <div class="slider-banner-image">
    <h3>Car-Image</h3>
    <a href="<?=base_url()?>assets/images/product1.jpg" data-fancybox data-caption="Caption for single image">
    <img src="<?=base_url()?>assets/images/product1.jpg" alt="Car-Image">
    </a>
</div> -->     



<!-- Modal -->
<div class="modal bookTestDriv fade" id="bookTestDrivemodl" tabindex="-1" role="dialog" aria-labelledby="bookTestDrivemodlTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <h4 class="text-center">We value your privacy.</h4>
      <p class="text-center">Your information is completely safe with us.</p>
       <form  id="book_test_drive" action="<?=base_url();?>book_test_drive">
        <input type="hidden" name="type" value="bookTestDrive">
        <input type="hidden" name="car_id" value="<?=$this->uri->segment(2)?>">
        <div class="form-group">
          <input type="text" id="book_test_drive_name" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
          <input type="number" id="book_test_drive_mobile" class="form-control" name="mobile" placeholder="Mobile No." required>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>

        <div class="text-center pb-4 pt-3"> <button type="submit" class="btn1">Submit</button></div>
       </form>
      </div>
    </div>
  </div>
</div>