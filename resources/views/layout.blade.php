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
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Header -->
      <header id="main-header">
         <div class="main-header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                           <div class="navbar-toggler-icon" data-toggle="collapse">
                              <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                              <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                              <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                           </div>

                        </a>
                        <a class="navbar-brand" href="#"> <img class="img-fluid logo" src="{{asset('img/logo1.png')}}"
                           alt="streamit" /> </a>
                           @guest
                           <a href="{{route('login.create')}}"class="btn btn-danger">ورود</a>
                           <a href="{{route('register.create')}}" role="button" class="btn btn-hover iq-button">ثبت نام</a>
                           @endguest


                           @if (session('alert'))
                           <div class="alert alert-success">
                               {{ session('alert') }}
                           </div>
                       @endif
                        <div class="mobile-more-menu">
                           <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                              data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                           <i class="ri-more-line"></i>
                           </a>
                           <div class="more-menu" aria-labelledby="dropdownMenuButton">
                              <div class="navbar-right position-relative">
                                 <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                    <li>
                                       <a href="#" class="search-toggle">
                                       <i class="ri-search-line"></i>
                                       </a>
                                       <div class="search-box iq-search-bar">
                                          <form action="#" class="searchbox">
                                             <div class="form-group position-relative">
                                                <input type="text" class="text search-input font-size-12"
                                                   placeholder="type here to search...">
                                                <i class="search-link ri-search-line"></i>
                                             </div>
                                          </form>
                                       </div>
                                    </li>
                                    <li class="nav-item nav-icon">
                                       <a href="#" class="search-toggle position-relative">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                             height="22" class="noti-svg">
                                             <path fill="none" d="M0 0h24v24H0z" />
                                             <path
                                                d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                          </svg>
                                          <span class="bg-danger dots"></span>
                                       </a>
                                       <div class="iq-sub-dropdown">
                                          <div class="iq-card shadow-none m-0">
                                             <div class="iq-card-body">
                                                <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center">
                                                      <img src="{{asset('img/notify/thumb-1.jpg')}}" class="img-fluid mr-3"
                                                         alt="streamit" />
                                                      <div class="media-body">
                                                         <h6 class="mb-0 ">Boop Bitty</h6>
                                                         <small class="font-size-12">همین الان</small>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center">
                                                      <img src="{{asset('img/notify/thumb-2.jpg')}}" class="img-fluid mr-3"
                                                         alt="streamit" />
                                                      <div class="media-body">
                                                         <h6 class="mb-0 ">The Last Breath</h6>
                                                         <small class="font-size-12">15 دقیقه قبل</small>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center">
                                                      <img src="{{asset('img/notify/thumb-3.jpg')}}" class="img-fluid mr-3"
                                                         alt="streamit" />
                                                      <div class="media-body">
                                                         <h6 class="mb-0 ">The Hero Camp</h6>
                                                         <small class="font-size-12">1 ساعت قبل</small>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       @auth
                                     
                                       <a href="{{auth()->user()->name}}" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                       <img src="{{asset('img/user.jpg')}}" class="img-fluid avatar-40 rounded-circle"
                                          alt="user">
                                       </a>
                                    </div>
                                 </div>
                           @endauth
                        </div>
                     
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <div class="menu-main-menu-container">
                              <ul id="top-menu" class="navbar-nav ml-auto">
                                 <li class="menu-item">
                                    <a href="{{route('index')}}">خانه</a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="#">فیلم ها</a>
                                 </li> 
                                 <li class="menu-item">
                                    <a href="#">برنامه های تلویزیونی</a>
                                 </li>                                                              
                                 <li class="menu-item">
                                    <a href="#">وبلاگ</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item"><a href="#">وبلاگ</a></li>
                                       <li class="menu-item"><a href="#">جزئیات وبلاگ</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item">
                                    <a href="#">صفحات</a>
                                    <ul class="sub-menu">
                                       <li class="menu-item"><a href="#">درباره ما</a></li>
                                       <li class="menu-item "><a href="#">تماس با ما</a></li>
                                       <li class="menu-item"><a href="#">سوالات متداول</a></li>
                                       <li class="menu-item"><a href="#">قوانین</a></li>
                                       <li class="menu-item"><a href="#">قیمت گذاری</a>
                                       <ul class="sub-menu">
                           
                                       </ul>
                                    </li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           
                        </div>
                        <div class="navbar-right menu-right">
                           <ul class="d-flex align-items-center list-inline m-0">
                              <li class="nav-item nav-icon">
                                 <a href="#" class="search-toggle device-search">
                                 <i class="ri-search-line"></i>
                                 </a>
                                 <div class="search-box iq-search-bar d-search">
                                    <form action="#" class="searchbox">
                                       <div class="form-group position-relative">
                                          <input type="text" class="text search-input font-size-12"
                                             placeholder="برای جستجو اینجا را تایپ کنید ...">
                                          <i class="search-link ri-search-line"></i>
                                       </div>
                                    </form>
                                 </div>
                              </li>
                              <li class="nav-item nav-icon">
                                 <a href="#" class="search-toggle" data-toggle="search-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22"
                                       class="noti-svg">
                                       <path fill="none" d="M0 0h24v24H0z" />
                                       <path
                                          d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                    </svg>
                                    <span class="bg-danger dots"></span>
                                 </a>
                                 <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body">
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center">
                                                <img src="Theme/images/notify/thumb-1.jpg" class="img-fluid mr-3"
                                                   alt="streamit" />
                                                <div class="media-body">
                                                   <h6 class="mb-0 ">Boot Bitty</h6>
                                                   <small class="font-size-12">همین الان</small>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center">
                                                <img src="Theme/images/notify/thumb-2.jpg" class="img-fluid mr-3"
                                                   alt="streamit" />
                                                <div class="media-body">
                                                   <h6 class="mb-0 ">The Last Breath</h6>
                                                   <small class="font-size-12">15 دقیقه قبل</small>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center">
                                                <img src="Theme/images/notify/thumb-3.jpg" class="img-fluid mr-3"
                                                   alt="streamit" />
                                                <div class="media-body">
                                                   <h6 class="mb-0 ">The Hero Camp</h6>
                                                   <small class="font-size-12">1 ساعت قبل</small>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </li>
                              <li class="nav-item nav-icon">
                                 <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                    data-toggle="search-toggle">
                                 <img src="{{asset('img\user.jpg')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                                 </a>
                                 <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body p-0 pl-3 pr-3">
                                          <a href="#" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-file-user-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="my-0 ">مدیریت سایت</h6>
                                                </div>
                                             </div>
                                          </a>                                               
                                          <a href="{{route('logout')}}" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-logout-circle-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="my-0 ">خروج</h6>
                                                </div>
                                                

         </div>
         
      </header>
      
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