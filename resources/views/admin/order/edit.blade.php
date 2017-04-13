@extends('admin.master')
@section('content')

<div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                            <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title"> Thêm Danh Mục Sản Phẩm</h3>
                                </div>
                                <div class="panel-body">
                                @include('admin.blocks.error')
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">User Name</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" class="form-control" name="txtUser" placeholder="Vui lòng điền tên đăng nhập" value="{!! old('txtUser', isset($data) ? $data['name'] : null) !!}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                <input type="password" class="form-control" name="txtPass" placeholder="Vui lòng điền mật khẩu" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nhập lại Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                <input type="password" class="form-control" name="txtRePass" placeholder="Vui lòng điền lại mật khẩu" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="email" class="form-control" name="txtEmail" placeholder="Vui lòng điền email" value="{!! old('txtEmail', isset($data) ? $data['email'] : null) !!}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Số điện thoại</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" class="form-control" name="txtPhone" placeholder="Vui lòng điền số điện thoại" value="{!! old('txtPhone', isset($data) ? $data['phone'] : null) !!}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">User Level</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="radio-inline">
                                                <input name="rdoLevel" value="1" type="radio"
                                                    @if($data["level"] == 1)
                                                        checked="checked"
                                                    @endif
                                                >Admin</label>                                                   
                                            <label class="radio-inline">
                                            <input name="rdoLevel" value="2" type="radio"
                                                    @if($data["level"] == 2)
                                                        checked="checked"
                                                    @endif
                                                >Member</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>
                                    <button class="btn btn-primary pull-right" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

@endsection()