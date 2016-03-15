@section('title','Administrator section')
@extends('administrator.layouts.master')
@section('body')
    {{--@include('administrator.layouts.head')--}}
    <body class="fixed-left">
    <div class="animationload">
        <div class="loader"></div>
    </div>
    <!-- Begin page -->
    <div id="wrapper">
        @include('administrator.layouts.top-bar')
        @include('administrator.layouts.sidebar-left')
        @include('administrator.layouts.right-content')
        @include('administrator.layouts.sidebar-right')
    </div>
    @include('administrator.layouts.footer')
    </body>
@stop
