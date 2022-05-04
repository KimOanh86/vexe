@extends('owner.layout.index')
@section('content')
<div class="main-content">
    <div class="container" id="form_add">
        <div class="col-sm-8">
            <h3>Sửa thông tin</h3>
            <form action="" method="post">
            {{csrf_field()}}
                
                <input type="hidden" class="form-control" name="id" value="{{$dr->id}}" readonly="">
                <input value="{{$dr->id_owner}}" type="text" class="form-control" id="id_owner" name="id_owner">
                
                <div class="form-group">
                    <label for="number_phone">Số điện thoại</label>
                    <input type="text"  value="{{$dr->number_phone}}" class="form-control" id="number_phone" placeholder="Số điện thoại" name="number_phone">
                  </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text"  value="{{$dr->name}}" class="form-control" id="name" placeholder="Tên" name="name">
                </div>
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