@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container" id="form_add">
            <div class="col-sm-8">
                <h3>Thêm tuyến đường</h3>
                <form action="{{ route('postaddticket') }}" method="post">
                {{csrf_field()}}
                    
                    <input type="hidden" class="form-control" id="id_owner" value="{{Auth::user()->id}}" readonly name="id_owner">
                    <input type="hidden" class="form-control" id="id_car" value="{{$id}}" readonly name="id_car">
                    <input type="hidden" class="form-control" id="id_route" value="{{$id_route}}" readonly  name="id_route">
                    <div class="form-group">
                        <label for="amount">Số lượng vé</label>
                        <input type="amount" class="form-control" id="amount"  placeholder="Số lượng vé"  name="amount">
                    </div>
                    <div class="form-group">
                        <label for="time">Loại xe</label>
                        <select class="form-control" name="vehicle_type" id="vehicle_type">
                            <option value="Nằm">Nằm</option>
                            <option value="Ngồi">Ngồi</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="text" class="form-control" id="price"  placeholder="Giá vé"  name="price">
                    </div>
                    <div class="form-group">
                        <label for="date">Ngày đi</label>
                        <input type="date" class="form-control" id="date" placeholder="Ngày đi" name="date">
                    </div>
                    <div class="form-group">
                        <label for="time">Giờ khởi hành</label>
                        <input type="time" class="form-control" id="time"  placeholder="Giờ khởi hành"  name="time">
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