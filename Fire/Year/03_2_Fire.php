<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 3 - Fall
    </title>
</head>

<body>
<h2><strong>Fall, Year 3</strong></h2>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",11,null,null);
        include '../footer.php';
        echo getarrows("03_1_Fire.php","03_3_Fire.php");
        setlast("Year/03_2_Fire.php");
    ?>
</body>
