<?php

/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/15/2016
 * Time: 10:48 PM
 */
class SearchController extends BaseController
{
    public function postSearchHotel()
    {
        $keywords = Input::get('search_hotel');
        $users = User::where('username', 'LIKE' . '%' . $keywords . '%')->get();
        var_dump('search result');
        foreach ($users as $user) {
            var_dump($user);
        }
    }
}