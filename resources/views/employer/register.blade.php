@extends('master')
@section('content')
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner1.jpg)">
    </header>
    <main>
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-block">
                    <img src="assets/img/logo.png" alt="">
                    <h1>Employer Register</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ol>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    {!! Form::open(['route' =>'employer-store','class'=>'','method' => 'post']) !!}
                    {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-user"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Your name">
                            </div>
                        </div>

                        <hr class="hr-xs">

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-email"></i></span>
                                <input type="text" name="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>

                        <hr class="hr-xs">

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-unlock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Choose a password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-unlock"></i></span>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Re Enter password">
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Sign up</button>

                        <div class="login-footer">
                            <h6>Or register with</h6>
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                    {!! Form::close() !!}
                </div>

                <div class="login-links">
                    <a class="pull-left" href="user-forget-pass.html">Forget Password?</a>
                    <a class="pull-right" href="user-register.html">Register an account</a>
                </div>

            </div>
        </div>
    </main>
@endsection