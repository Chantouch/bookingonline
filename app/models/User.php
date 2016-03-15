<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    /**
     * @var array
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'phone',
        'avatar',
        'email',
        'password',
        'confirmation_token',
    ];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * @param $confirmation_token
     * @return bool
     */

    public static function activate($confirmation_token)
    {
        $user = User::whereConfirmationToken($confirmation_token)->first();
        if ($user) {
            $user->is_confirmed = 1;
            $user->confirmation_token = null;
            $user->save();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param null $user_id
     * @return array
     */
    public static function getRules($user_id = null)
    {
        if ($user_id == null)//New user
        {
            return [
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed'
            ];
        } else // Existing user
        {
            return [
                'email' => "required|email|unique:users,email,$user_id",
                'password' => 'required|min:6|confirmed'
            ];
        }
    }

    /**
     * @return mixed
     */
    public function roles()
    {
        return Auth::user()->belongsToMany('App\Role');
    }
}
