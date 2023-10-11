<?php
    
     class kendaraan
     {
        public $name;
        public $roda = 4;
        public $bensin = "True";

        public function __construct($string)
        {
             $this->name = $string;
        }
        
     }




?>