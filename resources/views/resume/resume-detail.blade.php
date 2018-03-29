@extends('master')
@section('content')
    {{--@foreach($resumes as $resumes)--}}
    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url(uploaded_files/resume-img/cover-img/{{$resumes->cover_img}})">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <img src="uploaded_files/resume-img/img/{{$resumes->img}}" alt="">
                </div>

                <div class="col-xs-12 col-sm-8 header-detail">
                    <div class="hgroup">
                        <h1>{{$resumes->name}}</h1>
                        <h3>{{$resumes->headline}}</h3>
                    </div>
                    <hr>
                    <p class="lead">{{$resumes->short_description}}</p>

                    <ul class="details cols-2">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>{{$resumes->location}}</span>
                        </li>

                        <li>
                            <i class="fa fa-globe"></i>
                            <a href="#">{{$resumes->website}}</a>
                        </li>

                        <li>
                            <i class="fa fa-money"></i>
                            <span>{{$resumes->salary}}/ hour</span>
                        </li>

                        <li>
                            <i class="fa fa-birthday-cake"></i>
                            <span>{{$resumes->age}} years-old</span>
                        </li>

                        <li>
                            <i class="fa fa-phone"></i>
                            <span>{{$resumes->mobile}}</span>
                        </li>

                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="#">{{$resumes->email}}</a>
                        </li>
                    </ul>

                    <div class="tag-list">
                        <span>{{$resumes->tag}}</span>
                    </div>
                </div>
            </div>

            <div class="button-group">
                <ul class="social-icons">
                    <li><a class="facebook" href="{{$resumes->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="{{$resumes->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="{{$resumes->dribble}}"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="{{$resumes->github}}"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="instagram" href="{{$resumes->instagram}}"><i class="fa fa-instagram"></i></a></li>
                </ul>

                <div class="action-buttons">
                    <a class="btn btn-gray" href="#">Download CV</a>
                    <a class="btn btn-success" data-toggle="modal" data-target="#modal-contact" href="#">Contact me</a>
                </div>
            </div>
        </div>
    </header>
    <!-- END Page header -->
    <!-- Main container -->
    <main>
        <!-- Education -->
        <section>
            <div class="container">

                <header class="section-header">
                    <span>Latest degrees</span>
                    <h2>Education</h2>
                </header>

                <div class="row">
                    @foreach($educations as $resumes)
                    <div class="col-xs-12">
                        <div class="item-block">
                            <header>
                                <img src="uploaded_files/resume-img/education-img/{{$resumes->education_img}}" alt="">
                                <div class="hgroup">
                                    <h4>{{$resumes->degree}}<small>{{$resumes->subject}}</small></h4>
                                    <h5>{{$resumes->institute}}</h5>
                                </div>
                                <h6 class="time">{{$resumes->date_from}} - {{$resumes->date_to}}</h6>
                            </header>
                            <div class="item-body">
                                <p>{{$resumes->education_description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- END Education -->
        <!-- Work Experience -->
        <section class="bg-alt">
            <div class="container">
                <header class="section-header">
                    <span>Past positions</span>
                    <h2>Work Experience</h2>
                </header>

                <div class="row">
@foreach($experiences as $experience)
                    <!-- Work item -->
                    <div class="col-xs-12">
                        <div class="item-block">
                            <header>
                                <img src="uploaded_files/resume-img/experience-img/{{$experience->experience_img}}" alt="">
                                <div class="hgroup">
                                    <h4>{{$experience->company_name}}</h4>
                                    <h5>{{$experience->position}}</h5>
                                </div>
                                <h6 class="time">{{$experience->work_from}} - {{$experience->work_to}}</h6>
                            </header>
                            <div class="item-body">
                               {!!$experience->work_description!!}
                            </div>
                        </div>
                    </div>
                    <!-- END Work item -->
@endforeach
                </div>

            </div>
        </section>
        <!-- END Work Experience -->


        <!-- Skills -->
        <section>
            <div class="container">
                <header class="section-header">
                    <span>Expertise Areas</span>
                    <h2>Skills</h2>
                </header>

                <br>
                <ul class="skills cols-3">
                    @foreach($skills as $skill)
                    <li>
                        <div>
                            <span class="skill-name">{{$skill->skill_name}}</span>
                            <span class="skill-value">{{$skill->skill_percent}}%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%;"></div>
                        </div>
                    </li>
@endforeach
                </ul>

            </div>
        </section>
        <!-- END Skills -->


    </main>
    <!-- END Main container -->
{{--@endforeach--}}
@endsection