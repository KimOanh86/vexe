@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container" id="form_add">
            <div class="col-sm-8">
                <h3>Thêm tài xế</h3>
                <form action="{{ route('posttai') }}" method="post">
                {{csrf_field()}}
                    
                    <input type="hidden" class="form-control" id="id_owner" value="{{Auth::user()->id}}" readonly name="id_owner">
                    <div class="form-group">
                        <label for="name">Tên tài xế</label>
                        <input type="name" class="form-control" id="name"  placeholder="Nhập tên"  name="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone"  placeholder="Nhập số điện thoại"  name="phone">
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