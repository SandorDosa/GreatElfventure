<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
    <title>
        Dark Elf Year 4 - Spring
    </title>
</head>

<body>
<h1>Year 4 - Spring</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/05_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
        include '../../settarget.php'; 
        settarget("Dark",17,null,null);
        if($_SESSION["YEAR"]<5){
            $_SESSION["YEAR"] = 5;
        }
        include '../footer.php';
        echo getarrows("04_3_Dark.php","05_1_Dark.php");
        setlast("Year/04_1_Dark.php");
    ?>
</body>
