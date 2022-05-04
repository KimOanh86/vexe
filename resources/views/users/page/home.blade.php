@extends('users.layout.index')
@section('content')

@include('users.layout.slideshow')
  <div class="container">
    <h4 class="title">Bài viết mới nhất</h4>
    <!-- thanh trượt -->
    <div class="row" id="holster">
      <div class="scroll_img x proximity-scroll-snapping" dir="ltr">
        <div class="col-sm-4 col-10">
          <a href="#">
            <div class="scroll-conten">
              <img src="https://static.vexere.com/production/banners/330/xemuadich_banner-leaderboard-1920x922_finally.jpg" alt="">
              <div>Khi nào các hãng xe hoạt động trở lại</div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-10">
          <a href="#">
            <div class="scroll-conten">
              <img src="https://static.vexere.com/production/banners/330/xemuadich_banner-leaderboard-1920x922_finally.jpg" alt="">
              <div>Thanh toán tại ShoppeePay - Giảm ngay 10% khi đặt vé</div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-10">
          <a href="#">
            <div class="scroll-conten">
              <img src="https://static.vexere.com/production/banners/330/xemuadich_banner-leaderboard-1920x922_finally.jpg" alt="">
              <div>Thuê xe mùa dịch</div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-10">
          <a href="#">
            <div class="scroll-conten">
              <img src="https://static.vexere.com/production/banners/330/xemuadich_banner-leaderboard-1920x922_finally.jpg" alt="">
              <div>Thuê xe mùa dịch</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h4 class="title">Nền tảng kết nối người dùng và nhà xe</h4>
    <div class="row" id="nentang">
      <div class="col-sm-4">
        <div id="connect">
          <div class="row">
            <div class="col-sm-3 col-3" id="connect_img">
              <img src="https://storage.googleapis.com/fe-production/images/personalize-icon.png" alt="">
            </div>
            <div class="col-sm-9 col-9">
              <h5>Cá nhân hóa tìm kiếm</h5>
              <div class="connect_conten">
                5000+ tuyến đường, 2000+ nhà xe, 5000+ đại lý trên khắp cả nước. Chọn xe yêu thích cực nhanh.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div id="connect">
          <div class="row">
            <div class="col-sm-3 col-3" id="connect_img">
              <img src="https://storage.googleapis.com/fe-production/images/personalize-icon.png" alt="">
            </div>
            <div class="col-sm-9 col-9">
              <h5>Cá nhân hóa tìm kiếm</h5>
              <div class="connect_conten">
                5000+ tuyến đường, 2000+ nhà xe, 5000+ đại lý trên khắp cả nước. Chọn xe yêu thích cực nhanh.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div id="connect">
          <div class="row">
            <div class="col-sm-3 col-3" id="connect_img">
              <img src="https://storage.googleapis.com/fe-production/images/personalize-icon.png" alt="">
            </div>
            <div class="col-sm-9 col-9">
              <h5>Cá nhân hóa tìm kiếm</h5>
              <div class="connect_conten">
                5000+ tuyến đường, 2000+ nhà xe, 5000+ đại lý trên khắp cả nước. Chọn xe yêu thích cực nhanh.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection    
