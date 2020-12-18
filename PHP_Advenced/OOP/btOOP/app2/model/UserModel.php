<?php
//namespace model\UserModel;

class UserModel
{
    // magic number male: nam, female: nu
    const MALE = 1;
    const FE_MALE = 2;

    public function getAll()
    {
        return [
            ['id' => 1, 'name' => 'cao tuan vu', 'sex' => self::MALE],
            ['id' => 2, 'name' => 'cao tuan vu 1', 'sex' => self::MALE],
            ['id' => 3, 'name' => 'cao tuan vu 2', 'sex' => self::FE_MALE],
            ['id' => 4, 'name' => 'cao tuan vu3', 'sex' => self::MALE],
            ['id' => 5, 'name' => 'cao tuan vu4', 'sex' => self::MALE],
            ['id' => 6, 'name' => 'cao tuan vu5', 'sex' => self::MALE],
            ['id' => 7, 'name' => 'cao tuan vu6', 'sex' => self::MALE],
            ['id' => 8, 'name' => 'cao tuan vu7', 'sex' => self::MALE],
        ];
    }

    public function detail($id)
    {
        return ['id' => $id, 'name' => 'VU TUAN TEM', 'sex' => self::MALE];
    }
 }