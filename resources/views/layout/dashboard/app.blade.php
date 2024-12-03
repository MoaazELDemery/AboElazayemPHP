<!DOCTYPE HTML>
<html lang="ar" dir="rtl">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/service/LOGO 2.png')}}" type="images/png" />
    <title>جامعة الامام محمد ماضي أبو العزائم</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->


    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=hanimation" />
    <link href="{{ asset('dashboard_files/assets/css/bootstrap-datetimepicker.min.css' ) }}" rel="stylesheet">

    <link href="{{ asset('dashboard_files/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('dashboard_files/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('dashboard_files/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('dashboard_files/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}../" rel="stylesheet" type="text/css" />

    <link href="{{ asset('dashboard_files/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link href="{{ asset('dashboard_files/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('dashboard_files/global/css/components-rtl.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('dashboard_files/global/css/plugins-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('dashboard_files/layouts/layout/css/layout-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/layouts/layout/css/themes/darkblue-rtl.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('dashboard_files/layouts/layout/css/custom-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/apps/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_files/global/plugins/bootstrap-summernote/summernote.css') }}" rel="stylesheet" type="text/css" />

    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-wrapper">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{ url('/')}}">
                        <img src="{{ asset('dashboard_files/layouts/layout/img/LOGO-w.png') }}" style="width: 50px;  margin-right: 55px;" alt="logo" class="LOGO 2" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->

            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                @include('layout.dashboard._aside')
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="message" style="font-size: 20px;">{{ $error }}</div>
                    @endforeach
                    @endif
                    <!-- BEGIN PAGE HEADER-->
                    @yield('content')





                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2021 &copy; All Rights Reserved
                <a target="_blank" href="http://innovations-eg.com/ar/index.html">Innovations</a> &nbsp;|&nbsp;
                <a href="http://innovations-eg.com/ar/index.html" target="_blank"> </a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <div class="quick-nav-overlay"></div>
    <!-- END QUICK NAV -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('dashboard_files/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>

    <!-- END CORE PLUGINS -->


    <script src=" {{ asset('dashboard_files/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('dashboard_files/pages/scripts/table-datatables-rowreorder.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->

    <script src="{{ asset('dashboard_files/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script src="{{ asset('dashboard_files/global/plugins/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashboard_files/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/horizontal-timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashboard_files/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/ngkcast72b9vklwqb82jtt5jhoigqpyox2762eyhlqwthi8y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('dashboard_files/global/scripts/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/apps/scripts/moment.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/apps/scripts/bootstrap-hijri-datetimepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/moment.js') }}"></script>
   

    <script src="{{ asset('frontend/assets/js/bootstrap-hijri-datetimepicker.min.js') }}"></script>

    <!-- END PAGE LEVEL PLUGINS -->
    <script src="{{ asset('dashboard_files/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{ asset('dashboard_files/global/scripts/app.min.js') }}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <script src="{{ asset('dashboard_files/pages/scripts/components-select2.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('dashboard_files/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{ asset('dashboard_files/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard_files/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>


    <!-- END THEME LAYOUT SCRIPTS -->


    <script>
        $(document).ready(function() {
            $(function() {
                $("#hijri-date-input").hijriDatePicker();
                $("#date-input").hijriDatePicker();

            });
        });
    </script>
</body>

</html>