
@extends('layout1')
@section('content1')

        <!-- error-section -->
              <section class="error-section centred" style="background-image: url(assets/images/icons/vct.png); padding-bottom:30px;">
            <div class="bg-layer" style="background-image: url(assets/images/icons/vct.png);"></div>
            <div class="auto-container">
                <div class="content-box" align="left">

                    <h1 style="font-size:60px; color:red;"> <b>Oops</b></h1>
                </div>
                <div class="inner-box" align="left">
                    <!-- <figure class="image-box"><img src="assets/images/icons/error.png" alt=""></figure> -->
                    <h2 style="font-size:20px;">Transaction Failed, Please try again </h2>
                    <!-- <p>You may have mistyped the address or the page <br />may have moved.</p> -->

                </div>
            </div>
        </section>
@stop