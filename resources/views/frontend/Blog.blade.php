@extends('layouts.frontend_slide')

@section('title','Portfolio')
    @section('content')
      
<!--====== BRAMD PART START ======-->

<link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <section id="team" class="team-area pt-120 bg-gray-100 lg:py-12">
      <div class="container">
        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-8 text-center section-title">
              <div class="m-auto line"></div>
              <h3 class="title"><span>Blog</span>Pages</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <section id="blog" class="blog-area pt-12">
        <div class="container">
         
            
            <!-- row -->
            <div class="justify-center row">
           
                
           
          
                
@foreach ($blogs as $blog)
            <!-- component -->
                <div>
                    <div class="sm:pt-12 ml-4 bg-gray-100 lg:py-4 lg:flex lg:justify-center">
                        <div class="sm:h-full lg:max-h-80 min-w-full bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg rounded">
                            <div class="lg:w-1/2">
                                <div class=" h-64 bg-cover lg:rounded-lg lg:h-full object-none object-center" style="background-image:url('{{ $blog->image }}');  background-position:-200 0; "></div>
                            </div>
                            <div class="py-4 px-6 max-w-xl lg:max-w-5xl lg:w-1/2">
                                <h2 class="text-3xl text-gray-800 font-bold">{{$blog->title}}</h2>
                                <p class="mt-4 text-gray-600">{{Str::limit($blog->content,50)}}</p>
                                <div class="mt-8">
                                <a class="text-theme-color-2" href="/blog/{{ $blog->id }}">
                                         Baca Selengkapnya
                                     <i class="ml-2 lni lni-chevron-right"></i>
                                </a>
                                <br>
                                <br>
                                
                                    <a style="color:#d1d3ca">{{ date('d-m-Y', strtotime($blog->created_at)); }}</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            
            @endforeach
            
            
            
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        </section>
    </div>
    </section>
    <div style="margin-top: 20px;">
        <hr style="width: 450px;
      border-top: 3px solid #eaea;
      margin: auto;
      margin-bottom: 3px;">
        <hr style="width: 350px;
      border-top: 3px solid #eaea;
      margin: auto;
      margin-bottom: 3px;">
        <hr style="width: 250px;
      border-top: 3px solid #eaea;
      margin: auto;
      margin-bottom: 3px;">
        <hr style="width: 150px;
      border-top: 3px solid #eaea;
      margin: auto;
      margin-bottom: 3px;
      margin-bottom: 100px;
      ">
      </div>
    
      <div class="mt-16">
        <footer class=" body-font bg-cover bg-right-top " style="background-image: url('img/footer/footer-bg.svg');">
          <div class=" px-25 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
           
          </div>
          <div class=" flex flex-wrap md:pl-20 -mb-10 md:mt-20 mt-50 md:text-left text-center">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <div data-aos="zoom-in-up">
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
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <div data-aos="zoom-in-up"
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
    
        </footer>
        </div>
        
        @endsection
