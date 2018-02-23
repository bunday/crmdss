@extends('layouts.static')
@section('content')
<div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Unresolved Feedback Tickets </h4>
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
                                            
                                            <div class="table-responsive m-t-20">
                                                <table class="table table-hover mails m-0">
                                                    <tbody>
                                                        @foreach($feedback as $f)
                                                        <tr class="unread">
                                                            <td class="mail-select">
                                                                
                                                                <i class="fa fa-circle m-l-5 text-warning"></i>
                                                                <a href="#">{{App\User::find($f->uid)->lname}} {{App\User::find($f->uid)->fname}}</a>
                                                            </td>

                                                            <td>
                                                                <a href="/ticket/open/{{$f->id}}" class="email-name">{{$f->title}}</a>
                                                            </td>

                                                            <td class="hidden-xs">
                                                                <a href="/ticket/open/{{$f->id}}" class="email-msg">{{App\FeedbackThread::where('fid',$f->id)->latest()->first()->content}}</a>
                                                            </td>
                                                            <td class="text-right">
                                                                {{$f->updated_at->diffForHumans()}}
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- End row -->

                                        </div> <!-- table detail -->
                                    </div>
                                    <!-- end table box -->

                                </div> <!-- mails -->
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
@endsection
