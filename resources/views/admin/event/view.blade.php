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
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Địa chỉ</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event as $item)
                                <tr>
                                    <td>
                                        <div>
                                        <a href="#"><img src="{{asset('upload/img/img_event')}}/{{ $item->img }}" alt=""></a>
                                        </div>
                                    </td>
                                    <td><span>{{ $item->name }}</span> </td>
                                    <td><span>{{ $item->address }}</span> </td>
                                    <td><span>{{ $item->des }}</span></td>
                                    <td>
                                        <a href="{{ route('add-event') }}">
                                            <button class="btn btn-primary btn-sm rounded-0" type="button" data-placement="top" data-toggle="modal" data-target="#myModalCountry" title="Add">
                                                <i class="fa fa-plus-square"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('edit-event',[ $item->id ]) }}">
                                            <button class="btn btn-success btn-sm rounded-0 edit_country" type="button" data-id="" data-toggle="modal" data-target="#myModalCountry1" data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                         <button class="btn btn-danger btn-sm rounded-0 del_event" data-id="{{ $item->id }}" type="button" data-toggle="modal" data-target="#myModalCountry2" data-placement="top" title="Delete">
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
@endsection
@section('scriptt')
<script>
    $(".del_event").click(function(){
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
                     url: '/backend/view-event/' + id,
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