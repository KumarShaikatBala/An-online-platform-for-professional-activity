@extends('master')
@section('content')
    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url(assets/img/bg-banner1.jpg);">
        <div class="container page-name">
            <h1 class="text-center">Browse companies</h1>
            <p class="lead text-center">Use following search box to find companies that fits you better</p>
        </div>

        <div class="container">
            <form action="#">

                <div class="row">
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" placeholder="Keyword">
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" placeholder="Location">
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
                <div class="row">

                    <div class="col-xs-12">
                        <br>
                        <h5>We found <strong>86</strong> matches, you're watching <i>10</i> to <i>15</i></h5>
                    </div>

                    <!-- Company detail -->
                    @foreach($companies as $company)
                    <div class="col-xs-12">
                        <a class="item-block" href="{{route('company-show',['id'=>$company->id])}}">
                            <header>
                                <img src="/uploaded_files/company-img/{{$company->company_img}}" alt="">
                                <div class="hgroup">

                                    <h4>{{$company->company_name}}</h4>
                                    <h5>{{$company->company_heading}}</h5>
                                </div>
                                <span class="open-position">15 open position</span>
                            </header>

                            <div class="item-body">
                                <p>{{$company->company_description}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
                    <!-- END Company detail -->
                    <!-- Page navigation -->
                    <nav class="text-center">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
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
            </div>
        </section>
    </main>
    <!-- END Main container -->


    @endsection