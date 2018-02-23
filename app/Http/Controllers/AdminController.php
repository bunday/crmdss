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

    //Filter By category
    public function category($id = 2)
    {
        
        $f = Feedback::get()->count();
        $st = FeedbackCategory::get();
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
    //View categories
    public function managecategory(){
        $cats = Category::all();
        return view('admin.managecat',['cats'=>$cats]);
    }
    //Add new category
    public function addcat(Request $r){
        $cat = new Category();
        $cat->title = $r->cat;
        $cat->save();
        return redirect('/admin/manage/categories');
    }
    //Get prediction
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
        $data = array_slice($data,-10);
        //dd($data);
        //dd($samplearr,$labelarr);
        $classifier = new KNearestNeighbors();
        $classifier->train($samplearr, $labelarr);
        $answer = $classifier->predict($data);
        return $answer;
    }
    //Update Trainer with new Prediction
    public function updatetrainer(Request $r){
        $train = Trainer::where('label',$r->thought)->get();
        foreach ($train as $key => $value) {
            $value->label = $r->decision;
            $value->save();
        }
        return redirect('/admin/category');
    }
    //View Section
    public function section($id = 1)
    {
        
        $f = Feedback::get()->count();
        $st = Category::get();
        $set = json_decode(json_encode(Category::pluck('title','id')), true);
        $chart = Charts::database(Feedback::all(), 'pie', 'highcharts')
            ->title('Feedback Sections')
            ->elementLabel("Count")
            ->dimensions(0,500)
            ->groupBy('fcid', null, $set);

        $schart = Charts::database(Feedback::where('fcid',$id)->orderBy('rating', 'asc')->get(), 'bar', 'highcharts')
            ->title('Rating Stats for '.Category::find($id)->title)
            ->elementLabel("Count")
            ->dimensions(0,500)
            ->groupBy('rating');
        
        $rawdata = Feedback::where('fcid',$id)->pluck('rating');
        $predictor = $this->getPrediction($rawdata);
        return view('admin.section',['st'=>$st,'id'=>$id,'chart'=>$chart,'schart'=>$schart, 'predictor'=>$predictor]);
    }
    //Update trainer for section
    public function updatesectrainer(Request $r){
        $train = Trainer::where('label',$r->thought)->get();
        foreach ($train as $key => $value) {
            $value->label = $r->decision;
            $value->save();
        }
        return redirect('/admin/section');
    }
    //View sections
    public function managesection(){
        $cats = FeedbackCategory::all();
        return view('admin.managesec',['cats'=>$cats]);
    }
    //Add new section
    public function addsec(Request $r){
        $cat = new FeedbackCategory();
        $cat->title = $r->cat;
        $cat->save();
        return redirect('/admin/manage/sections');
    }
    //Manage users
    public function manageuser(){
        $u = User::all();
        return view('admin.manageuser',['users'=>$u]);
    }
    
}
