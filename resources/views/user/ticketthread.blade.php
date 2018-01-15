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
                                                                @if($t->sid == Auth::user()->id)
                                                                <h4 class="pull-right text-primary m-0">You - {{$t->created_at->toTimeString()}}</h4><br>
                                                                @else
                                                                <h4 class="text-warning m-0">{{App\User::find($t->sid)->fname}} {{App\User::find($t->sid)->lname}} - {{$t->created_at->toTimeString()}}</h4>
                                                                @endif
                                                                
                                                            </div>
                                                        </div> <!-- media -->
                                                        @if($t->sid == Auth::user()->id)
                                                        <p class="pull-right"><b>{{$t->content}}</b></p>
                                                        @else
                                                        <p><b>{{$t->content}}</b></p>                                                        
                                                        @endif 
                                                        <br>
                                                        @endforeach
                                                        
                                                        
                                                    </div>
                                                    <!-- card-box -->
                                                    <div class="card-box m-t-20">
                                                        <form method="POST" action="/ticket/reply">
                                                        {{csrf_field()}}
                                                        <div class="form-group">
                                                            <textarea required row="5" name="content" class="form-control"></textarea>
                                                        </div>
                                                        <input type="hidden" name="fid" value="{{$feedback->id}}">
                                                        <div class="btn-toolbar form-group m-b-0">
                                                            <div class="pull-right">
                                                                <button type="submit" class="btn btn-success waves-effect waves-light"> <span>Reply</span> <i class="fa fa-send m-l-10"></i> </button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
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
