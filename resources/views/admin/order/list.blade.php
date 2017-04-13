@extends('admin.master')
@section('content')

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Danh Mục Sản Phẩm</h3>
                                <div class="btn-group pull-right">
                                    <button id="myBtn" class="btn btn-danger dropdown-toggle"><i class="fa fa-plus-square"></i><a  href="{!! route('admin.order.getAdd') !!}">Thêm</a></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="customers2_wrapper" class="dataTables_wrapper no-footer">
                                    <!--<div class="dataTables_length" id="customers2_length">
                                        <label>Show <select name="customers2_length" aria-controls="customers2" class="form-control">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        </select> entries</label>
                                    </div>
                                    <div id="customers2_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control " placeholder="" aria-controls="customers2"></label>
                                    </div>-->
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>UserName</th>
                                                <th>Số bàn</th>
                                                <th>Ghi chú</th>
                                                <th>Tình trạng</th>
                                                <th>Tổng tiền</th>
                                                <th>Thanh Toán</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $stt=0 ?>
                                            <?php $stt=$stt+1 ?>
                                            <tr>
                                                <td>{!! $stt !!}</td>
                                                <td>Hiếu Nguyễn</td>
                                                <td>19</td>
                                                <td>Cafe đen ít sửa,Cafe sửa không đá</td>
                                                <td><span class="label label-danger">Chưa Thanh Toán</span></td>
                                                <td>22.000vnđ</td>
                                                <td><button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#modal_large">Thanh Toán</button></td>
                                                <td><i class="fa fa-pencil fa-fw"></i><a href="#">Sửa</a></td>
                                                <td><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc là muốn xóa không?')" href="#">Xóa</a></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <?php $stt=0 ?>
                                            <?php $stt=$stt+1 ?>
                                            <tr>
                                                <td>{!! $stt !!}</td>
                                                <td>Hiếu Nguyễn</td>
                                                <td>19</td>
                                                <td>Cafe đen ít sửa,Cafe sửa không đá</td>
                                                <td><span class="label label-danger">Chưa Thanh Toán</span></td>
                                                <td>22.000vnđ</td>
                                                <td><button type="button" class="btn btn-success btn-rounded">Thanh Toán</button></td>
                                                <td><i class="fa fa-pencil fa-fw"></i><a href="#">Sửa</a></td>
                                                <td><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc là muốn xóa không?')" href="#">Xóa</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <!--<div class="dataTables_info" id="customers2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="customers2_paginate">
                                        <a class="paginate_button previous disabled" aria-controls="customers2" data-dt-idx="0" tabindex="0" id="customers2_previous">Previous</a>
                                        <span>
                                        <a class="paginate_button current" aria-controls="customers2" data-dt-idx="1" tabindex="0">1</a>
                                        <a class="paginate_button " aria-controls="customers2" data-dt-idx="2" tabindex="0">2</a>
                                        <a class="paginate_button " aria-controls="customers2" data-dt-idx="3" tabindex="0">3</a>
                                        <a class="paginate_button " aria-controls="customers2" data-dt-idx="4" tabindex="0">4</a>
                                        <a class="paginate_button " aria-controls="customers2" data-dt-idx="5" tabindex="0">5</a>
                                        <a class="paginate_button " aria-controls="customers2" data-dt-idx="6" tabindex="0">6</a>
                                        </span>
                                        <a class="paginate_button next" aria-controls="customers2" data-dt-idx="7" tabindex="0" id="customers2_next">Next</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->
                    </div>
                </div>
                
            </div>
            <!-- END PAGE CONTENT -->
            <!--Modal-->
          <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Chi tiết hóa đơn</h4>
                    </div>
                    <div class="modal-body">
                        <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Số Lượng</th>
                                                <th>Đơn giá</th>
                                                <th>Thành tiền</th>
                                                <th>Loại giao hàng</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Cafe sửa</td>
                                                <td>2</td>
                                                <td>19.000 VNĐ</td>
                                                <td>38.000 VNĐ</td>
                                                <td>Uống tại quán</td>
                                                <td><i class="fa fa-pencil fa-fw"></i><a href="#">Sửa</a></td>
                                                <td><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc là muốn xóa không?')" href="#">Xóa</a></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>2</td>
                                                <td>Cafe đen sài gòn</td>
                                                <td>1</td>
                                                <td>22.000 VNĐ</td>
                                                <td>22.000 VNĐ</td>
                                                <td>Mang về</td>
                                                <td><i class="fa fa-pencil fa-fw"></i><a href="#">Sửa</a></td>
                                                <td><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc là muốn xóa không?')" href="#">Xóa</a></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><strong>Tổng tiền</strong></td>
                                                <td><strong>60.000 VNĐ</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Thanh Toán Ngay</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
                    </div>
                </div>
            </div>
        </div> 
            <!--End Modal-->
            
@endsection()