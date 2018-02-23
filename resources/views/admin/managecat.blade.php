@extends('layouts.static')
@section('content')

<div class="container">

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage Categories</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>


						</div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <div class="panel-body">
                        <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <h3 class="text-center">Available Feedback Categories</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col"> Title</th>
                                                <th scope="col">Number of Feedbacks</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cats as $c)
                                                <tr>
                                                <th scope="row">{{$c->title}}</th>
                                                <td>{{App\Feedback::where('cid',$c->id)->get()->count()}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <a class="btn btn-warning btn-sm" href="/editdept">
                                                            <i class="fa fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <h4 class="text-center">Add Feedback Category</h4>
                                    <br>
                                    <form method="POST" action="/addcat">
                                        {{csrf_field()}}
                                        <div class="form-group col-md-12">
                                            <input type="text" placeholder="Category Title" class="form-control" name="cat">
                                        </div>
                                        <button type="submit" class="pull-right btn btn-success">Add new Entry</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
</div>