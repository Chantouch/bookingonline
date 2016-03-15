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
                            <h4 class="page-title">Modify user</h4>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#">Booking Early</a>
                                </li>
                                <li>
                                    <a href="#">Settings and modules</a>
                                </li>
                                <li class="active">
                                    Modify user
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h1 class="m-t-0 header-title"><span>Modify user</span></h1>
                                <p class="text-muted m-b-30 font-13">
                                    Most common form control, text-based input fields. Includes support for all HTML5
                                    types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>,
                                    <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>,
                                    <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and
                                    <code>color</code>.
                                </p>
                                <div class="row">
                                    {{Form::model($user,['url'=>['be_admin/update-user',$user->id],
                                    'method'=>'POST','class'=>'form-horizontal'])}}
                                    <div class="col-sm-5">
                                        {{$errors->first('email')}}
                                    </div>
                                    @include('administrator.manages.form')
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            {{Form::submit('Save',['class'=>'btn btn-default'])}}
                                            <a href="{{URL::to('be_admin/list-users',$user->id,null)}}"
                                               class="btn btn-default">Cancel</a>
                                        </div>
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