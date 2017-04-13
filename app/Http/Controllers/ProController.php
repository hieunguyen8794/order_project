<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProRequest;
use App\Product;
use App\Cate;
use App\Price_history;
use Auth;
class ProController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getList(){
		$data = Product::select('id','name','description','price','avg_rate','status','id_cate')->orderBy('id','DESC')->get()->toArray();
		return view('admin.pro.list',compact('data'));
	}

    public function getAdd(){
    	$cate = Cate::select('name','id')->get()->toArray();
    	return view('admin.pro.add',compact('cate'));
    }
    public function postAdd(ProRequest $request){
       // $pro = Product::select('id')->get();
    	$pro = new Product;
        $pri = new Price_history;
    	$pro->name = $request->txtProName;
    	$pro->description = $request->txtDes;
    	$pro->price = $request->txtPrice;
    	$pro->id_cate = $request->sltCate;
    	$pro->status = $request->stt;
    	$pro->save();

        $pro_newest = Product::select('id')->orderBy('id', 'desc')->first();
        $pri->id_product = $pro_newest->id;
        $pri->price = $request->txtPrice;
		$pri->reason = "";
        $pri->save();
    	return redirect()->route('admin.pro.list')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công !']);
    }


    public function getDel($id){
    	$pro = Product::find($id);
    	$pro->delete($id);
    	return redirect()->route('admin.pro.list')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công !']);
    }

    public function getEdit($id){
    	$pro = Product::findOrFail($id)->toArray();
    	$cate = Cate::select('name','id')->get()->toArray();
    	return view('admin.pro.edit', compact('pro','cate','id'));
    }

    public function postEdit(Request $request, $id){
    	$this->validate($request,
            [
            	"txtProName" => "required",
             	"txtPrice" => "required|numeric",
                'txtReason' => "required",
             	"txtDes" => "required"

            ],
            [
	            "txtProName.required" => "Tên Nước Uống không được trống !!!",
	            "txtPrice.required" => "Giá Nước Uống không được trống !!!",
	            "txtPrice.numeric" => "Giá Nước Uống phải là số !!!",
                "txtReason.required" => "Lý Do không được trống !!!",
	           	"txtDes.required" => "Mô tả không được trống !!!"
           	]
        );
    	$pro = Product::find($id);
    	$pro->name = $request->txtProName;
    	$pro->description = $request->txtDes;
    	$pro->price = $request->txtPrice;
    	$pro->id_cate = $request->sltCate;
    	$pro->status = $request->stt;
    	$pro->save();

        $pri = new Price_history;
        $pri->id_product = $pro->id;
        $pri->price = $request->txtPrice;
        $pri->reason = $request->txtReason;
        
        $pri->save();
    	return redirect()->route('admin.pro.list')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công !']);
    }
}
