<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Fire.css">
    <title>
        Fire Elf Stunts and Rituals
    </title>
</head>
<h1><strong>RITUALS</strong></h1>
<p>[File truncated for development purposes]</p>
<?php
    include '../settarget.php'; 
    settarget("Fire",null,4,null);
    include 'footer.php';
    echo getarrows("2_Leadership.php","4_Details and Design Notes.php");
    echo goback();?>
</body>
</html>
