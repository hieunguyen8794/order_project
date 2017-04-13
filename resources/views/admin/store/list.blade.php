@extends('admin.master')
@section('controller','Category')
@section('action','List')
@section('content')
<style>
    .img_Cate{width: 150px;}
</style>
            <!-- PAGE TITLE -->
            <div class="page-title">
                <h2><i class="fa fa-home"></i> Cửa Hàng</h2>
            </div>
            <!-- END PAGE TITLE -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Danh sách Cửa Hàng</h3>
                                <div class="btn-group pull-right">
                                    <button id="myBtn" class="btn btn-danger dropdown-toggle"><i class="fa fa-plus-square"></i><a  href="{!! url('/admin/store/add') !!}">Thêm</a></button>
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
                                    </div> -->
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên cửa hàng</th>
                                                <th>Địa chỉ</th>
                                                <th>Người quản lý</th>
                                                <th>SĐT quản lý</th>
                                                <th>Giới thiệu</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody infinite-scroll="reddit.nextPage()" infinite-scroll-distance="2" infinite-scroll-disabled='reddit.busy'>
                                            <?php $stt = 0 ?> 
                                            @foreach($data as $item)
                                            <?php $stt = $stt + 1 ?>
                                            <tr ng-repeat="cate in reddit.items">
                                                <td>{!! $stt !!}</td>
                                                <td>{!! $item['name'] !!}</td>
                                                <td>{!! $item['address'] !!}</td>
                                                <td>{!! $item['owner_store'] !!}</td>
                                                <td>{!! $item['owner_phone'] !!}</td>
                                                <td>{!! $item['about_store'] !!}</td>
                                                <td><i class="fa fa-pencil fa-fw"></i><a href="{!! URL::route('admin.store.getEdit', $item['id']) !!}">Sửa</a></td>
                                                <td><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc chắn muốn xóa không')" href="{!! URL::route('admin.store.getDel', $item['id']) !!}">Xóa</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                
                                </div>
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
@endsection()