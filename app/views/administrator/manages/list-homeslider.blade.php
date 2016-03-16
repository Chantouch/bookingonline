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
                            <h4 class="page-title">Home page slider</h4>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#">Booking Early</a>
                                </li>
                                <li>
                                    <a href="#">Settings and modules</a>
                                </li>
                                <li class="active">
                                    Home Slider
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h1 class="m-t-0 header-title"><span>List Home slider</span></h1>
                                <p class="text-muted m-b-30 font-13">
                                    Most common form control, text-based input fields. Includes support for all HTML5
                                    types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>,
                                    <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>,
                                    <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and
                                    <code>color</code>.
                                </p>
                                <div class="row">
                                    <table data-toggle="table"
                                           data-show-columns="false"
                                           data-page-list="[5, 10, 20]"
                                           data-page-size="5"
                                           data-pagination="true" data-show-pagination-switch="true"
                                           class="table-bordered ">
                                        <thead>
                                        <tr>
                                            <th data-field="id" data-switchable="false">#</th>
                                            <th data-field="slider-name">Slider name</th>
                                            <th data-field="tittle">Tittle</th>
                                            <th data-field="subtitle">Subtitle</th>
                                            <th data-field="images">Images</th>
                                            <th data-field="status" class="text-center">Status</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach ($home_sliders as $home_slider): ?>
                                        <tr>
                                            <td>{{$home_slider->id}}</td>
                                            <td>{{$home_slider->s_name}}</td>
                                            <td>{{$home_slider->title}}</td>
                                            <td>{{$home_slider->sub_title}}</td>
                                            <td><img width="100" class="img-responsive" src="{{asset($home_slider->home_slider)}}" alt=""></td>
                                            {{--<td>{{$home_sliders->is_confirmed?--}}
                                        {{--'<span class="label label-table label-success">Active</span>'--}}
                                        {{--:'<span class="label label-table label-danger">Inactivate</span>'}}</td>--}}
                                            <td>
                                                <a href="{{URL::to('be_admin/home_sliders-profile',$home_slider->id)}}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{URL::to('be_admin/edit-home_sliders',$home_slider->id)}}">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </a>
                                                <a href="{{URL::to('be_admin/delete',$home_slider->id)}}" class="delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
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