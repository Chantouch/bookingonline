<?php
/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/13/2016
 * Time: 1:00 AM
 */
?>
@section('title','Administrator section')
@extends('administrator.layouts.master')
@section('body')
    <body class="fixed-left">
    <div class="animationload">
        <div class="loader"></div>
    </div>
    <!-- Begin page -->
    <div id="wrapper">
        @include('administrator.layouts.top-bar')
        @include('administrator.layouts.sidebar-left')
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">Add new slider</h4>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#">Booking Early</a>
                                </li>
                                <li>
                                    <a href="#">Settings and modules</a>
                                </li>
                                <li class="active">
                                    Add new Slider
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h1 class="m-t-0 header-title"><span>Add new slider</span></h1>
                                <p class="text-muted m-b-30 font-13">
                                    Most common form control, text-based input fields. Includes support for all HTML5
                                    types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>,
                                    <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>,
                                    <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and
                                    <code>color</code>.
                                </p>
                                <div class="row">
                                    <div class="col-md-8">
                                        @include('alerts.alerts')
                                        {{ Form::open(array('action' => 'AdminController@postAddSlider','files' => true,
                                        'class'=>'form-horizontal', 'role'=>'form')) }}
                                        <div class="form-group">
                                            <label for="slider name" class="col-md-2 control-label">Slider name</label>
                                            <div class="col-md-10">
                                                {{Form::text('slider_name',null,array('class'=>'form-control',
                                                'placeholder'=>'Instance name slider'))}}
                                                <div class="error">
                                                    {{$errors->first('slider_name')}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Title</label>
                                            <div class="col-md-10">
                                                {{Form::text('title',null,array('class'=>'form-control',
                                                'placeholder'=>'Description of your title'))}}
                                                <div class="error">
                                                    {{$errors->first('title')}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Subtitle</label>
                                            <div class="col-md-10">
                                                {{Form::text('sub_title',null,array('class'=>'form-control',
                                                'placeholder'=>'Description of your subtitle'))}}
                                                <div class="error">
                                                    {{$errors->first('sub_title')}}
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="img_type">
                                        <div class="form-group">
                                            {{ Form::label('home_slider', 'Choose your image for home slider',
                                           array('class' => 'control-label')) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::file('home_slider',array('class'=>'filestyle','data-buttonname'=>'btn-primary')) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::submit('Save', array('class' => 'btn btn-lg btn-block')) }}
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer">
                        © Booking Early.
                        2015 ~
                        <script>document.write(new Date().getFullYear())</script>
                        All right reserved.
                    </footer>
                </div>
                @include('administrator.layouts.sidebar-right')
            </div>
        </div>
    </div>
    </body>
    @include('administrator.layouts.footer')
@stop