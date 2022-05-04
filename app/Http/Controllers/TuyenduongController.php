<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TuyenduongModels;
use App\Models\CarModels;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class TuyenduongController extends Controller
{
    //
    public function tuyenduong(){
        $id = Auth::user()->id;
        $tuyen_duong = TuyenduongModels::where('id_owner','=',$id)->get();
        $car = CarModels::where('id_route','=',$id);
        return view('owner.tuyenduong.tuyenduong',compact('id','car','tuyen_duong'));
    }
    public function getThem()
    {
    	return view('owner.tuyenduong.themtuyen'); 
    }
    public function postThem(Request $rq)
    {
    	$td = new TuyenduongModels();
    	// $bai_dang->id = $rq->id;
        $td->id_owner = $rq->id_owner;
        $td->starting_location = $rq->starting_location;
        $td->ending_location = $rq->ending_location;
        $td->number_of_vehicles = $rq->amount;
        
    	// $bai_dang->id_td = $rq->id_td;

    	
    	
    	$td->save();
    	return redirect('owner/tuyenduong/danhsach');

    }


    public function getSua($id)
    {
        $td = TuyenduongModels::find($id);
    	return view('owner.tuyenduong.sua')->with('td',$td);
    }
    public function postSua(Request $rq, $id)
    {
        $td = TuyenduongModels::find($id);
        $td->id = $rq->id;
        $td->id_owner = $rq->id_owner;
        $td->starting_location = $rq->starting_location;
        $td->ending_location = $rq->ending_location;
        $td->number_of_vehicles = $rq->amount;
        
        // $bd->id_td = $rq->id_td;
        $td->save();
        return redirect('owner/tuyenduong/danhsach');

    }

    public function getxoa($id)
    {
    	$td = TuyenduongModels::find($id);
    	$td->delete();
    	return redirect('owner/tuyenduong/danhsach');
    }
    
    
}
