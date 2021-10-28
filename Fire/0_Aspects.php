<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Fire.css">
    <title>
        Fire Elf Overview
    </title>
</head>

<body>
<h1>Aspects</h1>
<p>[File truncated for development purposes]</p>
<?php
    include '../settarget.php'; 
    settarget("Fire",null,1,null);
    include 'footer.php';
    echo getarrows(null,"1_Factions.php");
    echo goback();?>
</body>
</html>
