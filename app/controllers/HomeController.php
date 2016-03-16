<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    /**
     * @return mixed
     */

    public function getIndex()
    {
        $home_slider = HomeSlider::all();
        return View::make('pages.index', array('home_slider' => $home_slider));
    }

    public function getContact()
    {
        return View::make('pages.contact');
    }

    public function postContact()
    {
        //Get all the data and store in inside Store variable
        $data = Input::all();
        //Validate rule
        $rule = [
            'username' => 'required',
            'user_email' => 'required|email',
            'user_phone' => 'required',
            'user_msg' => 'required|min:5'
        ];
        //Validate the data
        $validate = Validator::make($data, $rule);
        //If everything is correct than run the process.
        if ($validate->passes()) {
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->from($data['user_email'], $data['username']);
                $message->to('chantouchsek.cs83@gmail.com')->subject('Form contact us');
            });
            //Redirect link to page
            return Redirect::to('contact')->with('alert-success', 'Your message has been sent. Thanks you !');
        } else {
            //Return contact form with errors
            return Redirect::back()->withErrors($validate)->withInput($data);
        }
    }

    /**
     *Search hotel
     */
    public function postSearchHotel()
    {
        $keywords = Input::get('search_hotel');
//        $users = User::where('username', 'LIKE', '%' . $keywords . '%')->get();
        $users = User::all();
//        var_dump('search results');
        $searchUser = new \Illuminate\Database\Eloquent\Collection();
        foreach ($users as $user) {
            if (Str::contains(Str::lower($user->username), Str::lower($keywords)))
                $searchUser->add($user);
            //var_dump($user->username);
        }
        return View::make('pages.result')->with('searchUser', $searchUser);
    }

}
