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
  .text-grey {
    color: #999999 !important;
  }
  .featurer {
    padding: 74px 0px;
  }
  .featurer h5{
    font-size: 16px;
    line-height: 72px;
    color: #ffffff;
    font-weight: 600;
  }
  p{
    font-size: 14px;
    line-height: 30px;
    color: #cccccc;
    font-weight: 400;
  }
.call-to-action {
  width: 1170px;
  height: 550px;
  border-radius: 30px;
  filter: drop-shadow(0px 50px 35px rgba(0,11,40,0.24));
  background-color: #bfbfbf;
  margin-bottom: 80px;
  }
  .bg-call {
    width: 100%;
    height: 695px;
    padding: 74px 0px;
    margin-bottom: 171px;
    background-color: #1a1a1a;
  }
  .bg-call h3 {
    font-size: 36px;
  line-height: 60px;
  color: #ffffff;
  font-weight: 700;
  }
  .contact-btn, .read-more {
    width: 205px;
    font-size: 14px;
    letter-spacing: 1px;
    color: #ffffff;
    margin-bottom: 74px;
    font-weight: 700;
    font-family: "Montserrat";
  }
  .our-story-img {
  }
  header {
    width: 100%;
    height: 100vh;
    max-height: 100vh;
  }
  header h1 {
    font-size: 100px;
    letter-spacing: 5px;
    line-height: 130px;
    font-weight: 700;
  }
  .page-header-overlay {
    background-color: #000000bf;

    background-size: 100%;
    opacity: .7;
  }

  .story-img-box-1 {
    position: absolute;
    top: 55px;
    width: 430px;
    height: 362px;
    border-radius: 30px;
    background-image: linear-gradient(-52deg, #f76f61 0%, #9b23e9 100%);
  }
  .story-img-box-2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 362px;
    height: 465px;
    border-radius: 30px;
    background-color: #eeeeee;
    overflow: hidden;
  }
  .icon-shape i{
    font-size: 48px;
    letter-spacing: 1px;
  }
  .story-about-2 {
    margin-top: 140px;
  }
  .story-about-2 .story-2-img {
    width: 600px;
    height: 400px;
    border-radius: 30px;
    filter: drop-shadow(0px 50px 35px rgba(0,11,40,0.24));
    background-color: #aaaaaa;
  }
  .number {
    margin-top: 74px;
    width: 100%;
    height: 440px;
  }
  .latest-blog .card-blog img {
    height: 431px;
  }
  .latest-blog {
    margin-top: 74px;
  }
  .subscription {
    width: 100%;
    background-color: #000000;
  }
  .input-group input{
    border-bottom-left-radius: 1.875rem;
    border-top-left-radius: 1.875rem;
  }
  </style>
</head>
  <body class="index-page">
    <!-- Navbar -->
    <!--  Navbar  -->
    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
          <!--  Navbar  -->   
          @include('front.layouts.navbar')
          <!-- End Navbar --> 
        </div>

      </div>
    </div>

    <!-- End Navbar -->
    @yield('content')
    <!--  Footer   -->
    @include('front.layouts.footer')
    <!--   JS Files   -->
    @include('front.layouts.scripts')
    @stack('scripts')
  </body>
</html>
