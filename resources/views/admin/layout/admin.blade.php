<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
@include('admin.layout.head')

<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
@include('admin.layout.header')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
@include('admin.layout.content')
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('admin.layout.footer')
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
@include('admin.layout.js')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>