<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dreamdust Elf Year 1 - Spring
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
</head>

<body>
<h2>Turn 4 (Year 1, Spring)
</h2>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/02_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
    include '../../settarget.php'; 
    settarget("Dreamdust",5,null,1);
    if($_SESSION["YEAR"]<2){$_SESSION["YEAR"]=2;}
    include '../footer.php';
    echo getarrows("01_3_Dreamdust.php","02_1_Dreamdust.php");
    setlast("Year/01_4_Dreamdust.php");?>
</body>
