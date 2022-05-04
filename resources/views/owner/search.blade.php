@extends('owner.layout.index')
@section('content')
<div class="container">
        <div class="link">
          <a href="home.html">Vé xe khách</a>
        </div>
        <div class="search">
          <form method="POST" action="{{ route('home.PostSearch') }}" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row" id="search" style="background-color: white;">
              <div class="col-sm-3 col-12" id="search_location">
                  <i class="fas fa-map-marker-alt"></i>&ensp;
                  <input list="browsers" name="location_start" type="text" id="search_location_input" class="col-sm-11" placeholder="Tỉnh, Thành phố nơi đi">
                  <datalist id="browsers">
                    <option value="An Giang"></option>
                    <option value="Bà Rịa-Vũng Tàu"></option>
                    <option value="Bạc Liêu"></option>
                    <option value="Bắc Kạn"></option>
                    <option value="Bắc Giang"></option>
                    <option value="Bắc Ninh"></option>
                    <option value="Bến Tre"></option>
                    <option value="Bình Dương"></option>
                    <option value="Bình Định"></option>
                    <option value="Bình Phước"></option>
                    <option value="Bình Thuận"></option>
                    <option value="Cà Mau"></option>
                    <option value="Cao Bằng"></option>
                    <option value="Cần Thơ"></option>
                    <option value="Đà Nẵng"></option>
                    <option value="Đắk Lắk"></option>
                    <option value="Đắk Nông"></option>
                    <option value="Điện Biên"></option>
                    <option value="Đồng Nai"></option>
                    <option value="Đồng Tháp"></option>
                    <option value="Gia Lai"></option>
                    <option value="Hà Giang"></option>
                    <option value="Hà Nam"></option>
                    <option value="Hà Nội"></option>
                    <option value="Hà Tây"></option>
                    <option value="Hà Tĩnh"></option>
                    <option value="Hải Dương"></option>
                    <option value="Hải Phòng"></option>
                    <option value="Hòa Bình"></option>
                    <option value="Hồ Chí Minh(Sài Gòn)"></option>
                    <option value="Hậu Giang"></option>
                    <option value="Hưng Yên"></option>
                    <option value="Khánh Hòa"></option>
                    <option value="Kiên Giang"></option>
                    <option value="Kon Tum"></option>
                    <option value="Lai Châu"></option>
                    <option value="Lào Cai"></option>
                    <option value="Lạng Sơn"></option>
                    <option value="Lâm Đồng"></option>
                    <option value="Long An"></option>
                    <option value="Nam Định"></option>
                    <option value="Nghệ An"></option>
                    <option value="Ninh Bình"></option>
                    <option value="Ninh Thuận"></option>
                    <option value="Phú Thọ"></option>
                    <option value="Phú Yên"></option>
                    <option value="Quảng Bình"></option>
                    <option value="Quảng Nam"></option>
                    <option value="Quảng Ngãi"></option>
                    <option value="Quảng Ninh"></option>
                    <option value="Quảng Trị"></option>
                    <option value="Sóc Trăng"></option>
                    <option value="Sơn La"></option>
                    <option value="Tây Ninh"></option>
                    <option value="Thái Bình"></option>
                    <option value="Thái Nguyên"></option>
                    <option value="Thanh Hóa"></option>
                    <option value="Thừa Thiên-Huế"></option>
                    <option value="Tiền Giang"></option>
                    <option value="Trà Vinh"></option>
                    <option value="Tuyên Quang"></option>
                    <option value="Vĩnh Long"></option>
                    <option value="Vĩnh Phúc"></option>
                    <option value="Yên Bái"></option>
                  </datalist>
                </div>
              <div class="col-sm-3 col-12" id="search_location">
                  <i class="fas fa-map-marker-alt"></i>&ensp;
                  <input list="browsers" name="location_end" type="text" id="search_location_input" class="col-sm-11" placeholder="Tỉnh, Thành phố nơi đến">
                  <datalist id="browsers">
                    <option value="An Giang"></option>
                    <option value="Bà Rịa-Vũng Tàu"></option>
                    <option value="Bạc Liêu"></option>
                    <option value="Bắc Kạn"></option>
                    <option value="Bắc Giang"></option>
                    <option value="Bắc Ninh"></option>
                    <option value="Bến Tre"></option>
                    <option value="Bình Dương"></option>
                    <option value="Bình Định"></option>
                    <option value="Bình Phước"></option>
                    <option value="Bình Thuận"></option>
                    <option value="Cà Mau"></option>
                    <option value="Cao Bằng"></option>
                    <option value="Cần Thơ"></option>
                    <option value="Đà Nẵng"></option>
                    <option value="Đắk Lắk"></option>
                    <option value="Đắk Nông"></option>
                    <option value="Điện Biên"></option>
                    <option value="Đồng Nai"></option>
                    <option value="Đồng Tháp"></option>
                    <option value="Gia Lai"></option>
                    <option value="Hà Giang"></option>
                    <option value="Hà Nam"></option>
                    <option value="Hà Nội"></option>
                    <option value="Hà Tây"></option>
                    <option value="Hà Tĩnh"></option>
                    <option value="Hải Dương"></option>
                    <option value="Hải Phòng"></option>
                    <option value="Hòa Bình"></option>
                    <option value="Hồ Chí Minh(Sài Gòn)"></option>
                    <option value="Hậu Giang"></option>
                    <option value="Hưng Yên"></option>
                    <option value="Khánh Hòa"></option>
                    <option value="Kiên Giang"></option>
                    <option value="Kon Tum"></option>
                    <option value="Lai Châu"></option>
                    <option value="Lào Cai"></option>
                    <option value="Lạng Sơn"></option>
                    <option value="Lâm Đồng"></option>
                    <option value="Long An"></option>
                    <option value="Nam Định"></option>
                    <option value="Nghệ An"></option>
                    <option value="Ninh Bình"></option>
                    <option value="Ninh Thuận"></option>
                    <option value="Phú Thọ"></option>
                    <option value="Phú Yên"></option>
                    <option value="Quảng Bình"></option>
                    <option value="Quảng Nam"></option>
                    <option value="Quảng Ngãi"></option>
                    <option value="Quảng Ninh"></option>
                    <option value="Quảng Trị"></option>
                    <option value="Sóc Trăng"></option>
                    <option value="Sơn La"></option>
                    <option value="Tây Ninh"></option>
                    <option value="Thái Bình"></option>
                    <option value="Thái Nguyên"></option>
                    <option value="Thanh Hóa"></option>
                    <option value="Thừa Thiên-Huế"></option>
                    <option value="Tiền Giang"></option>
                    <option value="Trà Vinh"></option>
                    <option value="Tuyên Quang"></option>
                    <option value="Vĩnh Long"></option>
                    <option value="Vĩnh Phúc"></option>
                    <option value="Yên Bái"></option>
                
                  </datalist>
                </div>
              <div class="col-sm-3 col-12" id="search_calendar">
                  <!-- <i class="fas fa-calendar"></i>&ensp; -->
                  <input name="date_start" type="date" id="search_location_input" class="col-sm-11" placeholder="Nhập ngày">
              </div>
              <div class="col-sm-3 col-12" id="border_button_search">
                  <button type="submit" class="btn btn-warning" id="button_search">TÌM CHUYẾN</button>
              </div>
            </div>
          </form>
        </div>
        <div class="search_results">
          @foreach ($tickets as $ticket)
          
          
          <div>
            <div class="row" id="search_results">
              <div class="col-sm-3" id="search_results_img">
                <img src="../users_asset/img/xe.jpg" alt="">
              </div>
              <div class="col-sm-9" id="search_results_content">
                <div class="row">
                  <div class="col-sm-10">
                    <h4><b>
                      @foreach ($cars as $car)
                        @if ($car->id == $ticket->id_car)
                            {{$car->name_car}}
                        @endif
                    @endforeach
                    </b>
                    </h4>
                  </div>
                  <div class="col-sm-2">
                    <div class="price">{{$ticket->price}}đ</div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-8">
                    @foreach ($routes as $rt)
                      @if ($rt->id == $ticket->id_route)
                        <h5>{{$rt->starting_location}}----------{{$rt->ending_location}}</h5>
                       @endif
                    @endforeach
                  </div>
                  <div class="col-sm-4">
                    Ngày đi:  {{$ticket->date}}
                  </div>
                </div>

                <div class="row"> 
                  <div class="col-sm-8">{{$ticket->vehicle_type}} 
                    <b>
                      @foreach ($cars as $car)
                      @if ($car->id == $ticket->id_car)
                        {{$car->number_of_seats}}
                       @endif
                       @endforeach
                       chỗ
                    </b>
                  </div>
                  <div class="col-sm-4">
                    Giờ khởi hành:  {{$ticket->time_start}}
                  </div>
                </div>
                
                <div class="row" id="btn_thongtin">
                  {{-- <div class="col-sm-6 col-12" id="thongtinchitiet">
                    <a href="#chitiet" data-toggle="collapse">Thông tin chi tiết</a>
                  </div> --}}
                  <div class="col-sm-6 col-12">
                    <a href="{{ route('chontuyen',[$ticket->id_route, $ticket->id]) }}" class="btn btn-warning">Chọn tuyến</a>
                    <a href="chontuyen.html"></a>
                  </div>
                </div>
              
                <!-- <a href="#demo" data-toggle="collapse">Simple collapsible</a>
                <div id="demo" class="collapse">oanh</div> -->
              </div>
              {{-- <div id="chitiet" class="collapse">oanh</div> --}}
              <!-- <div id="goidienthoai" class="collapse">
                <hr>
                Gọi điện thoại tổng đài nhà xe để đặt vé tổng đài nhà xe để đặt vé tổng đài nhà xe để đặt vé
                <div class="row" id="goi">
                  <div class="col-sm-6">Bến xe miền Đông</div>
                  <div class="col-sm-6">09726619</div>
                </div>
              </div> -->
            </div>
          </div>
          @endforeach
        </div>
    </div>
@endsection