@extends('layouts.frontend_slide')

@section('title','Portfolio')
    @section('content')
      
<!--====== BRAMD PART START ======-->
@foreach ($misis as $misis)
    

    <section id="team" class="team-area pt-120">
      <div class="container">
        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-8 text-center section-title">
              <div class="m-auto line"></div>
              <h3 class="title"><span>Profile</span>Pages</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="justify-center row">
        <div class="card card-bordered mb-5">
            <figure>
                <img src="{{$misis->image}}">
            </figure>
        </div>

           <div class="flex flex-row w-full">
  <div class=" text-center grid flex-grow h-32 card bg-base-300 rounded-box place-items-center">
    <h1>{{$misis->visi}}</h1>
    <p>{{$misis->visitxt}}</p>
  </div> 
  <div class="divider divider-vertical"></div> 
  <div class=" text-center grid flex-grow h-32 card bg-base-300 rounded-box place-items-center">
     <h1>{{$misis->misi}}</h1>
    <p>{{$misis->misitxt}}</p>
  </div>
</div>
      
            
       
           
            
                      
            <!-- single team -->
        </div>
       {{-- @empty --}}
           
        
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>
    @endforeach
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
      

    <!--====== TEAM PART ENDS ======-->

    @endsection