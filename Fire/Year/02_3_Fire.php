<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 2 - Winter
    </title>
</head>

<body>
<h2><strong>Winter, Year 2</strong></h2>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",8,null,9);
        include '../footer.php';
        echo getarrows("02_2_Fire.php","02_4_Fire.php");
        setlast("Year/02_3_Fire.php");
    ?>
</body>
