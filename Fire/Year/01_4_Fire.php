<?php session_start(); ?>
<!DOCTYPE html>
<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 1 - Spring
    </title>
</head>

<body>

<head><title>Spring, Year 1</title></head>
<p>[File truncated for development purposes]</p>
<h4 id="back"><a href="../Bonus/2_A Wolf Walks into a Bar.php">A Wolf Walks into a Bar</a></h4>
<h3><a href="../../Events/02_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
    include '../../settarget.php'; 
    settarget("Fire",5,null,2);
    if($_SESSION["YEAR"]<2){$_SESSION["YEAR"]=2;}
    include '../footer.php';
    echo getarrows("01_3_Fire.php","02_1_Fire.php");
    setlast("Year/01_0_Fire.php");?>
</body>
