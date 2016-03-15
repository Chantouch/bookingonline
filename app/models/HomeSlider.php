<?php

/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/13/2016
 * Time: 12:54 AM
 */
class HomeSlider extends Eloquent
{
    /**
     * @var array
     */
    protected $fillable = ['s_name','title', 'sub_title', 'home_slider', 'img_type'];
    /**
     * @var string
     */
    protected $table = "home_slider";
}