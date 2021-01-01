@extends('master')
@section('contentMaster')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Bài Hát</span>
            @foreach ($song as $item)
            <h1 class="text-capitalize mb-5 text-lg">{{$item->name}}</h1>
            @endforeach
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
                        @foreach ($singer as $itemm)
                          @if ($itemm->id == $item->id_singer)
                            <p>Ca sĩ : {{$itemm->name}}</p>
                          @endif
                        @endforeach
                        @foreach ($musician as $itemm)
                          @if ($itemm->id == $item->id_musician)
                            <p>Nhạc sĩ : {{$itemm->name}}</p>
                          @endif
                        @endforeach
                        <p>Lượt nghe : {{$item->views}}</p>
                        <div class="divider my-4"></div>
                        <audio controls>
                            <source src="{{asset('upload/file')}}/{{$item->file}}" type="audio/ogg">
                        </audio>
                        <br><br><br>
                        <h5>Lời Bài Hát :</h5>
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

  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="comment-area mt-4 mb-5">
            <h4 class="mb-4">2 Comments on Healthy environment... </h4>
            <ul class="comment-tree list-unstyled">
              <li class="mb-5">
                <div class="comment-area-box">
                  <div class="comment-thumb float-left">
                    <img alt="" src="images/blog/testimonial1.jpg" class="img-fluid">
                  </div>

                  <div class="comment-info">
                    <h5 class="mb-1">John</h5>
                    <span>United Kingdom</span>
                    <span class="date-comm">| Posted April 7, 2019</span>
                  </div>
                  <div class="comment-meta mt-2">
                    <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply</a>
                  </div>

                  <div class="comment-content mt-3">
                    <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="comment-area-box">
                  <div class="comment-thumb float-left">
                    <img alt="" src="images/blog/testimonial2.jpg" class="img-fluid">
                  </div>

                  <div class="comment-info">
                    <h5 class="mb-1">Philip W</h5>
                    <span>United Kingdom</span>
                    <span class="date-comm">| Posted June 7, 2019</span>
                  </div>

                  <div class="comment-meta mt-2">
                    <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply </a>
                  </div>

                  <div class="comment-content mt-3">
                    <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-12">
          <form class="comment-form my-5" id="comment-form">
            <h4 class="mb-4">Write a comment</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
                </div>
              </div>
            </div>


            <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

            <input class="btn btn-main-2 btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="section team">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-title text-center">
            <h2 class="mb-4">Các bài hát khác</h2>
            <div class="divider mx-auto my-4"></div>
            {{-- <p>Today’s users expect effortless experiences. Don’t let essential people and processes stay stuck in the past. Speed it up, skip the hassles</p> --}}
          </div>
        </div>
      </div>
  
      <div class="row">
              @foreach ($songLike as $item)
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="team-block mb-5 mb-lg-0">
                          <img src="{{asset('upload/img/img_song')}}/{{$item->img}}" alt="" class="img-fluid w-100">
  
                          <div class="content">
                              <h4 class="mt-4 mb-0"><a href="doctor-single.html">{{$item->name}}</a></h4>
                              @foreach ($singer as $itemm)
                                  @if ($itemm->id == $item->id_singer)
                                      <p>Ca sĩ : {{$itemm->name}}</p>
                                  @endif
                              @endforeach
                              <p>Lượt nghe : {{$item->views}}</p>
                          </div>
                      </div>
                  </div>
              @endforeach
      </div>
    </div>
  </section>
@endsection