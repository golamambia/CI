
   

    <!-- Inner banner start here -->
    <div class="innerbanners01">
        <img src="<?php echo base_url();?>assets_front/image/innerbgs01.jpg" alt="great wine">
        <div class="innerabvs01">
            <h2>Registration</h2>
        </div>
    </div>
    <!-- Inner banner end here -->
    <div class="clearfix"></div>
    <!-- Inner content start here -->
    <div class="wrapregis01">
        <div class="container">
            <form class="forms-sample" method="POST" action="<?php echo base_url();?>home/insert_register">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="input-field">
                        <input id="fullnames01" type="text"  name="customer_fullname" id="customer_fullname">
                        <label for="fullnames01">Full Name</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-field">
                        <input  type="email" name="email_id" id="email_id" >
                        <label for="emailids01">Email Id</label>
                    </div>
                </div>
            </div>
           <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="input-field">
                        <input id="password01" type="password" class="validate" name="password">
                        <label for="password01">Password</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-field">
                        <input id="conformpassword01" type="password" class="validate" name="confirm_password">
                        <label for="conformpassword01">Confirm Password</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="input-field">
                        <input id="contacts01" type="text" class="validate" name="phone_no">
                        <label for="contacts01">Contact No</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="regformgrid01" id="gender">
                        <h2>Gender</h2>
                        <p>
                        <label>
                            <input class="with-gap" name="gender" type="radio" id="radios-0" value="Male" />
                            <span>Male</span>
                        </label>
                        </p>
                        <p>
                        <label>
                            <input class="with-gap" name="gender" type="radio" id="radios-1" value="Female" />
                            <span>Female</span>
                        </label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="input-field wneintstslt01">
                        <select name="wine_interest[]" id="wine_interest"  multiple>
                            <option value="" disabled>Choose your option</option>
                            <option value="1">Premium Wine</option>
                            <option value="2">Classic Wine</option>
                            <option value="3">Combo Wine</option>
                        </select>
                        <label>Wine Interest</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="regformgrid01">
                        <p>
                            <label>
                                <input type="checkbox" / id="checkbox" name="checkbox">
                                <span>I certify myself to be at least 16 years of age</span>
                            </label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="regformgrid01">
                        <p>
                            <label>
                                [recaptcha]
                            </label>
                        </p>
                    </div>
                </div>
            </div>     
            <div class="row justify-content-center">
                <div class="col-sm-4 allsignlink01">
                        <button  type="submit" id="insert_register">Submit</button>
                </div>
            </div>
           </form>
        </div>
    </div>
    <!-- Inner content end here -->

    