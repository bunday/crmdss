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

                            <div class="col-lg-12 col-xs-12">
                        
                                <div class="card-box">
                                    <center>
                                    {!! $chart->html() !!}
                                    {!! Charts::scripts() !!}
                                    {!! $chart->script() !!}
                                    </center>
                                </div>
                            </div>
                        
                            <div class="col-lg-12 col-xs-12">
                        
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
                        <div id="updater" style="visibility: hidden" class="row">
                            <div class="pull-right">
                                <button class="btn btn-purple" data-toggle="modal" data-target="#custom-width-modal">Update this Decision</button>
                            </div>
                        </div>
                        <div style="visibility: hidden" id="decision">{{$predictor}}</div>

                        <!-- end row -->
</div>
                                    <div id="custom-width-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="width:55%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Prediction Made on Category</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Help me to get better</h4>
                                                    <p>Did i make the right decision? close this dialog if yes. Else, update me with the right decision in the form below</p>
                                                    <hr>
                                                    <form method="POST" action="/updatetrainer">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="thought" id="thought">
                                                     <input type="hidden" name="lock" value="{{$id}}">
                                                    <input type="text" required name="decision" placeholder="Correct Decision" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="Submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                                <form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
<script>
function callback(obj) {
    var params = obj.options[obj.selectedIndex].value;
    //alert('selected one is '+params)
    window.location="/admin/category"+params;
}
window.onload=function hide(params) {
    document.getElementById('thought').value = document.getElementById('decision').innerHTML
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
        document.getElementById('updater').style = "visibility: block"     
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
