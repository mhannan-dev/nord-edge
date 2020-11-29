<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subsco - Construction</title>
    <meta name="description" content="Subsco is a clean, modern, and creative design HTML Template Kits. it is designed for construction, building companies, renovation and remodeling contractor services or business who wants to showcase their work, services and professional way. This template has beautifull and unique design that will be best suited for your online web presence. It has 100% responsive design and tested on all major handheld devices.">
    <meta name="keywords" content="architecture, assembly, building, company, construction, constructor, contractor, development, engineering, industrial, infrastructure, manufacturing, mechanical, planning">
    <meta name="author" content="rudhisasmito.com">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="{{ URL::asset('frontend')}}/images/favicon.ico">
	<link rel="apple-touch-icon" href="{{ URL::asset('frontend')}}/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('frontend')}}/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('frontend')}}/images/apple-touch-icon-114x114.png">

	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/vendor/animate.min.css">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/brands.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/solid.css">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend')}}/css/style.css" />

    <script src="{{ URL::asset('frontend')}}/js/vendor/modernizr.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('frontend')}}/plugins/summernote/summernote-bs4.css">


    @stack('styles')
    @stack('scripts')

</head>

<body data-spy="scroll" data-target="#navbar-example">

    @include('frontend.partials.header')
    @yield('content')
    {{--Page content load here--}}
	@include('frontend.partials.footer')

</body>
</html>
