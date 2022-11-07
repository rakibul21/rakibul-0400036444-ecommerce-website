<?php


namespace App\classes;


class Brand
{

    public $brands = [];

    public function __construct()
    {
        $this->brands = [
            0 => [
                'id' => 1,
                'name' => 'Sony',
            ],
            1 => [
                'id' => 2,
                'name' => 'Samsung',
            ],
            2 => [
                'id' => 3,
                'name' => 'Dorji-Bari',
            ],
            3 => [
                'id' => 4,
                'name' => 'Puma',
            ],
            4 => [
                'id' => 5,
                'name' => 'AB-Sports',
            ],
            5 => [
                'id' => 6,
                'name' => 'Lokkhi',
            ],
        ];
    }

    public function getAllBrand()
    {
        return $this->brands;
    }

}