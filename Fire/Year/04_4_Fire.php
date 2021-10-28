<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 4 - Spring
    </title>
</head>

<body>
<p><strong>Spring, Year 4</strong></p>
<p>[File truncated for development purposes]</p>
<p id="back"><a href="../Bonus/19_A Wild Ride.php">A Wild Ride</a></p>
<?php
        include '../../settarget.php'; 
        settarget("Fire",17,null,20);
        if($_SESSION["YEAR"]<5){
            $_SESSION["YEAR"] = 5;
        }
        include '../footer.php';
        echo getarrows("04_3_Fire.php","05_1_Fire.php");
        setlast("Year/04_1_Fire.php");
    ?>
</body>
