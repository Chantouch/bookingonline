<?php

/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/11/2016
 * Time: 11:33 PM
 */
class UsersController extends BaseController
{
    /**
     * @return mixed
     */
    public function getIndex()
    {
        return View::make('users.index');
    }

    public function postRegister()
    {
        $inputs = Input::all();
        $validator = Validator::make($inputs, [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'phone' => 'required|min:6'
        ]);
        $data = [
            'first_name' => $inputs['first_name'],
            'username' => $inputs['username'],
            'last_name' => $inputs['last_name'],
            'email' => $inputs['email'],
            'phone' => $inputs['phone'],
            'password' => $inputs['password'] = Hash::make($inputs['password']),
            'confirmation_token' => $inputs['confirmation_token'] = sha1(uniqid($inputs['email'], true))];

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput($data);
        }

        Mail::send('emails.activate', $data, function ($message) use ($data) {
            $message->to($data['email'])->subject('Please verify your email address');
        });

        $success = User::create($data);
        if (!$success) {
            return Redirect::back()->withInput()->withError('Can not create !');
        }
        return Redirect::to('account')->with('alert-success', 'An email was sent to you, please check your email to activate.');
    }

    public function getProfile()
    {
        return View::make('users.profile', array('user' => Auth::user()));
    }

    /**
     * @param $confirmation_token
     * @return mixed
     */

    public function getActivate($confirmation_token)
    {
        if (User::activate($confirmation_token)) {
            return Redirect::to('account')->with('alert-success', 'Account activated, you can now login.');
        } else {
            return Redirect::to('/')->with('alert', 'Account activation code is not found');
        }
    }
}