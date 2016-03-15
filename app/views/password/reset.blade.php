@section('title','Reset password')
@extends('layouts.master')
@section('body')
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="text-center">
                @include('alerts.alerts')
                @if(Session::get('error'))
                    <div class="vert-offset-bottom-1 vert-offset-top-2">
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('error')}}
                        </div>
                    </div>
                @else
                    <div class="vert-offset-bottom-1 vert-offset-top-2 bg-primary">
                        <div class="panel-body">
                            <h2 class="bg-maroon">Please fill all field required below.</h2>
                        </div>
                    </div>
                @endif
            </div>
            <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Reset your password</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
                            {{--<p>{{HTML::link('password/remind', 'Forgotten password')}}</p>--}}
                        </div>
                    </div>
                    <div style="padding-top:30px" class="panel-body">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        {{Form::open(array('action'=>'RemindersController@postReset', 'class'=>'form-horizontal','role'=>'form','id'=>'loginform'))}}
                        {{Form::hidden('token',$token)}}
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            {{Form::email('email', Input::old('email'), ['class' => 'form-control',
                            'placeholder'=>'Email address','autofocus'=>'autofocus'])}}
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            {{Form::password('password',['class'=>'form-control',
                            'placeholder'=>'Password','autofocus'=>'autofocus'])}}
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            {{Form::password('password_confirmation',['class'=>'form-control',
                            'placeholder'=>'Repeat Password','autofocus'=>'autofocus'])}}
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                {{Form::submit('Reset password',['id'=>'btn_login','class'=>'btn btn-success'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                    Don't have an account!
                                    {{HTML::link('actionUsers','Sign Up Here')}}
                                </div>
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--@include('layout.footer')--}}
@stop

@stop