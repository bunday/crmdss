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
							<div class="col-lg-4">Filter Available Categories</div>
                            <div class="col-lg-8">
                                <form>
                                    <select onchange="callback(this)" class="form-control">
                                        @foreach($st as $s)
                                        <option value="{{$s->id}}">{{$s->title}}</option>
                                        @endforeach
                                    </select>
                                        
                                </form>
                            </div>
                            <div class="clearfix"></div>
						</div>


                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    {!! $chart->html() !!}
                                    {!! Charts::scripts() !!}
                                    {!! $chart->script() !!}
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    {!! $schart->html() !!}
                                    {!! Charts::scripts() !!}
                                    {!! $schart->script() !!}

                                    
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Derived Decision Based on Available Data</h4>

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

                            
                        </div>
                        <!-- end row -->

</div>
                  
@endsection
