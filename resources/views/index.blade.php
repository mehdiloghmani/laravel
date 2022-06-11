
@extends('layout')
@section('content')
  <x-new-clips></x-new-clips>

         <section id="iq-upcoming-movie">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">                        
                        <h5 class="main-title">پر بازدید ترین کلیپها</h5>
                        <a class="iq-view-all" href="#">View All</a>
                     </div>
                     <div class="upcoming-contens">
                        <ul class="favorites-slider list-inline row p-0 mb-0 iq-rtl-direction">
                           <li class="slide-item">

                              
                              @foreach ($mostpopularclips as $clip)
                              <div class="block-images position-relative">
                                 <div class="img-box">
                                    <img src="{{$clip->thumbnail}}" class="img-fluid" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="movie-details.html">{{$clip->name}}</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                       <div class="badge badge-secondary p-1 mr-2">{{$clip->created_at}}</div>
                                       <span class="text-white">{{$clip->length}}</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="{{route('clips.show',$clip->slug)}}" role="button" class="btn btn-hover iq-button">
                 
                                       تماشا کردن
                                       <a href="{{route('clips.edit', $clip->slug)}}" role="button" class="btn btn-hover iq-button">
                                          ویرایش کلیپ
                                       </a>
                                    </div>
                                 </div>
   
                                 <div class="block-social-info">
                                     <ul class="list-inline p-0 m-0 music-play-lists">
                                        <li class="share">
                                           <span><i class="ri-share-fill"></i></span>
                                           <div class="share-box">
                                              <div class="d-flex align-items-center">
                                                 <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                 <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                 <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                              </div>
                                           </div>
                                        </li>
                                        <li>
                                            <span><i class="ri-heart-fill"></i></span>
                                            <span class="count-box">19+</span>
                                         </li>
                                       <li><span><i class="ri-add-line"></i></span></li>
                                     </ul>
                                  </div>
                              </div>
                           </a>
                        </li>
                        <li class="slide-item">
                              @endforeach
                                 
                                
         </section>
         <section id="iq-topten">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <!-- <h4 class="main-title iq-title topten-title-sm">Top 10 in India</h4> -->
                  
            </div>
         </section>
         <section id="iq-suggestede" class="s-margin">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">                       
                        <h5 class="main-title">محبوبترین کلیپ ها</h5>
                        <a class="iq-view-all" href="movie-category.html">مشاهده همه</a>                     
                     </div>
                     <div class="suggestede-contens">
                        <ul class="list-inline favorites-slider row p-0 mb-0 iq-rtl-direction">
                           <li class="slide-item">
         
                              @foreach ($mostviewedclips as $clip)
                              <div class="block-images position-relative">
                                 <div class="img-box">
                                    <img src="{{$clip->thumbnail}}" class="img-fluid" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="movie-details.html">{{$clip->name}}</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                       <div class="badge badge-secondary p-1 mr-2">{{$clip->created_at}}</div>
                                       <span class="text-white">{{$clip->length}}</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="{{route('clips.show',$clip->slug)}}" role="button" class="btn btn-hover iq-button">
                 
                                       تماشا کردن
                                       <a href="{{route('clips.edit', $clip->slug)}}" role="button" class="btn btn-hover iq-button">
                                          ویرایش کلیپ
                                       </a>
                                    </div>
                                 </div>
   
                                 <div class="block-social-info">
                                     <ul class="list-inline p-0 m-0 music-play-lists">
                                        <li class="share">
                                           <span><i class="ri-share-fill"></i></span>
                                           <div class="share-box">
                                              <div class="d-flex align-items-center">
                                                 <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                 <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                 <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                              </div>
                                           </div>
                                        </li>
                                        <li>
                                            <span><i class="ri-heart-fill"></i></span>
                                            <span class="count-box">19+</span>
                                         </li>
                                       <li><span><i class="ri-add-line"></i></span></li>
                                     </ul>
                                  </div>
                              </div>
                           </a>
                        </li>
                        <li class="slide-item">
                              @endforeach
                                 
                             
         </section>
         <section id="parallex" class="parallax-window">
            <div class="container-fluid h-100">
               <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                  <div class="col-lg-4 r-mb-23">
                     <div class="text-left">
                        <a href="javascript:void(0);">
                           <img src="{{asset('img/logo1.png')}}" class="img-fluid" alt="bailey">
                        </a>
                        <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                           <ul
                              class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                              <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                 aria-hidden="true"></i></a></li>
                              <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o"
                                 aria-hidden="true"></i></a></li>
                           </ul>
                           <span class="text-white ml-3">9.2 (lmdb)</span>
                        </div>
                        <div class="movie-time d-flex align-items-center mb-3 iq-ltr-direction">
                           <div class="badge badge-secondary mr-3">13+</div>
                           <h6 class="text-white">{{$clip->thumbnail}}</h6>
                        </div>
                        <p>{{$clip->discription}}</p>
                        <div class="parallax-buttons">
                           <a href="{{route('clips.show',$clip->slug)}}" class="btn btn-hover">تماشا کردن</a>
                           <a href="{{route('clips.edit',$clip->slug )}}" class="btn btn-link">ویرایش کلیپ</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="parallax-img">
                        <a href="{{route('clips.show',$clip->slug)}}">
                        	<img src="{{asset('img/parallax/p1.jpg')}}" class="img-fluid w-100" alt="bailey">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="iq-trending" class="s-margin">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">                      
                        <h6 class="main-title">پرطرفدار</h6>                        
                     </div>
                     <div class="trending-contens">
                        <ul id="trending-slider-nav" class="list-inline p-0 mb-0 row align-items-center iq-rtl-direction">
                           <li>
                              <a href="javascript:void(0);">
                                 <div class="movie-slick position-relative">
                                    <img src="{{asset('img/trending/06.jpg')}}" class="img-fluid" alt="">
                                 </div>
                              </a>
                           </li>
                        </ul>
                        <ul id="trending-slider" class="list-inline p-0 m-0  d-flex align-items-center iq-rtl-direction">
                           <li>
  
                                

    <footer id="contact" class="footer-one iq-bg-dark">
      @endsection


      