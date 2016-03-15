@section('title','Reset your password')
@extends('layouts.master') @section('body')
    @extends('layouts.header')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="text-center">
                    <div class="alert" role="alert">
                        {{Session::get('error')}}
                        {{Session::get('status')}}
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                                {{HTML::image('images/password/reset-password.png','Reset password',['class'=>'img-responsive'])}}
                                <h3 class="text-center">Forgot Password?</h3>
                                <p>If you have forgotten your password - reset it here.</p>
                                <div class="panel-body">
                                    {{Form::open(array('action'=>'RemindersController@postRemind', 'class'=>'form-js','role'=>'form-js','id'=>'ResetForm'))}}
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-envelope color-blue"></i>
                                                    </span> {{Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Email address','autofocus'=>'autofocus','required'=>'required'])}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{Form::submit('Send Reminder',['class'=>'btn btn-lg btn-primary'])}}
                                        </div>
                                    </fieldset>
                                    {{Form::close()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop