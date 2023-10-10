<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contoh Soal</h2>
    <?php
        $kalimat1 = "Hello Guys";
        echo "kalimat pertama : ". $kalimat1 . "<br>";
        echo "jumlah karakter kalimat pertama : " . strlen($kalimat1) ."<br>";
        echo "jumlah kata : " . str_word_count($kalimat1) . "<br><br>";


        echo "<h3>Contoh Ke 2</h3>";
        $string2 = "I'm Mado ";
        echo "kalimat kedua : " . $string2 . "<br>";
        echo "kata Pertama : " . substr($string2,0,4) . "<br>";
        echo "kata kedua : " . substr($string2,5,4) . "<br>";
        echo "kata ketiga : " . substr($string2,10,5) . "<br>";


        echo"<h3>Contoh ke 3</h3>";
        $string3 = "Good Night";
        echo "Kalimat ketiga : ". $string3 . "<br>";
        echo "Ganti kalimat ketiga : ". str_replace("Good Afternoon", "Good Evening",$string3);


    ?>
</body>
</html>