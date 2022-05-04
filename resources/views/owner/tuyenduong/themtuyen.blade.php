@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container" id="form_add">
            <div class="col-sm-8">
                <h3>Thêm tuyến đường</h3>
                <form action="" method="post">
                {{csrf_field()}}
                    
                        <input type="hidden" class="form-control" id="id_owner" value="{{Auth::user()->id}}" readonly name="id_owner">
                    
                    <div class="form-group">
                      <label for="starting_location">Điểm xuất phát</label>
                      <input list="browsers" type="text" class="form-control" id="starting_location" placeholder="Điểm xuất phát" name="starting_location">
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
                    <div class="form-group">
                      <label for="ending_location">Điểm đến</label>
                      <input type="text" list="browsers" class="form-control" id="ending_location" placeholder="Điểm đến" name="ending_location">
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
                    <div class="form-group">
                        <label for="amount">Số lượng xe</label>
                        <input type="number" class="form-control" min="1" max="10" id="amount" placeholder="Số lượng xe" name="amount">
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-2 col-4">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                        <div class="col-sm-2 col-6">
                            <button type="reset" class="btn btn-secondary">Làm mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection