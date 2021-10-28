<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 2 - Fall
    </title>
</head>
<body>
<h1>Winged Elf Year 2 - Fall</h1>
<h3 id="jump">Event: <a href="../Bonus/9_A Closeted Tourist.php">A Closeted Tourist</a></h3>
<h3 id="jump2">Event: <a href="../Bonus/10_Family Ties.php">Family Ties</a></h3>
<p>[File truncated for development purposes]</p>
<?php
        include '../../settarget.php'; 
        settarget("Winged",7,null,10);
        include '../footer.php';
       // echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("02_1_Winged.php","02_3_Winged.php");
        setlast("Year/02_2_Winged.php");
    ?>
</body>
