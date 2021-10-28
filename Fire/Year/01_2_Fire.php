<?php session_start(); ?>
<!DOCTYPE html>
<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 1 - Fall
    </title>
</head>

<body>

<h2><strong>Fall, Year 1</strong></h2>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Fire",3,null,null);
    include '../footer.php';
    echo getarrows("01_1_Fire.php","01_3_Fire.php");
    setlast("Year/01_0_Fire.php");?>
</body>
