<?php

class TestPre implements IPreUnit{
     public function __construct() {
     }
     public function Run(){
         return "sauerkraut";
     }
}
$foo = new \TestPre();
$this->AddUnit($foo);