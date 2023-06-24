
       
@extends('layout1')
@section('css')
<style>

#state{
  height:100%;
  overflow-y:auto;
    width:100%;
}
	
	#category{
  height:100%;
  overflow-y:auto;
    width:100%;
}
option{
  overflow-y:scroll;
}
    
</style>
@stop
@section('content1')


<style>
  #select-box{
  height:100%;
  overflow-y:auto;
    width:100%;
}
option{
  overflow-y:scroll;
}
	.error{
                color:red;
                font-size: 14px;

            }
</style>
        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad discover-section sec-pad" style="background-image: url(assets/images/background/ddd.jpg);">
            <div class="auto-container">
                <div class="form-inner" style="padding-bottom:0px;">
                    <div class="sec-title centred">
                        <!-- <h6><i class="flaticon-star"></i><span>Drop a Line</span><i class="flaticon-star"></i></h6> -->
                        <h2 style="color:white;">REGISTRATION INFORMATION</h2>
                        <div class="title-shape"></div>
                        <!-- <p>Fill out this form to send your inquires or complaints to Whitehall City Government.</p> -->
                    </div>
                    <form method="post" action="{{ route('register2_insert_pay_later') }}"
                        id="contact-form" class="default-form">
                        @csrf

                     
                        <input type="hidden" name="event_id" value="{{$event_id}}">


                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                                <div class="form-group">
                                    <input type="text" name="competitor" id="competitor_name" placeholder="Competitor Name" required="">
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <select class="wide" name="state" id="state" required style="color: #696b7e;">
                                            <option value="" >Select State</option>

<option value="AN">Andaman and Nicobar Islands</option>

<option value="AP">Andhra Pradesh</option>

<option value="AR">Arunachal Pradesh</option>

<option value="AS">Assam</option>

<option value="BR">Bihar</option>

<option value="CH">Chandigarh</option>

<option value="CT">Chhattisgarh</option>

<option value="DN">Dadra and Nagar Haveli</option>

<option value="DD">Daman and Diu</option>

<option value="DL">Delhi</option>

<option value="GA">Goa</option>

<option value="GJ">Gujarat</option>

<option value="HR">Haryana</option>

<option value="HP">Himachal Pradesh</option>

<option value="JK">Jammu and Kashmir</option>

<option value="JH">Jharkhand</option>

<option value="KA">Karnataka</option>

<option value="KL">Kerala</option>

<option value="LA">Ladakh</option>

<option value="LD">Lakshadweep</option>

<option value="MP">Madhya Pradesh</option>

<option value="MH">Maharashtra</option>

<option value="MN">Manipur</option>

<option value="ML">Meghalaya</option>

<option value="MZ">Mizoram</option>

<option value="NL">Nagaland</option>

<option value="OR">Odisha</option>

<option value="PY">Puducherry</option>

<option value="PB">Punjab</option>

<option value="RJ">Rajasthan</option>

<option value="SK">Sikkim</option>

<option value="TN">Tamil Nadu</option>

<option value="TG">Telangana</option>

<option value="TR">Tripura</option>

<option value="UP">Uttar Pradesh</option>

<option value="UT">Uttarakhand</option>

<option value="WB">West Bengal</option>

											<option value="OT">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" id="city" placeholder="City Name" required="">
                                </div>
                                <!-- <div class="form-group">
                                    <input type="number" name="subject" required="" placeholder="Zip">
                                </div> -->

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 big-column">

                                <div class="form-group" >
                                    <input type="text" name="contact_no" id="contact_no" placeholder="Contact Number" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email ID" required="">
                                </div>
                           
                                <div class="form-group">
                                    <div class="select-wrap">
                                      <select class="wide" name="category" id="category" required style="color: #696b7e;">
                                            <option value="">Select Category</option>
                                            <option value="1">Senior</option>
                                            <option value="2">Junior</option>
                                            <option value="3">Women</option>
                                            <option value="4">Professional</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
 
                            <div class="col-lg-12 col-md-12 col-sm-12 big-column">
                                <div class="message-btn centred">
                                    <button class="theme-btn" type="submit" name="submit-form">SUBMIT &
                                        PAY</button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
                
            </div>
        </section>
        <!-- contact-style-two end -->
        @stop
       
