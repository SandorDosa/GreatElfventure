<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 5 - Spring
    </title>
</head>

<body>
<h1>Year 5 - Spring</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/06_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
        include '../../settarget.php'; 
        settarget("Fire",21,null,null);
        if($_SESSION["YEAR"]<6){
            $_SESSION["YEAR"] = 6;
        }
        include '../footer.php';
        echo getarrows("05_3_Fire.php","06_1_Fire.php");
        setlast("Year/05_1_Fire.php");
    ?>
</body>
