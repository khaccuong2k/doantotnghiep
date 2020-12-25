@extends('master')
@section('contentMaster')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Tất Cả Gợi Ý</span>
            <h1 class="text-capitalize mb-5 text-lg">Gợi Ý Hôm Nay Dành Cho Bạn</h1>
  
            <!-- <ul class="list-inline breadcumb-nav">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- portfolio -->
  <section class="section doctors">
    <div class="container">
          <div class="row justify-content-center">
               <div class="col-lg-6 text-center">
                  <div class="section-title">
                      <h2>Thể Loại</h2>
                      <div class="divider mx-auto my-4"></div>
                      {{-- <p>Những Gợi Ý Cho Bạn </p> --}}
                  </div>
              </div>
          </div>
  
        <div class="col-12 text-center  mb-5">
              <div class="btn-group btn-group-toggle " data-toggle="buttons">
                <label class="btn active ">
                  <input type="radio" name="shuffle-filter" value="all" checked="checked" />Tất cả
                </label>
                <label class="btn">
                    <input type="radio" name="shuffle-filter" value="cat6" />Gợi Ý Hôm Nay
                  </label>
                <label class="btn ">
                  <input type="radio" name="shuffle-filter" value="cat1" />Bài Hát Mới
                </label>
                <label class="btn">
                  <input type="radio" name="shuffle-filter" value="cat2" />Nhạc Cách Mạng
                </label>
                <label class="btn">
                  <input type="radio" name="shuffle-filter" value="cat3" />Bolero
                </label>
                <label class="btn">
                  <input type="radio" name="shuffle-filter" value="cat4" />Nhạc Trẻ
                </label>
                 <label class="btn">
                  <input type="radio" name="shuffle-filter" value="cat5" />HipHop
                </label>
                
              </div>
        </div>
  
      <div class="row shuffle-wrapper portfolio-gallery">
        @foreach ($newSong as $item)
            <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;]">
                    
                <div class="position-relative doctor-inner-box">
                  <div class="doctor-profile">
                     <div class="doctor-img">
                        <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="doctor-image" height="300px" class="w-100">
                     </div>
                  </div>
                  <div class="content mt-3">
                      <h4 class="mb-0"><a href="doctor-single.html">{{$item->name}}</a></h4>
                      @foreach ($singer as $itemm)
                          @if ($itemm->id == $item->id_singer)
                            <p>{{$itemm->name}}</p>
                          @endif
                      @endforeach
                      <a href="{{route('detail-song',$item->id)}}" class="read-more">View  <i class="icofont-simple-right ml-2"></i></a>
                  </div> 
                </div>
              </div>
              @endforeach
  
            @foreach ($cmSong as $item)
        <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat2&quot;]">
            <div class="position-relative doctor-inner-box">
                  <div class="doctor-profile">
                      <div class="doctor-img">
                         <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="doctor-image" height="300px" class="w-100">
                      </div>
                  </div>
                  <div class="content mt-3">
                      <h4 class="mb-0"><a href="doctor-single.html">{{$item->name}}</a></h4>
                      @foreach ($singer as $itemm)
                          @if ($itemm->id == $item->id_singer)
                            <p>{{$itemm->name}}</p>
                          @endif
                      @endforeach
                      <a href="{{route('detail-song',$item->id)}}" class="read-more">View  <i class="icofont-simple-right ml-2"></i></a>
                  </div> 
            </div>
          </div>
          @endforeach
  
        @foreach ($song1 as $item)
          <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat3&quot;]">
            <div class="position-relative doctor-inner-box">
              <div class="doctor-profile">
                  <div class="doctor-img">
                      <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="doctor-image" height="300px" class="w-100">
                  </div>
              </div>
              <div class="content mt-3">
                  <h4 class="mb-0"><a href="doctor-single.html">{{$item->name}}</a></h4>
                  @foreach ($singer as $itemm)
                          @if ($itemm->id == $item->id_singer)
                            <p>{{$itemm->name}}</p>
                          @endif
                      @endforeach
                  <a href="{{route('detail-song',$item->id)}}" class="read-more">View  <i class="icofont-simple-right ml-2"></i></a>
              </div> 
            </div>
          </div>
        @endforeach
  
        @foreach ($song as $item)  
        <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat4&quot;]">
            <div class="position-relative doctor-inner-box">
                  <div class="doctor-profile">
                      <div class="doctor-img">
                         <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="doctor-image" height="300px" class="w-100">
                      </div>
                  </div>
                  <div class="content mt-3">
                      <h4 class="mb-0"><a href="doctor-single.html">{{$item->name}}</a></h4>
                      @foreach ($singer as $itemm)
                          @if ($itemm->id == $item->id_singer)
                            <p>{{$itemm->name}}</p>
                          @endif
                      @endforeach
                      <a href="{{route('detail-song',$item->id)}}" class="read-more">View  <i class="icofont-simple-right ml-2"></i></a>
                  </div> 
            </div>
          </div>
          @endforeach
  
          @foreach ($hiphopSong as $item)
            <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat5&quot;]">
                <div class="position-relative doctor-inner-box">
                  <div class="doctor-profile">
                      <div class="doctor-img">
                         <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="doctor-image" height="300px" class="w-100">
                      </div>
                  </div>
                  <div class="content mt-3">
                      <h4 class="mb-0"><a href="doctor-single.html">{{$item->name}}</a></h4>
                      @foreach ($singer as $itemm)
                          @if ($itemm->id == $item->id_singer)
                            <p>{{$itemm->name}}</p>
                          @endif
                      @endforeach
                      <a href="{{route('detail-song',$item->id)}}" class="read-more">View  <i class="icofont-simple-right ml-2"></i></a>
                  </div> 
                </div>
              </div>
              @endforeach
  
              @foreach ($songRandum as $item)
        <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat6&quot;]">
            <div class="position-relative doctor-inner-box">
                  <div class="doctor-profile">
                      <div class="doctor-img">
                         <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="doctor-image" height="300px" class="w-100">
                      </div>
                  </div>
                  <div class="content mt-3">
                      <h4 class="mb-0"><a href="doctor-single.html">{{$item->name}}</a></h4>
                      @foreach ($singer as $itemm)
                          @if ($itemm->id == $item->id_singer)
                            <p>{{$itemm->name}}</p>
                          @endif
                      @endforeach
                      <a href="{{route('detail-song',$item->id)}}" class="read-more">View  <i class="icofont-simple-right ml-2"></i></a>
                  </div> 
            </div>
          </div>
          @endforeach
    </div>
  </section>
@endsection