<?php

namespace App\product\Logic;

class TestLogic{

    private $name = "Shoes new";

    public function getName(){
        
        echo $this->name;
    }

    public static function testMethod()
    {
        echo "static method call";
    }
}