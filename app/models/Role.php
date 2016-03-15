<?php
/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/14/2016
 * Time: 11:35 PM
 */

namespace App;


class Role extends \User
{
    public function isAdmin()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->is_admin == 1) {
                return true;
            }
        }
        return false;
    }

    public function isGust()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->is_guest == 1) {
                return true;
            }
        }
        return false;
    }
}