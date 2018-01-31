@extends('layouts.static')
@section('content')

<div class="container">

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Feedback Category </h4>
                                    
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
                                    <br>
                            
						</div>

                        
                        <div class="row">

                            <div class="col-lg-6 col-xs-12">
                        
                                <div class="card-box">
                                    <center>
                                    {!! $chart->html() !!}
                                    {!! Charts::scripts() !!}
                                    {!! $chart->script() !!}
                                    </center>
                                </div>
                            </div>
                        
                            <div class="col-lg-6 col-xs-12">
                        
                                <div class="card-box">
                                <center>
                                    {!! $schart->html() !!}
                                    {!! Charts::scripts() !!}
                                    {!! $schart->script() !!}
                                </center>
                                </div>
                        
                            </div>
                        
                        </div>

                        <!-- end row -->
</div>
                  
@endsection
<script>
function callback(obj) {
    var params = obj.options[obj.selectedIndex].value;
    //alert('selected one is '+params)
    window.location="/admin/category"+params;
}

</script>