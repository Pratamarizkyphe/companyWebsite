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
                  

    <!--====== TEAM PART ENDS ======-->

    @endsection