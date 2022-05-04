<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\TuyenduongModels;
use App\Models\CarModels;

use function Ramsey\Uuid\v1;

class OwnerController extends Controller
{
    public function getlogin(){
        return view('owner.login');
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
            $user = User::where(["email" => $request->email])->first();
            Auth::login($user);
            return redirect('owner/home');
        }
        else{
            return redirect('owner/login')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getregister(){
    	return view('owner.register');
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
    	$u->level= 2;
    	$u->save();
    	return redirect('owner/login')->with('thongbao','Đăng kí thành công');
    }
    public function getlogout()
    {
        Auth::logout();
        return redirect('owner/login');
    }
    public function home(){
        return view('owner.home');
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
        if(!empty($tickets[0])){
            return view('owner.search', compact(['tickets','routes','cars']));
        }
        else{
            return redirect('owner/home')->with("thongbao","Không có vé nào như vậy");
        }
    }
}
