<?php

class SessionsController extends BaseController
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        return View::make('sessions.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postLogin()
    {
        $attempt = Auth::attempt([
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'is_confirmed' => 1,
        ],
            Input::get('remember_me') == '1');

        $data = Input::all();
        // Applying validation rules.
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            // If validation falis redirect back to login.
            return Redirect::to('account')->withInput(Input::except('password'))->withErrors($validator);
        } else {
            $user_data = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
//            if (Auth::user()->isAdmin) {
//                if ($attempt) {
//                    return Redirect::intended('/')->with('alert-success', 'You have logged in.');
//                } else {
//                    return Redirect::back()->with('alert-warning', 'Please activate your account first!');
//                }
//            } elseif (Auth::user()->isGuest) {
//                if ($attempt) {
//                    return Redirect::intended('/')->with('alert-success', 'You have logged in.');
//                } else {
//                    return Redirect::back()->with('alert-warning', 'Please activate your account first!');
//                }
//            }
            // doing login.
            if (Auth::validate($user_data)) {
                if ($attempt) {
                    return Redirect::intended('/')->with('alert-success', 'You have logged in.');
                } else {
                    return Redirect::back()->with('alert-warning', 'Please activate your account first!');
                }
            } else {
                // if any error send back with message.
                Session::flash('alert-errors', 'Your username or password may have no in our system');
                return Redirect::to('account');
            }
        }
    }


    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public
    function getLogout()
    {
        Auth::logout();
        return Redirect::to('/')->with('alert-success', 'You have logged out');
    }
}
