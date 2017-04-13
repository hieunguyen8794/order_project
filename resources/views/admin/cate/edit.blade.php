@extends('admin.master')
@section('controller','Category')
@section('action','Edit')
@section('content')
<!-- PAGE TITLE -->
<style>
    .img_Cate{width: 150px;}
</style>
<div class="page-title">
    <h2><i class="glyphicon glyphicon-briefcase"></i> Danh Mục</h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title"> Sửa Danh Mục Nước Uống</h3>
                    </div>
                    <div class="panel-body">
                        @include('admin.blocks.error')
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên danh mục</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" class="form-control" name="txtCateName" value="{!! old('txtCateName', isset($cate) ? $cate['name'] : null) !!}" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Hình ảnh hiện tại</label>
                            <img src="{!! asset('../resources/upload/cates/'.$cate['image']) !!}" class="img_Cate" />
                            <input type="hidden" name="img_current" value="{!! $cate['image'] !!}"/>

                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Hình ảnh</label>
                            
                            <div class="col-md-6 col-xs-12">
                                <a class="file-input-wrapper btn btn-default  fileinput btn-primary"><span>Chọn hình ảnh</span><input type="file" class="fileinput btn-primary" name="fileCateName" id="filename" title="Chọn hình ảnh"></a>
                            </div>
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