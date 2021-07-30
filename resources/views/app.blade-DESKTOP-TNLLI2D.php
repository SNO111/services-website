<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('front/img/favicon.png') }}">
    <!--  Social tags      -->
    <meta name="keywords" content="bootstrap, bootstrap 5, bootstrap5, ui kit, design system, responsive design, web design ui, ui design system, soft ui kit, soft ui design system">
    <meta name="description" content="Most complex and innovative Design System Made by Creative Tim. Check our latest Freebie Bootstrap 5 UI Kit.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Soft UI Design System by Creative Tim">
    <meta itemprop="description" content="Most complex and innovative Design System Made by Creative Tim. Check our latest Freebie Bootstrap 5 UI Kit.">
    <meta itemprop="image" content="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/opt_sds_free_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Soft UI Design System by Creative Tim">
    <meta name="twitter:description" content="Most complex and innovative Design System Made by Creative Tim. Check our latest Freebie Bootstrap 5 UI Kit.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/opt_sds_free_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Soft UI Design System by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/soft-ui-design-system/index.html" />
    <meta property="og:image" content="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/opt_sds_free_thumbnail.jpg" />
    <meta property="og:description" content="Most complex and innovative Design System Made by Creative Tim. Check our latest Freebie Bootstrap 5 UI Kit." />
    <meta property="og:site_name" content="Creative Tim" />
  <title> @yield('title') </title>
  <!--    HEAD & CSS STYLE     -->
  @include('front.layouts.styles')
  @stack('styles')
  <style>
        body {
      width: 100%;
      background-color: #262626;
      font-family: "Poppins";
    }
    header .bg-gradient-dark, span.bg-gradient-dark{
      background-image: linear-gradient(310deg, #424242 0%, #000000 100%) !important
    }
  </style>
</head>
  <body class="index-page">
    <!-- Navbar -->
    <!--  Navbar  -->
    @include('front.layouts.navbar')
    <!-- End Navbar -->
    @yield('content')
    <!--  Footer   -->
    @include('front.layouts.footer')
    <!--   JS Files   -->
    @include('front.layouts.scripts')
    @stack('scripts')
  </body>
</html>
