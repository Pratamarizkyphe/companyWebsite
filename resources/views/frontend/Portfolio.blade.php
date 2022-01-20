@extends('layouts.frontend_slide')

@section('title','Portfolio')
    @section('content')
      
<!--====== BRAMD PART START ======-->

    <section id="team" class="team-area pt-120">
      <div class="container">
        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-8 text-center section-title">
             
              <h3 class="title"><span>Portfolio</span>Pages</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
     
        
           
      
            
       <!-- component -->
<!-- MDI Icons -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

<!-- Page Container -->
<main class="py-4">
  <div class="px-4">
    <div class="block lg:flex justify-between md:-mx-2">
      <div class=" grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 gap-4">
      @foreach ($portfolio as $item)
      <div class="flex flex-col">
        <!-- Avatar -->
        <a href="#">
            <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                src="{{$item->image}}">
        </a>

        <!-- Details -->
        <div class="text-center mt-6 mb-9">
            <!-- Name -->
            <h1 class="text-gray-900 text-xl font-bold mb-1">
               {{$item->title}}
            </h1>

            <!-- Social Icons -->
            <div class=" items-center justify-center opacity-50 hover:opacity-100
                transition-opacity duration-300">
                <!-- Linkedin -->
                <a href="#" class=" hover:bg-indigo-50 h-10 w-10">
                    <i class="mdi mdi-linkedin text-indigo-500 mx-auto mt-2"></i>
                    {{$item->text}}
                </a>

                
            </div>
        </div>
    </div>
      @endforeach  
      </div>
      
    </div>
  </div>
</main>



           
            
                      
            <!-- single team -->
        
     
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