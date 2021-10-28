<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 3 - Spring
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 3 - Spring</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/04_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
    include '../../settarget.php'; 
    settarget("Dark",13,null,null);
    if($_SESSION["YEAR"]<4){$_SESSION["YEAR"]=4;}
    include '../footer.php';
    echo getarrows("03_3_Dark.php","04_1_Dark.php");
    setlast("Year/03_4_Dark.php");?>
</body>
