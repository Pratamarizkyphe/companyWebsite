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
    
                  

    <!--====== TEAM PART ENDS ======-->

    @endsection