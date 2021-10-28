<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Fall, Year 1
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Fall year 1: Turn 2</h1>
<p>[File truncated for development purposes]</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,1);
    #Footer content
    include '../footer.php';
    echo getflapstory("../Year/01_2_Winged.php",null);
    echo getarrows("0_Summer.php",getflapnext($_SESSION["W_EXTRA"],1,"3_Winter.php"));
    setlast("Bonus/1_Fall.php");?>
</body>
</html>
