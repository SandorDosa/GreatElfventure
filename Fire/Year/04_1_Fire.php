<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 4 - Summer
    </title>
</head>

<body>
<h2><strong>Summer, Year 4</strong></h2>
<p>[File truncated for development purposes]</p>
<p id="back2"><a href="../Bonus/17_Ambush Predators.php">Ambush Predators</a></p>
<?php
        include '../../settarget.php'; 
        settarget("Fire",14,null,17);
        include '../footer.php';
        echo getarrows("03_4_Fire.php","04_2_Fire.php");
        setlast("Year/04_1_Fire.php");
    ?>
</body>
