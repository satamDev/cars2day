<div class=""><div class="container"><div class="" id="pagew"></div></div></div>
<section class="shopbanner text-center sellbnr" style="background: url(<?=base_url()?>assets/images/sellbg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="tradefrmsec p-4 bg-white">
                        <h3 class="mb-1">Get a real offer in minutes</h3>
                        <small class="d-block mb-3 text-dark">Most cars qualify; some we'll ask to see in person.</small>
                        <div class="tradefrmtab">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">License Plate</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Vin</a>
                              </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="trdfrm" id="acco">
                                    <form id="Selling" action="<?=base_url();?>home_data">
                                        <input type="hidden" name="type" value="selling">
                                        <div class="collapse show" id="next1a" aria-labelledby="next1a" data-parent="#acco">
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
                                            <div class="arwdwn" data-toggle="collapse" data-target="#next1" aria-expanded="false" aria-controls="next1">
                                                <i class="fas fa-chevron-down fa-fw"></i>
                                            </div>
                                        </div>
                                        <div class="collapse" id="next1" aria-labelledby="next1" data-parent="#acco">
											<div class="arwdwn" data-toggle="collapse" data-target="#next1a" aria-expanded="false" aria-controls="next1a">
                                                <i class="fas fa-chevron-up fa-fw"></i>
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
                                            <div class="form-group">
                                                <input type="text" id="selling_name" class="form-control" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" id="selling_mobile" class="form-control" placeholder="Phone no." name="mobile">
                                            </div>
                                        </div>
                                        <div class="">
                                            <em class="d-block text-center">Get Pre evaluation done at your door step</em>
                                        </div>
                                        <button class="btn1" type="submit">Kick Start your Drive</button>
                                    </form>
                                </div>
                            </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="trdfrm" id="acco2">
                                    <form id="Treading" action="<?=base_url();?>home_data">
                                        <input type="hidden" name="type" value="trading">
                                        <div class="collapse show" id="next1a2" aria-labelledby="next1a2" data-parent="#acco2">
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
                                            <div class="arwdwn" data-toggle="collapse" data-target="#next2">
                                                <i class="fas fa-chevron-down fa-fw"></i>
                                            </div>
                                        </div>
                                        <div class="collapse" id="next2" aria-labelledby="next2" data-parent="#acco2">
											<div class="arwdwn" data-toggle="collapse" data-target="#next1a2" aria-expanded="false" aria-controls="next1a2">
                                                <i class="fas fa-chevron-up fa-fw"></i>
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
                                            <div class="form-group">
                                                <input type="text" id="treading_name" class="form-control" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" id="treading_mobile" class="form-control" placeholder="Phone no." name="mobile">
                                            </div>
                                        </div>
                                        <div class="">
                                            
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
</section>
<section class="py-5">
        <div class="container">
            <div class="gyuarsec pt-5">
                <h2 class="text-center mb-5">How it works
                </h2>
                <div class="row">
                    <div class="col-md-4 text-center mb-4">
                        <div class="gurwrp">
                            <img src="<?=base_url()?>assets/images/Get-your-offer.png" alt="">
                            <h3 class="py-2">Get your offer</h3>
                            <p>It take 2 minutes</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="gurwrp">
                            <img src="<?=base_url()?>assets/images/Make-an-appointment.png" alt="">
                            <h3 class="py-2">Make an appointment</h3>
                            <p>Redeem it or compare <br>your options for 7 days.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="gurwrp">
                            <img src="<?=base_url()?>assets/images/Come-get-paid.png" alt="">
                            <h3 class="py-2">Come get paid</h3>
                            <p>We'll verify your offer <br>and pay you on the spot.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center my-2">
                    <a href="<?=base_url()?>contact" class="btn1">Learn more</a>
                </div>
                <small class="d-block text-center">
                    <a href="<?=base_url()?>reach_the_founder" class="blutxtunderline">Schedule an in-person appraisal instead</a>
                </small>
            </div>
        </div>
    </section>