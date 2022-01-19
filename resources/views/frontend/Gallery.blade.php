@extends('layouts.frontend_slide')

@section('title','Gallery')
    @section('content')
      
<!--====== BRAMD PART START ======-->
<!-- @author: Hackcharms -->
<style>
  input:checked ~ .radio {
color:white;
background-color: green;
}
</style>

    <section id="team" class="team-area pt-150">
      <div class="container">
        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-8 text-center section-title">
              <div class="m-auto line"></div>
              <h3 class="title"><span>Gallery</span>Pages</h3>
              <div>
                <div class="flex justify-center items-center">
                  <div class="bg-gray-200 rounded-sm">
                <div class="inline-flex rounded-sm">
                  <input type="radio" name="room_type" id="roomPrivate" checked hidden/>
                  <label for="roomPrivate" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75"><a href="/gallery">Galerry</a></label>
                </div>
                <div class="inline-flex rounded-sm">
                  <input type="radio" name="room_type" id="roomPublic" hidden/>
                  <label for="roomPublic" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75"><a href="/vidio">vidio</a></label>
                </div>
                </div>
                </div>
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
        <div class=" grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($gallery as $gallery)
        <div class="w-full md:w-1/3 md:mx-2 mb-4 md:mb-0">
          <div class="bg-white rounded-lg overflow-hidden shadow relative">
            <img class="h-56 w-full object-cover object-center" src="{{$gallery->image}}" alt="">
            <div class="p-4 h-auto md:h-40 lg:h-48">
              <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
               {{$gallery->title}}
              </a>
              <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
               {{$gallery->text}}
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
									<div data-aos="zoom-in-down" 
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
							</div>

							<div class="w-full md:w-6/12 lg:w-3/12">
								<div class="footer-widget mb-10 mx-3">
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
					
				</div>

			</div>
		</footer>
        @endforeach  
                  

    <!--====== TEAM PART ENDS ======-->

    @endsection