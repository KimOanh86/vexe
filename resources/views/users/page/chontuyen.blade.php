@extends('users.layout.index')
@section('content')
<div class="container">
        <div class="link">
          <a href="home.html">Vé xe khách</a>
        </div>
        <div class="search">
            <div class="row" id="search" style="background-color: white;">
                <div class="col-sm-3 col-12" id="search_location">
                    <i class="fas fa-map-marker-alt"></i>&ensp;
                    <input name="location_start" type="text" id="search_location_input" class="col-sm-11" placeholder="Tỉnh, Thành phố nơi đi">
                </div>
                <div class="col-sm-3 col-12" id="search_location">
                    <i class="fas fa-map-marker-alt"></i>&ensp;
                    <input name="location_end" type="text" id="search_location_input" class="col-sm-11" placeholder="Tỉnh, Thành phố nơi đến">
                </div>
                <div class="col-sm-3 col-12" id="search_calendar">
                    
                    <input name="date_start" type="date" id="search_location_input" class="col-sm-11" placeholder="Nhập ngày">
                </div>
                <div class="col-sm-3 col-12" id="border_button_search">
                    <button type="submit" class="btn btn-warning" id="button_search">TÌM CHUYẾN</button>
                </div>
              </div>
        </div>
        <div class="search_results">
            <h4>Đặt mua vé đi từ Gia Lai đến Thái Bình</h4>
            <div style="display: flex; justify-content: center;">
                <form action="{{ route('postchontuyen') }}" method="POST" class="col-sm-8" id="search_results_form">
                    {{csrf_field()}}
                    <h4>Nhập thông tin</h4>
                    <input  type="hidden" class="form-control" id="id_route" value="{{$id_route}}" readonly name="id_route">
                    <input type="hidden" class="form-control" id="id_ticket" value="{{$id_ticket}}" readonly name="id_ticket">
                    @if(Auth::check())
                    <input type="hidden" class="form-control" id="id_owner" value="{{Auth::user()->id}}" readonly name="id_owner">
                    @endif   
                    <div class="form-group">
                        <label for="name">Họ tên:</label>
                        <input type="text" class="form-control" id="ten" placeholder="Họ tên hành khách" name="name">
                    </div>
                    <div class="form-group">
                        <label for="sdt">Số điện thoại:</label>
                        <input type="tel" class="form-control" id="sdt" placeholder="Số điện thoại" name="sdt">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="ten" placeholder="Địa chỉ Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="cmnd">Số CMND/CCCD người đi:</label>
                        <input type="text" class="form-control" id="cmnd" placeholder="Số CMND người đi" name="cmnd">
                    </div>
                    <div class="form-group">
                        <label for="amount">Số lượng vé</label>
                        <input type="number" class="form-control" min="1" max="5" id="amount" placeholder="" name="amount">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection