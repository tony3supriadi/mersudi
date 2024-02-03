<?php

if (!function_exists('initial_name')) {
    function initial_name($val)
    {
        $init_name = [];
        $split_name = explode(" ", $val);
        $length = count($split_name) > 1 ? 2 : 1;
        for ($i = 0; $i < $length; $i++) {
            $init_name[$i] = strtoupper(substr($split_name[$i], 0, 1));
        }
        return implode("", $init_name);
    }
}
