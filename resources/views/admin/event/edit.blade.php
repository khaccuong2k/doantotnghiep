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
                    <li><a href="#">Sự kiện</a></li>
                    <li class="active">Sửa</li>
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
        <form action="{{ route('edit-event',[$idd->id]) }}" method="post" id="formUpdateAdmin" enctype="multipart/form-data" class="form-horizontal edit_admin">
            @csrf
            @foreach ($getId as $aa)
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên thể loại</label></div>
                <div class="col-12 col-md-9"><input type="text" id="" name="name_edit" value="{{$aa->name}}" class="form-control">
                    <small class="form-text text-muted d-none">Vui lòng nhập họ tên</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                    <div class="col-12 col-md-9"><textarea name="des_edit" id="textarea-input" rows="9" placeholder="{{$aa->des}}" value="{{$aa->des}}"  class="form-control"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                <div class="col-12 col-md-9"><input type="text" id="" name="address_edit" value="{{$aa->address}}" class="form-control">
                    <small class="form-text text-muted d-none">Vui lòng nhập họ tên</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá tiền</label></div>
                <div class="col-12 col-md-9"><input type="text" id="" name="price" value="{{$aa->price}}" class="form-control">
                    <small class="form-text text-muted d-none">Vui lòng nhập họ tên</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh đại diện</label></div>
                    <div class="col-12 col-md-9">
                        <img id="output" src="{{asset('upload/img/img_type')}}/{{ $aa->img }}" width="100" height="100">
                        <input name="img_edit" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        {{-- <input type="file" id="" name="img_edit" class="form-control-file">
                        <img src="{{asset('upload/img/img_admin')}}/{{ $aa->img }}" alt="" height="200px" width="300px"> --}}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Thời gian</label></div>
                    <div class="col-12 col-md-9"><input type="datetime-local" id="text-input" name="date" class="form-control">
                </div>
            @endforeach
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