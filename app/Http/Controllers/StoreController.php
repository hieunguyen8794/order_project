<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Store;
use App\User;
use Auth;
class StoreController extends Controller
{
    public function getList(){
    	$data = Store::select('id','name','address','owner_phone','owner_store','about_store','id_user')->orderBy('id','DESC')->get()->toArray();
		return view('admin.store.list',compact('data'));
    }
    public function getAdd(){
    	$user = User::select('name','id','phone')->get()->toArray();
    	return view('admin.store.add',compact('user'));
    }
    public function postAdd(StoreRequest $request){
    	$sto = new Store;
    	$sto->name = $request->txtStoName;
    	$sto->address = $request->txtAddress;
    	$sto->about_store = $request->txtIntro;
    	$sto->id_user = Auth::user()->id;
    	$sto->owner_store = $request->txtOwnerName;
        $sto->owner_phone = $request->txtPhone;
    	$sto->save();
    	return redirect()->route('admin.store.list')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công !']);

    }
    public function getDel($id){
    	$sto = Store::find($id);
        $sto->delete($id);
        return redirect()->route('admin.store.list')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công !']);
    }
    public function getEdit($id){
    	$sto = Store::findOrFail($id)->toArray();
        return view('admin.store.edit', compact('sto','id'));
    }
    public function postEdit(Request $request, $id){
    	$this->validate($request,
            [
                "txtStoName" => "required",
                "txtAddress" => "required",
                "txtIntro" => "required|min:10"
            ],
            [
                "txtStoName.required" => "Tên Cửa Hàng không được trống !!!",
                "txtAddress.required" => "Địa chỉ không được trống !!!",
                "txtIntro.required" => "Giới thiệu không được trống !!!",
                "txtIntro.min" => "Giới thiệu phải có ít nhất 10 ký tự !!!",
            ]
        );
        $sto = Store::find($id);
        $sto->name = $request->txtStoName;
        $sto->address = $request->txtAddress;
        $sto->about_store = $request->txtIntro;
        $sto->id_user = Auth::user()->id;
        $sto->owner_store = $request->txtOwnerName;
        $sto->owner_phone = $request->txtPhone;
        $sto->save();
        return redirect()->route('admin.store.list')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công !']);
    }
    

}
