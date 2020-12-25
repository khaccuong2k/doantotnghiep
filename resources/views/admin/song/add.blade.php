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
                    <li><a href="#">Bài hát</a></li>
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
        <form action="{{route('add-song')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Nhập tên bài hát" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Thể loại</label></div>
                <div class="col-12 col-md-9">
                    <select name="id_type" id="select" class="form-control">
                    @foreach ($type as $itemt)
                        <option value="{{ $itemt->id }}">{{ $itemt->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group" hidden>
                <div class="col col-md-3"><label for="select" class=" form-control-label"></label></div>
                <div class="col-12 col-md-9">
                    <select name="id_user" id="select" class="form-control">
                    @foreach ($user as $itemt)
                        <option value="{{ $itemt->id }}">{{ $itemt->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group" hidden>
                <div class="col col-md-3"><label for="select" class=" form-control-label"></label></div>
                <div class="col-12 col-md-9">
                    <select name="id_album" id="select" class="form-control">
                    @foreach ($album as $itemt)
                        <option value="">aa</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Ca sĩ</label></div>
                <div class="col-12 col-md-9">
                    <select name="id_singer" id="select" class="form-control">
                    @foreach ($singer as $items)
                        <option value="{{ $items->id }}">{{ $items->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Nhạc sĩ</label></div>
                <div class="col-12 col-md-9">
                    <select name="id_musician" id="select" class="form-control">
                    @foreach ($musician as $itemm)
                        <option value="{{ $itemm->id }}">{{ $itemm->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Quốc gia</label></div>
                <div class="col-12 col-md-9">
                    <select name="id_country" id="select" class="form-control">
                    @foreach ($country as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                <div class="col-12 col-md-9"><textarea name="des" id="textarea-input" rows="9" placeholder="Nhập mô tả" class="form-control"></textarea></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá tiền</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="price" placeholder="Nhập giá tiền" class="form-control">
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
            <div class="row form-group">
                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Tệp nhạc</label></div>
                <div class="col-12 col-md-9">
                    <input type="file" id="" name="file" class="form-control-file">
                {{-- <img src="" alt=""> --}}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="form-group">
              <label for=""></label>
              <input type="submit" value="Thêm bài hát"
                class="btn btn-primary">
            </div>
        </div>
    </form>

    </div>
</div>
@endsection