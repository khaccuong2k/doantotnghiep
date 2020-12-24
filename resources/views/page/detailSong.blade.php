@extends('master')
@section('contentMaster')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Doctor Details</span>
            <h1 class="text-capitalize mb-5 text-lg">Alexandar james</h1>
  
            <!-- <ul class="list-inline breadcumb-nav">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="section doctor-single">
      <div class="container">
          <div class="row">
              @foreach ($song as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-img-block">
                        <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="" class="img-fluid w-100">
    
                        <div class="info-block mt-4">
                            <h4 class="mb-0">{{$item->name}}</h4>
                            @foreach ($singer as $itemm)
                                @if ($itemm->id == $item->id_singer)
                                    <p>{{$itemm->name}}</p>
                                @endif
                            @endforeach
    
                            <ul class="list-inline mt-4 doctor-social-links">
                                <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icofont-skype"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-8 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">{{$item->name}}</h2>
                        <div class="divider my-4"></div>
                        <audio controls>
                            <source src="{{asset('upload/file')}}/{{$item->file}}" type="audio/ogg">
                        </audio>
                        <p>{{$item->des}}</p>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam tempore cumque voluptate beatae quis inventore sapiente nemo, a eligendi nostrum expedita veritatis neque incidunt ipsa doloribus provident ex, at ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis officiis esse quae, nobis eius explicabo quidem? Officia accusamus repudiandae ea esse non reiciendis accusantium voluptates, facilis enim, corrupti eligendi?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo recusandae veritatis minus optio quod obcaecati laborum temporibus, deleniti vero perferendis molestias, ducimus facilis, sunt minima. Tempora, amet quasi asperiores voluptas?</p> --}}
    
                        {{-- <a href="appoinment.html" class="btn btn-main-2 btn-round-full mt-3">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a> --}}
                    </div>
                </div>
              @endforeach
          </div>
      </div>
  </section>
@endsection