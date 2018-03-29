<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs</title>

    <!-- Styles -->
    <link href="{{asset('frontend/assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendors/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/custom.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
</head>

<body class="nav-on-header smart-nav">

<!-- Navigation bar -->
<nav class="navbar">
    <div class="container">

        <!-- Logo -->
        <div class="pull-left">
            <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

            <div class="logo-wrapper">
                <a class="logo" href="{{asset(url('/'))}}"><img src="frontend/assets/img/logo.png" alt="logo"></a>
                <a class="logo-alt" href="{{asset(url('/'))}}"><img src="frontend/assets/img/logo-alt.png" alt="logo-alt"></a>
            </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
       {{-- <div class="pull-right">

            <div class="dropdown user-account">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                    <img src="assets/img/logo-envato.png" alt="avatar">
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="user-login.html">Login</a></li>
                    <li><a href="user-register.html">Register</a></li>
                    <li><a href="user-forget-pass.html">Forget pass</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>

        </div>--}}
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
            <li>
                <a class="active" href="{{asset(url('/'))}}">Home</a>
            </li>
            <li>
                <a href="#">Position</a>
                <ul>
                    <li><a href="{{route('job-list')}}">Browse jobs</a></li>
                    {{--<li><a href="{{route('job-detail')}}">Job detail</a></li>--}}
                    <li><a href="job-apply.html">Apply for job</a></li>
                    <li><a href="{{route('job-post-form')}}">Post a job</a></li>
                    <li><a href="{{route('job-manage')}}">Manage jobs</a></li>
                    @if (Auth::guard('employer')->user())
                    <li><a href="{{route('job-candidatesShow',Auth::guard('employer')->user()->id)}}">Candidates</a></li>

                   @endif
                </ul>
            </li>
            <li>
                <a href="#">Resume</a>
                <ul>
                    <li><a href="{{route('resume-list')}}">Browse resumes</a></li>
                    <li><a href="{{route('resume-detail')}}">Resume detail</a></li>
                    <li><a href="{{route('resume-form')}}">Create a resume</a></li>
                    <li><a href="{{route('resume-manage')}}">Manage resumes</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Company</a>
                <ul>
                    <li><a href="{{route('company-list')}}">Browse companies</a></li>
                    {{--<li><a href="{{route('company-detail')}}">Company detail</a></li>--}}
                    <li><a href="{{route('company-form')}}">Create a company</a></li>
                    <li><a href="{{route('company-manage')}}">Manage companies</a></li>
                </ul>
            </li>
            <li>
                <a href="contact">Contact</a>
            </li>
            <li>
                <a class="" href="">Account</a>
                <ul>
                    <li>@guest('employer')
                                <a href="{{route('employer-login-form')}}">Employer Login</a>
                            @else
                                <a href="{{route('employer-logout')}}">{{Auth::guard('employer')->user()->name}} Logout</a>
                            @endguest
                       </li>
                    <li>
                        @guest('jobseeker')
                                <a href="{{route('job_seeker-login-form')}}">Job Seeker Login</a>
                            @else
                                <a href="{{route('job_seeker-logout')}}">{{Auth::guard('jobseeker')->user()->name}} Logout</a>
                            @endguest
                       </li>
                </ul>
            </li>

            <li>
                <a class="" href="">Register</a>
                <ul>
                    <li><a href="employer-register">Employer</a></li>
                    <li><a href="job_seeker-register">Job Seeker</a></li>
                </ul>
            </li>


        </ul>
        <!-- END Navigation menu -->

    </div>
</nav>
<!-- END Navigation bar -->