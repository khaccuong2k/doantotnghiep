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
        <form action="{{ route('edit-admin',[$idd->id]) }}" method="post" id="formUpdateAdmin" enctype="multipart/form-data" class="form-horizontal edit_admin">
            @csrf
            @foreach ($getId as $aa)
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                <div class="col-12 col-md-9"><input type="text" id="" name="name_edit" value="{{$aa->name}}" class="form-control">
                    <small class="form-text text-muted d-none">Vui lòng nhập họ tên</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="email" id="" name="email_edit" value="{{ $aa->email }}" class="form-control">
                    <small class="help-block form-text">Vui lòng nhập email</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Tên đăng nhập</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="" name="user_edit" value="{{ $aa->username }}" class="form-control">
                    <small class="help-block form-text">Vui lòng nhập tên đăng nhập</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Mật khẩu</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="" name="pass_edit" value="{{ $aa->password }}" class="form-control">
                    <small class="help-block form-text">Vui lòng nhập mật khẩu</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh đại diện</label></div>
                    <div class="col-12 col-md-9">
                        <img id="output" src="{{asset('upload/img/img_admin')}}/{{ $aa->img }}" width="100" height="100">
<input name="img_edit" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        {{-- <input type="file" id="" name="img_edit" class="form-control-file">
                        <img src="{{asset('upload/img/img_admin')}}/{{ $aa->img }}" alt="" height="200px" width="300px"> --}}
                    </div>
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
{{-- @section('script')
<script>
    $('.edit_admin').click(function() {
        var id = $(this).data('id');
        // console.log(id);
        $.ajax({
            type: "GET",
            url: "/backend/edit-admin/" + id,
            data: "data",
            dataType: "json",
            success: function (response) {
                var url = "{{ route('edit-admin', ':id') }}";
                url = url.replace(':id', id);
                $('#formUpdateAdmin').attr('action', url);
                $('#name_edit').val(response['name']);
                $('#email_edit').val(response['email']);
                $('#user_edit').val(response['username']);
                $('#pass_edit').val(response['password']);
                $('#img_edit').attr('src', "{{ asset('upload/img/img_admin') }}/"+response['img']);
            }
        });
    });
 </script>
@endsection --}}