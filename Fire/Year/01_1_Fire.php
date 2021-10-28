<?php session_start(); ?>
<!DOCTYPE html>
<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 1 - Summer
    </title>
</head>

<body>

<h2><strong>Fire Elves: Summer, Year 1</strong></h2>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Fire",2,0,0);
    include '../footer.php';
    echo getarrows(null,"01_2_Fire.php");
    setlast("Year/01_0_Fire.php");?>
</body>
