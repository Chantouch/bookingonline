<?php

/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/11/2016
 * Time: 11:23 PM
 */
class AdminController extends BaseController
{
    /**
     * @return mixed
     */
    public function getIndex()
    {
        return View::make('administrator.index');
    }

    /**
     * @return mixed
     */
    public function getAddSlider()
    {
        return View::make('administrator.homeslider');
    }

    /**
     * @return mixed
     */
    public function postAddSlider()
    {
        $inputs = Input::all();
        $validator = Validator::make($inputs, [
            'slider_name' => 'required|min:6|max:30',
            'title' => 'required|min:6|max:150',
            'sub_title' => 'required|min:6|max:150',
            'img_type' => 'mimes:jpeg,bmp,png|max:1000',
            'home_slider' => 'required|image|min:1',
        ]);

        //upload image for slider
        if (Input::hasFile('home_slider')) {
            $file = Input::file('home_slider');
            $origin_name = $file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/uploads/homeslider/' . $origin_name;
            $filename = $destinationPath . '' . str_random(32) . '.' . $file_extension;
            Image::make($file->getRealPath())->resize('1698', '691')->save($filename);
        }
        $data = [
            's_name' => $inputs['slider_name'],
            'title' => $inputs['title'],
            'sub_title' => $inputs['sub_title'],
            'home_slider' => $filename,
            'img_type' => $file_extension,
        ];
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput($data);
        }
        $success = HomeSlider::create($data);
        if (!$success) {
            return Redirect::back()->withInput()->withError('Can not create !');
        }
        return Redirect::to('be_admin/add-slider')->with('alert-success', 'Your home slider successfully created.');
    }

    /**
     * @return mixed
     */
    public function getListUsers()
    {
        $users = User::orderBy('email')->paginate(2);
        return View::make('administrator.manages.users', array('users' => $users));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUserProfile($id)
    {
        $user = User::findOrFail($id);
        return View::make('administrator.manages.profile', array('user' => $user));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getEditUser($id)
    {
        $user = User::findOrFail($id);
        return View::make('administrator.manages.update', array('user' => $user));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function postUpdateUser($id)
    {
        $user = User::findOrfail($id);
        $inputs = Input::all();
        if ($inputs['password'] == '') {
            $inputs = array_except($inputs, 'password');
        }
        $validator = Validator::make($inputs, [
            'email' => "required|email|unique:users,email,$id",
            'password' => 'sometimes|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        }

        //Hash the password if present
        if (array_key_exists('password', $inputs)) {
            $inputs['password'] = Hash::make($inputs['password']);
        }
        $user->fill($inputs);
        // is_admin is not present in input array if unchecked
        $user->is_admin = (bool)array_get($inputs, 'is_admin');
        $user->save();

        return Redirect::to('be_admin/list-users')->with('alert-success', 'Successfully saved your changed!');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDelete($id)
    {
        User::destroy($id);
        return Redirect::to('be_admin/list-users')->with('alert-success', 'Your record was successfully deleted!');
    }

    /**
     * @return mixed
     */
    public function getListHomeSlider()
    {
        $home_slider = HomeSlider::orderBy('id')->paginate(2);
        return View::make('administrator.manages.list-homeslider', array('home_sliders' => $home_slider));
    }
}