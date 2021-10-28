<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 1 - Spring
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 1 - Spring</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/02_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
    include '../../settarget.php'; 
    settarget("Dark",5,null,null);
    if($_SESSION["YEAR"]<2){$_SESSION["YEAR"]=2;}
    include '../footer.php';
    echo getarrows("01_3_Dark.php","02_1_Dark.php");
    setlast("Year/01_4_Dark.php");?>
</body>
