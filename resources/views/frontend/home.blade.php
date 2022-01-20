@extends('layouts.frontend')

@section('title','Home')
    @section('content')
  
        

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
		
		<!-- ========================= header start ========================= -->
    
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section relative bg-no-repeat bg-top z-10 pt-200 pb-13 lg:pb-200 2xl:pb-120" style="background-image: url('img/hero/hero-bg.svg')">
      <div class="container">
             @foreach ($hero as $hero)
            
        
        <div class="row flex items-center relative">
          <div class="w-full lg:w-1/2">
            <div class="hero-content mb-0 lg:mb-6">
				<div data-aos="fade-zoom-in"
					data-aos-easing="ease-in-back"
					data-aos-delay="300"
					data-aos-offset="0">
						<h4 class="text-white mb-9 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl 2xl:text-6xl">{{$hero->title}}!</h1>
						<p class="text-white text-lg mb-10 xl:pr-18 2xl:pr-120">
						 {{$hero->text}}
						</p>
				</div>
             
							
							<a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a>
            </div>
					</div>
					<div class="w-full lg:w-1/2">
						<div class="hero-img pt-8 lg:pt-0">
							<div data-aos="fade-down"
							data-aos-easing="linear"
							data-aos-duration="1500">

								<img src="{{$hero->image}}" alt="" class="w-full lg:w-auto">

							</div>
						</div>
					</div>
        </div>
                @endforeach
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= feature-section start ========================= -->
		<section id="features" class="feature-section pt-120">
			<main class="py-4">
				<div class="px-4">
				<div class="block lg:flex justify-between md:-mx-2">
					<div class=" grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 gap-4">
					@foreach ($card as $card)
					<div class="w-full md:w-8/12 lg:w-4/12">
						<div class="text-center px-3 2xl:px-10 py-8">
							<div data-aos="flip-left">
								<div class="feature-icon">
									<i class="lni lni-bootstrap"></i>
								</div>
							</div>	
							<div class="content">
								<h3 class="mb-5">{{$card->title1}}</h3>
								<p class="text-lg">{{$card->text}}</p>
							</div>
						</div>
					</div>
					@endforeach  
					</div>
				</div>
				</div>
			</main>
		</section>
		<!-- ========================= feature-section end ========================= -->

		<!-- ========================= about-section start ========================= -->
		<section id="about" class="about-section relative z-10 pt-150">
			<div class="container">
            @foreach ($about as $about)
                
           
				<div class="row flex items-center">
					
					<div class="w-full lg:w-1/2">
						<div class="about-img relative z-10 pt-19 pb-19 mb-18 lg:mb-0">
							<div data-aos="fade-zoom-in"
									data-aos-easing="ease-in-back"
									data-aos-delay="200"
									data-aos-offset="0"
									style="z-index: -1"
									>
									<img src="img/about/about-left-shape.svg" alt="" class="shape-1">
									<img src="img/about/left-dots.svg" alt="" class="shape shape-2">
							</div>
							<div data-aos="fade-right"
									data-aos-offset="300"
									data-aos-delay="400"
									data-aos-easing="ease-in-sine">
							
								<img src="{{$about->image1}}" alt="" class="w-100">
							</div>
							
						</div>
					</div>
					<div class="w-full lg:w-1/2">
						<div class="about-content">
							<div class="section-title mb-8">
								<h1 class="mb-6 ">{{$about->title}}</h1>
								<p class="">{{$about->text}}</p>
							</div>
							
						</div>
					</div>
				</div>
                 @endforeach
			</div>
		</section>
		<!-- ========================= about-section end ========================= -->
		
		
		
    <!-- ========================= footer start ========================= -->
		
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

 @foreach ($foot as $foot)
     
  
 
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
    <!-- ========================= JS here ========================= -->
   
  </body>
@endsection
