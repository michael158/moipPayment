<?php


class Product
{

    private $products = [
        1 => ['id' => 1 ,'name' => 'Playstation 4', 'value' => '2500','description' => 'console da sony'],
        2 => ['id' => 2 ,'name' => 'Xbox One - 500gb + 2 controles', 'value' => '2000', 'description' => 'console da microsoft'],
        3 => ['id' => 3 ,'name' => 'Oculos Rift', 'value' => '3000', 'description' => 'oculos para realidade virtual']
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