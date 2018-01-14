<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Category;
use App\FeedbackCategory;
use App\Feedback;
use App\FeedbackThread;

class HomeController extends Controller
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
        return view('user.home');
    }
    public function newtick()
    {
        $cat = Category::all();
        $fedcat = FeedbackCategory::all();
        return view('user.newticket',['cat'=>$cat,'fedcat'=>$fedcat]);
    }
    public function createtick(){
        $feedback = new Feedback();
        $feedback->title = Input::get('title');
        $feedback->rating = Input::get('rate');
        $feedback->fcid = Input::get('cat');
        $feedback->cid = Input::get('cid');
        $feedback->uid = Auth::user()->id;
        $feedback->status= "Unresolved";
        $feedback->save();
        $thread = new FeedbackThread();
        $thread->content = Input::get('content');
        $thread->sid = Auth::user()->id;
        $thread->fid = $feedback->id;
        $thread->save();
        return redirect('/tickets'); 
    }
    public function tick(){
        return view('user.ticketlist');
    }
}
