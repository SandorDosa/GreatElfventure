<?php session_start(); ?>
<!DOCTYPE html>
<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 1 - Winter
    </title>
</head>

<body>

<head><strong>Winter, Year 1</strong></head>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Fire",4,null,1);
    include '../footer.php';
    echo getarrows("01_2_Fire.php","01_4_Fire.php");
    setlast("Year/01_0_Fire.php");?>
</body>
