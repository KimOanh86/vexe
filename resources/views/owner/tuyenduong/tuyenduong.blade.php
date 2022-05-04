@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container">
            <div class="row">
              <div class="col-sm-10">
                <h4><b>TUYẾN ĐƯỜNG CỦA CÔNG TY</b></h4>
              </div>
              <div class="col-sm-2" id="add">
                <button type="submit" class="btn btn-info"><a href="owner/tuyenduong/themtuyen">+&nbsp;Thêm tuyến</a></button>
              </div>
            </div>
            <div class="frames_table">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nơi đi</th>
                    <th>Nơi đến</th>
                    <th>Số lượng xe</th>
                    <th>Chi tiết</th>
                    <th>Sửa</th>
                    <th>Xóa</th> 
                    <th>Addcar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tuyen_duong as $td )
                  <tr>
                    <td>{{$td['starting_location']}}</td>
                    <td>{{$td['ending_location']}}</td>
                    <td>{{$td['number_of_vehicles']}}</td>
                    <td>
                      <a href="{{route('oanh',['id'=>$id,'id_route' =>$td->id])}}">Chi tiết&ensp;<i class="fas fa-info-circle"></i></a>  
                    </td>
                    <td><a href="owner/tuyenduong/suatuyen/{{$td['id']}}">Sửa&ensp;<i class="fas fa-user-edit"></i></a></td>
                    <td><a href="owner/tuyenduong/xoa/{{$td['id']}}">Xóa&ensp;<i class="fas fa-trash"></i></a></td>
                    <td><a href="owner/car/addcar/{{$td['id']}}">Add Car&ensp;<i class="fas fa-plus"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
</div>
    
@endsection