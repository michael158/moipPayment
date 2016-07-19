<?php


class Product
{

    // Fake Data
    private $products = [
        1 => ['id' => 1 ,'name' => 'Playstation 4', 'value' => '2500','description' => 'Console da sony', 'image' => 'https://media.playstation.com/is/image/SCEA/ps4-system-imageblock-us-13jun14?$TwoColumn_Image$'],
        2 => ['id' => 2 ,'name' => 'Xbox One 500gb + 2 controles', 'value' => '2000', 'description' => 'Console da microsoft', 'image' => 'http://compass.xbox.com/assets/23/0d/230dc52a-8f0e-40bf-bbd1-c51fdb8371e3.png?n=Homepage-360-UA_Upgrade-big_1056x594.png'],
        3 => ['id' => 3 ,'name' => 'Oculos Rift', 'value' => '3000', 'description' => 'Oculos para realidade virtual', 'image' => 'http://s2.glbimg.com/8Zj1WnkyrrIGKOwbotW67qDpY7c=/0x600/s.glbimg.com/po/tt2/f/original/2016/03/24/oculusrift1.jpg']
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