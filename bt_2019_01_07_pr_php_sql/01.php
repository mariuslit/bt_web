<!DOCTYPE html>
<html>
<head>

	<title>Kd</title>

	<link rel="icon" href="favicon.png">

	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="files/reset.css">
	<link rel="stylesheet" type="text/css" href="01.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="01.js" defer></script>

</head>
<body>
<?php
// šis failas vykdomas bekende, t.y. serveryje, ir vykdomas pirmiausiai prieš užkraunant puslapį, vykdomas vieną kartą
//    kintamieji $
$vardas = "Arvydas";
$pavarde = "Sabonis";
$amzius = 55;
$sezonai = 18;
$taskai = 22158;
$komandos = array(
    '0' => 'Žalgiris',
    '1' => 'Madrido Realas',
    'du' => 'Portlando Treil Blazeriai'
);
?>

<!-- pirmasis php kodas (be mysql) -->
<!--<div>-->
<!--	<h1>--><?php //print($vardas . ' ' . $pavarde); ?><!--</h1>-->
<!--	<b>Taškų vidurkis: </b>-->
<!--	<span>-->
<!--		--><?php
//        $vidurkis = $taskai / $sezonai;
//        echo $vidurkis;
//
//        if ($vidurkis > 1000) {
//            for ($i = 0; $i < 10; $i++) {
//                ?>
<!--				<div>VALIO!</div>-->
<!--                --><?php
//            }
//        }
//        ?>
<!--	</span>-->
<!---->
<!--	<div><b>Pirmoji komanda:</b></div>--><?php //echo $komandos[0]; ?>
<!--	<br>-->
<!---->
<!--	<div><b>Visos komandos:</b></div>-->
<!--    --><?php
//    foreach ($komandos as $komanda):
//        echo $komanda . '<br>';
//    endforeach;
//    ?>
<!--</div>-->

<!-- pirmasis duomenų įkėlimas į MySql DB LKL (krepšinio komandos) -->
<div>--- pridedam į db<br>
    <?php
    // ------------------------------------------------ naujos krepšinio komandos įkėlimas į DB
//    $connection = new mysqli('localhost', 'root', '', 'lkl');
//
//    $connection->query("INSERT INTO teams (name, creationdate, trophies) VALUE ('Žalgiris', '1944-01-01', 25)");
//    $connection->query("INSERT INTO teams (name, creationdate, trophies) VALUE ('Neptunas', '1950-01-01', 1)");
//    $connection->query("INSERT INTO teams (name, creationdate, trophies) VALUE ('Lietuvos Rytas', '1975-01-01', 2)");
//    $connection->query("INSERT INTO teams (name, creationdate, trophies) VALUE ('Lietkabelis', '1980-01-01', 1)");
//    $connection->query("INSERT INTO teams (name, creationdate, trophies) VALUE ('Neptunas', '1950-01-01', 1)");
//
//    if ($connection->query($sql)) {
//    };
//    echo "Komandos pridėtos į duoneų bazę!";
//    $connection->close();
    ?>
</div>

<!-- pirmasis duomenų ištraukimas iš MySql DB LKL (krepšinio komandos) -->
<div>--- duomenų ištraukimas iš DB<br>
    <?php
    // ------------------------------------------------ duomenų ištraukimas iš DB
    $connection2 = new mysqli('localhost', 'root', '', 'lkl');

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $sql2 = "SELECT * FROM teams";
    $result = $connection2->query($sql2);

    if ($result)
    	echo '--- prisijungta sėkmingai. ';
    $skaitliukas = 0;
//    while ($row = $result->fetch_array()) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $rows[] = $row;
    }

    echo '--- db dydis: ' . count($rows) . ' eil.'.'<br>';

    foreach ($rows as $row) {
            echo ++$skaitliukas . '.   ';
//        echo count($row). '<br>';
        foreach ($row as $col) {
            echo  ' -- ' . $col . ' ';
        }
        echo '<br>';
    }

    echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
    $connection2->close();
    ?>

</div>

</div>
</body>
</html>










