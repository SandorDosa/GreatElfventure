<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 4 - Winter
    </title>
</head>

<body>
<h2><strong>Winter, Year 4</strong></h2>
< <p>[File truncated for development purposes]</p>
<p id="back"><a href="../Bonus/18_A Tale Begins.php">A Tale Begins</a></p>
<p id="back"><a href="../Bonus/27_Bear">Bear</a></p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",16,null,18);
        include '../footer.php';
        echo getarrows("04_2_Fire.php","04_4_Fire.php");
        setlast("Year/04_3_Fire.php");
    ?>
</body>
