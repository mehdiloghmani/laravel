
@extends('layout')
@section('content')

<div class="row">
   <!-- Watch -->
   <div class="col-md-10">
       <div id="watch">

           <!-- Video Player -->
           <h4 class="video-title">{{ $clip->name }}</h4>
           <div class="video-code">
               <video controls style="height: 100%; width: 100%;">
                   <source src="{{$clip->url}}" type="video/mp4">
               </video>
           </div><!-- // video-code -->

           <div>
               <p>
              {{$clip->discription}}
               </p>
           </div>
  
      



        <!-- Comments -->
        <div id="comments" class="post-comments">
            <h6 class="post-box-title"><span></span> نظرات</h6>
            <ul class="comments-list">
                <li>
                    <div class="post_author">
                        <div class="img_in">
                            <a href="#"><img src="/demo_img/c1.jpg" alt=""></a>
                        </div>
                        <a href="#" class="author-name"></a>
                        <time datetime="2017-03-24T18:18"></time>
                    </div>
                


            <h5 class="post-box-title">ارسال نظرات</h5>
            <form>
                <input type="text" class="form-control" id="Name" placeholder="نام">
                <input type="email" class="form-control" id="Email" placeholder="ایمیل">
                <input type="text" class="form-control" placeholder="سایت">
                <textarea class="form-control" rows="8" id="Message" placeholder="پیام"></textarea>
                <button type="button" id="contact_submit" class="btn btn-dm">ارسال پیام</button>
            </form>
        </div>

   </div>
</div>
</li>
</ul>
</div>
</div>
</div>
</section>
<section id="iq-favorites" class="s-margin iq-rtl-direction">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12 overflow-hidden">
<div class="iq-main-header d-flex align-items-center justify-content-between">                     
<h4 class="main-title"><a href="movie-category.html">فیلم های مشابه</a></h4>                     
</div>
<div class="favorites-contens">
<ul class="list-inline favorites-slider row p-0 mb-0">
<li class="slide-item">
   <x-relatedclips :clip="$clip"/>
   

<footer id="contact" class="footer-one iq-bg-dark">

  @endsection