<?php
/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/12/2016
 * Time: 1:40 AM
 */
?>
<header role="banner">
    <div id="cd-logo"><a href="/"><img src="images/svg/cd-logo.svg" alt="Logo"></a></div>
    <nav class="main-nav">
        <ul>
            <!-- inser more links here -->
            @if(Auth::check())
                <li><a class="cd-logout" href="{{URL::to('account/logout')}}">Sign Out</a></li>
            @else
                <li><a class="cd-signin" href="#0">Sign in</a></li>
                <li><a class="cd-signup" href="#0">Sign up</a></li>
            @endif
        </ul>
    </nav>
</header>
@include('alerts.alerts')
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
        </ul>
        <div id="cd-login"> <!-- log in form -->
            {{Form::open(array('url'=>'account/login','role'=>'form', 'class'=>'cd-form'))}}
            <p class="fieldset">
                <label class="image-replace cd-email" for="email">E-mail</label>
                {{ Form::email('email', '', array('class' => 'full-width has-padding has-border',
                                'placeholder'=>'Email','id'=>'email','autofocus'=>'autofocus','tapindex'=>'1')) }}
                {{--<span class="cd-error-message">{{$errors->first('Email')}}Email required!</span>--}}
            </p>
            <p class="fieldset">
                <label class="image-replace cd-password" for="password">Password</label>
                {{Form::password('password',['class'=>'full-width has-padding has-border','id'=>'password',
                                   'placeholder'=>'Password','autofocus'=>'autofocus','tabindex'=>'2'])}}
                <a href="#0" class="hide-password">Hide</a>
                <span class="cd-error-message">{{$errors->first('password')}}</span>
            </p>
            <p class="fieldset">
                <input type="checkbox" id="remember_me" checked>
                <label for="remember_me">Remember me</label>
            </p>
            <p class="fieldset">
                <input class="full-width" type="submit" value="Login">
            </p>
            {{Form::close()}}
            <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->
        <div id="cd-signup"> <!-- sign up form -->
            {{Form::open(array('url'=>'actionUsers/register','role'=>'form','class'=>'cd-form'))}}
            <p class="fieldset">
                <label class="image-replace cd-username" for="first_name">Username</label>
                {{ Form::text('first_name', '', array('class' => 'full-width has-padding has-border',
                            'placeholder'=>'First name','id'=>'first_name','autofocus'=>'autofocus','tapindex'=>'1')) }}
                <span class="cd-error-message">{{$errors->first('first_name')}}</span>
            </p>
            <p class="fieldset">
                <label class="image-replace cd-username" for="last_name">Last Name</label>
                {{ Form::text('last_name', '', array('class' => 'full-width has-padding has-border',
                               'placeholder'=>'Last name','id'=>'last_name','autofocus'=>'autofocus','tapindex'=>'2')) }}
                <span class="cd-error-message">{{$errors->first('last_name')}}</span>
            </p>
            <p class="fieldset">
                <label class="image-replace cd-email" for="email">E-mail</label>
                {{Form::email('email', Input::old('email'), ['class' => 'full-width has-padding has-border','id' => 'email',
                       'placeholder'=>'Email address','autofocus'=>'autofocus','tapindex'=>'4'])}}
                <span class="cd-error-message">{{$errors->first('email')}}Email is required</span>
            </p>
            <p class="fieldset">
                <label class="image-replace cd-password" for="signup-password">Password</label>
                {{Form::password('password',['class'=>'full-width has-padding has-border','id'=>'password',
                               'placeholder'=>'Password','autofocus'=>'autofocus','tabindex'=>'5'])}}
                <a href="#0" class="hide-password">Hide</a>
                <span class="cd-error-message">{{$errors->first('password')}}</span>
            </p>
            <p class="fieldset">
                <input type="checkbox" id="accept-terms">
                <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
            </p>
            <p class="fieldset">
                {{Form::submit('Register',['id'=>'btn_register','class'=>'full-width has-padding'])}}
            </p>
            {{Form::close()}}
                    <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->
        <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to
                create a new password.</p>
            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>
            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->
