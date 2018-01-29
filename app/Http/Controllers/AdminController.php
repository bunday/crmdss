<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Category;
use App\FeedbackCategory;
use App\Feedback;
use App\FeedbackThread;
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
        $chart = Charts::create('line', 'highcharts')
                ->title('My nice chart')
                ->labels(['First', 'Second', 'Third'])
                ->values([5,10,20])
                ->dimensions(0,500);
        return view('admin.home',['chart'=>$chart]);
    }
}
