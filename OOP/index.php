<?php 
 
 require('Kendaraan.php');
 require('motor.php');

 $object = new kendaraan("Mobil");

 echo "Nama kendaraan : $object->name <br>";
 echo "Jumlah Roda : $object->roda <br>";
 echo "Bahan Bakar Bensin :  $object->bensin <br><br>";

 $object2 = new Motor("motor");

 echo "Nama Kendaraan : $object2->name <br>";
 echo "Jumlah Roda : $object2->roda <br>";
 echo "Bahan Bakar Bensin : $object2->bensin <br>";
 $object2->jalan();

