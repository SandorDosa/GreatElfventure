<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 5 - Summer
    </title>
</head>

<body>
<h1>Year 5 - Summer</h1>
<p>[File truncated for development purposes]</p>
<p id="back"><a href="../Bonus/21_A Rocky Shore.php">A Rocky Shore</a></p>
<p id="back2"><a href="../Bonus/22_A Dark Secret.php">A Dark Secret</a></p>
<?php
        include '../../settarget.php'; 
        settarget("Fire",18,null,22);
        include '../footer.php';
        echo getarrows("04_4_Fire.php","05_2_Fire.php");
        setlast("Year/05_1_Fire.php");
    ?>
</body>
