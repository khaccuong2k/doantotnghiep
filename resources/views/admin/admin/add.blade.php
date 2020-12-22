@extends('admin')
@section('breadcrumbs')
<div class="breadcrumbs-inner">
<div class="row m-0">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Quản Trị</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Trang quản trị</a></li>
                    <li><a href="#">Người quản trị</a></li>
                    <li class="active">Thêm</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <!-- <strong>Basic Form</strong> -->
        </div>
        <div class="card-body card-block">
            <form action="{{route('add-admin')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="" name="name" placeholder="Nhập họ tên" class="form-control">
                    <small class="form-text text-muted">Vui lòng nhập họ tên</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="email" id="" name="email" placeholder="Nhập Email" class="form-control">
                    <small class="help-block form-text">Vui lòng nhập email</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Tên đăng nhập</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="" name="username" placeholder="Nhập tên đăng nhập" class="form-control">
                    <small class="help-block form-text">Vui lòng nhập tên đăng nhập</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Mật khẩu</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="" name="password" placeholder="Nhập mật khẩu" class="form-control">
                    <small class="help-block form-text">Vui lòng nhập mật khẩu</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh đại diện</label></div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="" name="img" class="form-control-file">
                    {{-- <img src="{{asset('upload/img/img_admin')}}/{{}}" alt=""> --}}
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <div class="row form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>  
        </form>
    </div>
</div>
@endsection