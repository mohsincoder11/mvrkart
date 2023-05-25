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
	
	#team_member{
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
@stop
@section('content1')

    <!-- contact-style-two -->
    <section class="contact-style-two sec-pad discover-section sec-pad"
        style="background-image: url(assets/images/background/ddd.jpg);">
        <div class="auto-container">
            @include('alert');
            <div class="form-inner" style="padding-bottom:0px;">
                <div class="sec-title centred">
                    <!-- <h6><i class="flaticon-star"></i><span>Drop a Line</span><i class="flaticon-star"></i></h6> -->
                    <h2 style="color:white;">REGISTRATION INFORMATION</h2>
                    <div class="title-shape"></div>
                    <!-- <p>Fill out this form to send your inquires or complaints to Whitehall City Government.</p> -->
                </div>
                <form method="post" action="{{ route('register_insert') }}" id="contact-form" class="default-form"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="tid" id="tid" readonly />
                    <input type="hidden" name="merchant_id" value="2125217" />
                    <input type="hidden" name="order_id" value="{{ rand(10000, 99999) . time() }}" />
                    <input type="hidden" name="amount" value="{{ number_format((float)$amount, 2, '.', '')}}" />
                    <input type="hidden" name="currency" value="INR" />
                    <input type="hidden" name="redirect_url" value="{{ route('success_callback') }}" />
                    <input type="hidden" name="cancel_url" value="{{ route('cancel_callback') }}" />
                    <input type="hidden" name="language" value="EN" />
                    <input type="hidden" name="billing_name" id="billing_name"  />
                    <input type="hidden" name="billing_city" id="billing_city" />
                    <input type="hidden" name="billing_state" id="billing_state" value="" />
                    <input type="hidden" name="billing_tel" id="billing_tel" value="" />
                    <input type="hidden" name="billing_email"  id="billing_email" value="" />
                    <input type="hidden" name="billing_address" id="billing_address"   />
                    <input type="hidden" name="billing_zip" value="425001" />
                    <input type="hidden" name="billing_country" value="India" />
                    <input type="hidden" name="event_id" value="{{$event_id}}" />
                   
                    
                     <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                            <div class="form-group">
                                <input type="text" placeholder="Team Name" name="team_name" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="College Name" name="college_name" id="college_name" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" id="city" name="city" placeholder="City Name">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap">
                                    <select name="state" id="state" required  class="wide" style="color: #696B7E;">
                                 <option value="">Select State</option>

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
                                <input type="text" name="representive_name" placeholder="Representive Name"
                                    required="">
                            </div>

                            <div class="form-group">
                                <label for="myfile" style="color: #fff;">Upload Team logo:</label>
                                <input type="file" name="logo" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                            <div class="form-group">
                                <input type="text" name="guide_name" placeholder="Guide Name" required="">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap">
                                    <select  name="team_memeber" class="wide" id="team_member" required style="color: #696B7E;">
                                        <option value="">No. of Team Members</option>
                                        <option value="1">1-10</option>
                                        <option value="2">6-10</option>
                                        <option value="3">11-15</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="contact_number" id="contact_number" placeholder="Contact Number" required="">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email ID" required="">
                            </div>

                            <div class="form-group">
                                <div class="select-wrap">
                                    <select required name="category" class="wide" id="category" style="color: #696B7E;">
                                        <option value="">Select Category</option>
                                        <option value="1">Internal Combustion Engine (ICE)  </option>
                                        <option value="2">Electric Motor Drive (EMD)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="padding-top:5px;">
                                <label for="myfile" style="color: #fff;">Upload College ID Card:</label>
                                <input type="file" name="college_id" required>
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
@stop

@section('js')
    <script>
        $(document).ready(function() {
            var d = new Date().getTime();
            $("#tid").val(d);
            $(document).on('change', '#state', function() {
                $("#billing_address").val($("#city").val() + ' ' + $(this).val() + ' ,India');
                $("#billing_state").val($(this).val());
            })
            
            $(document).on('keyup', '#city, #college_name, #contact_number, #email', function() {
                $("#billing_address").val($("#city").val() + ', ' + $("#state").val() + ' 425001,India');
                $("#billing_city").val($("#city").val());
                $("#billing_name").val($("#college_name").val());
                $("#billing_tel").val($("#contact_number").val());
                $("#billing_email").val($("#email").val());
            }) 
            
            // $(document).on('keyup', '#college_name', function() {
            //     $("#billing_name").val($(this).val());
            // })
            // $(document).on('keyup', '#contact_number', function() {
            //     $("#billing_tel").val($(this).val());
            // })
            // $(document).on('keyup', '#email', function() {
            //     $("#billing_email").val($(this).val());
            // })
            
        })
    </script>
@stop
<!-- contact-style-two end -->
