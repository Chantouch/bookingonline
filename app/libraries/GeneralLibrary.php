<?php
/**
 * Created by PhpStorm.
 * User: CHHAINARONG
 * Date: 3/16/2016
 * Time: 7:52 PM
 */

class GeneralLibrary {

    public static function upload($file, $path)
    {
        $destinationPath = $path;
        $millisecond = round(microtime(true) * 1000);
        $filename = $millisecond . '-' . str_random(5) . '-' . $file->getClientOriginalName();
        $file->move($destinationPath, $filename);
        return [
            'newName'=>$filename,
            'info'=>$file
        ];
    }

}