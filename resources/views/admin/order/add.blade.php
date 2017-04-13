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
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tên danh mục</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control" name="sltCate">
                                                <option value="">--Chọn Cửa Hàng--</option>
                                                <option value="34">Cửa hàng A</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Số Bàn</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" class="form-control" name="txtUser" placeholder="Vui lòng điền số bàn" value="">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tên khách hàng</label>
                                        <div class="col-md-6 col-xs-12">
                                           <select data-live-search="true" data-live-search-style="startsWith" class="selectpicker">
                                                <option value="4444">4444</option>
                                                <option value="Fedex">Fedex</option>
                                                <option value="Elite">Elite</option>
                                                <option value="Interp">Interp</option>
                                                <option value="Test">Test</option>
                                            </select>
                                        </div>
                                    </div>
                                    <table id="customers" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Số Lượng</th>
                                                <th>Đơn giá</th>
                                                <th>Thành tiền</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-md-6 col-xs-12">
                                                        <div>
                                                        <select data-live-search="true" data-live-search-style="startsWith" class="selectpicker" id="select1">
                                                                <option value="" select>please</option>
                                                                <option value="4444">4444</option>
                                                                <option value="Fedex">Fedex</option>
                                                                <option value="Elite">Elite</option>
                                                                <option value="Interp">Interp</option>
                                                                <option value="Test">Test</option>
                                                        </select></div>
                                                </td>
                                                <td><input type="text" value="1" /></td>
                                                <td>20.000 VNĐ</td>
                                                <td>60.000 VNĐ</td>
                                                <td><input type="button" class="ibtnDel btn btn-md btn-danger " onclick="return xacnhanxoa('Bạn có chắc là muốn xóa không?')" value="Delete" disabled=""></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <!-- <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" /> -->
                                                    <input type="button" id="addrow" value="Add Row" />
                                                </td>
                                                <td><strong>Tổng tiền</strong></td>
                                                <td><strong>60.000 VNĐ</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
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