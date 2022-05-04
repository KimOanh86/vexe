@extends('admin.layout.index')
@section('content')
<div class="main-content">
    <div class="container" id="form_add">
        <div class="col-sm-8">
            <h3>Sửa thông tin người dùng</h3>
            <form action="" method="post">
            {{csrf_field()}}
                
                <input type="hidden" class="form-control" name="id" value="{{$us->id}}" readonly="">
                <div class="form-group">
                  <label for="name">Tên người dùng</label>
                  <input value="{{$us->name}}" type="text" class="form-control" id="name" placeholder="Tên người dùng" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text"  value="{{$us->email}}" class="form-control" id="email" placeholder="Email" name="email">
                  </div>
                <div class="form-group">
                  <label for="phone">Số điện thoại</label>
                  <input type="text"  value="{{$us->number_phone}}" class="form-control" id="phone" placeholder="Số điện thoại" name="phone">
                </div>
                <input type="hidden" class="form-control" id="level" value="{{$us->level}}" readonly name="level">
                <div class="row">
                    <div class="col-sm-2 col-4">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection