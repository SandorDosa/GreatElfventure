<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Fire.css">
    <title>
        Ecology of the Burning Maar
    </title>
</head>

<body>
<p>
<h1><strong>The Ecology of the Burning Marr</strong></h1></p>
<p>[File truncated for development purposes]</p>
<?php
    include '../settarget.php'; 
    settarget("Fire",null,6,null);
    include 'footer.php';
    echo getarrows("4_Details and Design Notes.php","6_Settlements.php");
    echo goback();?>
</body>
</html>
