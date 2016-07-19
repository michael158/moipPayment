<?php


class Product
{

    private $products = [
        1 => ['id' => 1 ,'name' => 'Playstation 4', 'value' => '2500','description' => 'console da sony'],
        2 => ['id' => 2 ,'name' => 'Xbox One', 'value' => '2000', 'description' => 'console da microsoft']
    ];



    public function getProducts()
    {
        return $this->products;
    }

    public function getProduct($id)
    {
        return $this->products[$id];
    }


    public static function instance()
    {
        $instance = null;
        if($instance == null)
            return new self;
    }


}