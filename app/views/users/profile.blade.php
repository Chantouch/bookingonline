<?php
/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/12/2016
 * Time: 12:21 AM
 */
?>
@section('title','Home page of booking online system')
@extends('layouts.master')
@section('body')
    @include('layouts.header')
    <div class="container">
        @include('alerts.alerts')
        <div class="profile">
            <p>Your info is : {{$user->email}}</p>
            User profile goes here.
        </div>
    </div>
    @include('layouts.footer')
@stop



