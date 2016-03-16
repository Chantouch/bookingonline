<?php
/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/15/2016
 * Time: 11:35 PM
 */
?>
@section('title','Home page of booking online system')
@extends('layouts.master')
@section('body')
    {{--    @include('layouts.actionusers')--}}
    @include('layouts.header')
    @include('layouts.slider')
    <div class="container">
        @include('layouts.search')
        @include('alerts.alerts')

        <div class="search-bar">
            <p>
                @foreach($searchUser as $user)
                    {{$user->username}}
                @endforeach
            </p>
        </div>
    </div>
    @include('layouts.footer')
@stop



