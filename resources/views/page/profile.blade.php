@extends('master')
@section('contentMaster')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Hồ Sơ Chi Tiết</span>
            <h1 class="text-capitalize mb-5 text-lg">{{Auth::user()->username}}</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="section doctor-single">
      <div class="container">
          <div class="row">
            <div class="col-6">
                @if (session('message'))
                    <span class="aler aler-danger">
                        <strong>{{session('message')}}</strong>
                    </span><br>
                @endif
                <h3>Tài khoản của bạn </h3>
                Số tiền trong tài khoản của bạn : {{number_format(Auth::user()->total_money)}} vnđ <br>
                Số tiền đã sử dụng : {{number_format(Auth::user()->qty_buy)}} vnđ.
                <br><br>
                <button type="button" class="btn btn-main-2 btn-icon btn-round-full" data-toggle="modal" data-target="#exampleModal">
                    Nạp tiền
                </button>
                {{-- <a href="{{route('addmoney',Auth::user()->id)}}" class="btn btn-main-2 btn-icon btn-round-full">Nạp tiền <i class="icofont-simple-right ml-2  "></i></a> --}}
            </div>
            <div class="col-6">
              <h3>Các Sự Kiện Đã Tham Gia</h3>
              @foreach ($event as $item)
                @foreach ($bookEventModel as $itemm)
                    @if ($item->id == $itemm->id_event && $itemm->id_user == Auth::user()->id)
                      {{-- @if ($item->name)
                          
                      @endif --}}
                        <p>{{$item->name}}</p>
                    @endif
                @endforeach
              @endforeach
            </div>
          </div>
          <br><br><br><br>
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="doctor-img-block">
                      @if (!empty(Auth::user()->img))
                        <img src="{{asset('upload/img/img_user')}}/{{Auth::user()->img}}" alt="" class="img-fluid w-100">
                      @else
                        <img src="{{asset('upload/img/noimg.jpg')}}" alt="" class="img-fluid w-100">
                      @endif
  
                      <div class="info-block mt-4">
                          <h4 class="mb-0">{{Auth::user()->username}}</h4>
                          {{-- <p>Orthopedic Surgary</p> --}}
  
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
                        @if (session('messageEdit'))
                            <span class="aler aler-danger">
                                <strong>{{session('messageEdit')}}</strong>
                            </span><br>
                        @endif
                      <h5 class="text-md">Chỉnh Sửa Hồ Sơ</h5>
                      <div class="divider my-4"></div>
                      <form method="post" action="{{route('profile',Auth::user()->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên Người Dùng</label>
                          <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên người dùng">
                          @if ($errors->has('username'))
                            {{$errors->first('username')}}
                          @endif
                          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập email">
                          @if ($errors->has('email'))
                            {{$errors->first('email')}}
                          @endif
                          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mật Khẩu</label>
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
                          @if ($errors->has('password'))
                            {{$errors->first('password')}}
                          @endif
                        </div>
                        <div class="form-group">
                          <img id="output" src="{{asset('upload/img/noimg.jpg')}}" width="100" height="100">
                          <input name="img" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                          @if ($errors->has('img'))
                            {{$errors->first('img')}}
                          @endif
                          </div>
                        <button type="submit" class="btn btn-main-2 btn-icon btn-round-full">Chỉnh Sửa</button>
                      </form>
                      {{-- <a href="appoinment.html" class="btn btn-main-2 btn-round-full mt-3">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a> --}}
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{route('addmoney',Auth::user()->id)}}" method="post">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Chọn loại thẻ cào nạp tiền</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
                {{-- <label for="">Chọn loại thẻ cào để nạp :</label> --}}
                <select class="form-control form-control-sm" name="value" id="">
                <option value="1"> 20 nghìn đồng </option>
                <option value="2"> 50 nghìn đồng </option>
                <option value="3"> 100 nghìn đồng </option>
                <option value="4"> 200 nghìn đồng </option>
                </select>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Nạp tiền</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection