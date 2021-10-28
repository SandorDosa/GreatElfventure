<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 3 - Spring
    </title>
</head>

<body>
<p><strong>Spring, Year 3</strong></p>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/04_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
        include '../../settarget.php'; 
        settarget("Fire",13,null,15);
        if($_SESSION["YEAR"]<4){
            $_SESSION["YEAR"] = 4;
        }
        include '../footer.php';
        echo getarrows("03_3_Fire.php","04_1_Fire.php");
        setlast("Year/03_4_Fire.php");
    ?>
</body>
