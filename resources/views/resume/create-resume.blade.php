@extends('master')
@section('content')
    {!! Form::open(['route' =>'resume-store','class'=>'','method' => 'post','enctype'=>'multipart/form-data']) !!}
    {{ csrf_field() }}
    <!-- Page header -->
    <header class="page-header">
        <div class="container page-name">
            @if(Session::has('msg'))
   <h1 class="text-center" id="msg">{{session::get('msg')}}</h1>
            @endif
            <script>
                setTimeout(function() {
           $('#msg').fadeOut('fast');
                }, 2000);
            </script>
            <h1 class="text-center">Add your resume</h1>
            <p class="lead text-center">Create your resume and put it online.</p>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                        <input type="file" name="img" class="dropify">
                        <span class="help-block">Please choose a 4:6 profile picture.</span>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-8">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control input-lg" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <input type="text" name="headline" class="form-control" placeholder="Headline (e.g. Front-end developer)">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="short_description" rows="3" placeholder="Short description about you"></textarea>
                    </div>

                    <hr class="hr-lg">

                    <h6>Basic information</h6>
                    <div class="row">

                        <div class="form-group col-xs-12 col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <input type="text" name="location" class="form-control" placeholder="Location, e.g. Melon Park, CA">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                <input type="text" name="website" class="form-control" placeholder="Website address">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                                <input type="text" name="salary" class="form-control" placeholder="Salary, e.g. 85">
                                <span class="input-group-addon">Per hour</span>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                                <input type="text" name="age" class="form-control" placeholder="Age">
                                <span class="input-group-addon">Years old</span>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" name="mobile" class="form-control" placeholder="Phone number">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="email" class="form-control" placeholder="Email address">
                            </div>
                        </div>

                    </div>

                    <hr class="hr-lg">

                    <h6>Tags list</h6>
                    <div class="form-group">
                        <input type="text" name="tag" value="HTML,CSS,Javascript" data-role="tagsinput" placeholder="Tag name">
                        <span class="help-block">Write tag name and press enter</span>
                    </div>

                </div>
            </div>

            <div class="button-group">
                <div class="action-buttons">

                    <div class="upload-button">
                        <button class="btn btn-block btn-gray">Choose a resume file</button>
                        <input type="file" name="resume_file">
                    </div>

                    <div class="upload-button">
                        <button class="btn btn-block btn-primary">Choose a cover image</button>
                        <input type="file" name="cover_img">
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
                                <input type="text" name="facebook" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                <input type="text" name="google_plus" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dribbble"></i></span>
                                <input type="text" name="dribble" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                                <input type="text" name="pinterest" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                <input type="text" name="twitter" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-github"></i></span>
                                <input type="text" name="github" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                <input type="text" name="instagram" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                                <input type="text" name="youtube" class="form-control" placeholder="Profile URL">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Social media -->



        <!-- Education -->
        <section class=" bg-alt">
            <div class="container">

                <header class="section-header">
                    <span>Latest degrees</span>
                    <h2>Education</h2>
                </header>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="item-block">
                            <div class="item-form">

                                <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <input type="file" name="education_img[]" class="dropify">
                                            <span class="help-block">Please choose a square logo</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" name="degree[]" class="form-control" placeholder="Degree, e.g. Bachelor">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="subject[]" class="form-control" placeholder="Major, e.g. Computer Science">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="institute[]" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology">
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">Date from</span>
                                                <input type="text" name="date_from[]" class="form-control" placeholder="e.g. 2012">
                                                <span class="input-group-addon">Date to</span>
                                                <input type="text" name="date_to[]" class="form-control" placeholder="e.g. 2016">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="education_description[]" rows="3" placeholder="Short description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 duplicateable-content">
                        <div class="item-block">
                            <div class="item-form">

                                <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <input type="file" name="education_img[]" class="dropify">
                                            <span class="help-block">Please choose a square logo</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" name="degree[]" class="form-control" placeholder="Degree, e.g. Bachelor">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="subject[]" class="form-control" placeholder="Major, e.g. Computer Science">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="institute[]" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology">
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">Date from</span>
                                                <input type="text" name="date_from[]" class="form-control" placeholder="e.g. 2012">
                                                <span class="input-group-addon">Date to</span>
                                                <input type="text" name="date_to[]" class="form-control" placeholder="e.g. 2016">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="education_description[]" rows="3" placeholder="Short description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 text-center">
                        <br>
                        <button class="btn btn-primary btn-duplicator">Add education</button>
                    </div>


                </div>
            </div>
        </section>
        <!-- END Education -->


        <!-- Work Experience -->
        <section>
            <div class="container">
                <header class="section-header">
                    <span>Past positions</span>
                    <h2>Work Experience</h2>
                </header>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="item-block">
                            <div class="item-form">

                                <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <input type="file" name="experience_img[]" class="dropify">
                                            <span class="help-block">Please choose a square logo</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" name="company_name[]" class="form-control" placeholder="Company name">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="position[]" class="form-control" placeholder="Position, e.g. UI/UX Researcher">
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">Date from</span>
                                                <input type="text" name="work_from[]" class="form-control" placeholder="e.g. 2012">
                                                <span class="input-group-addon">Date to</span>
                                                <input type="text" name="work_to[]" class="form-control" placeholder="e.g. 2016">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea class="summernote-editor" name="work_description[]"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 duplicateable-content">
                        <div class="item-block">
                            <div class="item-form">

                                <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <input type="file" name="experience_img[]" class="dropify">
                                            <span class="help-block">Please choose a square logo</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" name="company_name[]" class="form-control" placeholder="Company name">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="position[]" class="form-control" placeholder="Position, e.g. UI/UX Researcher">
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">Date from</span>
                                                <input type="text" name="work_from[]" class="form-control" placeholder="e.g. 2012">
                                                <span class="input-group-addon">Date to</span>
                                                <input type="text" name="work_to[]" class="form-control" placeholder="e.g. 2016">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea class="summernote-editor" name="work_description[]"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 text-center">
                        <br>
                        <button class="btn btn-primary btn-duplicator">Add experience</button>
                    </div>


                </div>

            </div>
        </section>
        <!-- END Work Experience -->


        <!-- Skills -->
        <section class=" bg-alt">
            <div class="container">
                <header class="section-header">
                    <span>Expertise Areas</span>
                    <h2>Skills</h2>
                </header>

                <div class="row">

                      <div class="col-xs-12">
                          <div class="item-block">
                              <div class="item-form">

                                  <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                                  <div class="row">
                                      <div class="col-xs-12 col-sm-6">
                                          <div class="form-group">
                                              <input type="text" name="skill_name[]" class="form-control" placeholder="Skill name, e.g. HTML">
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-6">

                                          <div class="form-group">
                                              <div class="input-group">
                                                  <input type="text" name="skill_percent[]" class="form-control" placeholder="Skill proficiency, e.g. 90">
                                                  <span class="input-group-addon">%</span>
                                              </div>
                                          </div>

                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>

                    <div class="col-xs-12 duplicateable-content">
                        <div class="item-block">
                            <div class="item-form">

                                <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="skill_name[]" class="form-control" placeholder="Skill name, e.g. HTML">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="skill_percent[]" class="form-control" placeholder="Skill proficiency, e.g. 90">
                                                <span class="input-group-addon">%</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 text-center">
                        <br>
                        <button class="btn btn-primary btn-duplicator">Add experience</button>
                    </div>


                </div>

            </div>
        </section>
        <!-- END Skills -->



        <!-- Submit -->
        <section class=" bg-img" style="background-image: url(assets/img/bg-facts.jpg);">
            <div class="container">
                <header class="section-header">
                    <span>Are you done?</span>
                    <h2>Submit resume</h2>
                    <p>Please review your information once more and press the below button to put your resume online.</p>
                </header>

                <p class="text-center"><button class="btn btn-success btn-xl btn-round" type="submit">Submit your resume</button></p>

            </div>
        </section>
        <!-- END Submit -->


    </main>
    <!-- END Main container -->

    {!! Form::close() !!}

    @endsection