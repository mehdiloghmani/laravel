<!doctype html>
<html dir="rtl" lang="en-US">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>مهدی لقمانی</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="#" />
      <!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('css/min.css')}}">
   </head>
   <body class="@yield('class-body')">
      <!-- loader Start -->

                           @if (session('alert'))
                           <div class="alert alert-success">
                               {{ session('alert') }}
                           </div>
                       @endif
   

         </div>
 
      @yield('content')
      <!-- Header End -->
      <!-- Slider Start -->
   
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
               <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                  fill="none" stroke="currentColor">
                  <circle r="20" cy="22" cx="22" id="test"></circle>
               </symbol>
            </svg>
            </div>


      <!-- MainContent End-->
      <!-- back-to-top -->

      <div id="back-to-top">
         <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
      </div>

      <!-- back-to-top End -->
      <!-- jQuery, Popper JS -->
<script src="{{asset('js/min.js')}}"></script>
   </body>
</html>