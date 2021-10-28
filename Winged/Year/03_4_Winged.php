<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 3 - Spring
    </title>
</head>

<body>
<h1>Year 3 - Spring</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/04_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
        include '../../settarget.php'; 
        settarget("Winged",13,5,29);
        if($_SESSION["YEAR"]<4){
            $_SESSION["YEAR"] = 4;
        }
        include '../footer.php';
       // echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("03_3_Winged.php","04_1_Winged.php");
        setlast("Year/03_4_Winged.php");
    ?>
</body>