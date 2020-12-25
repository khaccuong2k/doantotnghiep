@extends('master')
@section('contentMaster')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Chi Tiết Thể Loại</span>
            @foreach ($type as $item)
                <h1 class="text-capitalize mb-5 text-lg">{{$item->name}}</h1>
            @endforeach
  
            <!-- <ul class="list-inline breadcumb-nav">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="section service-2">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-10 text-center">
                  <div class="section-title">
                      <h2>Mô Tả</h2>
                        @foreach ($type as $item)
                            <p>{{$item->des}}</p>
                        @endforeach
                  </div>
              </div>
          </div>
  
          <h1 class="text-capitalize mb-5">Các Bài Hát</h1>
          <div class="row">
              @foreach ($song as $item)
                <div class="col-lg-4 col-md-6 ">
                    <div class="department-block mb-5">
                        <a href="{{route('detail-song',$item->id)}}">
                            <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="" height="350px !important" class="w-100">
                        </a>
                            <div class="content">
                            <a href="{{route('detail-song',$item->id)}}">
                                <h4 class="mt-4 mb-2 title-color">{{$item->name}}</h4>
                            </a>
                            @foreach ($singer as $itemm)
                                @if ($itemm->id == $item->id_singer)
                                    <p class="mb-4">{{$itemm->name}}</p>
                                @endif
                            @endforeach
                            <a href="{{route('detail-song',$item->id)}}" class="read-more">View  <i class="icofont-simple-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
              @endforeach
          </div>
      </div>
  </section>
@endsection