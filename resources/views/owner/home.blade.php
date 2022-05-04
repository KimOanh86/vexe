@extends('owner.layout.index')
@section('content')

    <div class="container">
        <div class="search">
            <form method="POST" action="{{ route('PostSearch') }}" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                
                  @if(session('thongbao'))
                  <div class="alert alert-success col-12">
                      <b><span style="color: red; font-size: 20px;">{{session('thongbao')}}</span></b>
                  </div>
                  @endif
                
            </div>
            <div class="row" id="search">
                <div class="col-sm-3 col-12" id="search_location">
                    <i class="fas fa-map-marker-alt"></i>&ensp;
                    <input  list="browsers" name="location_start" type="text" id="search_location_input" class="col-sm-11" placeholder="Tỉnh, Thành phố nơi đi">
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
    </div>

@endsection