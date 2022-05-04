@extends('users.layout.index')
@section('content')
<div class="container">    
        <div class="ticket">
            <h4>Vé của bạn</h4>
            @foreach ($info as $if)
            <div style="display: flex; justify-content: center; margin-bottom: 20px;">
                <div class="col-sm-8" id="search_results_form">
                    <h4>Thông tin vé</h4>
                    <span style="font-size: 22px">Người đi: </span> <b>{{$if->name}}</b>
                    <br><span style="font-size: 22px">Số điện thoại: </span> <b>{{$if->number_phone}}</b>
                    <br><span style="font-size: 22px">Email: </span> <b>{{$if->email}}</b>
                    <br><span style="font-size: 22px">CMND: </span> <b>{{$if->CMND}}</b>
                    <br><span style="font-size: 22px">Số lượng vé: </span> <b>{{$if->amount_ticket}}</b>
                    <br><span style="font-size: 22px">Tuyến: </span> 
                    <b>
                        @foreach ($route as $rt)
                        @if ($rt->id == $if->id_route)
                          {{$rt->starting_location}} --> {{$rt->ending_location}}
                        @endif
                        @endforeach
                    </b>
                    <br><span style="font-size: 22px">Giá vé: </span> 
                    <b>@foreach ($tickets as $ticket)
                        @if ($ticket->id == $if->id_ticket)
                          {{$ticket->price}}
                        @endif 
                        @endforeach
                    </b>/Vé
                    <br><span style="font-size: 22px">Thành tiền: </span> 
                    <b style="color: red">
                        @foreach ($tickets as $ticket)
                            @if ($ticket->id == $if->id_ticket)
                              {{$ticket->price*$if->amount_ticket}}
                            @endif 
                            @endforeach VND</b>
                    <br><button  type="button" class="btn btn-danger"><a href="huyve/{{$if['id']}}" style="text-decoration: none; color: white;">Hủy vé</a></button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection