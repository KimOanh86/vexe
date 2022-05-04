<nav class="navbar navbar-expand-sm">
        <!-- Brand -->
        <!-- <a class="navbar-brand" style="text-align: center;" href="#">Navbar</a> -->
          
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler navbar-dark" id="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="owner/home">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kiếm tra vé</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="owner/drive/danhsach">Người lái</a>
            </li>
            <!-- Dropdown -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Trở thành đối tác</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Phần mềm nhà xe</a>
                <a class="dropdown-item" href="#">Phần mềm đại lý</a>
                <a class="dropdown-item" href="#">Đối tác kinh doanh</a>
              </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="owner/tuyenduong/danhsach">Tuyến đường</a>
            </li>
            @if(Auth::check())
        <li class="has-children">{{Auth::user()->name}}
        </li>
        <li>
          <button type="button" class="btn btn-primary" id="btn_dn"><a href="owner/logout"><i class="fas fa-sign-out-alt"></i>&ensp;Đăng xuất</a></button>
        </li>
        @endif
          </ul>
        </div>
    </nav>