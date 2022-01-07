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
              <h3 class="title"><span>Blog</span>Pages</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <section id="blog" class="blog-area pt-120">
        <div class="container">
         
            
            <!-- row -->
            <div class="justify-center row">
           
                
           
          
                {{-- <div class="w-full md:w-2/3 lg:w-1/3">
                <div
                class="mx-4 mt-10 single-blog wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
                >
                <div class="mb-5 overflow-hidden blog-image rounded-xl">
                    <img class="w-full" src="{{ $blog->image }}" alt="blog" />
                </div>
                <div class="blog-content">
                    <ul class="flex mb-5 meta">
                    <li>Author: <a href="javascript:void(0)">{{ $blog->author }}</a></li>
                    <li class="ml-12">{{ date('d-m-Y', strtotime($blog->created_at)); }}</li>
                    </ul>
                    <p class="mb-6 text-2xl leading-snug text-gray-900">
                    {{ $blog->title }}
                    </p>
                    <a class="text-theme-color-2" href="/blog/{{ $blog->slug }}">
                    Baca Selengkapnya
                    <i class="ml-2 lni lni-chevron-right"></i>
                    </a>
                </div>
                </div>
                <!-- single blog -->
            </div> --}}
@foreach ($blogs as $blog)
            <!-- component -->
                <div>
                    <div class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
                        <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                            <div class="lg:w-1/2">
                                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{ $blog->image }}'); height:-100; background-position:-150 0"></div>
                            </div>
                            <div class="py-12 px-6 max-w-xl lg:max-w-5xl lg:w-1/2">
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
</div>
</div>
