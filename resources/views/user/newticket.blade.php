@extends('layouts.static')
@section('content')
<div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Create New Feedback Ticket </h4>
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
                                                        <div class="">
                                                            <form role="form" method="POST" action="/ticket/create">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                           <select name="cid" class="form-control">
                                                                                @foreach($cat as $f)
                                                                                <option value ="{{$f->id}}">{{$f->title}}</option>
                                                                                @endforeach
                                                                            </select> 
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                        <select name="cat" class="form-control">
                                                                            @foreach($fedcat as $f)
                                                                            <option value ="{{$f->id}}">{{$f->title}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input name="rate" type="number" onchange="slider(this)" placeholder="Rating" min="1" required max="10" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress">
                                                                    <div id="slide" class="progress-bar progress-md progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" required name="title" class="form-control" placeholder="Subject">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea required row="5" name="content" class="form-control"></textarea>
                                                                </div>
                                                                <div class="btn-toolbar form-group m-b-0">
                                                                    <div class="pull-right">
                                                                        <button type="submit" class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
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
<script>
function slider(object){
    slide = document.getElementById('slide')
    if (object.value < 4) {
        if ( slide.classList.contains('progress-bar-warning') ) { 
            slide.classList.remove('progress-bar-warning')
        }
        if ( slide.classList.contains('progress-bar-success') ) { 
            slide.classList.remove('progress-bar-success')
        }
        slide.classList.add('progress-bar-danger')
        slide.style.width = object.value+"0%"
    } else if (object.value > 3 && object.value < 8) {
        if ( slide.classList.contains('progress-bar-danger') ) { 
            slide.classList.remove('progress-bar-danger')
        }
        if ( slide.classList.contains('progress-bar-success') ) { 
            slide.classList.remove('progress-bar-success')
        }
        slide.classList.add('progress-bar-warning')
        slide.style.width = object.value+"0%"
    } else if (object.value > 7) {
        if ( slide.classList.contains('progress-bar-warning') ) { 
            slide.classList.remove('progress-bar-warning')
        }
        if ( slide.classList.contains('progress-bar-danger') ) { 
            slide.classList.remove('progress-bar-danger')
        }
        slide.classList.add('progress-bar-success')
        slide.style.width = object.value+"0%"
    } else {
        
    }
    
}
</script>