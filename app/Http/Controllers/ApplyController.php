<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    public function apply(Request $request)
    {
        echo "Applied<br>";
        echo $request->ip();
        
    }

    public function viewJobDescription($jobid)
    {
       $job = DB::table('jobs')->where('jobid', $jobid)->first();
       return view('jobdescription')->with('job',$job);
    }
}
