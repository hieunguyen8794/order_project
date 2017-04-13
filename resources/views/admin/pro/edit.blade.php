@extends('admin.master')
@section('controller','Product')
@section('action','Edit')
@section('content')
<!-- PAGE TITLE -->
<div class="page-title">
    <h2><i class="fa fa-coffee" aria-hidden="true"></i> Nước Uống</h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
        
            <form class="form-horizontal" action="" method="POST" />
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">            
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title"> Sửa Nước Uống</h3>
                    </div>

                    <div class="panel-body">

                        @include('admin.blocks.error')
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên danh mục</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control" name="sltCate">
                                    
                                    @foreach($cate as $item)
                                        <option
                                            @if($pro["id_cate"] == $item["id"])
                                                {{"selected"}}
                                            @endif

                                            value="{!! $item['id'] !!}" 
                                        >{!! $item["name"] !!}</option>
                                    @endforeach
                                </select>
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên nước uống</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control" name="txtProName" value="{!! old('txtProName', isset($pro) ? $pro['name'] : null) !!}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Giá nước uống</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
                                    <input type="text" class="form-control" name="txtPrice" value="{!! old('txtPrice', isset($pro) ? $pro['price'] : null) !!}"> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Lý do</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-edit"></span></span>
                                    <input type="text" class="form-control" name="txtReason" value="{!! old('txtReason') !!}" placeholder="Vui lòng điền lý do" /> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Mô tả</label>
                            <div class="col-md-6 col-xs-12">
                                <textarea name="txtDes" id="demo" class="form-control" rows="5" >{!! old('txtDes', isset($pro) ? $pro['description'] : null) !!}</textarea>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Trạng thái</label>
                            <label class="radio-inline">
                                <input name="stt" value="1"  
                                    @if($pro["status"] == 1)
                                        {{"checked"}}
                                    @endif
                                type="radio" />Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="stt" value="0" 
                                    @if($pro["status"] == 0)
                                        {{"checked"}}
                                    @endif
                                type="radio" />Ẩn
                            </label>
                        </div>
                        
                    </div>
                    <div class="panel-footer">
                        <button type="reset" class="btn btn-default">Nhập lại</button>
                        <button type="submit" class="btn btn-primary pull-right">Sửa</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- END PAGE CONTENT -->
@endsection()