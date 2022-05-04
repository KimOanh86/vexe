@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container" id="form_add">
            <div class="col-sm-8">
                <h3>Sửa tuyến đường</h3>
                <form action="" method="post">
                {{csrf_field()}}
                    <input  type="hidden" class="form-control" name="id" value="{{$car->id}}" readonly="">
                    <input type="hidden" class="form-control" id="id_owner" value="{{Auth::user()->id}}" readonly name="id_owner">
                    <input type="hidden" class="form-control" id="id_route" value="{{$car->id_route}}" readonly name="id_route">
                    
                    <div class="form-group">
                        <label for="id_drive">Người lái</label>
                        <select class="form-control" name="id_drive" id="id_drive">
                            @foreach($drive as $dr)
                            @if ($dr->id_owner == Auth::user()->id)
                                <option value="{{$dr->id}}">{{$dr->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label label for="name_car">Tên xe</label>
                        <input type="text"  value="{{$car->name_car}}"  class="form-control" id="ending_location" placeholder="Tên xe" name="name_car">
                    </div>
                    <div class="form-group">
                        <label for="number">Số lượng xe</label>
                        <input type="number" value="{{$car->number_of_seats}}" class="form-control" min="20" max="41" id="number" placeholder="Số lượng ghế" name="number">
                    </div>
                    <div class="form-group">
                        <label for="vehicle_type">Số lượng xe</label>
                        <select class="form-control" name="vehicle_type" id="vehicle_type">
                            <option value="thuong">Thường</option>
                            <option value="limousine">Limousine</option>
                        </select>
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