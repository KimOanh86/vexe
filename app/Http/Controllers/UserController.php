<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function getloginAdmin()
    {
    	return view('admin.login');
    }
    public function postloginAdmin(Request $rq)
    {

        $this->validate($rq,[
            'email'=>'required',
            'password'=>'required|min:6|max:32'
        ],[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu có ít nhất 6 kí tự',
            'password.max'=>'Mật khẩu có tối đa 32 kí tự'
        ]);
        if(Auth::attempt(['email'=>$rq->email,'password'=>$rq->password]))
        {
            return redirect('admin/trangchu');
        }
        else
        {
            return redirect('admin/login')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getlogoutAdmin()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function list(){
        $user = User::all();
        $user = DB::table('users')
                ->orderByRaw('created_at DESC')
                ->get();
        return view('admin.user.list',compact('user'));
    }

    public function getSua($id)
    {
        $us = User::find($id);
    	return view('admin.user.edit')->with('us',$us);
    }
    public function postSua(Request $rq, $id)
    {
        $us = User::find($id);
        $us->id = $rq->id;
        $us->name = $rq->name;
        $us->email = $rq->email;
        $us->number_phone = $rq->phone;
        $us->level = $rq->level;
        
        // $bd->id_td = $rq->id_td;
        $us->save();
        return redirect('admin/user/list');

    }
    public function getxoa($id)
    {
    	$us = User::find($id);
    	$us->delete();
    	return redirect('admin/user/list');
    }
}
