@extends('master')
@section('contentMaster')
<div class="container">
    <br><br><br><br>
    <h2 style="text-align: center">Bảng Xếp Hạng Âm Nhạc Việt Nam</h2>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên bài hát</th>
                    <th scope="col">Ca sĩ</th>
                    <th scope="col">Lượt nghe</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($song as $key => $item)
                        <tr>
                            <th scope="row">{{$key + 1 }}</th>
                            <td>{{$item->name}}</td>
                            @foreach ($singer as $itemm)
                                @if ($itemm->id == $item->id_singer)
                                    <td>{{$itemm->name}}</td>
                                @endif
                            @endforeach
                            <td>{{$item->views}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection