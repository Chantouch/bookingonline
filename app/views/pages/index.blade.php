@section('title','Home page of booking online system')
@extends('layouts.master')
@section('body')
    {{--    @include('layouts.actionusers')--}}
    @include('layouts.header')
    @include('layouts.slider')
    <div class="container">
        @include('layouts.search')
        @include('alerts.alerts')
        @include('layouts.features')
    </div>
    @include('layouts.footer')
@stop


