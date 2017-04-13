@extends('admin.master')
@section('controller','Store')
@section('action','Edit')
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
                                    <h3 class="panel-title"> Sửa Người Dùng</h3>
                                </div>
                                <div class="panel-body">
                                @include('admin.blocks.error')
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tên người dùng</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" class="form-control" name="txtUser" placeholder="Vui lòng điền tên đăng nhập" value="{!! old('txtUser', isset($data) ? $data['name'] : null) !!}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Mật khẩu</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                <input type="password" class="form-control password" name="txtPass" placeholder="Vui lòng điền mật khẩu" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nhập lại mật khẩu</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                <input type="password" class="form-control password" name="txtRePass" placeholder="Vui lòng điền lại mật khẩu" />
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
                                        <label class="col-md-3 col-xs-12 control-label">Chức vụ</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="radio-inline">
                                                <input name="rdoLevel" value="1" type="radio"
                                                    @if($data["level"] == 1)
                                                        checked="checked"
                                                    @endif
                                                >Quản lý</label>                                                   
                                            <label class="radio-inline">
                                            <input name="rdoLevel" value="2" type="radio"
                                                    @if($data["level"] == 2)
                                                        checked="checked"
                                                    @endif
                                                >Thành Viên</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="reset" class="btn btn-default">Nhập lại</button>
                                    <button type="submit" class="btn btn-primary pull-right" type="submit">Sửa</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

@endsection()

@section('script')
    <script>
        $(document).ready(function(){
            $("#changePassword").change(function() {
                /* Act on the event */
                if($(this).is(":checked")){
                    $(".password").removeAttr('disabled');
                }else{
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection