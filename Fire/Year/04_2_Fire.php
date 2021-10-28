<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 4 - Fall
    </title>
</head>

<body>
<h1>Fire Elf Year 4</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",15,null,null);
        include '../footer.php';
        echo getarrows("04_1_Fire.php","04_3_Fire.php");
        setlast("Year/04_2_Fire.php");
    ?>
</body>
