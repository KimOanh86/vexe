<?php

namespace App\Http\Controllers;

use App\Models\CarModels;
use App\Models\Drive;
use App\Models\TuyenduongModels;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    //
    public function getThem($id)
    {
        $user = User::all();
        $drive = Drive::all();
    	return view('owner.car.car',compact(['id','drive'])); 
    }
    public function postThem(Request $rq)
    {
    	$car = new CarModels();
        $user = new User();
        $ticket = new Ticket();
    	// $bai_dang->id = $rq->id;
        $car->id_owner = $rq->id_owner;
        $car->name_car = $rq->name_car;
        $car->id_route = $rq->id_route;
        $car->id_driver = $rq->id_drive;
        $car->vehicle_type = $rq->vehicle_type;
        $car->number_of_seats = $rq->number_seats; 
    	
    	$car->save();
    	return redirect('owner/tuyenduong/danhsach');

    }
    public function chitiet($id, $idRoute ){
        //láy 2 bản thông qua id bằng nhau => k láy được car để them vé
        $id = Auth::user()->id;
        $cars = CarModels::where('id_owner','=',$id)->where('id_route','=',$idRoute)->get();
        $tickets = Ticket::all();
        return view('owner.car.chitiet',compact('cars','tickets'));

    }
    public function getSua($id)
    {
        $drive = Drive::all();
        $car = CarModels::find($id);
    	return view('owner.car.suacar', compact('car','drive'));
    }
    public function postSua(Request $rq, $id)
    {
        $car = CarModels::find($id);
        $car->id = $rq->id;
        $car->id_owner = $rq->id_owner;
        $car->id_route = $rq->id_route;
        $car->name_car = $rq->name_car;
        $car->id_driver = $rq->id_drive;
        $car->number_of_seats = $rq->number;
        $car->vehicle_type = $rq->vehicle_type;
        $car->save();
        return redirect('owner/tuyenduong/danhsach');

    }

    public function getxoa($id_car, $id_ticket){
        $car = CarModels::find($id_car);
        $ticket = Ticket::find($id_ticket);
    	$car->delete();
        $ticket->delete();
    	return redirect('owner/tuyenduong/danhsach');
    }
}
