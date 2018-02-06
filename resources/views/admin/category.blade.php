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
                                    
                            <div class="clearfix"></div>
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
                        <div class="row">
                            <div id="contain" class="alert alert-icon alert-warning alert-dismissible fade in" role="alert">
                                <i id="containicon" class="fa fa-spin fa-spinner fa-3x"></i>{{App\FeedbackCategory::find($id)->title}}<br> <div id="hold">Analysing, Please Wait</div>
                            </div>
                        </div>
                        <div id="decision">{{$predictor}}</div>

                        <!-- end row -->
</div>
<script>
function callback(obj) {
    var params = obj.options[obj.selectedIndex].value;
    //alert('selected one is '+params)
    window.location="/admin/category"+params;
}
window.onload=function hide(params) {
    document.getElementById('decision').style = "visibility: hidden"
    
    //setTimeout(getPrediction(),9000);
    setTimeout(() => {
       var contain = document.getElementById('contain')
        var iconholder = document.getElementById('containicon')
        contain.classList.remove('alert-warning')
        contain.classList.add('alert-success')
        iconholder.classList.remove('fa-spin')
        iconholder.classList.remove('fa-spinner')
        iconholder.classList.add('fa-check')
        var hold = document.getElementById('hold')
        hold.innerHTML = "Analysis Done, Overall Rating for Category is: "+document.getElementById('decision').innerHTML     
    }, 9000);
}
function getPrediction(){
    var contain = document.getElementById('contain')
    var iconholder = document.getElementById('containicon')
    contain.classList.remove('alert-warning')
    contain.classList.add('alert-success')
    iconholder.classList.remove('fa-spin')
    iconholder.classList.remove('fa-spinner')
    iconholder.classList.add('fa-check')
    var hold = document.getElementById('hold')
    hold.innerHTML = "Analysis Done, Overall Rating for Category is: "+document.getElementById('decision').innerHTML
    
}

</script>               
@endsection
