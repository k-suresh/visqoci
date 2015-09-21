<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imagefile {

    public function upload($file) {
        $dir = pathinfo($_SERVER['SCRIPT_FILENAME']);
        $target_dir = $dir['dirname'] . "/assets/uploads/";
        $fileName = date('Ymdhis') . basename($file["name"]);
        $target_file = $target_dir . $fileName;
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return array(1,$fileName);
        } else {
            return array(0,"not uploded to folder");
        }
    }

}
