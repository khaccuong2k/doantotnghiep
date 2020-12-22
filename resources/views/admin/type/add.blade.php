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
                    <li><a href="#">Thể loại</a></li>
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
        <form action="{{route('add-type')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên thể loại</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Nhập tên thể loại" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                <div class="col-12 col-md-9"><textarea name="des" id="textarea-input" rows="9" placeholder="Nhập mô tả" class="form-control"></textarea></div>
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