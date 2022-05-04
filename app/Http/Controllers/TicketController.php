<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class TicketController extends Controller
{
    //
    public function getThemve($id_route, $id)
    {
        $user = User::all();
        $tickets = Ticket::all();
    	return view('owner.ticket.themve',compact(['id','tickets','id_route'])); 
    }
    public function postThemve(Request $rq)
    {
        $ticket = new Ticket();
    	// $bai_dang->id = $rq->id;
        $ticket->id_car = $rq->id_car;
        $ticket->id_owner = $rq->id_owner;
        $ticket->id_route = $rq->id_route;
        $ticket->price = $rq->price;
        $ticket->amount = $rq->amount;
        $ticket->vehicle_type = $rq->vehicle_type;
        $ticket->date = $rq->date;
        $ticket->time_start = $rq->time;
    	
    	$ticket->save();
    	return redirect('owner/tuyenduong/danhsach');

    }

    public function getSua($id_ticket)
    {
        $tk = Ticket::find($id_ticket);
    	return view('owner.ticket.editticket')->with('tk',$tk);
    }
    public function postSua(Request $rq, $id_ticket)
    {
        $tk = Ticket::find($id_ticket);
        $tk->id = $rq->id;
        $tk->id_owner = $rq->id_owner;
        $tk->id_car = $rq->id_car;
        $tk->id_route = $rq->id_route;
        $tk->price = $rq->price;
        $tk->amount = $rq->amount;
        $tk->vehicle_type = $rq->vehicle_type;
        $tk->time_start = $rq->time;
        $tk->date = $rq->date;
        $tk->save();
        return redirect('owner/tuyenduong/danhsach');

    }
}
