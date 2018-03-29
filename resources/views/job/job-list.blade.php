@extends('master')
@section('content')
    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url(assets/img/bg-banner1.jpg);">
        <div class="container page-name">
            <h1 class="text-center">Browse jobs</h1>
            <p class="lead text-center">Use following search box to find jobs that fits you better</p>
        </div>

        <div class="container">
            <form action="#">

                <div class="row">
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" placeholder="Keyword: job title, skills, or company">
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" placeholder="Location: city, state or zip">
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <select class="form-control selectpicker" multiple>
                            <option selected>All categories</option>
                            <option>Developer</option>
                            <option>Designer</option>
                            <option>Customer service</option>
                            <option>Finance</option>
                            <option>Healthcare</option>
                            <option>Sale</option>
                            <option>Marketing</option>
                            <option>Information technology</option>
                            <option>Others</option>
                        </select>
                    </div>


                    <div class="form-group col-xs-12 col-sm-4">
                        <h6>Contract</h6>
                        <div class="checkall-group">
                            <div class="checkbox">
                                <input type="checkbox" id="contract1" name="contract" checked>
                                <label for="contract1">All types</label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="contract2" name="contract">
                                <label for="contract2">Full-time <small>(354)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="contract3" name="contract">
                                <label for="contract3">Part-time <small>(284)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="contract4" name="contract">
                                <label for="contract4">Internship <small>(169)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="contract5" name="contract">
                                <label for="contract5">Freelance <small>(480)</small></label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-4">
                        <h6>Hourly rate</h6>
                        <div class="checkall-group">
                            <div class="checkbox">
                                <input type="checkbox" id="rate1" name="rate" checked>
                                <label for="rate1">All rates</label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="rate2" name="rate">
                                <label for="rate2">$0 - $50 <small>(364)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="rate3" name="rate">
                                <label for="rate3">$50 - $100 <small>(684)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="rate4" name="rate">
                                <label for="rate4">$100 - $200 <small>(195)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="rate5" name="rate">
                                <label for="rate5">$200+ <small>(39)</small></label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-4">
                        <h6>Academic degree</h6>
                        <div class="checkall-group">
                            <div class="checkbox">
                                <input type="checkbox" id="degree1" name="degree" checked>
                                <label for="degree1">All degrees</label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="degree2" name="degree">
                                <label for="degree2">Associate degree <small>(216)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="degree3" name="degree">
                                <label for="degree3">Bachelor's degree <small>(569)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="degree4" name="degree">
                                <label for="degree4">Master's degree <small>(439)</small></label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="degree5" name="degree">
                                <label for="degree5">Doctoral degree <small>(84)</small></label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="button-group">
                    <div class="action-buttons">
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
                <div class="row item-blocks-condensed">

                    <div class="col-xs-12">
                        <br>
                        <h5>We found <strong>357</strong> matches, you're watching <i>10</i> to <i>20</i></h5>
                    </div>

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
                    @endforeach
                    <!-- END Job item -->
                </div>


                <!-- Page navigation -->
                <nav class="text-center">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="ti-angle-left"></i>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Page navigation -->


            </div>
        </section>
    </main>
    <!-- END Main container -->

@endsection