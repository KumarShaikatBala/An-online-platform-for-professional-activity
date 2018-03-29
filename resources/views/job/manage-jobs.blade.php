@extends('master')
@section('content')
    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner1.jpg)">
        @if(Session::has('msg'))
            <h1 class="text-center alert-warning" id="msg">{{session::get('msg')}}</h1>
        @endif
        <script>
            setTimeout(function() {
                $('#msg').fadeOut('fast');
            }, 2000);
        </script>
        <div class="container no-shadow">
            <h1 class="text-center">Manage jobs</h1>
            <p class="lead text-center">Here's the list of your submitted jobs. You can edit or delete them, or even add a new one.</p>
        </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
        <section class="no-padding-top bg-alt">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 text-right">
                        <br>
                        <a class="btn btn-primary btn-sm" href="{{route('job-post-form')}}">Add new job</a>
                    </div>
                    <!-- Job detail -->
                    @foreach($jobs as $job)
                    <div class="col-xs-12">
                        <div class="item-block">
                            <header>
                                <a href="{{route('job-show',['id'=>$job->id])}}"><img src="/uploaded_files/job-img/{{$job->img}}" alt=""></a>
                                <div class="hgroup">
                                    <h4><a href="{{route('job-show',['id'=>$job->id])}}">{{$job->tittle}}</a></h4>
                                    <h5><a href="company-detail.html">{{$job->company_name}}</a></h5>
                                </div>
                                <div class="header-meta">
                                    <span class="location">{{$job->location}}</span>
                                    <time datetime="2016-03-10 20:00">34 min ago</time>
                                </div>
                            </header>

                            <footer>
                                <p class="status"><strong>Status:</strong> Pending approval</p>

                                <div class="action-btn">
                                    <a class="btn btn-xs btn-gray" href="{{route('job-edit',['id'=>$job->id])}}">Edit</a>
                                    <a class="btn btn-xs btn-danger" href="{{route('job-delete',['id'=>$job->id])}}">Delete</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                    @endforeach
                    <!-- END Job detail -->
                </div>
            </div>
        </section>
    </main>
    <!-- END Main container -->

    @endsection