<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;
use App\Category;
use App\Trainer;
use App\FeedbackCategory;
use App\Feedback;
use App\FeedbackThread;
use Phpml\Classification\KNearestNeighbors;
use Charts;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f = Feedback::get()->count();
        $s = FeedbackCategory::get()->count();
        $c = Category::get()->count();
        $u = User::get()->count();
        $feds = Feedback::latest()->get()->take(5);
        $users = User::where('category','CUS')->latest()->get()->take(5);
        //dd($users);
        //$dat = Feedback::groupBy('fcid')->get();
        //dd($dat);
        $cat = json_decode(json_encode(Category::pluck('title','id')), true);
        $set = json_decode(json_encode(FeedbackCategory::pluck('title','id')), true);
       // dd($set);
        $chart = Charts::database(Feedback::all(), 'bar', 'highcharts')
            ->title('Feedback In Sections')
            ->elementLabel("Occurrence")
            ->dimensions(0,500)
            ->groupBy('cid', null, $cat);
        $schart = Charts::database(Feedback::all(), 'area', 'highcharts')
            ->title('Feedback Categories')
            ->elementLabel("Count")
            ->dimensions(0,500)
            ->groupBy('fcid', null, $set);
        return view('admin.home',['chart'=>$chart,'feds'=>$feds,'users'=>$users,'schart'=>$schart,'f'=>$f,'s'=>$s,'c'=>$c,'u'=>$u]);
    }
    public function category($id = 2)
    {
        
        $f = Feedback::get()->count();
        $st = FeedbackCategory::get();
        //$dat = Feedback::groupBy('fcid')->get();
        //dd($dat);
        $set = json_decode(json_encode(FeedbackCategory::pluck('title','id')), true);
        $chart = Charts::database(Feedback::all(), 'pie', 'highcharts')
            ->title('Feedback Categories')
            ->elementLabel("Count")
            ->dimensions(0,500)
            ->groupBy('fcid', null, $set);

        $schart = Charts::database(Feedback::where('fcid',$id)->orderBy('rating', 'asc')->get(), 'bar', 'highcharts')
            ->title('Rating Stats for '.FeedbackCategory::find($id)->title)
            ->elementLabel("Count")
            ->dimensions(0,500)
            ->groupBy('rating');
        
        $rawdata = Feedback::where('fcid',$id)->pluck('rating');
        $predictor = $this->getPrediction($rawdata);
        return view('admin.category',['st'=>$st,'id'=>$id,'chart'=>$chart,'schart'=>$schart, 'predictor'=>$predictor]);
    }
    public function getPrediction($data){
        $data = json_decode(json_encode($data), true);
        $traineddata = Trainer::all();
        $samplearr;
        $labelarr;
        foreach ($traineddata as $key => $value) {
            $array = explode(',', $value->rates);
            $samplearr[] = $array;
            $labelarr[] = $value->label;
        }
        //dd($samplearr,$labelarr);
        $classifier = new KNearestNeighbors();
        $classifier->train($samplearr, $labelarr);
        $answer = $classifier->predict($data);
        return $answer;
    }
    
}
