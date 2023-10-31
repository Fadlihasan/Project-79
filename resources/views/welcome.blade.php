<!DOCTYPE html>
<html lang="en">
<head>
    <title>laravel</title>
    @vite('resources/css/app.css')
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
                <a href="" class="text-white group-hover:text-dark mx-8 flex py-2 text-base">Register</a>
              </li>
              <li class="group">
                <a href="" class="text-white flex rounded-full bg-transparent px-8 py-2 text-base transition duration-300 ease-in-out hover:opacity-80  border border-white hover:border-dark hover:text-dark hover:bg-white">Sign In</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
   <!--Header End-->

    <!---Hero section start--->
<section id="home" class="sm:max">
  <div class="bg-cover bg-center" style="background-image:">
    <img src="/img/annie-spratt-hCb3lIB8L8E-unsplash 1.png">
    <div class="bg-grey sm:max absolute bottom-20 w-full pb-32 lg:bg-transparent">
      <h2 class="lg-text-5xl mb-5 text-center text-3xl font-bold text-white sm:text-4xl font-sans">Welcome To 79</h2>
      <h3 class="lg-text-5xl mb-10 text-center text-3xl font-bold text-white sm:text-4xl font-sans">Talent Center 79</h3>
        <div class="flex justify-center">
          <input class="shadow appearance-none border w-1/2 py-3 px-8 rounded-full text-gray-700 leading-tight focus:outline-none flex justify-center" id="title box" type="text" placeholder="Try 'Java Script'">
        </div>
    </div>
  </div>
</section>
<!---Hero section end--->
         <!--Footer Start-->
         <footer id="contact" class="bg-blue pt-24 pb-12 sm:max">
            <div class="container">
                <div class="flex flex-warp">
                    <div class="w-full px-10 mb-12 text-slate-300 font-medium md:w-1/2">
                        <h4 class="font-bold text-2xl text-white mb-6 text-decoration-line : underline">Useful Link</h4>
                        <p class="mb-2">Home</p>
                        <p class="mb-2">Our Technologies</p>
                        <p class="mb-2">Why Choose Us</p>
                        <p class="mb-2">Testimonial</p>
                    </div>
                    <div class="w-full px-10 mb-12 md:w-1/2 ">
                        <h3 class="font-bold text-2xl text-white mb-6 text-decoration-line : underline">Useful Link</h3>
                            <ul class="text-slate-300">
                                <li>
                                    <h6 class="font-bold">Address:<h6><h6 class="inline-block text-base">Kompleks Terasana No.6A<h6>  
                                </li>
                                <li>
                                    <p class="inline-block text-base">Jalan Cihampelas (Bawah)</p>
                                </li>
                                <li>
                                    <p class="inline-block mb-4 text-base">Bandung 40171</p>
                                </li>
                                <li>
                                    <p class="inline-block mb-4 font-bold text-base">Phone</p>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </footer>
        <footer id="contact" class="bg-blue2 pt-24 pb-12 sm:max">
            <div>
                <p class="font-bold text-sm text-white text-center"> © Copyright 2020</p>
                <p class="font-meduim text-sm text-white text-center"> Privacy Policy Desain</p>
                <p class="font-meduim text-sm text-white text-center">By Tujuh Sembilan</p>
            </div>
        </footer>
         <!--Footer End-->