@extends('admin.master')
@section('controller','Store')
@section('action','Add')
@section('content')
<!-- PAGE TITLE -->
            <div class="page-title">
                <h2><i class="fa fa-users"></i> Người Dùng</h2>
            </div>
            <!-- END PAGE TITLE -->
<div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                            <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title"> Thêm Người Dùng</h3>
                                </div>
                                <div class="panel-body">
                                @include('admin.blocks.error')
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tên người dùng</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" class="form-control" name="txtUser" placeholder="Vui lòng điền tên đăng nhập" value="{!! old('txtUser') !!}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Mật khẩu</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                <input type="password" class="form-control" name="txtPass" placeholder="Vui lòng điền mật khẩu">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nhập lại mật khẩu</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                <input type="password" class="form-control" name="txtRePass" placeholder="Vui lòng điền lại mật khẩu">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="email" class="form-control" name="txtEmail" placeholder="Vui lòng điền email" value="{!! old('txtEmail') !!}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Số điện thoại</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" class="form-control" name="txtPhone" placeholder="Vui lòng điền số điện thoại" value="{!! old('txtPhone') !!}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Chức vụ</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="radio-inline">
                                            <input name="rdoLevel" value="1" checked="" type="radio">Quản lý</label>
                                            <label class="radio-inline">
                                            <input name="rdoLevel" value="2" type="radio">Thành Viên</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="reset" class="btn btn-default">Nhập lại</button>
                                    <button type="submit" class="btn btn-primary pull-right" type="submit">Thêm</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

@endsection()