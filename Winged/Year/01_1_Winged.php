<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Winged Elf Year 1 - Summer
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Year 1 - Summer</h1>
<p>[File truncated for development purposes]</p>


<?php
    include '../../settarget.php'; 
    settarget("Winged",2,0,0);
    include '../footer.php';
    echo getflapstory(null,"../Bonus/0_Summer.php");
    echo getarrows(null,"01_2_Winged.php");
    setlast("Year/01_1_Winged.php");?>
</body>
