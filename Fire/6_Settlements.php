<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Fire.css">
    <title>
        Settlements
    </title>
</head>

<body>
<h1><strong>SETTLEMENTS</strong></h1>
<p>[File truncated for development purposes]</p>
<?php
    include '../settarget.php'; 
    settarget("Fire",null,7,null);
    include 'footer.php';
    echo getarrows("5_Ecology of the Burning Maar.php","7_Divisions.php");
    echo goback();?>
    
</body>
</html>
