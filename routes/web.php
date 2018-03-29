<?php
Route::get('/', function () {
    return view('index');
});
Route::get('/','JobController@indexjobs')->name('/');
//contact
Route::get('contact', function () {
    return view('contact');
});
//Employer:
Route::get('employer-register','EmployerController@create');
Route::post('employer-store','EmployerController@store')->name('employer-store');
Route::get('employer-login-form','Auth\EmployerLoginController@LoginForm')->name('employer-login-form');
Route::post('employer-login','Auth\EmployerLoginController@login')->name('employer-login');
Route::get('employer-logout','Auth\EmployerLoginController@logout')->name('employer-logout');
//Job-Seeker:
Route::get('job_seeker-register','JobseekerController@create');
Route::post('job_seeker-store','JobseekerController@store')->name('job_seeker-store');
Route::get('job_seeker-login-form','Auth\JobseekerLoginController@LoginForm')->name('job_seeker-login-form');
Route::post('job_seeker-login','Auth\JobseekerLoginController@login')->name('job_seeker-login');
Route::get('job_seeker-logout','Auth\JobseekerLoginController@logout')->name('job_seeker-logout');
//resume:
Route::get('resume-form','ResumeController@create')->name('resume-form');
Route::post('resume-store','ResumeController@store')->name('resume-store');
Route::get('resume-list','ResumeController@resumeList')->name('resume-list');
Route::get('resume-manage','ResumeController@resumeManage')->name('resume-manage');
Route::get('resume-detail','ResumeController@index')->name('resume-detail');
Route::get('resume-show/{id}','ResumeController@show')->name('resume-show');


//company:
Route::get('company-form','CompanyController@create')->name('company-form');
Route::post('company-store','CompanyController@store')->name('company-store');
Route::get('company-detail','CompanyController@index')->name('company-detail');
Route::get('company-list','CompanyController@comanies')->name('company-list');
Route::get('company-manage','CompanyController@manage')->name('company-manage');
Route::get('company-edit/{id}','CompanyController@edit')->name('company-edit');
Route::post('company-update/{id}','CompanyController@update')->name('company-update');
Route::get('company-delete/{id}','CompanyController@destroy')->name('company-delete');
Route::get('company-show/{id}','CompanyController@show')->name('company-show');

//job
Route::get('job-post-form','JobController@create')->name('job-post-form');
Route::post('job-post-store','JobController@store')->name('job-post-store');
Route::get('job-detail','JobController@detail')->name('job-detail');
Route::get('job-list','JobController@index')->name('job-list');
Route::get('job-manage','JobController@manage')->name('job-manage');
Route::get('job-edit/{id}','JobController@edit')->name('job-edit');
Route::post('job-update/{id}','JobController@update')->name('job-update');
Route::get('job-delete/{id}','JobController@destroy')->name('job-delete');
Route::get('job-show/{id}','JobController@show')->name('job-show');
Route::post('job-candidates','JobController@candidates')->name('job-candidates');
Route::get('job-candidatesShow/{id}','JobController@candidatesShow')->name('job-candidatesShow');
