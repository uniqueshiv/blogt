<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    @include('layouts.preheader')
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
	 @include('layouts.header')
    <!-- Header END -->

    <!-- BEGIN SLIDER -->
   {{-- @include('layouts.slider') --}}
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">		
		 <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box margin-bottom-40">
          <div class="col-md-12 col-sm-12">
           
            @yield('content')
           
          </div>
        </div>
        <!-- END SERVICE BOX -->

        <!-- END CLIENTS -->
      </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

            <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img2.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img5.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="frontend/pages/img/works/img2.jpg"></a></li>
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              Skype: <a href="skype:metronic">metronic</a>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
   	@include('layouts.footer')
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="{{ asset('global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>      
    <script src="{{ asset('frontend/layout/scripts/back-to-top.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
 
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('global/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script><!-- pop up -->
    <script src="{{ asset('global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script><!-- slider for products -->
 
    <!-- BEGIN RevolutionSlider -->
    <script src="{{ asset('global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('frontend/pages/scripts/revo-slider-init.js')}}" type="text/javascript"></script>
    <!-- END RevolutionSlider -->
 
    <script src="{{ asset('frontend/layout/scripts/layout.js')}}" type="text/javascript"></script>
    @stack('pagejs')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            //Layout.initTwitter();            
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>