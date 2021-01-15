<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Desa Tompobulu @yield('title')</title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- CSS
	================================================== -->
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('constra/css/bootstrap.min.css')}}">
	<!-- Template styles-->
    <link rel="stylesheet" href="{{asset('constra/css/style.css')}}">
	<!-- Responsive styles-->
    <link rel="stylesheet" href="{{asset('constra/css/responsive.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{asset('constra/css/font-awesome.min.css')}}">
	<!-- Colorbox -->
	<link rel="stylesheet" href="{{asset('constra/css/colorbox.css')}}">

	@stack('styles')
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="body-inner">
		@include('constra_template.partial.header')
		<!--/ Header end -->

		@yield('content')
		<!--/ News end -->

		@include('constra_template.partial.footer')


		<!-- Javascript Files
	================================================== -->

		<!-- initialize jQuery Library -->
		<script type="text/javascript" src="{{asset('constra/js/jquery.js')}}"></script>
		<!-- Bootstrap jQuery -->
		<script type="text/javascript" src="{{asset('constra/js/bootstrap.min.js')}}"></script>
		<!-- Color box -->
		<script type="text/javascript" src="{{asset('constra/js/jquery.colorbox.js')}}"></script>
		<!-- Isotope -->
		<script type="text/javascript" src="{{asset('constra/js/isotope.js')}}"></script>
		<script type="text/javascript" src="{{asset('constra/js/ini.isotope.js')}}"></script>
		<!-- Template custom -->
		<script type="text/javascript" src="{{asset('constra/js/custom.js')}}"></script>

		<script type="text/javascript" src="{{asset('constra/js/owl.carousel.min.js')}}"></script>

		@stack('script')

	</div><!-- Body inner end -->
</body>

</html>