@php use Illuminate\Support\Facades\Auth; @endphp
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ecommerce</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom.css">


    <!-- Modernizr JS -->
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
  