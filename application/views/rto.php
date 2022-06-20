    <div class="">
        <div class="container">
            <div class="" id="pagew"></div>
        </div>
    </div>

    <section class="shopbanner text-white" style="background: url(<?=base_url()?>assets/images/rtobanner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="mb-3 text-white">Avail Seamless RTO Services</h1>
                    <a href="#" class="btn1">Know more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 text-center">
        <div class="container">

            <big class="d-block" style="font-weight: 600">When you purchase a car, either new or pre-owned,<br>
                has to go through legal transfer of ownership on registration certificate.</big>

        </div>
    </section>
    <section class="py-5 knowhsec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 px-lg-5">
                    <img src="<?=base_url()?>assets/images/Digitalized-RTO-services.png" alt="" class="w-100">
                    <h4 class="mb-3 mt-4">Digitalized RTO services </h4>
                    <p>At Cars2day, we proffer digitalized RTO services which enables seamless technology-based services.</p>
                </div>
                <div class="col-md-6">
                    <div class="knowhwrp d-flex align-items-center w-100 mb-3 pb-3 border-bottom">
                        <div class="knowhico">
                            <img width="50" src="<?=base_url()?>assets/images/Ownership-change.png" alt="">
                        </div>
                        <div class="knowhcon pl-3">Ownership change</div>
                    </div>
                    <div class="knowhwrp d-flex align-items-center w-100 mb-3 pb-3 border-bottom">
                        <div class="knowhico">
                            <img width="50" src="<?=base_url()?>assets/images/HP-deletion-Addition.png" alt="">
                        </div>
                        <div class="knowhcon pl-3">HP deletion / Addition</div>
                    </div>
                    <div class="knowhwrp d-flex align-items-center w-100 mb-3 pb-3 border-bottom">
                        <div class="knowhico">
                            <img width="50" src="<?=base_url()?>assets/images/Road-tax-payment.png" alt="">
                        </div>
                        <div class="knowhcon pl-3">Road tax payment</div>
                    </div>
                    <div class="knowhwrp d-flex align-items-center w-100 mb-3 pb-3 border-bottom">
                        <div class="knowhico">
                            <img width="50" src="<?=base_url()?>assets/images/Driving-licence-renewal.png" alt="">
                        </div>
                        <div class="knowhcon pl-3">Driving licence renewal</div>
                    </div>
                    <div class="knowhwrp d-flex align-items-center w-100 mb-3 pb-3 border-bottom">
                        <div class="knowhico">
                            <img width="50" src="<?=base_url()?>assets/images/Duplicate-RC.png" alt="">
                        </div>
                        <div class="knowhcon pl-3">Duplicate RC</div>
                    </div>
                    <div class="knowhwrp d-flex align-items-center w-100 mb-3 pb-3 border-bottom">
                        <div class="knowhico">
                            <img width="50" src="<?=base_url()?>assets/images/Vehicle-NOC.png" alt="">
                        </div>
                        <div class="knowhcon pl-3">Vehicle NOC</div>
                    </div>
                    <div class="knowhwrp d-flex align-items-center w-100 mb-3 pb-3 border-bottom">
                        <div class="knowhico">
                            <img width="50" src="<?=base_url()?>assets/images/Vehicle-Re-registration.png" alt="">
                        </div>
                        <div class="knowhcon pl-3">Vehicle Re-registration</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h3 class="mb-5 text-center">Experience World-class best services – Drop your details here</h3>
            <ul class="nav nav-pills mb-4 justify-content-center reewfrmtab" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Service required</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="frm text-center">
                                <form id="Rto" action="<?=base_url()?>carvenience_rto_data">
                                    <input type="hidden" name="type" value="RTO">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="carNumber" class="form-control" placeholder="Car number" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" id="rto_mobile" name="mobile" class="form-control" placeholder="Mobile number" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn1">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>