@extends('layouts.frontend_slide')

@section('title','Portfolio')
    @section('content')
      
<!--====== BRAMD PART START ======-->

    <section id="team" class="team-area pt-120">
      <div class="container">
        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-8 text-center section-title">
              <div class="m-auto line"></div>
              <h3 class="title"><span>Portfolio</span>Pages</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="justify-center row">
        
           
      
            
        <div class=" grid lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($portfolio as $portfolio)
                <div class="card shadow-2xl w-72 card-bordered card-compact lg:card-normal">
                    <figure>
                        <img src="{{$portfolio->image}}">
                    </figure> 
                    <div class="card-body text-center">
                        <h1 class="card-title">{{$portfolio->title}}</h1> 
                        <p class="text-gray-400">{{$portfolio->text}}</p>
                    </div>
                </div>
               
                @endforeach  
         </div>
           
            
                      
            <!-- single team -->
        </div>
       {{-- @empty --}}
           
        
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
								<div class="logo mb-8">
									<a href="index.html"> <img src="img/logo/logo.svg" alt=""> </a>
								</div>
								<p class="mb-8 text-white sm:pr-13 md:pr-0 2xl:pr-25">{{$foot->text}}.</p>
		
							</div>
						</div>

						<div class="w-full md:w-6/12 lg:w-2/12">
							<div class="footer-widget mb-10 mx-3">
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

						<div class="w-full md:w-6/12 lg:w-3/12">
							<div class="footer-widget mb-10 mx-3">
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
		</footer>
        @endforeach  
                  

    <!--====== TEAM PART ENDS ======-->

    @endsection