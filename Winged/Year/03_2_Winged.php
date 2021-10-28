<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 3 - Fall
    </title>
</head>

<body>
<h1>Year 3 - Fall</h1>
<p>[File truncated for development purposes]</p>
<h3 id="1">Story Event: <a href="../Bonus/21_A Friend In Need.php">A Friend in Need</a></h3>
<h3 id="2">Story Event: <a href="../Bonus/22_A Safe Return.php">A Safe Return</a></h3>
<h3 id="3">Story Event: <a href="../Bonus/23_Help Wanted.php">Help Wanted</a></h3>
<?php
        include '../../settarget.php'; 
        settarget("Winged",11,null,23);
        include '../footer.php';
        //echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("03_1_Winged.php","03_3_Winged.php");
        setlast("Year/03_2_Winged.php");
    ?>
</body>