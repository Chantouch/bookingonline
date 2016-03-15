@section('title','Sign in to manage your properties')
@extends('layouts.master')
@section('body')
    @include('layouts.header')
    <div class="container">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 vert-offset-top-3">
            <div class="text-center vert-offset-bottom-3">
                <h1>One Account. Manage all of your properties.</h1>
                <h3>Sign in with your account.</h3>
            </div>
        </div>
        <div id="loginbox"
             class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="user-mask"></div>
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div
                            style="float: right; font-size: 80%; position: relative; top: -19px">
                        <p>{{HTML::link('password/remind', 'Forgotten password')}}</p>
                    </div>
                </div>
                <div style="padding-top: 30px" class="panel-body">
                    @include('alerts.alerts')
                    {{Form::open(array('url'=>'account/login','class'=>'form-js','role'=>'form-js','id'=>'loginform'))}}
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{Form::email('email', Input::old('email'), ['class' =>
                        'form-control','id' => 'login_username', 'placeholder'=>'Email address','autofocus'=>'autofocus'])}}
                        <div class="error">{{$errors->first('email')}}</div>
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {{Form::password('password',['class'=>'form-control','id'=>'login_password',
                        'placeholder'=>'Password','autofocus'=>'autofocus'])}}
                        <div class="error">{{$errors->first('password')}}</div>
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                            <label for="remember_me">
                                <input type="checkbox" name="remember_me" id="remember_me" value="1"/>Remember me
                            </label>
                        </div>
                    </div>
                    <div style="margin-top: 10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            {{Form::submit('Login',['id'=>'btn_login','class'=>'btn btn-success'])}}
                            <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="padding-top: 15px;">
                                Don't have an account! {{HTML::link('actionUsers','Sign Up Here')}}</div>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@stop