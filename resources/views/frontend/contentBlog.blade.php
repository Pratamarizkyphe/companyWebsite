@extends('layouts.frontend_blog')

@section('title','Blog')
    @section('content')
    <!--====== HEADER PART ENDS ======-->

    <!--====== Blog start======-->
   <nav class="flex mb-3 py-5 " aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
              <a href="/" class="inline-flex items-center text-sm text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
              </a>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/blog" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Blogs</a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">{{ Str::limit($blog->title, 20) }}</span>
              </div>
            </li>
          </ol>
        </nav>
    <section id="blog" class="blog-area pt-120">
      <div class="container">
        <div class="flex flex-col text-center w-full">
          <h1
            class="
              sm:text-3xl
              text-2xl
              font-medium
              title-font
              mb-4
              text-gray-900
            "
          >
            
          </h1>
        </div>
      </div>
      <!-- container -->
    </section>

    <section class="text-gray-600 body-font overflow-hidden">
      <h1 class="text-center text-3xl text-gray-800 font-bold ">{{$blog->title}}</h1>
      <div class="container px-5 py-10 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
         
          <img
            alt="ecommerce"
            class="
              lg:lg\:w-1\/3
              w-full
              h-64
              object-cover object-center
              rounded
              mb-10
            "
            src="/{{ $blog->image }}"
          />
          <br>
          <p class="">
            {!! $blog->content !!} 
            </p>
        </div>
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
      
      <span class="inline-block h-1 w-10 rounded bg-gray-500 mt-8 mb-6"></span>
      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">{{ $blog->author }}</h2>
      <p class="text-gray-500">{{ $blog->created_at }}</p>
    </div>
      </div>
    </section>
    <section>
      @foreach ($blogs as $blog)
            <!-- component -->
                <div>
                    <div class="sm:pt-12 ml-4 bg-gray-100 lg:py-4 lg:flex lg:justify-center">
                        <div class="sm:h-full lg:max-h-full bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg rounded">
                            <div class="lg:w-1/2">
                                <div class=" h-64 bg-cover lg:rounded-lg lg:h-full object-none object-center" style="background-image:url('/{{ $blog->image }}'); "><img src="{{$blog->image}}" alt=""></div>
                            </div>
                            <div class="py-4 px-6 max-w-xl lg:max-w-5xl lg:w-1/2">
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
    </section>
    @endsection

    