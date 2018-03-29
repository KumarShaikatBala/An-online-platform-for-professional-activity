<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use function compact;
use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function redirect;
use function view;
use Illuminate\Auth\Authenticatable;
use App\Http\Controllers\Auth\EmployerLoginController;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer',['except'=>['comanies','store','show']]);
    }

    public function index()
    {
        $companies=Company::select('company_img', 'company_name', 'company_heading',
            'company_description',
            'location', 'employer_number','company_website', 'company_foundation',
            'company_mobile','company_email', 'company_cover_img', 'facebook',
            'google_plus', 'dribbble', 'pinterest',
            'twitter', 'github', 'instagram',
            'youtube', 'company_details')->where('id','=',Auth::guard('employer')->user()->id)->get()->first();
       return view('company.company-detail',compact('companies'));
    }
    public function manage()
    {
        $companies=Company::with('employe','job')->where('employe_id','=',Auth::guard('employer')->user()->id)->get();
        return view('company.manage-company',compact('companies'));
    }

    public function comanies()
    {
        $companies=Company::all();
return view('company.company_list',compact('companies'));
    }

    public function create()
    {
        return view('company.create-company');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('company_img','company_cover_img')){
            $company_img=$request->file('company_img');
            $company_cover_img=$request->file('company_cover_img');
            $company_img_name=$company_img->getClientOriginalName();
            $company_cover_img_name= $company_cover_img->getClientOriginalName();
            $ext1 = $request->company_img->getClientOriginalExtension();
            $ext2 = $request->company_cover_img->getClientOriginalExtension();
            $company_img_name=time().'.'.$ext1;
            $company_cover_img_name=time().'.'.$ext2;
            $upload_path_for_company_img='uploaded_files/company-img/';
            $upload_path_for_company_cover_img_name='uploaded_files/company-cover-img/';
            $company_img->move( $upload_path_for_company_img,$company_img_name);
            $company_cover_img->move( $upload_path_for_company_cover_img_name,$company_cover_img_name);
        }

if (Company::create([
    'employe_id' =>Auth::guard('employer')->user()->id,
    'company_img' =>$company_img_name,
    'company_name' => $request->company_name,
    'company_heading' => $request->company_heading,
    'company_description' => $request->company_description,
    'location' => $request->location,
    'employer_number' => $request->employer_number,
    'company_website' => $request->company_website,
    'company_foundation' => $request->company_foundation,
    'company_mobile' => $request->company_mobile,
    'company_email' => $request->company_email,
    'company_cover_img' =>$company_cover_img_name,
    'facebook' => $request->facebook,
    'google_plus' => $request->google_plus,
    'dribbble' => $request->dribbble,
    'pinterest' => $request->pinterest,
    'twitter' => $request->twitter,
    'github' => $request->github,
    'instagram' => $request->instagram,
    'youtube' => $request->youtube,
    'company_details' => $request->company_details,

])){
 return redirect('company-manage')->with('msg','Company Added Successfully!');
}


    }

    public function show($id)
    {
        $companies=Company::with('employe','job')->where('id','=',$id)->first();
        return view('company.company-detail',compact('companies'));
    }


    public function edit($id)
    {
        $companies=Company::find($id);
        return view('company.company_edit',compact('companies'));
    }


    public function update(Request $request,$id)
    {
        $companies=Company::find($id);
        $companies->update($request->all());
        return redirect('company-manage')->with('msg','Company Updated Successfully!');
    }


    public function destroy($id)
    {
        Company::destroy($id);
        return redirect('company-manage')->with('msg','Company Deleted Successfully !');
    }
}
