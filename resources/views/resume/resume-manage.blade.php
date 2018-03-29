@extends('master')
@section('content')
    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
        <div class="container no-shadow">
            <h1 class="text-center">Manage your resumes</h1>
            <p class="lead text-center">Here's the list of your created resumes. You can edit or delete them, or even add a new one.</p>
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
                        <a class="btn btn-primary btn-sm" href="{{route('resume-form')}}">Add new resume</a>
                    </div>
                    <!-- Resume item -->
                    @foreach($resumes as $resume)
                    <div class="col-xs-12">
                        <div class="item-block">
                            <header>
                                <a href="resume-detail.html"><img class="resume-avatar" src="assets/img/avatar.jpg" alt=""></a>
                                <div class="hgroup">
                                    <h4><a href="{{route('resume-show',['id'=>$resume->id])}}">{{$resume->name}}</a></h4>
                                    <h5>{{$resume->headline}}</h5>
                                </div>
                                <div class="header-meta">
                                    <span class="location">{{$resume->location}}</span>
                                    <span class="rate">{{$resume->salary}} per hour</span>
                                </div>
                            </header>

                            <footer>
                                <p class="status"><strong>Updated on:</strong> March 10, 2016</p>

                                <div class="action-btn">
                                    <a class="btn btn-xs btn-gray" href="#">Hide</a>
                                    <a class="btn btn-xs btn-gray" href="#">Edit</a>
                                    <a class="btn btn-xs btn-danger" href="#">Delete</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                    @endforeach
                    <!-- END Resume item -->

                </div>
            </div>
        </section>
    </main>
    <!-- END Main container -->

    @endsection