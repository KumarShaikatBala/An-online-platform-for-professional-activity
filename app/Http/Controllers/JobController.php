<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Job;
use Illuminate\Http\Request;
use function view;
use Illuminate\Auth;
use Illuminate\Auth\Authenticatable;
use compact;
use App\Http\Controllers\Auth\EmployerLoginController;
use App\Http\Controllers\Controller;
use App\Company;
use function compact;
use function dd;
use Illuminate\Support\Facades\DB;
use App\jobseeker;
use function redirect;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:jobseeker',['except'=>['create','store','candidatesShow','index','indexjobs','manage']]);
        $this->middleware('auth:employer',['except'=>['index','indexjobs','show','candidates']]);
    }




    public function index()
    {
        $jobs=DB::table('jobs')->join('companies','companies.id','=','jobs.company_id')->
        select('jobs.*','companies.company_name')->get();
        return view('job.job-list',compact('jobs'));
    }
    public function indexjobs()
    {
        $jobs=DB::table('jobs')->join('companies','companies.id','=','jobs.company_id')->
        select('jobs.*','companies.company_name')->orderBy('id','asc')->take(2)->get();

        return view('index',compact('jobs'));
    }


    public function create()
    {
        $companies=Company::all();
        return view('job.create',compact('companies'));
    }
    public function detail()
    {
        $jobs=Job::select('tittle','company','short_description','url','location','type',
            'salary','hours','experience','degree','img','description')->
        where('id','=',\Illuminate\Support\Facades\Auth::guard('employer')->user()->id)->get()->first();
        return view('job.job-detail',compact('jobs'));
    }

    public function store(Request $request)
    {
       if ($request->hasFile('img')){
            $img=$request->file('img');
            $img_name=$img->getClientOriginalName();
            $ext= $request->img->getClientOriginalExtension();
            $img_name=time().'.'.$ext;
            $upload_path_for_img='uploaded_files/job-img/';
            $img->move( $upload_path_for_img,$img_name);
        }
        if (Job::create([

            'employe_id' =>\Illuminate\Support\Facades\Auth::guard('employer')->user()->id,
            'tittle' =>$request->tittle,
            'company_id' => $request->company,
            'short_description' => $request->short_description,
            'url' => $request->url,
            'location' => $request->location,
            'type' => $request->type,
            'salary' => $request->salary,
            'hours' => $request->hours,
            'experience' => $request->experience,
            'degree' => $request->degree,
            'img' =>$img_name,
            'description' => $request->description,
        ])){
            return redirect('job-manage')->with('msg','Job Added Successfully!');
        }
    }


    public function manage()
    {
        $jobs=DB::table('jobs')->join('companies','companies.id','=','jobs.company_id')->join('employers','employers.id','=','jobs.employe_id')->
        select('jobs.*','companies.company_name')->where('jobs.employe_id','=',\Illuminate\Support\Facades\Auth::guard('employer')->user()->id)->get();
        return view('job.manage-jobs',compact('jobs'));
    }


    public function show($id)
    {
        $jobs=DB::table('jobs')->join('companies','companies.id','=','jobs.company_id')
            ->join('employers','employers.id','=','jobs.employe_id')->
        select('jobs.*','companies.company_name')
            ->where('jobs.id','=',$id)->get();
        //$jobs=Job::with('Company')->where('id','=',$id)->first();
        //return $jobs;
return view('job.job-detail',compact('jobs'));
    }
    public function edit($id)
    {
        $jobs=Job::find($id);
        $companies=Company::all();
       return view('job.job-edit',compact('jobs','companies'));
    }

    public function update(Request $request,$id)
    {
        $jobs=Job::find($id);
        $jobs->update($request->all());
        return redirect('job-manage')->with('msg','Job Updated Successfully!');
    }

    public function destroy($id)
    {
        Job::destroy($id);
        return redirect('job-manage')->with('msg','Job Deleted Successfully!');
    }

    public function candidates(Request $request)
    {
        //return $request;

        if (Candidates::create([
            'job_id' => $request->job_id,
            'employe_id' => $request->employe_id,
            'jobseeker' => $request->jobseeker,
            'jobseeker_id' => $request->jobseeker_id
        ])){
            return redirect('job-candidatesShow');
        }


    }


    public function candidatesShow($id)
    {
        $data = DB::table('candidates')
                ->join('jobs','jobs.id','=','candidates.job_id')
                ->join('jobseekers','jobseekers.id','=','candidates.jobseeker_id')
                ->join('resumes','resumes.jobseeker_id','=','candidates.jobseeker_id')
                ->join('employers','employers.id','=','candidates.employe_id')
                ->where('employers.id','=',$id)
                ->get();
        //dd($data);
        //return $data;
        return view('job.job-candidates',compact('data'));
    }

}
