<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Fire.css">
    <title>
        Fire Elf Details and Design Notes
    </title>
</head>

<body>
<p>Surt&rsquo;s inn, <em>the Howl</em>, year 1:</p>
<p>[File truncated for development purposes]</p>
<?php
    include '../settarget.php'; 
    settarget("Fire",null,5,null);
    include 'footer.php';
    echo getarrows("3_Leadership.php","5_Ecology of the Burning Maar.php");
    echo goback();?>
</body>
</html>