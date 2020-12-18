<?php

class UserFilter
{
    // lay ra phan tu dau tien trong mang
    public function apply(array $array)
    {
        // echo count($array);
        // for ($user=0; $user < count($array); $user++) { 
        //     print_r($array[$user]);
        //     // // return $array[0];
        // }

        foreach ($array as $key => $value) {
            print_r($key);
            // print_r( $value);
        }
        // lay ra user dau tien;
    }
}