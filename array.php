<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Array</h2>
    <?php
        echo "<h3>Contoh 1</h3>";
        $trainer = ["Ahmad", "Sibgatullah", "Latif", "Steven", "Bujang"];
        print_r($trainer);

        echo "<h3>Contoh 2</h3>";
        echo "Total Trainer ". count($trainer);
        echo "<ol>";
        echo "<li>" . $trainer[0] ."</li>";
        echo "<li>" . $trainer[1] ."</li>";
        echo "<li>" . $trainer[2] ."</li>";
        echo "<li>" . $trainer[3] ."</li>";
        echo "<li>" . $trainer[4] ."</li>";
        echo "</li>";

        echo "<h3>Contoh 3</h3>";
        $biodata  = [
            ["Nama" => "Mdo", "Umur" =>  18, "Materi" => "Laravel"],
            ["Nama" => "Ahmad", "Umur" => 16, "Materi" => "Phyton"],
            ["Nama" => "Steven", "Umur" => 17, "Materi" => "UI / UX"],
        ];


        echo "<pre>";
        print_r($trainer);
        echo "</pre>";
    ?>
</body>
</html>