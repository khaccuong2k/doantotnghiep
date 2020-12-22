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
                    <li><a href="#">Quốc gia</a></li>
                    <li class="active">Danh sách</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{-- <strong class="card-title">Custom Table</strong> --}}
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên quốc gia</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($countrys as $item)
                            <tr>
                                <td class="avatar">
                                    <div class="round-img">
                                    <a href="#">

                                        <img src="{{asset('upload/img/img_country')}}/{{$item->img}}" alt="">
                                    </a>
                                    </div>
                                </td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a href="{{ route('add-country') }}">
                                    <button class="btn btn-primary btn-sm rounded-0" type="button" data-placement="top" data-toggle="modal" data-target="#myModalCountry" title="Add">
                                        <i class="fa fa-plus-square"></i>
                                    </button>
                                </a>
                                <a href="{{ route('edit-country',[ $item->id ]) }}">
                                    <button class="btn btn-success btn-sm rounded-0 edit_country" type="button" data-id="" data-toggle="modal" data-target="#myModalCountry1" data-placement="top" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                                 <button class="btn btn-danger btn-sm rounded-0 del_country" data-id="{{ $item->id }}" type="button" data-toggle="modal" data-target="#myModalCountry2" data-placement="top" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div> <!-- /.table-stats -->
            </div>
        </div>

    </div>
</div><!-- .animated -->
{{-- <div class="modal fade" id="myModalCountry">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm người quản trị</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <form action="{{route('add-admin')}}" method="post"  enctype="multipart/form-data" >
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Họ tên</label>
                    <input type="text" required
                    class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Nhập họ tên">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" required
                    class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Nhập email">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="">Tên người dùng</label>
                    <input type="text" required
                    class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Nhập tên người dùng">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" required
                    class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Nhập mật khẩu">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="">Chọn ảnh đại diện</label>
                    <input type="file" id="" name="img" class="form-control-file"  required>
                    <small id="fileHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
        <!-- Modal footer -->
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Thêm">
            </div>
        </form>
      </div>
    </div>
</div>
<div class="modal fade" id="myModalCountry1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sửa thông tin người quản trị</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
    <form action="" method="post" id="formUpdateAdmin" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Họ tên</label>
                    <input type="text"
                    class="form-control" name="name_edit" id="name_edit" aria-describedby="helpId" placeholder="Nhập họ tên">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text"
                    class="form-control" name="email_edit" id="email_edit" aria-describedby="helpId" placeholder="Nhập email">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="">Tên người dùng</label>
                    <input type="text"
                    class="form-control" name="user_edit" id="user_edit" aria-describedby="helpId" placeholder="Nhập tên người dùng">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password"
                    class="form-control" name="pass_edit" id="pass_edit" aria-describedby="helpId" placeholder="Nhập mật khẩu">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="">Chọn ảnh đại diện</label>
                    <input type="file" class="form-control-file" name="img_edit"  placeholder="" aria-describedby="fileHelpId">
                <img id="img_edit" src="" alt="">
                    <small id="fileHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
        <!-- Modal footer -->
            <div class="modal-footer">
            <button type="submit" class="btn btn-success">Sửa</button>
            </div>
        </form>
      </div>
    </div>
</div> --}}
@endsection
@section('scriptt')
<script>
    $(".del_country").click(function(){
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
                     url: '/backend/view-country/' + id,
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
    // $('.edit_country').click(function() {
    //     var id = $(this).data('id');
    //     // console.log(id);
    //     $.ajax({
    //         type: "GET",
    //         url: "/backend/edit-country/" + id,
    //         data: "data",
    //         dataType: "json",
    //         success: function (response) {
    //             var url = "{{ route('edit-admin', ':id') }}";
    //             url = url.replace(':id', id);
    //             $('#formUpdateAdmin').attr('action', url);
    //             $('#name_edit').val(response['name']);
    //             $('#email_edit').val(response['email']);
    //             $('#user_edit').val(response['username']);
    //             $('#pass_edit').val(response['password']);
    //             $('#img_edit').attr('src', "{{ asset('upload/img/img_admin') }}/"+response['img']);
    //         }
    //     });
    // });
</script>
@endsection