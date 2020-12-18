<?php
//namespace model\UserModel;

class ProductModel
{
    public function getAll()
    {
        return [
            ['id' => 1, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 2, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 3, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 4, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 5, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 6, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 7, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 8, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 9, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 10, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 11, 'name' => 'IPHONE 10', 'price' => 1000],
            ['id' => 12, 'name' => 'IPHONE 10', 'price' => 1000],
        ];
    }

    public function detail($id)
    {
        return ['id' => $id, 'name' => 'VU TUAN TEM', 'sex' => self::MALE];
    }
 }