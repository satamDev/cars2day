
    <div class="">
        <div class="container">
            <div class="" id="pagew"></div>
        </div>
    </div>

    
    <section class="py-5">
        <div class="container">
            <h3 class="text-center mb-3">We appreciate your feedback!</h3>
            <big class="d-block text-center mb-5">Your opinions will help us provide you and other customers the best shopping experience.</big>
            
            <div class="trdfrm feedbackfrm">
                <form id="feedback_form" action="<?=base_url();?>feedback_data" method="POST">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" id="feedback_name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="tel" id="feedback_mobile" name="mobile" class="form-control" placeholder="Mobile No" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" id="feedback_email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="roundborder p-4 text-center mb-4">
                        <h4 class="mb-4">Overall, how satisfied were you with your experience at Cars2day</h4>
                        <div class="row row5 justify-content-center">
                            <div class="col5">
                                <label class="feedbackbtn">
                                    <div>Completely <br> satisfied</div>
                                    <input value="1" type="radio" name="feedback">
                                    <span></span>
                                </label>
                            </div>
                            <div class="col5">
                                <label class="feedbackbtn">
                                    <div>Mostly <br> satisfied</div>
                                    <input value="2" type="radio" name="feedback">
                                    <span></span>
                                </label>
                            </div>
                            <div class="col5">
                                <label class="feedbackbtn">
                                    <div>Moderately <br> satisfied</div>
                                    <input value="3" type="radio" name="feedback">
                                    <span></span>
                                </label>
                            </div>
                            <div class="col5">
                                <label class="feedbackbtn">
                                    <div>Slightly <br> satisfied</div>
                                    <input value="4" type="radio" name="feedback">
                                    <span></span>
                                </label>
                            </div>
                            <div class="col5">
                                <label class="feedbackbtn">
                                    <div>Not at all <br> satisfied</div>
                                    <input value="5" type="radio" name="feedback">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="feedback_message">
                        <h4 class="mb-3 text-center">Please enter your feedback below:</h4>
                        <div class="form-group mb-5">
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn1 noreltive" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            <!-- <div style="color:red"> Note (need developed): Ratings in this page is mandatory but comment is not. But comments should enabled only when a user give a rating.</div> -->
            
        </div>
    </section> 

    


