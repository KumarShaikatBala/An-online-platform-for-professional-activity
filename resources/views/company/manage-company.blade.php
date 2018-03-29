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
            <h1 class="text-center">Manage companies</h1>
            <p class="lead text-center">Here's the list of your registered companies. You can edit or delete them, or even add a new one.</p>
        </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
        <section class="no-padding-top bg-alt">
            <div class="container">
                <div class="row item-blocks-condensed">

                    <div class="col-xs-12 text-right">
                        <br>
                        <a class="btn btn-primary btn-sm" href="{{route('company-form')}}">Add new company</a>
                    </div>
                    <!-- Company item -->
                    @foreach($companies as $company)
                    <div class="col-xs-12">
                        <div class="item-block">
                            <header>
                                <a href="{{route('company-show',['id'=>$company->id])}}"><img src="/uploaded_files/company-img/{{$company->company_img}}" alt=""></a>
                                <div class="hgroup">
                                    <h4><a href="{{route('company-show',['id'=>$company->id])}}">{{$company->company_name}}</a></h4>
                                    <h5>{{$company->company_heading}}<a href="company-detail.html#open-positions"><span class="label label-info">{{count($company->job)}}</span></a></h5>
                                </div>
                                <div class="action-btn">
                                    <a class="btn btn-xs btn-gray" href="{{route('company-edit',['id'=>$company->id])}}">Edit</a>
                                    <a class="btn btn-xs btn-danger" href="{{route('company-delete',['id'=>$company->id])}}">Delete</a>
                                </div>
                            </header>
                        </div>
                    </div>
                    @endforeach
                    <!-- END Company item -->
                </div>
            </div>
        </section>
    </main>
    <!-- END Main container -->

    @endsection