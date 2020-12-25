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
            {{-- <strong>Basic Form</strong> Elements --}}
        </div>
        <div class="card-body card-block">
        <form action="{{route('edit-song',[$idd->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @foreach ($getId as $item)
            
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nameEdit" placeholder="Nhập tên bài hát" value="{{ $item->name }}" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Thể loại</label></div>
                <div class="col-12 col-md-9">
                    <select name="id_typeEdit" id="select" class="form-control">
                    @foreach ($type as $itemt)
                        {{-- @if ($item->id_type == $itemt->id)
                        <option value="{{ $itemt->id }}" checked>{{ $itemt->name }}</option>
                        @endif --}}
                        <option value="{{ $itemt->id }}">{{ $itemt->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group" hidden>
                <div class="col col-md-3"><label for="select" class=" form-control-label"></label></div>
                <div class="col-12 col-md-9">
                    <select name="id_userEdit" id="select" class="form-control">
                    @foreach ($user as $itemt)
                        <option value="{{ $itemt->id }}">{{ $itemt->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group" hidden>
                <div class="col col-md-3"><label for="select" class=" form-control-label"></label></div>
                <div class="col-12 col-md-9">
                    <select name="id_albumEdit" id="select" class="form-control">
                    @foreach ($album as $itemt)
                        <option value="{{ $itemt->id }}">{{ $itemt->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Ca sĩ</label></div>
                <div class="col-12 col-md-9">
                    <select name="id_singerEdit" id="select" class="form-control">
                    @foreach ($singer as $items)
                        <option value="{{ $items->id }}">{{ $items->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Nhạc sĩ</label></div>
                <div class="col-12 col-md-9">
                    <select name="id_musicianEdit" id="select" class="form-control">
                    @foreach ($musician as $itemm)
                        <option value="{{ $itemm->id }}">{{ $itemm->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Quốc gia</label></div>
                <div class="col-12 col-md-9">
                    <select name="id_countryEdit" id="select" class="form-control">
                    @foreach ($country as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                <div class="col-12 col-md-9"><textarea name="desEdit" id="textarea-input" rows="9" class="form-control"></textarea></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá tiền</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="priceEdit" value="{{$item->price}}" placeholder="Nhập giá tiền" class="form-control">
                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ảnh</label></div>
                <div class="col-12 col-md-9">
                    <input type="file" id="" name="imgEdit" class="form-control-file">
                {{-- <img src="" alt=""> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Tệp nhạc</label></div>
                <div class="col-12 col-md-9">
                    <input type="file" id="" name="fileEdit" class="form-control-file">
                {{-- <img src="" alt=""> --}}
                </div>
            </div>
        </div>
        @endforeach
        <div class="card-footer">
            <div class="form-group">
              <label for=""></label>
              <input type="submit" value="Sửa bài hát"
                class="btn btn-primary">
            </div>
        </div>
    </form>

    </div>
</div>
@endsection
@section('scriptt')
<script>
    $(".del_singer").click(function(){
         id = $(this).data('id');
         Swal.fire({
             title: 'Bạn có chắc chắn?',
             text: 'Bạn sẽ không thể hoàn nguyên điều này!',
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Vâng, xóa nó đi!',
             cancelButtonText: 'Hủy',
         }).then((result) => {
             if (result.value == true) {
                 $.ajax({
                     url: '/backend/view-singer/' + id,
                     type: 'get',
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },
                     success: function(ress) {
                         console.log(ress);
                         if (ress.warning) {
                             Swal.fire({
                                 icon: 'error',
                                 title: 'Thông báo',
                                 text: res.warning,
                                 confirmButtonText: 'Xác nhận',
                             });
                         }
                         if (ress.success) {
                             Swal.fire({
                                 icon: 'success',
                                 title: 'Thông báo',
                                 text: 'Xóa thành công',
                                 confirmButtonText: 'Xác nhận',
                             }).then((result) => {
                                 location.reload();
                             });
                         }
                     }
                 });
             }
         });
     });
</script>
@endsection