<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use DB;
use Image;
use Auth;
use Illuminate\Http\Request; 

class DataController extends Controller
{
    public function getJob()
    {
        $job=DB::table('jobs')->get();
        return view('welcome')->with('jobs',$job);
    }

    public function jobSearch()
    {
        $job=DB::table('jobs')->paginate(3);//->get();
        return view('jobsearch')->with('jobs',$job);
    }
   
    function jobpostsubmit(Request $request){
        $title       = $request -> input('title');
        $designation = $request -> input('designation');
        $category    = $request -> input('category');
        $subcategory = $request -> input('subcategory');
        $type        = $request -> input('jobtype');
        $salary      = $request -> input('salary');
        $skills      = $request -> input('skills');
        $description = $request -> input('description');
        $company     = $request -> input('company');
        $address     = $request -> input('address');
        $city        = $request -> input('city');
        $pin         = $request -> input('pin');
        $district    = $request -> input('district');
        $country     = $request -> input('country');
        $person      = $request -> input('person');
        $email       = $request -> input('email');
        $mobile      = $request -> input('mobile');
        $jobid       = "JBN".rand(1000,99999);

DB::insert('insert into jobs(jobid,title,designation,category,subcategory,type,description,salary,company,address,city,pin,country,skills,person,email,mobile,date,time)
?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$jobid,$title,$designation,$category,$subcategory,$type,$description,$salary,$company,$address,$city,$pin,$country,$skills,$person,$email,$mobile,date('Y-m-d'),date('H:i:s')]);
   
    echo "Success";
    }

    public function customJobSearch(Request $request)
    {
        $keyword    = $request -> input('keyword'); 
        $location   = $request -> input('location'); 
        $salary     = $request -> input('salary'); 
        
$data = array(
    'keyword'  => $keyword,
    'location' => $location,
    'salary'   => $salary 
);

        $job = DB::table('jobs')
                ->where('title', 'like', '%'. $keyword .'%')
                ->orWhere('city', 'like', '%'. $location .'%')
                ->get();

         return view('jobsearch')
            ->with('jobs',$job)
            ->with('data',$data);
            
    }

    
    public function profileSubmit(Request $request)
    {
        $email=Auth::user()->email;
        $designation= $request->input('designation');
        $company    = $request->input('company');
        $address    = $request->input('address');
        $skills     = $request->input('skills');
        $salary     = $request->input('salary');
        $experience = $request->input('experience');
        $education  = $request->input('education');
        $twitter    = $request->input('twitter');
        $facebook   = $request->input('facebook');
        $linkedin   = $request->input('linkedin');

        DB::table('profile')
                ->where('email',$email)
                ->update(['designation'=>$designation,'company'=>$company,'address'=>$address,
                          'skills'=>$skills,'salary'=>$salary,'experience'=>$experience,
                          'education'=>$education,'twitter'=>$twitter,'facebook'=>$facebook,'linkedin'=>$linkedin]);
        echo $request->file('cv')."CV Value"; 
        if($request->file('cv'))
        {
            $avatar=$request->file('cv');
            $filename=time().$avatar->getClientOriginalName();
            Image::make($avatar)->resize(300,300)->save( public_path('/jasset/'.$filename) );
             
             DB::table('profile')
                ->where('email',$email)
                ->update(['image'=>$filename]);
            // $user=Auth::user();
            // $user->avatar=$filename;
            // $user->save();
        }
            // echo "uploading";
            // $file=$request->file('cv');
            // // $file=$file->resize(200,200);
            // $file->move('jasset',$file->getClientOriginalName());
            // echo "uploaded";}
        echo "Success";
        // return view('profile');
    }
} 

?>