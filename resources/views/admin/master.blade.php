<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Trang Quản Lý - Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('admin\css\theme-default.css') }}" />
    <!-- EOF CSS INCLUDE -->

    <!-- DataTables CSS -->
    <!-- <link href="{{ asset('admin/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet"> -->

    <!-- DataTables Responsive CSS -->
     <link href="{{ asset('admin/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet"> 
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="admin.html">{{ Auth::user()->name }}</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="{{ asset('admin/img/user/avatar.jpg') }}" alt="hn8794" />
                    </a>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="{{ asset('admin/img/user/avatar.jpg') }}" alt="hn8794" />
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name">{{ Auth::user()->name }}</div>
                            <div class="profile-data-title" <?php $level=Auth::user()->level ?>>
                                    @if ($level == 3)
                                        Ông Chủ
                                    @elseif ($level == 1)
                                        Quản Lý
                                    @else
                                        Thành Viên
                                    @endif
                            </div>
                        </div>
                        <div class="profile-controls">
                            <a href="{!! URL::route('admin.user.getEdit',Auth::user()->id) !!}" class="profile-control-left"><span class="fa fa-info"></span></a>
                            <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                        </div>
                    </div>
                </li>
                <li class="">
                    <a href="{!! url('/') !!}"><span class="fa fa-table"></span><span class="xn-text">Trang chủ</span></a>
                </li>
                <li class="">
                    <a href="{!! url('/admin/cate/list') !!}"><i class="glyphicon glyphicon-briefcase"></i><span class="xn-text">Danh Mục Nước Uống</span></a>
                </li>
                <li class="">
                    <a href="{!! url('/admin/pro/list') !!}"><i class="fa fa-coffee"></i> <span class="xn-text">Nước Uống</span></a>
                </li>
                <li class="">
                    <a href="{!! url('/admin/user/list') !!}"><i class="fa fa-users"></i> <span class="xn-text">Người Dùng</span></a>
                </li>
                <li class="">
                    <a href="{!! url('/admin/store/list') !!}"><i class="fa fa-home"></i> <span class="xn-text">Cửa Hàng</span></a>
                </li>
                <li class="">
                    <a href="{!! url('/admin/order/list') !!}"><i class="fa fa-shopping-cart"></i> <span class="xn-text">Đơn hàng</span></a>
                </li>
            </ul>
            <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..." />
                    </form>
                </li>
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- END SIGN OUT -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Basic</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE TITLE -->
            <!--<div class="page-title">
                <h2><i class="glyphicon glyphicon-briefcase"></i> Danh Mục</h2>
            </div>-->
            <!-- END PAGE TITLE -->

            <div class="col-lg-12">
                @if (Session::has('flash_message'))
                    <div class="alert alert-{!! Session::get('flash_level') !!}">
                        {!! Session::get('flash_message') !!}
                    </div>
                @endif
            </div>

            <!--Đây là nơi chứa nội dung-->
            @yield('content')
            <!--END Đây là nơi chứa nội dung-->
            
            </div>
        <!-- END PAGE CONTAINER -->



        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> <strong>THOÁT</strong> ?</div>
                    <div class="mb-content">
                        <p>Bạn có chắc chắn bạn muốn thoát?</p>
                        <p>Nhấn KHÔNG nếu bạn muốn tiếp tục làm việc. Nhấn CÓ để đăng xuất người dùng hiện tại.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a  href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                            class="btn btn-success btn-lg">CÓ</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            <button class="btn btn-default btn-lg mb-control-close">KHÔNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--END MESSAGE DELETE-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="{{ asset('admin/audio/alert.mp3') }}" preload="auto"></audio>
        <audio id="audio-fail" src="{{ asset('admin/audio/fail.mp3') }}" preload="auto"></audio>
        <!-- END PRELOADS -->

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/myscript.js') }}"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src="{{ asset('admin/js/icheck.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/jquery.mCustomScrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/bootstrap-select.js') }}"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- DataTables JavaScript -->
         <script src="{{ asset('admin/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script> 

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{ asset('admin/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/actions.js') }}"></script>
        <!-- END TEMPLATE -->

         <script>
        $(document).ready(function() {
            $('#customers2').DataTable({
                responsive: true
            });
        });
        </script> 

        <!-- END SCRIPTS -->




</body>

</html>