<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Dreamdust Elf Year 2 - Spring
    </title>

    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
</head>

<body>
<h1>Turn 8 (Year 2, Spring)</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/03_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
        include '../../settarget.php'; 
        settarget("Dreamdust",9,null,null);
        if($_SESSION["YEAR"]<3){
            $_SESSION["YEAR"] = 3;
        }
        include '../footer.php';
        echo getarrows("02_3_Dreamdust.php","03_1_Dreamdust.php");
        setlast("Year/02_4_Dreamdust.php");
    ?>
</body>
