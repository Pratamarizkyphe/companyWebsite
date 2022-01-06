@extends('layouts.frontend_slide')

@section('title','Portfolio')
    @section('content')
      
<!--====== BRAMD PART START ======-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <section id="team" class="team-area">
      <div class="container">
        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-3 text-center section-title">
              <div class="m-auto line"></div>
              
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="justify-center row">
            <div class="bg-gradient-to-tr from-sky-200 to-sky-500">
                     
                <section id="login" class="p-4 flex flex-col justify-center min-h-screen max-w-md mx-auto">
                    <div class="p-6 bg-sky-100 rounded">
                        <div class="flex items-center justify-center text-4xl font-black text-sky-900 m-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z" />
                            </svg>
                            <h1 class="tracking-wide">Contact Us</h1>
                        </div>
                             @if(session()->has('success'))
                                <div class="py-3 px-5 mb-4 bg-green-100 text-green-900 text-sm rounded-md border border-green-200" role="alert">
                                {{ session()->get('success') }}
                                </div>
                            @endif   
                        <form  action="{{ route('mail.send') }}" method="post" id="contactFrm" name="contactFrm"
                            class="flex flex-col justify-center">
                            @csrf
                            <label class="text-sm font-medium">Your Email</label>
                                <input type="email" required="" placeholder="Alamat Email Pengirim" value="" name="from" class="
                                    mb-3 px-2 py-1.5
                                    mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400
                                    focus:outline-none
                                    focus:border-sky-500
                                    focus:ring-1
                                    focus:ring-sky-500
                                    focus:invalid:border-red-500 focus:invalid:ring-red-500
                                ">
                            <label class="text-sm font-medium">Email Us</label>
                                <input type="email" required="" placeholder="Alamat Email penerima" value="pratamarizky249b@gmail.com" disabled name="to" class="
                                    mb-3 px-2 py-1.5
                                    mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400
                                    focus:outline-none
                                    focus:border-sky-500
                                    focus:ring-1
                                    focus:ring-sky-500
                                    focus:invalid:border-red-500 focus:invalid:ring-red-500
                                ">
                            <label class="text-sm font-medium">Pesan</label>
                                <textarea required="" placeholder="pesan anda" value="" name="message" class="
                                    mb-3 px-2 py-1.5
                                    mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400
                                    focus:outline-none
                                    focus:border-sky-500
                                    focus:ring-1
                                    focus:ring-sky-500
                                    focus:invalid:border-red-500 focus:invalid:ring-red-500
                                "></textarea>
                            
                            
                                    <button type="submit"  value="submit" name="submit" class="px-4 py-1.5 rounded-md shadow-lg bg-sky-600 font-medium text-gray-100 block hover:bg-sky-700 transition duration-300" 
                                    style="background-color:#3f9d71;"
                                    >
                                       Kirim
                                    </button>
                        </form>
                    </div>
                 </section>
                    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                    <script>
                        document.getElementById("send_form").onsubmit = function() {
                        event.preventDefault()
                        // animation
                        document.getElementById("login_process_state").classList.remove("hidden")
                        document.getElementById("login_process_state").classList.add("animate-pulse")

                        document.getElementById("login_default_state").classList.add("hidden")
                        }

                    </script>
            </div>
        </div>
    </div>    
</div>
</section

    <!--====== TEAM PART ENDS ======-->

    @endsection