@extends('master')
@section('content')
    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(assets/img/bg-banner1.jpg)">
        <div class="container">
            @if(Session::has('msg'))
                <h2 class="text-center" id="msg">{{session::get('msg')}}</h2>
            @endif
            <script>
                setTimeout(function() {
                    $('#msg').fadeOut('fast');
                }, 2000);
            </script>
            <div class="col-xs-12">
                <br><br>
                <h2>We offer <mark>1,259</mark> job vacancies right now!</h2>
                <h5 class="font-alt">Find your desire one in a minute</h5>
                <br><br><br>
                <form class="header-job-search">
                    <div class="input-keyword">
                        <input type="text" class="form-control" placeholder="Job title, skills, or company">
                    </div>

                    <div class="input-location">
                        <input type="text" class="form-control" placeholder="City, state or zip">
                    </div>

                    <div class="btn-search">
                        <button class="btn btn-primary" type="submit">Find jobs</button>
                        <a href="">Advanced Job Search</a>
                    </div>
                </form>
            </div>

        </div>
    </header>
    <!-- END Site header -->
    <main>



        <!-- Recent jobs -->
        <section class="bg-alt">
            <div class="container">
                <header class="section-header">
                    <span>Latest</span>
                    <h2>Recent jobs</h2>
                    <p>Here's the last five job posted on the website</p>
                </header>

                <div class="row item-blocks-condensed">

                    <!-- Job item -->
                    @foreach($jobs as $job)
                    <div class="col-xs-12">
                        <a class="item-block" href="{{route('job-show',['id'=>$job->id])}}">
                            <header>
                                <img src="/uploaded_files/job-img/{{$job->img}}" alt="">
                                <div class="hgroup">
                                    <h4>{{$job->tittle}}</h4>
                                    <h5>{{$job->company_name}}</h5>
                                </div>
                                <div class="header-meta">
                                    <span class="location">{{$job->location}}</span>
                                    <span class="label label-success">{{$job->type}}</span>
                                </div>
                            </header>
                        </a>
                    </div>
                    <!-- END Job item -->
                        @endforeach
                </div>

                <br><br>
                <p class="text-center"><a class="btn btn-info" href="{{route('job-list')}}">Browse all jobs</a></p>
            </div>
        </section>
        <!-- END Recent jobs -->


        <!-- How it works -->
        <section>
            <div class="container">

                <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
                    <br>
                    <img class="center-block" src="assets/img/how-it-works.png" alt="how it works">
                </div>

                <div class="col-sm-12 col-md-6">
                    <header class="section-header text-left">
                        <span>Workflow</span>
                        <h2>How it works</h2>
                    </header>

                    <p class="lead">Easy way to find jobs and offer jobs.
                        Professional Networking Community.
                    </p>
                    <p>Jobseeker will be able to communicate directly with the employee and jobs provider through online
                        User will be able to see the jobseeker’s profile without calling them for interview.
                        Jobseekers will be able to add their CV update their profile, previous working Experience skills and many other information for finding appropriate jobs.
                        Jobseeker will be able to comment on job provider profile they will also write blog in this system.</p>


                    <br><br>
                    <a class="btn btn-primary" href="page-typography.html">Learn more</a>
                </div>

            </div>
        </section>
        <!-- END How it works -->


        <!-- Categories -->
        <section class="bg-alt">
            <div class="container">
                <header class="section-header">
                    <span>Categories</span>
                    <h2>Popular jobs</h2>
                    <p>Here's the most popular categories</p>
                </header>

                <div class="category-grid">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <h6>Technology</h6>
                        <p>Designer, Developer, IT Service, Front-end developer, Project management</p>
                    </a>

                    <a href="#">
                        <i class="fa fa-line-chart"></i>
                        <h6>Accounting</h6>
                        <p>Finance, Tax service, Payroll manager, Book keeper, Human resource</p>
                    </a>

                    <a href="#">
                        <i class="fa fa-medkit"></i>
                        <h6>Medical</h6>
                        <p>Doctor, Nurse, Hospotal, Dental service, Massagist</p>
                    </a>

                    <a href="#">
                        <i class="fa fa-cutlery"></i>
                        <h6>Food</h6>
                        <p>Restaurant, Food service, Coffe shop, Cashier, Waitress</p>
                    </a>

                    <a href="#">
                        <i class="fa fa-newspaper-o"></i>
                        <h6>Media</h6>
                        <p>Journalism, Newspaper, Reporter, Writer, Cameraman</p>
                    </a>

                    <a href="#">
                        <i class="fa fa-institution"></i>
                        <h6>Government</h6>
                        <p>Federal, Law, Human resource, Manager, Biologist</p>
                    </a>
                </div>

                <p class="text-center"><a class="btn btn-info" href="">Browse all categories</a></p>

            </div>
        </section>
        <!-- END Categories -->



        <!-- Pricing -->
        <section>
            <div class="container">
                <header class="section-header">
                    <span>Plans</span>
                    <h2>Pricing</h2>
                    <p>Choose a plan that fits your needs</p>
                </header>

                <ul class="pricing">
                    <li>
                        <h6>Basic Package</h6>
                        <div class="price">
                            <sup>$</sup>0
                            <span>&nbsp;</span>
                        </div>
                        <hr>
                        <p><strong>1</strong> job posting</p>
                        <p><strong>No</strong> featured job</p>
                        <p><strong>5 days</strong> listing duration</p>
                        <br>
                        <a class="btn btn-primary btn-block" href="#">Select plan</a>
                    </li>

                    <li>
                        <h6>Medium Package</h6>
                        <div class="price">
                            <sup>$</sup>5<sup>.99</sup>
                            <span>per month</span>
                        </div>
                        <hr>
                        <p><strong>5</strong> job posting</p>
                        <p><strong>1</strong> featured job</p>
                        <p><strong>30 days</strong> listing duration</p>
                        <br>
                        <a class="btn btn-primary btn-block" href="#">Select plan</a>
                    </li>

                    <li>
                        <h6>Big Package</h6>
                        <div class="price">
                            <sup>$</sup>15<sup>.99</sup>
                            <span>per month</span>
                        </div>
                        <hr>
                        <p><strong>20</strong> job posting</p>
                        <p><strong>5</strong> featured job</p>
                        <p><strong>75 days</strong> listing duration</p>
                        <br>
                        <a class="btn btn-primary btn-block" href="#">Select plan</a>
                    </li>
                </ul>

            </div>
        </section>
        <!-- END Pricing -->


        <!-- Newsletter -->
        <section class="bg-img text-center" style="background-image: url(assets/img/bg-facts.jpg)">
            <div class="container">
                <h2><strong>Subscribe</strong></h2>
                <h6 class="font-alt">Get weekly top new jobs delivered to your inbox</h6>
                <br><br>
                <form class="form-subscribe" action="#">
                    <div class="input-group">
                        <input type="text" class="form-control input-lg" placeholder="Your eamil address">
                        <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Subscribe</button>
              </span>
                    </div>
                </form>
            </div>
        </section>
        <!-- END Newsletter -->


    </main>
    @endsection