<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="users_asset/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container">
        
    </div>
    <div class="col-sm-5 col-11" id="form">
    <h2>Đăng ký Website THƯƠNG HIỆU NHÀ XE</h2>
        
        <div class="w3layoutscontaineragileits">
		      <div class="col-lg-12">
            @if(session('thongbao'))
            <div class="alert alert-success">
                <span style="color: red; font-size: 20px;">{{session('thongbao')}}</span>
            </div>
            @endif
        </div>
        @include('users.layout.loi')
        <form action="" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Tên</label>
                <input type="name" class="form-control" id="name" placeholder="Nhập tên thương hiệu" name="name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập Email" name="email">
            </div>
            <div class="form-group">
                <label>Số điện thoại:</label>
                <input type="sdt" class="form-control" id="sdt" placeholder="Nhập sđt" name="sdt">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password"  name="password" placeholder="Nhập mật khẩu" >
            </div>
            <div class="form-group">
                <label>Nhập lại Password</label>
                <input class="form-control" type="password"  name="passwordAgain" placeholder="Nhập lại mật khẩu" >
            </div>
                            
            <!-- <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div> -->
            <button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
            <div class="register">Bạn đã có tài khoản? <a href="owner/login">Đăng nhập</a></div>
        </form>
    </div>
</body>
</html>