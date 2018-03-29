@extends('master')
@section('content')
    <header class="page-header bg-img size-lg" style="background-image: url(/uploaded_files/company-cover-img/{{$companies->company_cover_img}})">
        <div class="container">
            <div class="header-detail">
                <img class="logo" src="/uploaded_files/company-img/{{$companies->company_img}}" alt="logo">
                <div class="hgroup">
                    <h1>{{$companies->company_name}}</h1>
                    <h3>{{$companies->company_heading}}</h3>
                </div>
                <hr>
                <p class="lead">{{$companies->company_description}}</p>

                <ul class="details cols-3">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <span>{{$companies->location}}</span>
                    </li>

                    <li>
                        <i class="fa fa-globe"></i>
                        <a href="#">{{$companies->company_website}}</a>
                    </li>

                    <li>
                        <i class="fa fa-users"></i>
                        <span>{{$companies->employer_number}}</span>
                    </li>

                    <li>
                        <i class="fa fa-birthday-cake"></i>
                        <span>{{$companies->company_foundation}}</span>
                    </li>

                    <li>
                        <i class="fa fa-phone"></i>
                        <span>{{$companies->company_mobile}}</span>
                    </li>

                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="#">{{$companies->company_email}}</a>
                    </li>
                </ul>

                <div class="button-group">
                    <ul class="social-icons">
                        <li><a class="facebook" href="{{$companies->facebook}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="{{$companies->google_plus}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="{{$companies->dribbble}}"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="{{$companies->pinterest}}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="instagram" href="{{$companies->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    </ul>

                    <div class="action-buttons">
                        <a class="btn btn-gray" href="#">Favorite</a>
                        <a class="btn btn-success" href="#">Contact</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- END Page header -->

    <!-- Main container -->
    <main>
        <!-- Company detail -->
        <section>
            <div class="container">

                <header class="section-header">
                    <span>About</span>
                    <h2>Company detail</h2>
                </header>

                <p>{!!$companies->company_details!!}</p>
                <p></p>

            </div>
        </section>
        <!-- END Company detail -->

        <!-- Open positions -->
        <section id="open-positions" class="bg-alt">
            <div class="container">
                <header class="section-header">
                    <span>vacancies</span>
                    <h2>Open positions</h2>
                </header>

                <div class="row">

                    <!-- Job item -->
                    @foreach($companies->job as $job)
                    <div class="col-xs-12">
                        <a class="item-block" href="{{route('job-show',['id'=>$job->id])}}">
                            <header>
                                <img src="/uploaded_files/job-img/{{$job->img}}" alt="">
                                <div class="hgroup">
                                    <h4> {{$job->tittle}}</h4>
                                    <h5>{{$companies->company_name}}<span class="label label-success">{{$job->type}}</span></h5>
                                </div>
                                <time datetime="2016-03-10 20:00">34 min ago</time>
                            </header>

                            <div class="item-body">
                                <p>{!!$job->description!!}</p>
                            </div>

                            <footer>
                                <ul class="details cols-3">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>{{$job->location}}</span>
                                    </li>

                                    <li>
                                        <i class="fa fa-money"></i>
                                        <span>{{$job->salary}}/ year</span>
                                    </li>

                                    <li>
                                        <i class="fa fa-certificate"></i>
                                        <span>{{$job->degree}}</span>
                                    </li>
                                </ul>
                            </footer>
                        </a>
                    </div>
                    <!-- END Job item -->
                    @endforeach
                </div>

            </div>
        </section>
        <!-- END Open positions -->

    </main>
    <!-- END Main container -->

@endsection