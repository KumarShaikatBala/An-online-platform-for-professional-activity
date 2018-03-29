<?php

namespace App\Http\Controllers;

use App\education;
use App\skill;
use function compact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Resume;
use function dd;
use Illuminate\Http\Request;
use function view;
use App\jobseeker;


class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:jobseeker');
    }

    public function index()
    {
        $resumes = DB::table('jobseekers')
            ->join('resumes','resumes.jobseeker_id','=','jobseekers.id')
            ->select('resumes.*')
            ->where('jobseekers.id','=',Auth::guard('jobseeker')->user()->id)->first();

        $educations = DB::table('jobseekers')
            ->join('educations','educations.jobseeker_id','=','jobseekers.id')
            ->select('educations.*')
            ->where('jobseekers.id','=',Auth::guard('jobseeker')->user()->id)->get();

        $experiences = DB::table('jobseekers')
            ->join('experiences','experiences.jobseeker_id','=','jobseekers.id')
            ->select('experiences.*')
            ->where('jobseekers.id','=',Auth::guard('jobseeker')->user()->id)->get();

        $skills = DB::table('jobseekers')
            ->join('skills','skills.jobseeker_id','=','jobseekers.id')
            ->select('skills.*')
            ->where('jobseekers.id','=',Auth::guard('jobseeker')->user()->id)->get();
        return view('resume.resume-detail',['resumes'=>$resumes,'educations'=>$educations,'experiences'=>$experiences,'skills'=>$skills]);
    }

    public function create()
    {
        return view('resume.create-resume');
    }

    public function store(Request $request)
    {
        {
            $img=$request->file('img');
            $img_name=$img->getClientOriginalName();
            $ext= $request->img->getClientOriginalExtension();
            $img_name=time().'.'.$ext;
            $upload_path_for_img='uploaded_files/resume-img/img';
            $img->move( $upload_path_for_img,$img_name);

            $resume_file=$request->file('resume_file');
            $img_name1=$resume_file->getClientOriginalName();
            $ext1= $request->resume_file->getClientOriginalExtension();
            $img_name1=time().'.'.$ext1;
            $upload_path_for_img1='uploaded_files/resume-img/resume-file';
            $resume_file->move( $upload_path_for_img1,$img_name1);


            $cover_img=$request->file('cover_img');
            $img_name2=$cover_img->getClientOriginalName();
            $ext2= $request->cover_img->getClientOriginalExtension();
            $img_name2=time().'.'.$ext2;
            $upload_path_for_img2='uploaded_files/resume-img/cover-img';
            $cover_img->move( $upload_path_for_img2,$img_name2);
            if($request->file('experience_img'))
            {
                $img_name6[]=array();
                foreach($request->file('experience_img') as $experience_img)
                {
                    if(!empty($experience_img))
                    {
                        $destinationPath = 'uploaded_files/resume-img/experience-img/';
                        $filename = $experience_img->getClientOriginalName();
                        $img_name5=time().'.'.$filename;
                        $img_name6[]= $img_name5;
                        $experience_img->move($destinationPath, $img_name5);


                    }
                }
            }

            if($request->file('education_img'))
            {
                foreach($request->file('education_img') as $education_img)
                {
                    if(!empty($education_img))
                    {
                        $destinationPath = 'uploaded_files/resume-img/education-img';
                        $filename = $education_img->getClientOriginalName();
                        $img_name3=time().'.'.$filename;
                        $img_name7[]= $img_name3;
                        $education_img->move($destinationPath, $img_name3);


                    }
                }
            }
            if (Resume::create([
                'jobseeker_id'=>Auth::guard('jobseeker')->user()->id,
                'img'=>$img_name,
                'name'=>$request->name,
                'headline'=>$request->headline,
                'short_description'=>$request->short_description,
                'location'=>$request->location,
                'website'=>$request->website,
                'salary'=>$request->salary,
                'age'=>$request->age,
                'mobile'=>$request->mobile,
                'email'=>$request->email,
                'tag'=>$request->tag,
                'img'=>$img_name,
                'resume_file'=>$img_name1,
                'cover_img'=>$img_name2,
                'facebook'=>$request->facebook,
                'google_plus'=>$request->google_plus,
                'dribble'=>$request->dribble,
                'pinterest'=>$request->pinterest,
                'twitter'=>$request->twitter,
                'github'=>$request->github,
                'instagram'=>$request->instagram,
                'youtube'=>$request->youtube,
            ]))


                $b=sizeof($request->degree)-1;
            $c=1;
            for ($i =0; $i <$b; $i++) {

                $ids[] = DB::table('experiences')->insertGetId(['jobseeker_id'=>Auth::guard('jobseeker')->user()->id,'experience_img' =>$img_name6[$c],'company_name' => $request->company_name[$i],'position' =>$request->position[$i],'work_from' => $request->work_from[$i],'work_to' =>$request->work_to[$i],'work_description' => $request->work_description[$i],'created_at' => now(), 'updated_at' => now()]);
                $c++;
            }

            $b=sizeof($request->company_name)-1;
            $c=0;
            for ($i =0; $i <$b; $i++) {

                $ids[] = DB::table('educations')->insertGetId(['jobseeker_id'=>Auth::guard('jobseeker')->user()->id,'degree' => $request->degree[$i],'subject' => $request->subject[$i],'education_img' =>$img_name3,'institute' => $request->institute[$i],'date_from' => $request->date_from[$i],'date_to' => $request->date_to[$i],'education_description' => $request->education_description[$i],'created_at' => now(), 'updated_at' => now()]);
                $c++;
            }

            $a=sizeof($request->skill_name)-1;
            for ($i =0; $i <$a; $i++) {

                $ids[] = DB::table('skills')->insertGetId(['jobseeker_id'=>Auth::guard('jobseeker')->user()->id,'skill_name' => $request->skill_name[$i],'skill_percent' => $request->skill_percent[$i],'created_at' => now(), 'updated_at' => now()]);

            }

            {
                return redirect('resume-detail');
            }

        }
    }
    public function resumeList()
    {
        $resumes=Resume::all();
        return view('resume.resume-list',compact('resumes'));
    }

    public function resumeManage()
    {
        $resumes=DB::table('resumes')->join
        ('jobseekers','jobseekers.id','=','resumes.jobseeker_id')
    ->select('resumes.*')
->where('resumes.jobseeker_id','=',Auth::guard('jobseeker')->user()->id)->get();
        //dd($resumes);
        return view('resume.resume-manage',compact('resumes'));
    }
    public function show($id)
    {

        $resumes = DB::table('jobseekers')
            ->join('resumes','resumes.jobseeker_id','=','jobseekers.id')
            ->select('resumes.*')
            ->where('jobseekers.id','=',$id)->first();
        $educations = DB::table('jobseekers')
            ->join('educations','educations.jobseeker_id','=','jobseekers.id')
            ->select('educations.*')
            ->where('jobseekers.id','=',$id)->get();
        $experiences = DB::table('jobseekers')
            ->join('experiences','experiences.jobseeker_id','=','jobseekers.id')
            ->select('experiences.*')
            ->where('jobseekers.id','=',$id)->get();
        $skills = DB::table('jobseekers')
            ->join('skills','skills.jobseeker_id','=','jobseekers.id')
            ->select('skills.*')
            ->where('jobseekers.id','=',$id)->get();
        return view('resume.resume-detail',['resumes'=>$resumes,'educations'=>$educations,'experiences'=>$experiences,'skills'=>$skills]);


    }


    public function edit(Resume $resume)
    {
        //
    }


    public function update(Request $request, Resume $resume)
    {
        //
    }


    public function destroy(Resume $resume)
    {
        //
    }
}
