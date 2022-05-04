@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container">
            <div class="row">
              <div class="col-sm-10">
                <h4><b>TUYẾN ĐƯỜNG CỦA CÔNG TY</b></h4>
              </div>
              <div class="col-sm-2" id="add">
                <button type="submit" class="btn btn-info"><a href="owner/drive/themtai">+&nbsp;Thêm tài</a></button>
              </div>
            </div>
            <div class="frames_table">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Tên</th>
                    <th>Số điện thoại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($drive as $dr )
                  <tr>
                    <td>{{$dr['name']}}</td>
                    <td>{{$dr['number_phone']}}</td>
                    <td><a href="owner/drive/suadrive/{{$dr['id']}}">Sửa&ensp;<i class="fas fa-user-edit"></i></a></td>
                    <td><a href="owner/drive/xoadrive/{{$dr['id']}}">Xóa&ensp;<i class="fas fa-trash"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
</div>
    
@endsection