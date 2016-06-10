@extends('template.app')
@section('content')
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="p2leadform" id="p2leadform">
            <div class="row">
                <div class="col-lg-6">

                    <div class="p2contact" align="left">Contact Information</div>
                    <div class="form-group"><input class="form-control"
                                                   name="first_name"
                                                   id="first_name" placeholder="First Name (Required)"
                                                   type="text" value=""></div>

                    <div class="form-group"><input
                                class="form-control"
                                name="last_name"
                                placeholder="Last Name  (Required)" type="text"></div>

                    <div class="form-group">
                        <input class="form-control" name="business_name" placeholder="Business Name  (Required)" type="text">

                    </div>
                    <div class="form-group">
                        <input class="form-control"
                               name="industry" placeholder="Industry (Required)" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Telephone  (Required)" type="text">

                    </div>
                    <div class="form-group">
                        <input class="form-control"
                               name="email" placeholder="Email Address  (Required)" type="text">


                    </div>
                    <div class="form-group">
                        <select name="state" class="form-control  pselect">
                            <option value="">State</option>
                            <option value="Alabama">AL</option>
                            <option value="Alaska">AK</option>
                            <option value="Arizona">AZ</option>
                            <option value="Arkansas">AR</option>
                            <option value="California">CA</option>
                            <option value="Colorado">CO</option>
                            <option value="Connecticut">CT</option>
                            <option value="Delaware">DE</option>
                            <option value="District Of Columbia">DC</option>
                            <option value="Florida">FL</option>
                            <option value="Georgia">GA</option>
                            <option value="Hawaii">HI</option>
                            <option value="Idaho">ID</option>
                            <option value="Illinois">IL</option>
                            <option value="Indiana">IN</option>
                            <option value="Iowa">IA</option>
                            <option value="Kansas">KS</option>
                            <option value="Kentucky">KY</option>
                            <option value="Louisiana">LA</option>
                            <option value="Maine">ME</option>
                            <option value="Maryland">MD</option>
                            <option value="Massachusetts">MA</option>
                            <option value="Michigan">MI</option>
                            <option value="Minnesota">MN</option>
                            <option value="Mississippi">MS</option>
                            <option value="Missouri">MO</option>
                            <option value="Montana">MT</option>
                            <option value="Nebraska">NE</option>
                            <option value="Nevada">NV</option>
                            <option value="New Hampshire">NH</option>
                            <option value="New Jersey">NJ</option>
                            <option value="New Mexico">NM</option>
                            <option value="New York">NY</option>
                            <option value="North Carolina">NC</option>
                            <option value="North Dakota">ND</option>
                            <option value="Ohio">OH</option>
                            <option value="Oklahoma">OK</option>
                            <option value="Oregon">OR</option>
                            <option value="Pennsylvania">PA</option>
                            <option value="Rhode Island">RI</option>
                            <option value="South Carolina">SC</option>
                            <option value="South Dakota">SD</option>
                            <option value="Tennessee">TN</option>
                            <option value="Texas">TX</option>
                            <option value="Utah">UT</option>
                            <option value="Vermont">VT</option>
                            <option value="Virginia">VA</option>
                            <option value="Washington">WA</option>
                            <option value="West Virginia">WV</option>
                            <option value="Wisconsin">WI</option>
                            <option value="Wyoming">WY</option>
                        </select>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p2contact" align="left">Funding Questions<br></div>
                    <div class="form-group">
                        <select name="amount" class="form-control pselect">
                            <option value="">How much money do you need?</option>
                            <option value="$0 - $10,000">$0 - $10,000</option>
                            <option value="$10,000 - $50,000">$10,000 - $50,000</option>
                            <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                            <option value="$100,000 - $200,000">$100,000 - $200,000</option>
                            <option value="$200,000 - $500,000">$200,000 - $500,000</option>
                            <option value="$500,000+">$500,000+</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="purpose_of_fund" class="form-control  pselect">
                            <option value="">What is the main purpose for the funds?</option>
                            <option value="Startup">Start a new Business</option>
                            <option value="Working Capital">Working Capital</option>
                            <option value="Expansion">Expansion</option>
                            <option value="Equipment Leases">Equipment Leases</option>
                            <option value="Debt Consolidation">Debt Consolidation</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="personal_credit_score" class="form-control  pselect">
                            <option value="">Personal credit score range...</option>
                            <option value="720+ (Excellent)">720+
                            (Excellent)</option>
                            <option value="680 - 719 (Great)">680 - 719 (Great)</option>
                            <option value="650 - 679 (Good)">650 - 679
                            (Good)</option>
                            <option value="600 - 649 (Ok)">600 - 649 (Ok)</option>
                            <option value="599 or Below (Not So Good)">599 or Below
                            (Not
                            So Good)
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" name="notes" placeholder="Notes" class="form-control"></textarea>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 clearfix">
                    <button type="submit" class="btn btn-primary" name="btn-save" style="width:100%">Save</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@stop