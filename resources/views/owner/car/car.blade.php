@extends('owner.layout.index')
@section('content')
<div class="content">
        <div class="container" id="form_add">
            <div class="col-sm-8">
                <h3>Thêm tuyến đường</h3>
                <form action="{{ route('postaddcar') }}" method="POST">
                {{csrf_field()}}
                    
                    
                    <input type="hidden" class="form-control" id="id_owner" value="{{Auth::user()->id}}" readonly name="id_owner">
                    
                    <div class="form-group">
                      <label for="name_car">Tên xe</label>
                      <input type="text" class="form-control" value="{{Auth::user()->name}}" id="name_car" readonly placeholder="Tên xe" name="name_car">
                      
                    </div>
                    <input type="hidden" class="form-control" id="id_route" value="{{$id}}" readonly name="id_route">
                    <div class="form-group">
                        <label for="id_drive">Tên người lái</label>
                        <select class="form-control" name="id_drive" id="id_drive">
                            @foreach($drive as $dv)
                            @if ($dv->id_owner == Auth::user()->id)
                            <option value="{{$dv->id}}">{{$dv->name}}</option>
                            @endif
                            
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="vehicle_type">Loại xe</label>
                            <select class="form-control" name="vehicle_type" id="vehicle_type">
                                <option value="Thường">Thường</option>
                                <option value="Limousine">Limousine</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="number_seats">Số ghế</label>
                            <input type="number" class="form-control" min="20" max="41" id="number_seats" placeholder="Số ghế" name="number_seats">
                        </div>
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