@section('title','Contact us, Booking early')
@extends('layouts.master') @section('body')
    @include('layouts.header')
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                @include('alerts.alerts')
                <div class="contact">
                    <div class="contact_left">
                        <div class="contact_info">
                            <h3>Find Us Here</h3>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1083.8452271821443!2d104.92947568998349!3d11.547448520618389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2skh!4v1456759782293"
                                        width="400" height="300" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                <br>
                                <small>
                                    <a href="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1083.8452271821443!2d104.92947568998349!3d11.547448520618389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2skh!4v1456759782293"
                                       style="color: #242424;text-shadow: 0 1px 0 #ffffff;text-align: left;font-size: 0.7125em;padding: 5px;font-weight: 600;">View
                                        Larger Map</a>
                                </small>
                            </div>
                        </div>
                        <div class="company_address">
                            <h3>Company Information :</h3>
                            <p>500 Lorem Ipsum Dolor Sit,</p>
                            <p>22-56-2-9 Sit Amet, Lorem,</p>
                            <p>USA</p>
                            <p>Phone:(00) 222 666 444</p>
                            <p>Fax: (000) 000 00 00 0</p>
                            <p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
                            <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
                        </div>
                    </div>
                    <div class="contact_right">
                        <div class="contact-form">
                            <h3>Contact Us</h3>
                            {{Form::open(array('action'=>'HomeController@postContact','class'=>'form-js','role'=>'form-js'))}}
                            {{--<ul class="error">--}}
                            {{--@foreach($errors->all('<li>:message</li>')as $message)--}}
                            {{--{{$message}}--}}
                            {{--@endforeach--}}
                            {{--</ul>--}}
                            <div class="form-group form-horizontal">
                                <span><label>NAME</label></span>
                                <span>{{Form::text('username', null,array('class'=>'textbox form-control',
                                'placeholder'=>'Enter your name'))}}</span>
                                <div class="error">{{$errors->first('username')}}</div>
                            </div>
                            <div class="form-group form-horizontal">
                                <span><label>E-MAIL</label></span>
                                <span>{{Form::email('user_email',null,array('class'=>'textbox form-control',
                                'placeholder'=>'Enter your email'))}}</span>
                                <div class="error">{{$errors->first('user_email')}}</div>
                            </div>
                            <div class="form-group form-horizontal">
                                <span><label>MOBILE</label></span>
                                <span>{{Form::text('user_phone',null,array('class'=>'textbox form-control',
                                'placeholder'=>'Enter your Phone number'))}}</span>
                                <div class="error">{{$errors->first('user_phone')}}</div>
                            </div>
                            <div class="form-group form-horizontal">
                                <span><label>SUBJECT</label></span>
                                <span>{{Form::textarea('user_msg',null,array('class'=>'textbox form-control',
                                'placeholder'=>'Enter your message here'))}}</span>
                                <div class="error">{{$errors->first('user_msg')}}</div>
                            </div>
                            <div>
                                <span>{{Form::submit('Submit us',array('class'=>'btn btn-success'))}}</span>
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    @extends('layouts.partials.scripts')
@stop