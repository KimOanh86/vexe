<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drive;
use Illuminate\Support\Facades\Auth;

class DriveController extends Controller
{
    //
    public function list(){
        $id = Auth::user()->id;
        $drive = Drive::where('id_owner','=',$id)->get();
        // $drive = Drive::all();
        return view('owner.drive.list',compact('drive'));
    }
    public function getthem()
    {
    	return view('owner.drive.add'); 
    }
    public function postthem(Request $rq)
    {
    	$dr = new Drive();
        $dr->id_owner = $rq->id_owner;
        $dr->name = $rq->name;
        $dr->number_phone = $rq->phone;
    	
    	$dr->save();
    	return redirect('owner/drive/danhsach');

    }
    public function getSua($id)
    {
        $dr = Drive::find($id);
    	return view('owner.drive.edit')->with('dr',$dr);
    }
    public function postSua(Request $rq, $id)
    {
        $dr = Drive::find($id);
        $dr->id = $rq->id;
        $dr->id_owner = $rq->id_owner;
        $dr->name = $rq->name;
        $dr->number_phone = $rq->number_phone;
        
        // $bd->id_td = $rq->id_td;
        $dr->save();
        return redirect('owner/drive/danhsach');

    }
    public function getxoa($id)
    {
    	$dr = Drive::find($id);
    	$dr->delete();
    	return redirect('owner/drive/danhsach');
    }
}
