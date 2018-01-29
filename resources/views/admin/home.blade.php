@extends('layouts.static')
@section('content')

<div class="container">

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Your Dashboard</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Feedbacks">Feedbacks</p>
                                        <h2><span data-plugin="counterup">34578</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                       
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-warning">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Feedback Sections">Feedback Sections</p>
                                        <h2><span data-plugin="counterup">52410 </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-danger">
                                    <i class="mdi mdi-access-point-network widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Feedback Categories">Feedback Categories</p>
                                        <h2><span data-plugin="counterup">6352</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-account-convert widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Users">Users</p>
                                        <h2><span data-plugin="counterup">895 </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Total Revenue</h4>
                                    {!! $chart->html() !!}
                                    {!! Charts::scripts() !!}
                                    {!! $chart->script() !!}
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Sales Analytics</h4>

                                    
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-md-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Latest Feedback Received</h4>

                                    <div class="inbox-widget slimscroll-alt" style="min-height: 302px;">
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Chadengle</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">13:40 PM</p>
                                            </div>
                                        </a>
                                    </div>

                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-md-8">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Recent Customers</h4>

                                    <div class="table-responsive">
                                        <table class="table table table-hover m-0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>User Name</th>
                                                    <th>Phone</th>
                                                    <th>Location</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <th>
                                                        <span class="avatar-sm-box bg-primary">C</span>
                                                    </th>
                                                    <td>
                                                        <h5 class="m-0">Craig Hause</h5>
                                                        <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                                                    </td>
                                                    <td>+89 345 6789</td>
                                                    <td>Canada</td>
                                                    <td>29/07/2016</td>
                                                </tr>


                                            </tbody>
                                        </table>

                                    </div> <!-- table-responsive -->
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

</div>
                  
@endsection