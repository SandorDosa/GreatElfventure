<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../Blade/NPC.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 2 - Fall
    </title>
</head>
<body>
<h2><strong>Fall, Year 2</strong></h2>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",7,null,8);
        include '../footer.php';
        echo getarrows("02_1_Fire.php","02_3_Fire.php");
        setlast("Year/02_2_Fire.php");
    ?>
</body>
