@extends('admin.master')
@section('controller','Store')
@section('action','List')
@section('content')
            <!-- PAGE TITLE -->
            <div class="page-title">
                <h2><i class="fa fa-users"></i> Người Dùng</h2>
            </div>
            <!-- END PAGE TITLE -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Danh sách Người Dùng</h3>
                                <div class="btn-group pull-right">
                                    <button id="myBtn" class="btn btn-danger dropdown-toggle"><i class="fa fa-plus-square"></i><a  href="{!! route('admin.user.getAdd') !!}">Thêm</a></button>
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
                                                <th>Tên người dùng</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Chức vụ</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $stt=0 ?>
                                        @foreach($data as $item)
                                            <?php $stt=$stt+1 ?>
                                            <tr>
                                                <td>{!! $stt !!}</td>
                                                <td>{!! $item["name"] !!}</td>
                                                <td>{!! $item["email"] !!}</td>
                                                <td>{!! $item["phone"] !!}</td>
                                                <td>
                                                    @if ($item["id"] == 13)
                                                        Ông Chủ
                                                    @elseif ($item["level"]==1)
                                                        Quản Lý
                                                    @else
                                                        Thành Viên
                                                    @endif
                                                </td>
                                                <td><i class="fa fa-pencil fa-fw"></i><a href="{!! URL::route('admin.user.getEdit',$item['id']) !!}">Sửa</a></td>
                                                <td><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc là muốn xóa không?')" href="{!! URL::route('admin.user.getDelete',$item['id']) !!}">Xóa</a></td>
                                            </tr>
                                            @endforeach
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
                                        <a class="paginate_button next" aria-controls="customers2" data-dt-idx="7" tabindex="0" id="customers2_next">Next</a></div>-->
                                </div>
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
@endsection()