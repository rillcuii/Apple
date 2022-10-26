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
<!-- <div class="intro">
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
</style> -->

  <!-- Navigation Bar -->
  <nav class="bg-[#1F1F1F] border-gray-200 px-2 sm:px-4 py-3 sticky top-0 drop-shadow-lg">
      <div class="container flex flex-wrap justify-between items-center mx-auto w-[1200px]">
        
        <a href="#" class="flex items-center text-[#dadada] p-4">
          <i class="fa fa-apple fa-xl" aria-hidden="true"></i>
        </a>

        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 md:hidden rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>

        <div class="hidden w-full md:block md:w-auto text-[#dadada]" id="navbar-default">
          <ul class="flex flex-col p-2 mt-4 bg-[#1F1F1F] rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-[#1F1F1F]">
            <li>
              <a href="#" class="block py-2 pr-4 pl-3 opacity-75 hover:opacity-100 transition-all-duration-300">Home</a>
            </li>
            <li>
              <a href="#" class="block py-2 pr-4 pl-3 opacity-75 hover:opacity-100 transition-all-duration-300">About</a>
            </li>
            <li>
              <a href="#" class="block py-2 pr-4 pl-3 opacity-75 hover:opacity-100 transition-all-duration-300">Contact</a>
            </li>
            <!-- <li>
              <a href="#" class="block py-2 pr-4 pl-3 opacity-75 hover:opacity-100 transition-all-duration-300"><i class="fa-solid fa-user"></i> Profile</a>
            </li> -->
          </ul>
        </div>
      </div>
  </nav>

    <!-- Home and Product Bar -->
    <nav class="mx-auto bg-[#1F1F1F] px-2 sm:px-4 shadow py-4 sticky inset-0 -z-50">
      <div class="container flex flex-wrap justify-between items-center w-[1200px] mx-auto bg-[#1F1F1F] px-1 text-xs">
          <div class="text-[#dadada]">
            <a href="#" class="text-[#dadada] opacity-75 hover:opacity-100 transition-all-duration-300">Home</a> <span class="text-[#dadada]/60">/ iPhone 13 Pro</span>
          </div>
      </div>
    </nav>

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

        <!-- <p class="text-[#000000] font-base text-lg py-1 mt-2 ">
          <span class="tracking-tight">Layar Super Retina XDR yang mulus dan responsif dengan ProMotion. Pembaruan besar <br> pada sistem kamera untuk berbagai kemungkinan baru yang dramatis. Istimewa <br> kokohnya. Chip A15 Bionic ultra cepat. Dan terobosan kekuatan baterai. Ayo jadi Pro.</span>
        </p> -->

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

  <!-- Carousel -->
    <div class="mx-auto mt-6 relative container -z-50" data-aos="fade-up" data-aos-duration="2000">
      <div class="swiper lg:h-auto lg:w-3/4">
      <!-- Additional  required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img class="object-center object-cover w-full" src="https://cdn.discordapp.com/attachments/1021789723687133235/1024110871783415868/unknown.png" alt=""></div>
        <div class="swiper-slide"><img class="object-center object-cover w-full" src="https://cdn.discordapp.com/attachments/1021789723687133235/1024111236490723409/unknown.png" alt=""></div>
        <div class="swiper-slide"><img class="object-center object-cover w-full" src="https://cdn.discordapp.com/attachments/1021789723687133235/1024112043386732655/unknown.png" alt=""></div>
      </div>
      </div>
    </div>

  <!-- Footer -->
  <footer class="p-4 bg-[#1F1F1F] sm:p-6 text-white">
      <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="/" class="flex items-center">
                  <img src="https://cdn.discordapp.com/attachments/1021789723687133235/1023475250693939250/applelogogrey.png" class="mr-3 h-8" alt="">
                  <span class="self-center text-2xl font-semibold whitespace-nowrap">Apple Store</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-white">Resources</h2>
                  <ul class="opacity-50 text-[#dadada]">
                      <li class="mb-4">
                          <a href="https://swiperjs.com/swiper-api" class="hover:underline">SwiperJS</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-white">Follow us</h2>
                  <ul class="opacity-50 dark:text-gray-400">
                      <li class="mb-4">
                          <a href="#" class="hover:underline ">Instagram</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase dark:text-white">Legal</h2>
                  <ul class="opacity-50 dark:text-gray-400">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-[#dadada]/70 sm:mx-auto text-[#dadada] lg:my-8">
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm ">© 2022 <a href="" class="hover:underline">Apple Store</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0 text-[#dadada]">
              <a href="#" class="opacity-75 hover:opacity-100 transition-all-duration-300">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="opacity-75 hover:opacity-100 transition-all-duration-300">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Instagram page</span>
              </a>
              <a href="#" class="opacity-75 hover:opacity-100 transition-all-duration-300">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="opacity-75 hover:opacity-100 transition-all-duration-300">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">GitHub account</span>
              </a>
          </div>
      </div>
  </footer>

</body>

<script>

const swiper = new Swiper('.swiper', {
  // Optional parameters
  speed:400,
  spaceBetween:100,
  effect: "fade",
  loop: true,
  autoplay:{
    effect: "fade",
    delay:5000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',

  }
});

  let intro = document.querySelector('.intro');
    let logo = document.querySelector('.logo-header');
    let logoSpan = document.querySelectorAll('.logo');

    window.addEventListener('DOMContentLoaded', ()=> {
        setTimeout(()=> {
            logoSpan.forEach((span, idx)=> {
                setTimeout(()=>{
                    span.classList.add('active');
                }, (idx + 1) * 400)
            });

            setTimeout(()=>{
                logoSpan.forEach((span, idx)=>{
                    setTimeout(()=>{
                        span.classList.remove('active');
                        span.classList.add('fade');
                    }, (idx + 1) * 50)
                })
            },3000);
            setTimeout(()=>{
                intro.style.top = '-100vh';
            }, 3400)
        })
    })
</script>

<script>
  AOS.init();
</script>

</html>