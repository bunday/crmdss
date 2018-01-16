<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Category;
use App\FeedbackCategory;
use App\Feedback;
use App\FeedbackThread;

class StaffController extends Controller
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
        return view('staff.home');
    }
    
    public function tick(){
        $feedback = Feedback::where('status','Unresolved')->get();
        return view('staff.ticketlist',['feedback'=>$feedback]);
    }
    public function opentick($id){
        $feedback = Feedback::find($id);
        $thread = FeedbackThread::where('fid',$id)->get();
        return view('staff.ticketthread',['feedback'=>$feedback,'thread'=>$thread]);
    }
    public function replytick(){
        $feedback = Feedback::find(Input::get('fid'));
        if (Input::get('status')!="Unresolved") {
            $feedback->status = "Resolved";
            $feedback->save();
        }
        $thread = new FeedbackThread();
        $thread->content = Input::get('content');
        $thread->sid = Auth::user()->id;
        $thread->fid = Input::get('fid');
        $thread->save();
        return redirect('/staff/tickets');
    }
}
