<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 2 - Summer
    </title>
</head>

<body>
<h2><strong>Summer, Year 2</strong></h2>
<p>[File truncated for development purposes]</p>


<?php
        include '../../settarget.php'; 
        settarget("Fire",6,null,6);
        include '../footer.php';
        echo getarrows("01_4_Fire.php","02_2_Fire.php");
        setlast("Year/02_1_Fire.php");
    ?>
</body>
