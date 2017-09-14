<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Blog Frontend</title>
 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">
 
  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">
 
  <link rel="shortcut icon" href="favicon.ico">
  <link href="favicon.ico" rel="SHORTCUT ICON" type="image/ico">
 
  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->
 
  <!-- Global styles START -->          
  <link href="{{ URL::asset('global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('global/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{ asset('global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{ asset('global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{ asset('global/plugins/slider-revolution-slider/rs-plugin/css/settings.css')}}" rel="stylesheet">
  <!-- Page level plugin styles END -->
 
  <!-- Theme styles START -->
  <link href="{{asset('global/css/components.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/layout/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/pages/css/style-revolution-slider.css')}}" rel="stylesheet"><!-- metronic revo slider styles -->
  <link href="{{asset('frontend/layout/css/style-responsive.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/layout/css/custom.css')}}" rel="stylesheet">
  <!-- Theme styles END -->
  @stack('pagecss')
</head>
<!-- Head END -->