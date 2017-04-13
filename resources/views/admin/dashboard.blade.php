@extends('admin.master')
@section('content')

            <div class="row">
                <div class="col-md-3">
                    <!-- START WIDGET MESSAGES -->
                    <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                        <div class="widget-item-left">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count">48</div>
                            <div class="widget-title">New messages</div>
                            <div class="widget-subtitle">In your mailbox</div>
                        </div>
                    </div>
                    <!-- END WIDGET MESSAGES -->
                </div>
                <div class="col-md-3">
                    <!-- START WIDGET MESSAGES -->
                    <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                        <div class="widget-item-left">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count">48</div>
                            <div class="widget-title">New messages</div>
                            <div class="widget-subtitle">In your mailbox</div>
                        </div>
                    </div>
                    <!-- END WIDGET MESSAGES -->
                </div>
                <div class="col-md-3">
                    <!-- START WIDGET REGISTRED -->
                    <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                        <div class="widget-item-left">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count">375</div>
                            <div class="widget-title">Registred users</div>
                            <div class="widget-subtitle">On your website</div>
                        </div>
                    </div>
                    <!-- END WIDGET REGISTRED -->
                </div>
                <div class="col-md-3">
                    <!-- START WIDGET CLOCK -->
                    <div class="widget widget-info widget-padding-sm">
                        <div class="widget-big-int plugin-clock">00<span>:</span>52</div>
                        <div class="widget-subtitle plugin-date">Wednesday, March 29, 2017</div>
                        <div class="widget-buttons widget-c3">
                            <div class="col">
                                <a href="#"><span class="fa fa-clock-o"></span></a>
                            </div>
                            <div class="col">
                                <a href="#"><span class="fa fa-bell"></span></a>
                            </div>
                            <div class="col">
                                <a href="#"><span class="fa fa-calendar"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET CLOCK -->
                </div>
            </div>
            <!-- END PAGE CONTENT -->
@endsection()