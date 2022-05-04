@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container" id="form_add">
            <div class="col-sm-8">
                <h3>Sửa tuyến đường</h3>
                <form action="" method="post">
                {{csrf_field()}}
                   
                        <input type="hidden" class="form-control" name="id" value="{{$tk->id}}" readonly="">
                
                        <input type="hidden" class="form-control" id="id_owner" value="{{Auth::user()->id}}" readonly name="id_owner">
                   
                        <input type="hidden" class="form-control" id="id_car" value="{{$tk->id_car}}" readonly name="id_car">
                    
                        <input type="hidden" class="form-control" id="id_route" value="{{$tk->id_route}}" readonly name="id_route">
                
                    <div class="form-group">
                      <label for="price">Giá vé</label>
                      <input value="{{$tk->price}}" type="text" class="form-control" id="price" placeholder="Giá vé" name="price">
                    </div>
                    <div class="form-group">
                      <label for="vehicle_type">Loại xe</label>
                      <input type="text"  value="{{$tk->vehicle_type}}" class="form-control" id="vehicle_type" placeholder="Loại xe" name="vehicle_type">
                    </div>
                    <div class="form-group">
                        <label for="amount">Số lượng vé</label>
                        <input type="number" value="{{$tk->amount}}" class="form-control" min="20" max="41" id="amount" placeholder="Số lượng vé" name="amount">
                    </div>
                    <div class="form-group">
                        <label for="date">Ngày đi</label>
                        <input value="{{$tk->date}}" type="date" class="form-control" id="date" placeholder="Ngày đi" name="date">
                      </div>
                      <div class="form-group">
                        <label for="time">Giờ khởi hành</label>
                        <input value="{{$tk->time_start}}" type="time" class="form-control" id="time" placeholder="Giờ khởi hành" name="time">
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