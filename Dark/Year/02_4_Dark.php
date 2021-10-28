<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 2 - Spring
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 2 - Spring</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/03_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
    include '../../settarget.php'; 
    settarget("Dark",9,null,12);
    if($_SESSION["YEAR"]<3){$_SESSION["YEAR"]=3;}
    include '../footer.php';
    echo getarrows("02_3_Dark.php","03_1_Dark.php");
    setlast("Year/02_4_Dark.php");?>
</body>
