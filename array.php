<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    // =======================
    // SOAL NO 1
    // =======================
    echo "<h3> Soal 1 </h3>";

    // Array Kids dan Adults
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
    $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");

    // =======================
    // SOAL NO 2
    // =======================
    echo "<h3> Soal 2</h3>";

    echo "Cast Stranger Things: <br><br>";

    // Tampilkan Kids
    echo "Total Kids: " . count($kids);
    echo "<br>";
    echo "<ol>";
    for ($i = 0; $i < count($kids); $i++) {
        echo "<li> $kids[$i] </li>";
    }
    echo "</ol>";

    // Tampilkan Adults
    echo "Total Adults: " . count($adults);
    echo "<br>";
    echo "<ol>";
    for ($i = 0; $i < count($adults); $i++) {
        echo "<li> $adults[$i] </li>";
    }
    echo "</ol>";

    // =======================
    // SOAL NO 3
    // =======================
    echo "<h3> Soal 3 </h3>";

    // Array multidimensi asosiatif
    $characters = array(
        array(
            "Name" => "Will Byers",
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive"
        ),
        array(
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive"
        ),
        array(
            "Name" => "Jim Hopper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased"
        ),
        array(
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive"
        )
    );

    // Tampilkan dengan print_r agar sesuai format output
    echo "<pre>";
    print_r($characters);
    echo "</pre>";
    ?>

</body>

</html>
