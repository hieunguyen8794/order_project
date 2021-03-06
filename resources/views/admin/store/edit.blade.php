@extends('admin.master')
@section('controller','Category')
@section('action','Add')
@section('content')
<!-- PAGE TITLE -->
<div class="page-title">
    <h2><i class="glyphicon glyphicon-briefcase"></i> Cửa Hàng</h2>
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
                        <h3 class="panel-title"> Thêm Cửa Hàng</h3>
                    </div>

                    <div class="panel-body">

                        @include('admin.blocks.error')
                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên cửa hàng</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                    <input type="text" class="form-control" name="txtStoName" value="{!! old('txtStoName', isset($sto) ? $sto['name'] : null) !!}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Địa chỉ</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                    <input type="text" class="form-control" name="txtAddress" value="{!! old('txtAddress', isset($sto) ? $sto['address'] : null) !!}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tên quản lý</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                    <input readOnly="" type="text" class="form-control" name="txtOwnerName" value="{!! old('txtOwnerName', isset($sto) ? $sto['owner_store'] : null) !!}" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">SĐT quản lý</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                    <input readOnly="" type="text" class="form-control" name="txtPhone" value="{!! old('txtPhone', isset($sto) ? $sto['owner_phone'] : null) !!}" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Giới thiệu</label>
                            <div class="col-md-6 col-xs-12">
                                <textarea name="txtIntro" id="demo" class="form-control" rows="5" >{!! old('txtIntro', isset($sto) ? $sto['about_store'] : null) !!}</textarea>
                                
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