<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getList () {
        $data = User::select('id','name','email','level','phone')->orderBy('id','DESC')->get()->toArray();
        return view('admin.user.list',compact('data'));
    }
    public function getAdd () {
        return view('admin.user.add');
    }
    public function postAdd (UserRequest $request) {
        $user = new User;
        $user->name = $request->txtUser;
        $user->email = $request->txtEmail;
        $user->password = Hash::make($request->txtPass);
        $user->phone = $request->txtPhone;
        $user->level = $request->rdoLevel;
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn đã thêm tài khoản thành công']);
    }
    public function getDelete($id){
        $user_current_login = Auth::user()->id;
        $user = User::find($id);
        if(($id == 13) || ($user_current_login !=13 && $user["level"]==1 )){
            return redirect()->route('admin.user.getList')->with(['flash_level'=>'danger','flash_message'=>'Bạn đã không có quyền xóa tài khoản này']);
        }else{
            $user->delete($id);
            return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn đã xóa tài khoản thành công']);
        }
        
    }
    public function getEdit($id){
        $data = User::find($id);
        return view('admin.user.edit',compact('data')); 
    }
    public function postEdit($id,Request $request){
        $user = User::find($id);
        if($request -> input('txtPass')){
            $this->validate($request,
            [
                'txtRePass' => 'same:txtRePass'
            ],
            [
                'txtRePass' => 'Vui lòng nhập lại đúng password'
            ]
            );
            $pass = $request->input('txtPass');
            $user ->password = Hash::make($pass);
        }
        $user->email = $request->txtEmail;
        $user->level = $request->rdoLevel;
        $user->remember_token= $request->input('_token');
        $user->save();
        return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn đã cập nhật tài khoản thành công']);
    }
}
