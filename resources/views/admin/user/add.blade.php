@extends('admin')
@section('breadcrumbs')
<div class="breadcrumbs-inner">
<div class="row m-0">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Quản trị</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Trang quản trị</a></li>
                    <li><a href="#">Sự kiện</a></li>
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
            {{-- <strong>Basic Form</strong> Elements --}}
        </div>
        <div class="card-body card-block">
        <form action="{{route('add-user')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Nhập tên sự kiện" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">username</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" placeholder="Nhập địa chỉ" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">password</label></div>
                <div class="col-12 col-md-9"><input type="password" id="text-input" name="password" placeholder="Nhập tên sự kiện" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">email</label></div>
                <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="Nhập địa chỉ" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">qty_buy</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="qty_buy" placeholder="Nhập tên sự kiện" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">total_money</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="total_money" placeholder="Nhập địa chỉ" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">type_customer</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="type_customer" placeholder="Nhập tên sự kiện" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">phone</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone" placeholder="Nhập địa chỉ" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ảnh</label></div>
                <div class="col-12 col-md-9">
                    <input type="file" id="" name="img" class="form-control-file">
                {{-- <img src="" alt=""> --}}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="form-group">
              <label for=""></label>
              <input type="submit"
                class="btn btn-primary">
            </div>
        </div>
    </form>

    </div>
</div>
@endsection