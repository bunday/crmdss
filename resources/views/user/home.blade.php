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

                           

                            <div class="col-lg-6 col-md-6">
                                <div class="card-box widget-box-two widget-two-warning">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Pending Tickets">Pending Tickets</p>
                                        <h2><span data-plugin="counterup">{{$unres}}</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        
                                    </div>
                                </div>
                            </div><!-- end col -->

                           
                            <div class="col-lg-6 col-md-6">
                                <div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-account-convert widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Solved Tickets">Solved Tickets</p>
                                        <h2><span data-plugin="counterup">{{$res}} </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        
                                    </div>
                                </div>
                            </div><!-- end col -->

                             <div class="col-lg-12 col-md-12">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="All Tickets">All Tickets</p>
                                        <h2><span data-plugin="counterup">{{$all}}</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->     
</div>         
@endsection