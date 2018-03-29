@extends('master')
@section('content')
    {!! Form::open(['url' =>'job-candidates','method' =>'post','enctype'=>'multipart/form-data'])!!}
    {{ csrf_field() }}
    @foreach($jobs as $jobs)
    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
        <div class="container">
            <div class="header-detail">
                <img class="logo" src="/uploaded_files/job-img/{{$jobs->img}}" alt="">
                <div class="hgroup">
                    <h1>{{$jobs->tittle}}</h1>
                    <h3><a href="#">{{$jobs->company_name}}</a></h3>
                </div>
                <time datetime="2016-03-03 20:00">2 days ago</time>
                <hr>
                <p class="lead">{!! $jobs->short_description !!}</p>

                <ul class="details cols-3">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <span>{{$jobs->location}}</span>
                    </li>

                    <li>
                        <i class="fa fa-briefcase"></i>
                        <span>{{$jobs->type}}</span>
                    </li>

                    <li>
                        <i class="fa fa-money"></i>
                        <span>{{$jobs->salary}}/ year</span>
                    </li>

                    <li>
                        <i class="fa fa-clock-o"></i>
                        <span>{{$jobs->hours}}/ week</span>
                    </li>

                    <li>
                        <i class="fa fa-flask"></i>
                        <span>{{$jobs->experience}} years experience</span>
                    </li>

                    <li>
                        <i class="fa fa-certificate"></i>
                        <a href="#">{{$jobs->degree}} </a>
                    </li>
                </ul>

                <div class="button-group">
                    <ul class="social-icons">
                        <li class="title">Share on</li>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <div class="action-buttons">
                        {{--<a class="btn btn-primary" href="#">Apply with linkedin</a>--}}
                        <input type="hidden" name="job_id" value="{{$jobs->id}}">
                        <input type="hidden" name="employe_id" value="{{$jobs->employe_id}}">
                        <input type="hidden" name="jobseeker" value="{{Auth::guard('jobseeker')->user()->name}}">
                        <input type="hidden" name="jobseeker_id" value="{{Auth::guard('jobseeker')->user()->id}}">
                        <button type="submit" class="btn btn-success">Apply now</button>
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
                {!!$jobs->description!!}
            </div>
        </section>
        <!-- END Job detail -->

    </main>
    <!-- END Main container -->
@endforeach
    {!! Form::close() !!}
    @endsection