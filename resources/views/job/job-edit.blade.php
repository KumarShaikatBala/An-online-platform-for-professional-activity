@extends('master')
@section('content')
    {!! Form::open(['url' =>'job-update/'.$jobs->id,'method' =>'post','enctype'=>'multipart/form-data'])!!}
    {{ csrf_field() }}
    <!-- Page header -->
    <header class="page-header">
        <div class="container page-name">
            <h1 class="text-center">Edit Your job</h1>
            <p class="lead text-center">Create a new vacancy for your company and put it online.</p>
        </div>

        <div class="container">

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6">
                    <input type="text" value="{{$jobs->tittle}}" name="tittle" class="form-control input-lg" placeholder="Job title, e.g. Front-end developer">
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                    <select class="form-control selectpicker" name="company">
                        <option value="">Select a company</option>
                        @foreach($companies as $company)
                            {{--<option value="{{$company->id}}">{{$company->company_name}}</option>--}}
                            <option value="{{$company->id}}">{{$company->company_name}}</option>
                        @endforeach
                    </select>
                    <a class="help-block" href="company-add.html">Add new company</a>
                </div>

                <div class="form-group col-xs-12">
                    <textarea class="form-control" name="short_description" rows="3" placeholder="Short description">{{$jobs->short_description}}</textarea>
                </div>

                <div class="form-group col-xs-12">
                    <input type="text" value="{{$jobs->url}}" name="url" class="form-control" placeholder="Application URL">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text"value="{{$jobs->location}}" name="location" class="form-control" placeholder="Location, e.g. Melon Park, CA">
                    </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                        <select class="form-control selectpicker" name="type">
                            <option>Full time</option>
                            <option>Part time</option>
                            <option>Internship</option>
                            <option>Freelance</option>
                            <option>Remote</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                        <input type="text" name="salary" class="form-control" placeholder="Salary">
                    </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        <input type="text" value="{{$jobs->hours}}" name="hours" class="form-control" placeholder="Working hours, e.g. 40">
                        <span class="input-group-addon">hours / week</span>
                    </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon"><i class="fa fa-flask"></i></span>
                        <input type="text"value="{{$jobs->experience}}" name="experience" class="form-control" placeholder="Experience, e.g. 5">
                        <span class="input-group-addon">Years</span>
                    </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
                        <select class="form-control selectpicker" multiple name="degree">
                            <option>Postdoc</option>
                            <option>Ph.D.</option>
                            <option>Master</option>
                            <option selected>Bachelor</option>
                        </select>
                    </div>
                </div>


            </div>

            <div class="button-group">
                <div class="action-buttons">
                    <div class="upload-button">
                        <button class="btn btn-block btn-primary">Choose a cover image</button>
                        <input id="cover_img_file" type="file" name="img">
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


        <!-- Job detail -->
        <section>
            <div class="container">

                <header class="section-header">
                    <span>Description</span>
                    <h2>Job detail</h2>
                    <p>Write about your company, job description, skills required, benefits, etc.</p>
                </header>

                <textarea class="summernote-editor" name="description">{{$jobs->experience}}</textarea>

            </div>
        </section>
        <!-- END Job detail -->


        <!-- Submit -->
        <section class="bg-alt">
            <div class="container">
                <header class="section-header">
                    <span>Are you done?</span>
                    <h2>Update Job</h2>
                    <p>Please review your information once more and press the below button to put your job online.</p>
                </header>

                <p class="text-center"><button class="btn btn-success btn-xl btn-round" type="submit">Update your job</button></p>

            </div>
        </section>
        <!-- END Submit -->


    </main>
    <!-- END Main container -->

    {!! Form::close() !!}

    @endsection