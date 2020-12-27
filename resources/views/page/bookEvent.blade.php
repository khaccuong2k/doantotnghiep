@extends('master')
@section('contentMaster')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Đặt Vé Sự Kiện</span>
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
                  <img src="@foreach ($event as $item){{asset('upload/img/img_event')}}/{{$item->img}}@endforeach" alt="" width="100%" height="400px">
              {{-- </div>
            </div> --}}
        </div>
  
        <div class="col-lg-8">
             <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
              @if (session('message'))
                <span class="aler aler-danger">
                    <strong>{{session('message')}}</strong>
                </span>
               @endif
              <h2 class="mb-2 title-color">Đặt vé sự kiện @foreach ($event as $item){{$item->name}}@endforeach</h2>
              <p class="mb-4">@foreach ($event as $item){{$item->des}}@endforeach</p>
                 <form id="#" class="appoinment-form" method="post" action="@foreach ($event as $item){{route('booking',$item->id)}}@endforeach">
                  
                   @csrf
                      <div class="row">
  
                           <div class="col-lg-6">
                              <div class="form-group">
                                <label for="name">Email</label>
                                  <input name="email" id="date" type="text" class="form-control" value="{{Auth::user()->email}}">
                              </div>
                          </div>
  
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="name">Tên đầy đủ</label>
                                  <input name="name" id="time" type="text" class="form-control" placeholder="Nhập tên đầy đủ">
                              </div>
                          </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                <label for="name">Giá tiền</label>
                                  <input name="price" id="name" type="text" class="form-control" placeholder="@foreach ($event as $item){{number_format($item->price)}}@endforeach vnđ" readonly>
                              </div>
                          </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="name">Địa chỉ</label>
                                  <input name="address" id="name" type="text" class="form-control" placeholder="@foreach ($event as $item){{$item->address}}@endforeach" readonly>
                              </div>
                          </div>
                      </div>
                      <input type="submit" value="Đặt Vé" class="btn btn-main btn-round-full">
                      {{-- <a class="" href="confirmation.html">Booking<i class="icofont-simple-right ml-2"></i></a> --}}
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection