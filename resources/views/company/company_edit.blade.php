@extends('master')
@section('content')
    {!! Form::open(['url' =>'company-update/'.$companies->id,'method' =>'post','enctype'=>'multipart/form-data'])!!}
    {{ csrf_field() }}
    <!-- Page header -->
    <header class="page-header">
        <div class="container page-name">
            <h1 class="text-center">Edit your company</h1>
            <p class="lead text-center">Create a profile for your company and put it online.</p>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="row">

                        <div class="col-xs-12 col-sm-4 col-lg-2">
                            <div class="form-group">
                                <input type="file" name="company_img" class="dropify">
                                <span class="help-block">A square logo</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-lg-10">
                            <div class="form-group">
                                <input type="text" value="{{$companies->company_name}}" name="company_name" class="form-control input-lg" placeholder="Comapny name">
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{$companies->company_heading}}" name="company_heading" class="form-control" placeholder="Headline (e.g. Internet and computer software)">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Short description" name="company_description">{{$companies->company_description}}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="row">

                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <input type="text" value="{{$companies->location}}" name="location" class="form-control" placeholder="Location, e.g. Melon Park, CA">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control selectpicker" name="employer_number">
                                    <option value="0 - 9">0 - 9</option>
                                    <option value="10 - 99">10 - 99</option>
                                    <option value="100 - 999">100 - 999</option>
                                    <option value="1,000 - 9,999">1,000 - 9,999</option>
                                    <option value="10,000 - 99,999">10,000 - 99,999</option>
                                    <option value="100,000 - 999,999">100,000 - 999,999</option>
                                </select>
                                <span class="input-group-addon">Employer</span>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                <input type="text" value="{{$companies->company_website}}" name="company_website" class="form-control" placeholder="Website address">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                                <input type="text" value="{{$companies->company_foundation}}" name="company_foundation" class="form-control" placeholder="Founded on, e.g. 2013">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" value="{{$companies->company_mobile}}" name="company_mobile" class="form-control" placeholder="Phone number">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" value="{{$companies->company_email}}" name="company_email" class="form-control" placeholder="Email address">
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="button-group">
                <div class="action-buttons">
                    <div class="upload-button">
                        <button class="btn btn-block btn-primary">Choose a cover image</button>
                        <input id="cover_img_file" type="file" name="company_cover_img">
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>

        <!-- Social media -->
        <section>
            <div class="container">

                <header class="section-header">
                    <span>Get connected</span>
                    <h2>Social media</h2>
                </header>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                <input type="text" value="{{$companies->facebook}}" name="facebook" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                <input type="text" value="{{$companies->google_plus}}" name="google_plus" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dribbble"></i></span>
                                <input type="text" value="{{$companies->dribbble}}" name="dribbble" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                                <input type="text" value="{{$companies->pinterest}}" name="pinterest" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                <input type="text" value="{{$companies->twitter}}" name="twitter" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-github"></i></span>
                                <input type="text" value="{{$companies->github}}" name="github" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                <input type="text" value="{{$companies->instagram}}" name="instagram" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                                <input type="text" value="{{$companies->youtube}}" name="youtube" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Social media -->

        <!-- Company detail -->
        <section class=" bg-alt">
            <div class="container">

                <header class="section-header">
                    <span>About</span>
                    <h2>Company detail</h2>
                    <p>Write about your company, culture, benefits of working there, etc.</p>
                </header>

                <textarea class="summernote-editor" name="company_details">{{$companies->company_details}}</textarea>

            </div>
        </section>
        <!-- END Company detail -->


        <!-- Submit -->
        <section>
            <div class="container">
                <header class="section-header">
                    <span>Are you done?</span>
                    <h2>Update it</h2>
                    <p>Please review your information once more and press the below button to put your company online.</p>
                </header>

                <p class="text-center"><button class="btn btn-success btn-xl btn-round" type="submit">Update your company</button></p>

            </div>
        </section>
        <!-- END Submit -->


    </main>
    <!-- END Main container -->

    {!! Form::close() !!}

    @endsection