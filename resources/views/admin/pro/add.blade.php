@extends('admin.master')
@section('controller','Product')
@section('action','Add')
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
        
            <form class="form-horizontal" action="{!! url('/admin/pro/add') !!}" method="POST" />
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">            
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title"> Thêm Nước Uống</h3>
                    </div>

                    <div class="panel-body">

                        @include('admin.blocks.error')
                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên danh mục</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control" name="sltCate">
                                    <option value="" >--Chọn Danh Mục Nước Uống--</option>
                                    @foreach($cate as $item)
                                        <option value="{!! $item['id'] !!}" >{!! $item["name"] !!}</option>
                                    @endforeach
                                </select>
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên nước uống</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control" name="txtProName" value="{!! old('txtProName') !!}" placeholder="Vui lòng điền tên nước uống"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Giá nước uống</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
                                    <input type="text" class="form-control" name="txtPrice" value="{!! old('txtPrice') !!}" placeholder="Vui lòng điền giá nước uống"/> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Mô tả</label>
                            <div class="col-md-6 col-xs-12">
                                <textarea name="txtDes" id="demo" class="form-control" rows="5" placeholder="Vui lòng điền mô tả">{!! old('txtDes') !!}</textarea>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Trạng thái</label>
                            <label class="radio-inline">
                                <input name="stt" value="1" checked="" type="radio">Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="stt" value="0" type="radio">Ẩn
                            </label>
                        </div>
                        
                    </div>
                    <div class="panel-footer">
                        <button type="reset" class="btn btn-default">Nhập lại</button>
                        <button type="submit" class="btn btn-primary pull-right">Thêm</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- END PAGE CONTENT -->
@endsection()