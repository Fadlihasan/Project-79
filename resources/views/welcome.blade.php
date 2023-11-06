<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project</title>
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Observer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/EaselPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/PixiPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>


<!-- RoughEase, ExpoScaleEase and SlowMo are all included in the EasePack file -->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CustomEase.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
      .txt {
            display: none;
        }
        br {
   display: block;
   margin: 10px 0;
}
</style>
</head>
<body>
 <!--Header Start-->
 <header class="fixed left-0 top-0 z-10 flex w-full items-center bg-transparent">
    <div class="container">
      <div class="relative flex items-center justify-between">
        <div class="flex gap-2">
          <img src="/img/logo79favicon.png" alt="logo 79" srcset="" class="flex w-[70px] h-[50px] rounded" /> 
          <a href="#home" class="text-white block py-3 text-lg font-bold">TALENT CENTER 79</a>
        </div>
        <div class="flex items-center px-4">
          <nav id="nav-menu" class="absolute right-4 top-full hidden w-full rounded-lg py-5 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="" class="text-white group-hover:text-grey2 mx-8 flex py-2 text-base">Register</a>
              </li>
              <li class="group">
                <a href="" class="text-white flex rounded-full bg-transparent px-8 py-2 text-base transition duration-300 ease-in-out hover:opacity-80  border border-white hover:border-black hover:text-black hover:bg-white">Sign In</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
   <!--Header End-->

<!---Hero section start--->
<section id="home" class="relative sm:max">
  <div class="bg-cover bg-center">
    <img src="/img/annie-spratt-hCb3lIB8L8E-unsplash 1.png">
  </div>

  <div class="absolute inset-0 bg-black opacity-50"></div>
<div class="absolute bottom-60 w-full pb-32">
<div class="bg-grey sm:max absolute bottom-20 w-full pb-32 lg:bg-transparent">
  <h3 class="txt lg:text-5xl mb-10 text-center text-3xl font-bold text-white sm:text-4xl font-sans">Welcome to 79 <p class="mb-5">Talent Center</p></h3>
  <h3 class="txt lg:text-5xl mb-10 text-center text-3xl font-bold text-white sm:text-4xl font-sans">Find a Talent <p class="mb-5">That Suits Your Requirements</p></h3>
  <h3 class="txt lg:text-5xl mb-10 text-center text-3xl font-bold text-white sm:text-4xl font-sans">Build the Perfect Team <p class="mb-5"> For the Brighter Future</p></h3>
  </div>

  <div class="flex justify-center mb-4">
    <input type="text" class="w-1/2 appearance-none rounded-l-full border px-8 py-3 leading-tight text-gray-700 shadow focus:outline-none" id="title box" type="text" placeholder="Try 'Java Script'"/>
    <div class="rounded-r-full border-none bg-white">
      <img src="/img/cari1.png" alt="search" class="ml-1 w-10 mt-2" />
    </div>
  </div>
  <div class="flex justify-center gap-2">
    <p class="py-2 px-4 rounded text-white">Popular</p>
    <button class="bg-white hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">
      Java Script
    </button>
    <button class="bg-white hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">
      Scrum Master
    </button>
    <button class="bg-white hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">
      ReactJs
    </button>
    <button class="bg-white hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">
      Web Front-end Developer
    </button>
    <button class="bg-white hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">
      VueJs
    </button>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
      $(document).ready(function () {
          var lines = $(".txt");
          var i = -1;

          function showNext() {
              ++i;
              lines.eq(i % lines.length)
                  .fadeIn(200)
                  .delay(3000)
                  .fadeOut(200, showNext);
          }

          showNext();
      });
  </script>
</section>
<!---Hero section end--->
       <!--Footer Start-->
       <footer id="contact" class="bg-blue pt-24 pb-12 sm:max">
        <div class="container">
            <div class="flex flex-warp">
                <div class="w-full px-10 mb-12 text-slate-300 font-medium md:w-1/2">
                    <h4 class="font-bold text-2xl text-white mb-6 underline-offset-8 underline decoration-orange-700">Useful Link</h4>
                    <p class="mb-2">Home</p>
                    <p class="mb-2">Our Technologies</p>
                    <p class="mb-2">Why Choose Us</p>
                    <p class="mb-2">Testimonial</p>
                    <p class="mb-2">Contact</p>
                </div>
                <div class="w-full px-10 mb-12 md:w-1/2 ">
                    <h3 class="font-bold text-2xl text-white mb-6 underline-offset-8 underline decoration-orange-700">Contact Us</h3>
                        <ul class="text-slate-300">
                            <li>
                                <h6><h6 class="inline-block text-base"><span class="font-bold">Adress : </span>Kompleks Terasana No.6A<h6>  
                            </li>
                            <li>
                                <p class="inline-block text-base">Jalan Cihampelas (Bawah)</p>
                            </li>
                            <li>
                                <p class="inline-block mb-4 text-base">Bandung 40171</p>
                            </li>
                            <li>
                              <h6 class="font-bold">Phone :<h6><h6 class="inline-block text-base mb-4">(022) 20505455<h6>  
                            </li>
                            <li>
                              <h6 class="font-bold">Follow Us On :<h6> 
                                <div class="flex justify-start gap-2 mt-4 mb-7">
                                  <a href="https://www.facebook.com/padepokantujuhsembilan">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 16.19C22 19.83 19.83 22 16.19 22H15C14.45 22 14 21.55 14 21V15.23C14 14.96 14.22 14.73 14.49 14.73L16.25 14.7C16.39 14.69 16.51 14.59 16.54 14.45L16.89 12.54C16.92 12.36 16.78 12.19 16.59 12.19L14.46 12.22C14.18 12.22 13.96 12 13.95 11.73L13.91 9.28C13.91 9.12 14.04 8.98001 14.21 8.98001L16.61 8.94C16.78 8.94 16.91 8.81001 16.91 8.64001L16.87 6.23999C16.87 6.06999 16.74 5.94 16.57 5.94L13.87 5.98001C12.21 6.01001 10.89 7.37 10.92 9.03L10.97 11.78C10.98 12.06 10.76 12.28 10.48 12.29L9.28 12.31C9.11 12.31 8.98001 12.44 8.98001 12.61L9.01001 14.51C9.01001 14.68 9.14 14.81 9.31 14.81L10.51 14.79C10.79 14.79 11.01 15.01 11.02 15.28L11.11 20.98C11.12 21.54 10.67 22 10.11 22H7.81C4.17 22 2 19.83 2 16.18V7.81C2 4.17 4.17 2 7.81 2H16.19C19.83 2 22 4.17 22 7.81V16.19Z" fill="#FDFDFD"/>
                                    </svg>
                                  </a>
                                    <a href="https://www.instagram.com/padepokantujuhsembilan">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM12 15.88C9.86 15.88 8.12 14.14 8.12 12C8.12 9.86 9.86 8.12 12 8.12C14.14 8.12 15.88 9.86 15.88 12C15.88 14.14 14.14 15.88 12 15.88ZM17.92 6.88C17.87 7 17.8 7.11 17.71 7.21C17.61 7.3 17.5 7.37 17.38 7.42C17.26 7.47 17.13 7.5 17 7.5C16.73 7.5 16.48 7.4 16.29 7.21C16.2 7.11 16.13 7 16.08 6.88C16.03 6.76 16 6.63 16 6.5C16 6.37 16.03 6.24 16.08 6.12C16.13 5.99 16.2 5.89 16.29 5.79C16.52 5.56 16.87 5.45 17.19 5.52C17.26 5.53 17.32 5.55 17.38 5.58C17.44 5.6 17.5 5.63 17.56 5.67C17.61 5.7 17.66 5.75 17.71 5.79C17.8 5.89 17.87 5.99 17.92 6.12C17.97 6.24 18 6.37 18 6.5C18 6.63 17.97 6.76 17.92 6.88Z" fill="#FDFDFD"/>
                                      </svg>
                                    </a> 
                                <a href="https://www.youtube.com/@tujuhsembilantv5555">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17 4H7C4 4 2 6 2 9V15C2 18 4 20 7 20H17C20 20 22 18 22 15V9C22 6 20 4 17 4ZM13.89 13.03L11.42 14.51C10.42 15.11 9.59998 14.65 9.59998 13.48V10.51C9.59998 9.34001 10.42 8.88001 11.42 9.48001L13.89 10.96C14.84 11.54 14.84 12.46 13.89 13.03Z" fill="#FDFDFD"/>
                                  </svg>
                                </a>           
                                 
                                </div>   
                                <img src="/img/logotujuhsembilan 2.png" alt="">
                                             
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </footer>
            
        </footer>
        <footer id="contact" class="bg-blue2 pt-24 pb-12 sm:max">
            <div>
                <p class="font-bold text-sm text-white text-center"> © Copyright 2020</p>
                <p class="font-meduim text-sm text-white text-center"> Privacy Policy Desain</p>
                <p class="font-meduim text-sm text-white text-center">By Tujuh Sembilan</p>
            </div>
        </footer>
         <!--Footer End-->
