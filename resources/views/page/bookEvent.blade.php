@extends('master')
@section('contentMaster')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Book Event</span>
            <h1 class="text-capitalize mb-5 text-lg">@foreach ($event as $item)
                {{$item->name}}
            @endforeach</h1>
  
            <!-- <ul class="list-inline breadcumb-nav">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="appoinment section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
            {{-- <div class="mt-3">
              <div class="feature-icon mb-3"> --}}
                  <img src="{{asset('img/img_slide/poster-le-hoi-am-nhac-1.jpg')}}" alt="" width="100%" height="400px">
              {{-- </div>
            </div> --}}
        </div>
  
        <div class="col-lg-8">
             <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
              <h2 class="mb-2 title-color">Book Event @foreach ($event as $item){{$item->name}}@endforeach</h2>
              <p class="mb-4">{{$item->des}}</p>
                 <form id="#" class="appoinment-form" method="post" action="#">
                      <div class="row">
  
                           <div class="col-lg-6">
                              <div class="form-group">
                                <label for="name">Email</label>
                                  <input name="email" id="date" type="text" class="form-control" value="{{Auth::user()->email}}">
                              </div>
                          </div>
  
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="name">Full name</label>
                                  <input name="name" id="time" type="text" class="form-control" placeholder="Your full name">
                              </div>
                          </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                <label for="name">Price Event</label>
                                  <input name="price" id="name" type="text" class="form-control" placeholder="@foreach ($event as $item){{$item->price}}@endforeach" readonly>
                              </div>
                          </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="name">Address</label>
                                  <input name="price" id="name" type="text" class="form-control" placeholder="@foreach ($event as $item){{$item->address}}@endforeach" readonly>
                              </div>
                          </div>
                      </div>
  
                      <a class="btn btn-main btn-round-full" href="confirmation.html">Booking<i class="icofont-simple-right ml-2"></i></a>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection