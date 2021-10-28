<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Summer, Year 1
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Summer Year 1: Turn 1</h1>
<p>[File truncated for development purposes]</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,0);
    #Footer content
    include '../footer.php';
    echo getflapstory("../Year/01_1_Winged.php",null);
    echo getarrows("../Year/01_1_Winged.php",getflapnext($_SESSION["W_EXTRA"],0,"1_Fall.php"));
    setlast("Bonus/0_Summer.php");?>
</body>
</html>
