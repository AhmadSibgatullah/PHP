<?php

require_once('kendaraan.php');

class Motor extends kendaraan
{
    public $roda = 2;

    public function jalan()
    {
       echo "Motor Sedangber jalan";
    }
}

?>