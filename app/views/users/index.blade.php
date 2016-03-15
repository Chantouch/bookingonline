<?php
/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/11/2016
 * Time: 11:36 PM
 */
?>
@section('title','Register for free with Booking early')
@extends('layouts.master')
@section('body')
    @include('layouts.header')
    <div class="container">
        <div class="text-center panel panel-info">
            <div class="panel-heading">
                <h1>It's totally free.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                {{Form::open(array('url'=>'actionUsers/register','role'=>'form'))}}
                <form role="form">
                    <h2>Please Sign Up,
                        <span>It's free and always will be.</span>
                    </h2>
                    <hr class="colorgraph">
                    @include('alerts.alerts')
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {{ Form::text('first_name', null, array('class' => 'form-control ',
                                'placeholder'=>'First name','id'=>'first_name','autofocus'=>'autofocus','tapindex'=>'1')) }}
                                <div class="error">
                                    <p>{{$errors->first('first_name')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {{ Form::text('last_name', null, array('class' => 'form-control ',
                               'placeholder'=>'Last name','id'=>'last_name','autofocus'=>'autofocus','tapindex'=>'2')) }}
                                <div class="error">
                                    <p>{{$errors->first('last_name')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::text('username', null, array('class' => 'form-control ',
                        'placeholder'=>'Display Name','id'=>'display_name','autofocus'=>'autofocus','tapindex'=>'3')) }}
                        <div class="error">
                            <p>{{$errors->first('username')}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::email('email', Input::old('email'), ['class' => 'form-control ','id' => 'login_username',
                        'placeholder'=>'Email address','autofocus'=>'autofocus','tapindex'=>'4'])}}
                        <div class="error">
                            <p>{{$errors->first('email')}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::text('phone', Input::old('phone'), ['class' => 'form-control ','id' => 'login_username',
                        'placeholder'=>'Phone number','autofocus'=>'autofocus','tapindex'=>'5'])}}
                        <div class="error">
                            <p>{{$errors->first('phone')}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {{Form::password('password',['class'=>'form-control ','id'=>'password',
                                'placeholder'=>'Password','autofocus'=>'autofocus','tabindex'=>'6'])}}
                                <div class="error">
                                    <p>{{$errors->first('password')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {{Form::password('password_confirmation',
                                ['class'=>'form-control ','id'=>'password_confirmation',
                               'placeholder'=>'Confirm Password','autofocus'=>'autofocus',
                               'tabindex'=>'7'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-9">
                            By clicking <strong class="label label-primary">Register</strong>, you agree to the <a
                                    href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set
                            out by this site, including our Cookie Use.
                        </div>
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            {{Form::submit('Register',['id'=>'btn_register','class'=>'btn btn-primary btn-block','disabled'])}}
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p>Already have account? <a href="{{URL::to('account')}}">Login</a></p>
                        </div>
                    </div>
                </form>
                {{Form::close()}}
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                            nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                            ipsa porro delectus quidem dolorem ad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="t_and_c" data-dismiss="modal">I Agree and
                            Close
                        </button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    <script type="application/javascript">
        $(function () {
            var btn_register = document.getElementById("btn_register");
            $('.button-checkbox').each(function () {
                // Settings
                var $widget = $(this),
                        $button = $widget.find('button'),
                        $checkbox = $widget.find('input:checkbox'),
                        color = $button.data('color'),
                        settings = {
                            on: {
                                icon: 'glyphicon glyphicon-check'
                            },
                            off: {
                                icon: 'glyphicon glyphicon-unchecked'
                            }
                        };
                // Event Handlers
                $button.on('click', function () {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                    $checkbox.triggerHandler('change');
                    updateDisplay();
                });
                $checkbox.on('change', function () {
                    updateDisplay();
                });
                // Actions
                function updateDisplay() {
                    var isChecked = $checkbox.is(':checked');
                    // Set the button's state
                    $button.data('state', (isChecked) ? "on" : "off");
                    // Set the button's icon
                    $button.find('.state-icon')
                            .removeClass()
                            .addClass('state-icon ' + settings[$button.data('state')].icon);
                    // Update the button's color
                    if (isChecked) {
                        $button.removeClass('btn-default').addClass('btn-' + color + ' active');
                        $('#btn_register').removeAttr('disabled');
                    }
                    else {
                        $button.removeClass('btn-' + color + ' active').addClass('btn-default');
                        $('#btn_register').attr('disabled', 'disabled');
                    }
                }
                // Initialization
                function init() {
                    updateDisplay();
                    // Inject the icon if applicable
                    if ($button.find('.state-icon').length == 0) {
                        $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
                    }
                }
                init();
            });
        });
    </script>
    @include('layouts.footer')
@stop
