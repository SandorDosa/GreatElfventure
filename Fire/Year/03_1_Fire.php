<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <link rel="stylesheet" type="text/css" href="../Blade/NPC.css">
    <title>
        Fire Elf Year 3 - Summer
    </title>
</head>

<body>
<h2><strong>Summer, Year 3</strong></h2>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",10,null,null);
        include '../footer.php';
        echo getarrows("02_4_Fire.php","03_2_Fire.php");
        setlast("Year/03_1_Fire.php");
    ?>
</body>
