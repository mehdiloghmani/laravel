
      <div class="main-content">
        <section id="iq-favorites">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                       <h5 class="main-title">جدیدترین کلیپ ها</h5>
                       <a class="iq-view-all" href="">مشاهده همه</a>                   
                    </div>
                    <div class="favorites-contens">
                       <ul class="favorites-slider list-inline  row p-0 mb-0 iq-rtl-direction">
                          <li class="slide-item">
                           
                             @foreach ($clips as $clip)
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