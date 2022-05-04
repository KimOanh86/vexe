@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container">
            <div class="row">
              <div class="col-sm-10">
                <h4><b>TUYẾN ĐƯỜNG CỦA CÔNG TY</b></h4>
              </div>
              {{-- <div class="col-sm-2" id="add">
                <button type="submit" class="btn btn-info"><a href="">+&nbsp;Thêm xe</a></button>
              </div> --}}
            </div>
            <div class="frames_table">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Tên xe</th>
                    <th>Loại xe</th>
                    <th>Số ghế</th>
                    <th>Giá</th>
                    <th>Ngày đi</th>
                    <th>Giờ xuất phát</th>
                    <th>Thêm</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($cars as $car)
                  <tr>
                    <td>{{$car->name_car}}</td>
                    <td>{{$car->vehicle_type}}</td>
                    <td>{{$car->number_of_seats}}</td>
                    <td>
                      @foreach ($tickets as $ticket)
                        @if ($ticket->id_car == $car->id)
                          {{$ticket->price}}
                        @endif
                      @endforeach
                    </td>
                    <td>
                      @foreach ($tickets as $ticket)
                        @if ($ticket->id_car == $car->id)
                          {{$ticket->date}}
                        @endif
                      @endforeach
                    </td>
                    <td>
                      @foreach ($tickets as $ticket)
                        @if ($ticket->id_car == $car->id)
                          {{$ticket->time_start}}
                        @endif
                      @endforeach
                    </td>
                    <td>
                      <a href="{{ route('addticket',[$car->id_route, $car->id]) }}">Thêm vé&ensp;<i class="fas fa-plus"></i></a>
                    </td>
                    <td>
                      <a href="owner/car/suacar/{{$car->id}}">Sửa xe&nbsp;<i class="fas fa-car"></i></a>
                      <br>
                      @foreach ($tickets as $ticket)
                      @if ($ticket->id_car == $car->id)
                        <a href="{{ route('suave', ['id_ticket'=> $ticket->id]) }}">Sửa vé&nbsp;<i class="fas fa-ticket-alt"></i></a>
                      @endif
                    
                    @endforeach
                    </td>
                    <td>
                      @foreach ($tickets as $ticket)
                        @if ($ticket->id_car == $car->id)
                          <a href="{{ route('xoachitiet', ['id_car'=> $car->id,'id_ticket'=> $ticket->id]) }}">Xóa</a>
                        @endif
                      @endforeach
                      </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        </div>
</div>
@endsection
