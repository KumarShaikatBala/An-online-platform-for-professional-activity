@extends('master')
@section('content')
    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner1.jpg)"></header>
    <main>
        <div class="container">
            @if(Session::has('msg'))
                <h1 class="text-center alert-warning" id="msg">{{session::get('msg')}}</h1>
            @endif
            <script>
                setTimeout(function() {
                    $('#msg').fadeOut('fast');
                }, 2000);
            </script>
            <div class="col-md-6 col-md-offset-3">
                <div class="login-block">
                    <img src="assets/img/logo.png" alt="">
                    <h1>jobseeker Log into your account</h1>
                    {!! Form::open(['route' =>'job_seeker-login','class'=>'','method' => 'post']) !!}
                    {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-email"></i></span>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <hr class="hr-xs">

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-unlock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    {!! Form::close() !!}
                        <div class="login-footer">
                            <h6>Or login with</h6>
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>


                </div>

                <div class="login-links">
                    <a class="pull-left" href="user-forget-pass.html">Forget Password?</a>
                    <a class="pull-right" href="job_seeker-register">Register an account</a>
                </div>

            </div>
        </div>
    </main>
    @endsection