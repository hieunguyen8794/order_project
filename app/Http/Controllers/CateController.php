<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Cate;
use App\Store;
use App\Cate_Store;
use Auth;
class CateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function getList(){
		$data = Cate::select('id','name','image')->orderBy('id','DESC')->get()->toArray();
        $data2= Cate_Store::select('id_store','id_cate')->get()->toArray();
		return view('admin.cate.list',compact('data','data2'));
	}

    public function getAdd(){
        $data = Store::select('id','name')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.cate.add',compact('data'));
    }

    public function postAdd(CateRequest $request){

        $id_store_current = $request->sltStore;
        $name_cate_current = $request->txtCateName;
        //kiểm tra tên hiện tại đã có trong category chưa,nếu có rồi thì check xem đã có tại cửa hàng chưa,con không thì tạo một category mới như thường
        if(Cate::where('name',$name_cate_current)->exists()){
            $id_cate_current = Cate::select('id')->where('name',$name_cate_current)->pluck('id');
            $store_current = Cate_Store::select('id_store')->where('id_store',$id_store_current)->get()->toArray();
            if(Cate_Store::where(
                [
                    [
                        'id_store',$id_store_current
                    ],
                    [
                        'id_cate',$id_cate_current
                    ]
                ]
            )->exists()){
                
                return redirect()->route('admin.cate.getAdd')->with(['flash_level'=>'danger','flash_message'=>'Cửa hàng đã tồn tại danh mục này !']);
            }else{
                
                //thêm record vào Cate_Store
                $cate_store = new Cate_Store;
                $cate_store->id_cate = $id_cate_current->get(0);
                $cate_store->id_store = $request->sltStore;
                $cate_store->save();
                return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công !']);
            }
        }else{
                $cate = new Cate;
                $cate->name = $request->txtCateName;
                    if($request->hasFile('fileCateName')){
                        $file = $request->file('fileCateName');
                        $name = $file->getClientOriginalName();
                        $fileCate = str_random(4)."_".$name;
                        while(file_exists("../resources/upload/cates/".$fileCate)){
                            $fileCate = str_random(4)."_".$name;
                        }
                        $file->move("../resources/upload/cates/", $fileCate);
                        $cate->image = $fileCate;
                    }else{
                        $cate->image = "";
                    }
                $cate->save();
                //thêm record vào Cate_Store
                $cate_store = new Cate_Store;
                $cate_newest = Cate::select('id')->orderBy('id','desc')->first();
                $cate_store->id_cate = $cate_newest->id;
                $cate_store->id_store = $request->sltStore;
                $cate_store->save();    

    	return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công !']);
        }
    }

    public function getDel($id){
    	$cate = Cate::find($id);
    	$cate->delete($id);
    	return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công !']);
    }

    public function getEdit($id){
    	$cate = Cate::findOrFail($id)->toArray();
    	return view('admin.cate.edit', compact('cate','id'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
            ["txtCateName" => "required"],
            ["txtCateName.required" => "Tên danh mục không được trống !!!"]
        );
        $cate = Cate::find($id);
        $cate->name = $request->txtCateName;
        if($request->hasFile('fileCateName')){
            $file = $request->file('fileCateName');
            $name = $file->getClientOriginalName();
            $fileCate = str_random(4)."_".$name;
            while(file_exists("../resources/upload/cates/".$fileCate)){
                $fileCate = str_random(4)."_".$name;
            }
            $file->move("../resources/upload/cates/", $fileCate);
            unlink("../resources/upload/cates/".$cate->image);
            $cate->image = $fileCate;
        }
        $cate->save();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công !']);
    }
}
