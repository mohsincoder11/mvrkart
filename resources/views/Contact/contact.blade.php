

        @extends('layout1')
        @section('css')
        <style>
            .error{
                color:red;
                font-size: 14px;

            }
        </style>
        @stop
        @section('content1')
        <section class="faq-page-section faq-section" style="padding-bottom:40px !important; padding-top:40px !important; background-color:#fff8f8">
            <div class="auto-container">
                
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-side" style="padding-bottom: 10px !important;">
               
                        <div class="content_block_13" >
                        <div class="text" style="padding-bottom: 10px;">
                                <h3><b>REACH US</b></h3>
                             
                            </div>
                            <div class="content-box" style="padding-bottom: 10px !important; height:auto !important;">
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa fa-envelope" aria-hidden="true" style="padding-top:12px;"></i></div>
                                    <ul class="info clearfix">
                                        <li>
                                            <h5>Email</h5>
                                            <p><a href="mailto:info@mvrmotorsports.com">info@mvrmotorsports.com</a></p>
                                        </li>

                                    </ul>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa fa-mobile" aria-hidden="true" style="padding-top:12px;"></i></div>
                                    <ul class="info clearfix">
                                        <li>
                                            <h5>Helpline Number</h5>
                                            <p><a href="tel:+918484968646">+9184849 68646</a></p>
                                        </li>

                                    </ul>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa fa-globe" aria-hidden="true" style="padding-top:12px;"></i></div>
                                    <ul class="info clearfix">
                                        <li>
                                            <h5>Company Website</h5>
                                            <p><a href="https://mvrmotorsports.com/" target="/blank">www.mvrmotorsports.com</a></p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-side">
                                <div class="text " style="padding-bottom: 10px;">
									<h3><b>ASK US</b></h3>
                               </div>
                        <div  class="form-inner" >

							<div style="background-color:#fff; box-shadow: 0px 0px 30px 0px rgb(0 0 0 / 10%); border-radius: 5px; padding: 5%; ">
                            <form  method="post" class="question-form "  action="{{route('save-contact-form')}}">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 big-column ">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="city" placeholder="City" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone_number" placeholder="Phone Number" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="message" placeholder="Your Message" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="captcha">Please solve the math problem:  <span id="captcha-question"></span></label>
                                            <input type="text" name="captcha" id="captcha" required="">
                                        </div>
                                       
                                        
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 big-column">
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
							</div>
                    </div>

                   
                </div>
            </div>
        </section>
        <!-- faq-page-section end -->




        <!-- main-footer -->
    



        <!--Scroll to top-->
      
    </div>
    @stop
	@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

<script>
$(document).ready (function () {  
    $(".question-form").validate({
    ignore: [],
    rules: {
        email: {
            required: true,
			  email: true,
        },
        phone_number: {
            required: true,
            digits: true,
            minlength:10,
            maxlength:10,
        },
        captcha: {
            required: true,

                    mathCaptcha: true
                }
        
    },
    messages: {
        email: {
            required: "Please enter email.",
			  email: "Please enter a valid email address."
        },

        phone_number: {
            required:"Please enter mobile number.",
             minlength:"Please enter 10 digit.",
            maxlength:"Please enter 10 digit.",
            digits:"Mobile number must be integer only."
        },
        captcha: {
            required: "This field is required",

                    mathCaptcha: "Please solve the math problem correctly."
                }
      

    },
    submitHandler: function (form) {
        // alert(1);
        try {
            $.ajax({
                url: $(form).attr("action"),
                type: "POST",
                data: new FormData(form),
                processData: false,
                cache: false,
                contentType: false,
                datatype: "application/json",
                success: function (data) {
                   alert('Mail has been sent successfully!');
                   setTimeout(() => {
                    location.reload();                    
                   }, 2000);
                },
                // complete:function(){ },
                error: function (jqXHR, exception) {
                    alert('Something error occured at server.');
                },
            });
        } catch (e) {
            console.log(e);
        }
        return false;
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
		 
});


function generateMathQuestion() {
        var num1 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
        var num2 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
        var operator = ['+', '-', '*'][Math.floor(Math.random() * 3)]; // Randomly select an operator (+, -, *)
        var question = num1 + ' ' + operator + ' ' + num2;
        var answer = eval(question); // Evaluate the math question to get the answer
        
        document.getElementById('captcha-question').textContent = question;
        document.getElementById('captcha').value = ''; // Clear the user's previous answer
        document.getElementById('captcha').focus(); // Set focus on the input field
        document.getElementById('captcha').setAttribute('data-answer', answer); // Store the answer as a data attribute
    }
    
    // Generate the initial math question
    generateMathQuestion();
    
    // Validate the user's input
    $.validator.addMethod("mathCaptcha", function(value, element) {
        var userAnswer = parseInt(value);
        var correctAnswer = parseInt($(element).data('answer'));

        return !isNaN(userAnswer) && userAnswer === correctAnswer;
    }, "Please solve the math problem correctly.");
});


</script>
@stop
   