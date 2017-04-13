@extends('admin.master')
@section('controller','Category')
@section('action','Add')
@section('content')
<!-- PAGE TITLE -->
<div class="page-title">
    <h2><i class="glyphicon glyphicon-briefcase"></i> Danh Mục</h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
        
            <form class="form-horizontal" action="{!! url('/admin/cate/add') !!}" method="POST" enctype="multipart/form-data" />
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">            
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title"> Thêm Danh Mục Nước Uống</h3>
                    </div>

                    <div class="panel-body">

                        @include('admin.blocks.error')
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên danh mục</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control" name="txtCateName" value="{!! old('txtCateName') !!}" placeholder="Vui lòng điền tên danh mục nước uống"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên cửa hàng</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control" name="sltStore">
                                    <option value="" >--Chọn Cửa Hàng--</option>
                                    @foreach($data as $item)
                                        <option value="{!! $item['id'] !!}" >{!! $item["name"] !!}</option>
                                    @endforeach
                                </select>
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Hình ảnh</label>
                            <div class="col-md-6 col-xs-12">
                                <a class="file-input-wrapper btn btn-default  fileinput btn-primary"><span>Chọn hình ảnh</span><input type="file" class="fileinput btn-primary" name="fileCateName" id="filename" title="Chọn hình ảnh" value="{!! old('fileCateName') !!}"/></a>
                            </div>
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