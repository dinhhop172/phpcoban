<?php

class UserFilter
{
    // lay ra phan tu dau tien trong mang
    public function apply(array $array)
    {
        foreach ($array as $key => $value) {
            print_r($key);
        }
    }
}