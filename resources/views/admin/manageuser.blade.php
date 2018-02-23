@extends('layouts.static')
@section('content')

<div class="container">

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title"></h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>


						</div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <div class="panel-body">
                        <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <h3 class="text-center">Available Users</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col"> First Name</th>
                                                <th scope="col"> Last Name</th>
                                                <th scope="col">Number of Feedbacks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $u)
                                                <tr>
                                                <th scope="row">{{$u->fname}}</th>
                                                <th scope="row">{{$u->lname}}</th>
                                                <td>{{App\Feedback::where('uid',$u->id)->get()->count()}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
</div>