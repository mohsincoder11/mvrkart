
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Kart1</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets1/images/favicons1.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets1/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/owl.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/color.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets1/css/responsive.css')}}" rel="stylesheet">

</head>
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-074JVNLQKX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-074JVNLQKX');
</script>
	
	
<style>
    .social-icons1 {
        display: flex;
        justify-content: center;
        /* center the icons horizontally */
    }

    .social-icons1 a {
        display: inline-block;
        margin: 0 10px;
        /* add space between the icons */
        padding: 5px;
        color: #fff;
        background-color: #333;
        border-radius: 50%;
        text-decoration: none;
    }

    .social-icons1 a i {
        font-size: 20px;
    }

    .social-icons1 {
        display: flex;
        justify-content: center;
        /* center the icons horizontally */
    }

    .social-icons1 a {
        display: inline-block;
        margin: 0 5px;
        /* add space between the icons */
        padding: 5px;
        color: #fff;
        background-color: white;
        border-radius: 50%;
        text-decoration: none;
    }

    .social-icons1 a i {
        font-size: 20px;
    }

    .social-icons1 a.facebook {
        background-image: url('facebook-icon.png');
    }

    .social-icons1 a.instagram {
        background-image: url('instagram-icon.png');
    }

    .social-icons1 a.twitter {
        background-image: url('twitter-icon.png');
    }

    @media only screen and (max-width: 600px) {
        .img1 {
            margin-top: 125px;
        }

        .bg-img1 {
            height: 340px;
        }

        .form {
            margin-top: 357px !important;
        }
    }
	
	
	#select-box{
  height:100%;
  overflow-y:auto;
    width:100%;
}
option{
  overflow-y:scroll;
}
</style>
	@yield('css')



<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">



        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <!-- <div class="preloader-close">Preloader Close</div> -->
                <div id="handle-preloader" class="handle-preloader">


                    <img src="{{ asset('assets1/images/logo-final.png')}}" alt="" style="height:140px; width:200px;">

                </div>
            </div>
        </div>
        <!-- preloader end -->



  



        <!-- sidebar cart item -->
          <!-- <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <img src="{{ asset('assets1/images/logo.png')}}" alt="" />
                                </div>
                             <div class="content-box">
                                    <h4>Book Now</h4>
                                    <form action="https://st.ourhtmldemo.com/new/Whitehall/index.html" method="post"
                                        class="booking-form">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Text"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit">Send Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>

                                        <li><a href="tel:+918484968646">+91 84849 68646 </a></li>
                                        <li><a href="mailto:info@mvrmotorsports.com">info@mvrmotorsports.com</a></li>
                                    </ul>
                                </div> 
                                <ul class="social-box">
                                    <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                                    <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                                    <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- END sidebar widget item -->

<!-- main header -->
 <header class="main-header style-one">
    <!-- header-top -->
    <!-- <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <div class="left-column pull-left clearfix">
                    <ul class="info-list clearfix">
                        <li><i class="flaticon-phone-with-wire"></i><a href="tel:+918484968646">+91 84849
                                68646</a>
                        </li>
                        <li><i class="flaticon-mail-inbox-app"></i><a
                                href="mailto:info@mvrmotorsports.com">info@mvrmotorsports.com</a></li>
                    </ul>
                </div>
                <div class="right-column pull-right clearfix">

                    <ul class="social-links clearfix">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-whatsapp"></i></a></li>

                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
            <img src="{{ asset('assets1/images/path.png')}}" style="width:89%; padding-left:15px;"> 
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="{{route('home')}}"><img src="{{ asset('assets1/images/kart1.png')}}" alt=""    style="height:100px; width:120px;"></a></figure>
                </div>
     
                <div class="menu-area clearfix pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                   
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class=""><a href="{{ route('home') }}" style="font-size:18px !important;">Home</a>
                                   
                                </li>
                                <li class=""><a href="{{ route('philosophy') }}" style="font-size:18px !important;">Our Philosophy</a>
                                    
                                </li> 
                                <li class="dropdown"><a href="#" style="font-size:18px !important;">Events</a>
                                    <ul>
                                        <li><a href="{{ route('event') }}" style="font-size:14px !important;">UPCOMING EVENT</a></li>
                                        <li><a href="{{ route('pastevent') }}" style="font-size:14px !important;">PAST EVENT</a></li>
                                    </ul>
                                </li>
                                
                                <li class="" ><a href="{{ route('gallery') }}" style="font-size:18px !important;">Gallery</a>
                                   
                                </li> 
                                <li><a href="{{route('social-media')}}" style="font-size:18px !important;">Social Media</a></li>   
                                <li><a href="{{ route('contact') }}" style="font-size:18px !important;">Contact us</a></li>   
                            </ul>
                        </div>
               
                    </nav>
                  
                </div>
                <img src="{{ asset('assets1/images/path.png')}}" style="width:89%; padding-left:15px;"> 
                <div class="logo-box pull-left"> 
            </div>
            
        </div>
    </div>
		    </div>
    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
            <img src="{{ asset('assets1/images/path.png')}}" style="width:89%; padding-left:15px;"> 
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="{{route('home')}}"><img src="{{ asset('assets1/images/kart1.png')}}"  alt=""
                    style="height:100px; width:120px;"></a>
                    </figure>
                </div>
                <div class="menu-area clearfix pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    
                </div>
                <img src="{{ asset('assets1/images/path.png')}}" style="width:89%; padding-left:15px;"> 
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->


<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
       <!-- <div class="nav-logo"><img src="{{ asset('assets1/images/kart1.png')}}"
             alt="">
        </div>-->
        <div class="menu-outer" style="padding-top: 40px;"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>

                <li><a href="tel:+918484968646">+91 84849 68646</a></li>
                <li><a href="mailto:info@mvrmotorsports.com">info@mvrmotorsports.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">

                <li><a href="https://www.facebook.com/mvrmotorsports" target="/blank"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="https://wa.me/+918484968646/?text=Hello," target="/blank"><span class="fab fa-whatsapp"></span></a></li>

                <li><a href="https://www.instagram.com/mvr_kart1" target="/blank"><span class="fab fa-instagram"></span></a></li>

            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
@yield('content1')

<!-- main-footer -->
<footer class="main-footer" id="footer" style="box-shadow: rgba(227, 12, 12, 0.646) 0px 2px 8px 0px;">

    <div class="footer-bottom alternat-2">
        <div class="auto-container">
            <div class="bottom-inner clearfix">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4" style="padding-left:0px !important;">
                            <div class="copyright pull-left">
                                <p style="margin-top:1%;"><span style="color:red;">&copy; Copyright @ 2023
                                        Kart1.</span> All Rights Reserved. </p>
                            </div>


                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-1" align="center">
                            <div class="social-icons1 pull-center" style="font-size:12px !important;">
                                <li><a href="https://www.facebook.com/mvrmotorsports" target="/blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://wa.me/+918484968646/?text=Hello," target="/blank"><i class="fab fa-whatsapp"></i></a></li>

                                <li><a href="https://www.instagram.com/mvr_kart1" target="/blank"><i class="fab fa-instagram"></i></a></li>
                            </div>
                        </div>



                        <div class="col-md-6" >
                            <div class="copyright pull-right" style="padding-left:10px;">
                                <p style="margin-top:1%;"><a href="{{route('faq')}}">FAQs</a> |<a href="{{route('terms')}}">Terms & Conditions</a> |<a href="{{route('refund')}}">Refund & Cancellation</a>
                                    | <a href="{{route('privacy')}}">Privacy Policy</a> </p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
</footer>
 <button class="scroll-top scroll-to-target" data-target="html">
    <img src="{{ asset('assets1/images/kart.png')}}">
        <!-- <span class="fas fa-angle-up"></span> -->
    </button>
</div>
<!-- main-footer end -->

    <!-- jequery plugins -->
    <script src="{{ asset('assets1/js/jquery.js')}}"></script>
    <script src="{{ asset('assets1/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets1/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets1/js/owl.js')}}"></script>
    <script src="{{ asset('assets1/js/wow.js')}}"></script>
    <script src="{{ asset('assets1/js/validation.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets1/js/appear.js')}}"></script>
    <script src="{{ asset('assets1/js/scrollbar.js')}}"></script>
 <!--<script src="{{ asset('assets1/js/jquery.nice-select.min.js')}}"></script>-->
    <script src="{{ asset('assets1/js/nav-tool.js')}}"></script>
    <script src="{{ asset('assets1/js/isotope.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets1/js/timePicker.js')}}"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{ asset('assets1/js/gmaps.js')}}"></script>
    <script src="{{ asset('assets1/js/map-helper.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets1/js/script.js')}}"></script>
    @yield('js')
<script>
			$(document).ready(function(){
				setTimeout(() => {
					$(".alert_close").trigger('click');//alert_Close is class of close button
				}, 2500);
			})
		</script>
</body><!-- End of .page_wrapper -->

</html>