<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/874d28bdf2.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="icon" href="https://cdn.discordapp.com/attachments/1021789723687133235/1023475250693939250/applelogogrey.png">
  <title>Apple Store</title>
  <style type="text/css">
      .wave {
        animation: wave 8s linear infinite;
      }
      .wave1 {
        animation: wave1 10s linear infinite;
      }
      .wave2 {
        animation: wave2 12s linear infinite;
      }
      @keyframes wave {
        0% {
          transform: translateX(0%);
        }
        100% {
          transform: translateX(100%);
        }
      }
      @keyframes wave1 {
        0% {
          transform: scaleY(1.2) translateX(0%);
        }
        100% {
          transform: scaleY(1.2) translateX(100%);
        }
      }
      @keyframes wave2 {
        0% {
          transform: scaleY(.8) translateX(0%);
        }
        100% {
          transform: scaleY(.8) translateX(100%);
        }
      }
    </style>
</head>
<body class="bg-[#ffffff]">
<!-- Splash Screen -->
<div class="intro">
        <h1 class="logo-header">
            <span class="logo"><img src="https://cdn.discordapp.com/attachments/1021789723687133235/1023477798804922458/6945-apple.gif" width="300" alt=""></span>
        </h1>
    </div>
<style>
        .intro {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            background-color: #FFFFFF;
            transition: 1s;
            overflow: hidden;
        }
        .logo-header{
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
        .logo{
            position: relative;
            display: inline-block;
            bottom: -20px;
            margin-top: 10rem;
            opacity: 0;
        }
        .logo.active {
            bottom: 0;
            opacity: 1; 
            transition: ease-in-out 0.5s;
        }
        .logo.fade{
            bottom: 150px;
            opacity: 0;
            transition: ease-in-out 0.5s;
        }
</style>
 
    <!-- Wave Animation -->
    <div class="md:container md:mx-auto">
      <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <path id='sineWave' fill="#000000" fill-opacity="0.5" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
        </defs>
        <use class="wave" href="#sineWave" />
        <use class="wave" x="-100%" href="#sineWave" />
        <use class="wave1" href="#sineWave" />
        <use class="wave1" x="-100%" href="#sineWave" />
        <use class="wave2" href="#sineWave" />
        <use class="wave2" x="-100%" href="#sineWave" />
      </svg>
    </div>
       <!-- Value Product -->
    <div>
      <div class="container items-center w-[1200px] mx-auto text-center pt-10 px-3">
        <span class="text-[#000000] font-semibold text-4xl">
          <i class="fa fa-apple fa-lg" aria-hidden="true"></i>iPhone 13 Pro
        </span>
        <p class="text-[#000000] font-bold text-[50px] py-1">
          <span class="tracking-tight">Ponsel. Paling. Pro.</span>
        </p>
        <div class="py-2 mt-6">
          <a href="#" class="bg-[#ffffff] hover:bg-[#EEEEEE] text-[#000000]/80 font-base text-lg px-5 py-3 border border-[#000000] rounded shadow">Beli Sekarang</a>
        </div>
      </div>
    </div>
    <!-- Image Product -->
    <div class="container items-center mx-auto mt-10 w-[1200px] px-3 sticky -z-50" data-aos="fade-up" data-aos-duration="2000">
      <img src="https://cdn.eraspace.com/pub/media/wysiwyg/iphone-13-pro/iphone-13-pro-update-2022/Product.png" alt="">
    </div>
    <!-- Content Product -->
    <div class=" container items-center w-[1200px] mx-auto mt-16">
      <div class="grid grid-cols-2 gap-6 sticky -z-10">

        <div class="px-8 py-10 bg-[#F6F6F6] drop-shadow-lg " data-aos="fade-up-right" data-aos-duration="2000">
          <h3 class="text-xl font-semibold">Desain</h3>

          <h1 class="text-3xl font-semibold mb-6">
            Tampil menawan
            sekaligus kokoh. 
          </h1>

          <div class="drop-shadow-md">
            <img src="https://cdn.eraspace.com/pub/media/wysiwyg/iphone-13-pro/Group_2_1.png" alt="">
          </div>
        </div>

        <div class="px-8 py-10 bg-[#F6F6F6] drop-shadow-lg"  data-aos="fade-up-left" data-aos-duration="2000">
          <p class="text-lg text-justify mb-2 font-base">
            Desain yang mengagumkan sekaligus kokoh,
            dengan baja tahan karat sekelas alat bedah
            medis, Ceramic Shield, dan level ketahanan
            air IP68 terdepan di industri.
          </p>

          <span class="drop-shadow-md">
            <img src="https://cdn.eraspace.com/pub/media/wysiwyg/iphone-13-pro/Group_3_1.png" alt="">
          </span>
        </div>

      </div>
    </div>

    <!-- Content Product -->
    <div class="container items-center w-[1200px] mx-auto mt-6">
      <div class="grid grid-cols-2 gap-6 sticky -z-10">

        <div class="px-8 py-10 bg-[#F6F6F6] drop-shadow-lg" data-aos="fade-up-right" data-aos-duration="2000">
          <h3 class="text-xl font-semibold">Sistem Kamera Pro</h3>

          <h1 class="text-4xl font-bold mb-10">
            Pembaruan besar <br>
            pada kamera. <br>
            Semakin besar <br>
            kemungkinan <br>
            foto anda
          </h1>

          <p class="text-xl text-justify font-base">
            Pembaruan luar biasa pada perangkat <br>
            keras dipadukan dengan perangkat lunak <br>
            yang sangat cerdas untuk menghadirkan <br>
            fotografi makro di kamera Ultra Wide, <br>
            zoom optik 3x di kamera Telefoto, dan <br>
            mode Malam di semua kamera.
          </p>
        </div>

        <div class="px-8 py-10 bg-[#F6F6F6] drop-shadow-lg" data-aos="fade-up-left" data-aos-duration="2000">
          <img src="https://cdn.eraspace.com/pub/media/wysiwyg/iphone-13-pro/Group_5.png" alt="">
        </div>

      </div>
    </div>
</body>
</html>
