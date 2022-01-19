@extends('layouts.frontend_slide')

@section('title','Gallery')
    @section('content')
      
<!--====== BRAMD PART START ======-->

    <section id="team" class="team-area pt-150">
      <div class="container">
        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-8 text-center section-title">
              <div class="m-auto line"></div>
              <h3 class="title"><span>Gallery</span>Pages</h3>
              <div>
                <a href="/gallery">Gambar</a> |
                <a href="">Vidio</a>
              </div>
            </div>
            <!-- section title -->
          </div>
        </div>

        <div class="justify-center row">
      
           
      
            
           <!-- component -->
<main class="py-4">
    <div class="px-4">
      <div class="block lg:flex justify-between md:-mx-2">
        @foreach ($vidio as $vidio)
        <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
          <div class="bg-white rounded-lg overflow-hidden shadow relative">
            <video controls>
                <source src="{{ $vidio->vidio }}" type="video/webm">
                </video>
            <div class="p-4 h-auto md:h-40 lg:h-48">
              <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                by {{$vidio->name}}
              </a>
              <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              last modified {{$vidio->date}}
              </div>
              <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
                <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#something</a>
                <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sky</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
        
      </div>
    </div>
  </main>
           
        
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>
    @foreach ($footer as $foot)
     
  
 
    <footer class="footer bg-cover bg-no-repeat bg-right-top pt-120 mt-25 bg-theme-color md:bg-transparent md:pt-260 lg:pt-260" style="background-image: url('img/footer/footer-bg.svg');">
          <div class="container">
            <div class="widget-wrapper">
            
                <div class="row">
                  
                  <div class="w-full md:w-6/12 lg:w-4/12">
                    <div class="footer-widget mb-10 mx-3">
                      <div data-aos="fade-up"
                          data-aos-anchor-placement="bottom-bottom" 
                          >
                        <div class="logo mb-8">
                          <a href="index.html"> <img src="img/logo/logo.svg" alt=""> </a>
                        </div>
                        <p class="mb-8 text-white sm:pr-13 md:pr-0 2xl:pr-25">{{$foot->text}}.</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="w-full md:w-6/12 lg:w-2/12">
                    <div class="footer-widget mb-10 mx-3">
                      <div data-aos="fade-up"
                          data-aos-anchor-placement="bottom-bottom"
                          data-aos-delay="50">
                        <h3 class="mb-6 text-white">About Us</h3>
                        <ul class="links">
                          <li> <a href="/">Home</a> </li>
                          <li> <a href="/gallery">Gallery</a> </li>
                          <li> <a href="/blog">Blog</a> </li>
                          <li> <a href="/portfolio">Portfolio</a> </li>
                          <li> <a href="/contact">Contact</a> </li>
                          <li> <a href="/profile">Profile</a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
    
                  <div class="w-full md:w-6/12 lg:w-3/12">
                    <div class="footer-widget mb-10 mx-3">
                      <div data-aos="fade-up"
                          data-aos-anchor-placement="bottom-bottom" 
                          data-aos-delay="200"
                          >
                        <h3 class="mb-6 text-white">Contact Us</h3>
                        <ul class="links">
                          <li> <a href="#">+62 8821 4826 417</a> </li>
                          <li> <a href="#">pratamarizky249b@gmail.com</a> </li>
                          <li> <a href="#">Kebakkramat, Karanganyar</a> </li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
    
                  
    
                </div>
              
            </div>
    
          </div>
        </footer>
            @endforeach  
                  

    <!--====== TEAM PART ENDS ======-->

    @endsection