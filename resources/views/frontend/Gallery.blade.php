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
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="justify-center row">
      
           
      
            
        <div class=" grid lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($gallery as $gallery)
                <div class="card shadow-2xl w-72 card-bordered card-compact lg:card-normal">
                    <figure>
                        <img src="{{$gallery->image}}">
                    </figure> 
                    <div class="card-body text-center">
                        <h1 class="card-title">{{$gallery->title}}</h1> 
                        <p>{{$gallery->text}}</p>
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