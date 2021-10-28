<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 3 - Winter
    </title>
</head>

<body>
<h2><strong>Winter, Year 3</strong></h2>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",12,null,13);
        include '../footer.php';
        echo getarrows("03_2_Fire.php","03_4_Fire.php");
        setlast("Year/03_3_Fire.php");
    ?>
</body>
