@extends('master')
@section('content')
    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner1.jpg)">
        <div class="container page-name">
            <h1 class="text-center">Job Candidates</h1>
            <p class="lead text-center">Use following search box to find best candidates for your openning position</p>
        </div>
        @foreach($data as $job)
        <div class="container">
            <h5>Applicants for</h5>
            <a class="item-block item-block-flat" href="{{route('job-show',['id'=>$job->id])}}">

                <header>
                    <img src="/uploaded_files/job-img/{{$job->img}}" alt="">
                    <div class="hgroup">
                        <h4>{{$job->tittle}}</h4>
                        <h5>{{$job->company_id}}</h5>
                    </div>
                    <div class="header-meta">
                        <span class="location">{{$job->location}}</span>
                        <span class="label label-success">{{$job->type}}</span>
                    </div>
                </header>
            </a>

            <hr>

            <h5>Search</h5>
            <form action="#">

                <div class="row">
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" placeholder="Keyword">
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <select class="form-control selectpicker" multiple>
                            <option selected>All statuses</option>
                            <option>New</option>
                            <option>Contacted</option>
                            <option>Interviewed</option>
                            <option>Hired</option>
                            <option>Archived</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <select class="form-control selectpicker">
                            <option selected>Newest first</option>
                            <option>Oldest first</option>
                            <option>Low salary first</option>
                            <option>High salary first</option>
                            <option>Sort by name</option>
                        </select>
                    </div>

                </div>

                <div class="button-group">
                    <div class="action-buttons">
                        <button class="btn btn-success">Download CSV</button>
                        <button class="btn btn-primary">Apply filter</button>
                    </div>
                </div>

            </form>
        </div>
    </header>
    <!-- END Page header -->
    <!-- Main container -->
    <main>
        <section class="no-padding-top bg-alt">
            <div class="container">
                <div class="row">
                    <!-- Candidate item -->
                    <div class="col-xs-12">
                        <div class="item-block">
                            <header>
                                <a href="{{route('resume-show',['id'=>$job->id])}}"><img class="resume-avatar" src="assets/img/avatar-1.jpg" alt=""></a>
                                <div class="hgroup">
                                    <h4>
                                        <a href="{{route('resume-show',['id'=>$job->id])}}">{{$job->name}}</a>
                                        <select class="form-control selectpicker label-style">
                                            <option data-content="<span class='label label-default'>New</span>" selected>New</option>
                                            <option data-content="<span class='label label-warning'>Contacted</span>">Contacted</option>
                                            <option data-content="<span class='label label-info'>Interviewed</span>">Interviewed</option>
                                            <option data-content="<span class='label label-success'>Hired</span>">Hired</option>
                                            <option data-content="<span class='label label-danger'>Archived</span>">Archived</option>
                                        </select>
                                    </h4>
                                    <h5>{{$job->tittle}}</h5>
                                </div>
                                <div class="header-meta">
                                    <span class="location">{{$job->location}}</span>
                                    <span class="rate">{{$job->salary}} per hour</span>
                                </div>
                            </header>

                            <footer>
                                <div class="status"><strong>Applied on:</strong> July 16, 2016</div>

                                <div class="action-btn">
                                    <a class="btn btn-xs btn-gray" href="#">Download CV</a>
                                    <a class="btn btn-xs btn-gray" data-toggle="modal" data-target="#modal-contact" href="#">Contact</a>
                                    <a class="btn btn-xs btn-danger" href="#">Delete</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                    <!-- END Candidate item -->
                </div>
            </div>
        </section>
    </main>
    <!-- END Main container -->
    <!-- Contact modal -->
    <div class="modal fade" id="modal-contact" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="myModalLabel">Send message</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="subject" class="control-label">Subject</label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-contact" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="myModalLabel">Send message</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="subject" class="control-label">Subject</label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
    @endsection