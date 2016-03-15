@section('title','Email sent')
@extends('layouts.master') @section('body')
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Email Sent</h1>
                <h3>If we found an account with that email, we will send you an instruction.
                </h3>
                <h4>How to reset your password, Please check your email.</h4>
                <div class="panel-body">
                    <a href="{{URL::to('account')}}" class="btn btn-default">Back to login</a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@stop
