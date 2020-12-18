<?php

if(!function_exists('dd'))
{
    function dd() {
        array_map( function ($value) {
            var_dump($value);
        }, func_get_args());
    }
}

if (!function_exists('convertArrToStr'))
{
    function convertArrToStr($arr) {
        return implode(" ",$arr);
    }
}

if (!function_exists('redirect'))
{
    function redirect($path) {
        header('location:'.$path, true);
        exit();
    }
}
?>