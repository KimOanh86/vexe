<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function getlogin(){
        return view('users.page.login');
    }
    public function postlogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:6|max:32'
        ],[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu có ít nhất 6 kí tự',
            'password.max'=>'Mật khẩu có tối đa 32 kí tự'
        ]);
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]))
        {
            return redirect('home');
        }
        else{
            return redirect('login')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getregister(){
    	return view('Users.page.register');
    } 
    public function postregister(Request $rq){
    	$u = new User();
    	$this->validate($rq,
    		[
    			'name' => 'required',
    			'email' => 'required|email|unique:users,email',
                'sdt' => 'required|unique:users,number_phone|min:10',
    			'password' => 'required|min:6|max:32',
    			'passwordAgain' => 'required|same:password'
    		],
    		[
    			'name.required' =>'Bạn chưa nhập tên người dùng',
    			'email.required' => 'Bạn chưa nhập email',
    			'email.email' => 'Bạn chưa nhập đúng định dạng email',
    			'email.unique' => 'Email đã tồn tại',
                'sdt.required' => 'Bạn chưa nhập sđt',
                'sdt.unique' => 'Sđt đã tồn tại',
                'sdt.min'=>'Sđt tối thiểu có 10 chữ số',
    			'password.required' => 'Bạn chưa nhập mật khẩu',
    			'password.min' => 'Mật khẩu có ít nhất 6 kí tự',
    			'password.max' =>'Mật khẩu tối đa 32 kí tự',
    			'passwordAgain.required' => 'Bạn chưa nhập lại mật khấu',
    			'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
    			
    		]
    	);
    	
    	$u->name= $rq->name;
    	$u->email= $rq->email;
        $u->number_phone= $rq->sdt;
    	$u->password= bcrypt($rq->password);
    	$u->level= 0;
    	$u->save();
    	return redirect('login')->with('thongbao','Đăng kí thành công');
    }
    public function getlogout()
    {
        Auth::logout();
        return redirect('home');
    }
    
}
