@extends('layouts.static')
@section('content')
<div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title"> {{$feedback->title}} ({{$feedback->status}}) </h4>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="mails">

                                    <div class="table-box">
                                        
                                        <div class="table-detail mail-right">
                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box m-t-20">
                                                        @foreach($thread as $t)
                                                        <div class="media m-b-30 ">
                                                            <div class="media-body">
                                                                @if($t->sid == $feedback->uid)
                                                                <h5 class="text-primary m-0">{{App\User::find($t->sid)->fname}} {{App\User::find($t->sid)->lname}} (Customer) - {{$t->created_at->toTimeString()}}</h5><br>
                                                                @else
                                                                <h5 class="pull-right text-warning m-0">{{App\User::find($t->sid)->fname}} {{App\User::find($t->sid)->lname}} - {{$t->created_at->toTimeString()}}</h5>
                                                                @endif
                                                                
                                                            </div>
                                                        </div> <!-- media -->
                                                        @if($t->sid == $feedback->uid)
                                                        <p><b>{{$t->content}}</b></p>
                                                        @else
                                                        <p class="pull-right"><b>{{$t->content}}</b></p>                                                        
                                                        @endif 
                                                        <br>
                                                        @endforeach
                                                        
                                                        
                                                    </div>
                                                    <!-- card-box -->
                                                    @if($feedback->status=="Unresolved")
                                                    <div class="card-box m-t-20">
                                                        <form method="POST" action="/ticket/reply">
                                                        {{csrf_field()}}
                                                        <div class="form-group">
                                                            <textarea required row="5" name="content" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="status" class="form-control">
                                                                <option>Unresolved</option>
                                                                <option>Resolved</option>
                                                            </select>
                                                        </div>

                                                        <input type="hidden" name="fid" value="{{$feedback->id}}">
                                                        <div class="btn-toolbar form-group m-b-0">
                                                            <div class="pull-right">
                                                                <button type="submit" class="btn btn-success waves-effect waves-light"> <span>Reply</span> <i class="fa fa-send m-l-10"></i> </button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    @else
                                                    <div class="card-box m-t-20">
                                                    <h3 class="text-info">This ticket has been marked has closed by one of our staffs<h3>
                                                    </div>
                                                    @endif
                                                </div> <!-- end col -->
                                            </div>

                                        </div> <!-- table detail -->
                                    </div>
                                    <!-- end table box -->

                                </div> <!-- mails -->
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
@endsection
