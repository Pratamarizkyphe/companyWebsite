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
              <h4 class="text-white mb-9 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl 2xl:text-6xl">{{$hero->title}}!</h1>
              <p class="text-white text-lg mb-10 xl:pr-18 2xl:pr-120">
               {{$hero->text}}
              </p>
							<a href="javascript:void(0)" class="main-btn border-btn btn-hover mb-2">Get Started</a>
							<a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a>
            </div>
					</div>
					<div class="w-full lg:w-1/2">
						<div class="hero-img pt-8 lg:pt-0">
							<img src="{{$hero->image}}" alt="" class="w-full lg:w-auto">
						</div>
					</div>
        </div>
                @endforeach
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= feature-section start ========================= -->
		<section id="features" class="feature-section pt-120">
			<div class="container">
				<div class="row flex justify-center">
                     @foreach ($card as $card)
					<div class="w-full md:w-8/12 lg:w-4/12">
						<div class="text-center px-3 2xl:px-10 py-8">
							<div class="feature-icon">
								<i class="lni lni-bootstrap"></i>
							</div>
							<div class="content">
								<h3 class="mb-5">{{$card->title1}}</h3>
								<p class="text-lg">{{$card->text}}</p>
							</div>
						</div>
					</div>
					<div class="w-full md:w-8/12 lg:w-4/12">
						<div class="text-center px-3 2xl:px-10 py-8">
							<div class="feature-icon">
								<i class="lni lni-layout"></i>
							</div>
                            
                        
                    
							<div class="content">
								<h3 class="mb-5">{{$card->title2}}</h3>
								<p class="text-lg">{{$card->text}}</p>
							</div>
                           
						</div>
					</div>
                    <div class="w-full md:w-8/12 lg:w-4/12">
						<div class="text-center px-3 2xl:px-10 py-8">
							<div class="feature-icon">
								<i class="lni lni-coffee-cup"></i>
							</div>
							<div class="content">
								<h3 class="mb-5">{{$card->title3}}</h3>
								<p class="text-lg">{{$card->text}}</p>
							</div>
						</div>
					</div>
					 @endforeach
				</div>
			</div>
		</section>
		<!-- ========================= feature-section end ========================= -->

		<!-- ========================= about-section start ========================= -->
		<section id="about" class="about-section relative z-10 pt-150">
			<div class="container">
            @foreach ($about as $about)
                
           
				<div class="row flex items-center">
					<div class="w-full lg:w-1/2">
						<div class="about-img relative z-10 pt-19 pb-19 mb-18 lg:mb-0">
							<img src="{{$about->image1}}" alt="" class="w-100">
							<img src="img/about/about-left-shape.svg" alt="" class="shape-1">
							<img src="img/about/left-dots.svg" alt="" class="shape shape-2">
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

    <!-- ========================= JS here ========================= -->
   
  </body>
@endsection
