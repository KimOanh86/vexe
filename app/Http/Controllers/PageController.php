<?php

namespace App\Http\Controllers;

use App\Models\CarModels;
use App\Models\info;
use App\Models\Ticket;
use App\Models\TuyenduongModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    public function hienthi(){
        return view('users.page.home');
    }
    public function PostSearch(Request $request){
        $this->validate($request,[
            'location_start'=>'required',
            'location_end'=>'required',
            'date_start'=>'required',
        ],[
            'loaction_start.required'=>'Bạn chưa nhập tại đây',
            'location_end.required'=>'Bạn chưa nhập tại đây',
            'date_start.required'=>'Bạn chưa nhập tại đây',
        ]);
        $location_start = $request->location_start;
        $location_end = $request->location_end;
        $date = $request->date_start;
        // truy vấng để tìm id
        $dataRoute = DB::table('route')->select('id')->where([
            ['starting_location','like','%'.$location_start.'%'],
            ['ending_location','like','%'.$location_end.'%'],
            ])
        ->get();
        // add id cuả route vào mảng để so sánh
        $arrayIdRoute = array();
        for($k=0; $k < count($dataRoute); $k++){
            array_push($arrayIdRoute, $dataRoute[$k]->id);
        }
        // truy vấng để láy dữ liệu ticket
        $tickets = DB::table('ticket')
        ->where('date','like','%'.$date.'%')
        ->whereIn('id_route',$arrayIdRoute)
        ->get();
        $routes = TuyenduongModels::all();
        $cars = CarModels::all();
        //dd(empty($tickets[0]));
        if(!empty($tickets[0])){
            return view('users.page.search', compact(['tickets','routes','cars']));
        }
        else{
            return redirect('home')->with("thongbao","Không có vé nào như vậy");
        }
        
    }
    public function getchontuyen($id_route, $id_ticket){
        return view('users.page.chontuyen', compact(['id_route','id_ticket']));
    }
    public function postchontuyen(Request $rq){
        $info = new info();
        $info->id_route = $rq->id_route;
        $info->id_ticket = $rq->id_ticket;
        $info->id_owner = $rq->id_owner;
        $info->name = $rq->name;
        $info->number_phone = $rq->sdt;
        $info->email = $rq->email;
        $info->CMND = $rq->cmnd; 
        $info->amount_ticket = $rq->amount; 
    	$info->save();

    	return redirect('home');
    }


    public function limousine(){
        return view('users.page.limousine');
    }


    public function vecuaban(){
        $id = Auth::user()->id;
        $info = info::where('id_owner','=',$id)->get();
        $route = TuyenduongModels::all();
        $tickets = Ticket::all();
        return view('users.page.ve',compact('info','route','tickets'));
    }

    public function huyve($id){
        $if = info::find($id);
    	$if->delete();
    	return redirect('vecuaban');
    }
}
