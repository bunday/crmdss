
<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Olayinka Z.">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">
        <!-- App title -->
        <title>Onilu Prime </title>

        <!-- date range picker -->
        <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="/assets/plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css">
        <link href="/assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css" rel="stylesheet" type="text/css">
        <!-- App css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/assets/plugins/switchery/switchery.min.css">
        <script src="/assets/js/modernizr.min.js"></script>
   </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="/" class="logo"><span>Onilu<span>Prime</span></span><i class="mdi mdi-layers"></i></a>
                   
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, {{Auth::user()->fname}} </h5>
                                    </li>
                                    <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="ti-power-off m-r-5"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            @if(Auth::user()->category=="CUS")
                            <li>
                                <a href="/home" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Support Tickets </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/tickets/new">Create New Ticket</a></li>
                                    <li><a href="/tickets"> Unresolved Tickets</a></li>
                                    <li><a href="/tickets/resolved"> Resolved Tickets</a></li>
                                </ul>
                            </li>
                            @elseif(Auth::user()->category=="STA")
                            <li>
                                <a href="/staff/home" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Support Tickets </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/staff/tickets"> Unresolved Tickets</a></li>
                                    <li><a href="/staff/tickets/resolved"> Resolved Tickets</a></li>
                                </ul>
                            </li>
                            @else
                            @endif

                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/> support@oniluprime.com</p>
                        <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+234) 706 051 2502</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    
            @yield('content')
                     
                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Olayinka Z. for Onilu Prime
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/detect.js"></script>
        <script src="/assets/js/fastclick.js"></script>
        <script src="/assets/js/jquery.blockUI.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/jquery.slimscroll.js"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>
        <script src="/assets/plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="/assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Flot chart js -->
        <script src="/assets/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="/assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="/assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="/assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="/assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="/assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <script src="/assets/plugins/moment/moment.js"></script>
        <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!-- Dashboard init -->
        <script src="/assets/pages/jquery.dashboard_2.js"></script>

        <!-- App js -->
        <script src="/assets/js/jquery.core.js"></script>
        <script src="/assets/js/jquery.app.js"></script>
        <script src="/assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <script src="/assets/pages/jquery.range-sliders.js"></script>
        <script>
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2016',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });
        </script>

    </body>


</html>