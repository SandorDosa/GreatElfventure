<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Fire.css">
    <title>
        Fire Elf Factions
    </title>
</head>

<body>
<h1><strong>FACTIONS</strong></h1>
<p>[File truncated for development purposes]</p>
<?php
    include '../settarget.php'; 
    settarget("Fire",null,2,null);
    include 'footer.php';
    echo getarrows("0_Aspects.php","2_Leadership.php");
    echo goback();?>
</body>
</html>
