<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 5 - Fall
    </title>
</head>

<body>
<h1>Year 5 - Fall</h1>
<p>[File truncated for development purposes]</p>
<p id="back"><a href="../Bonus/23_A Dependable Blade.php">A Dependable Blade</a></p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",19,null,23);
        include '../footer.php';
        echo getarrows("05_1_Fire.php","05_3_Fire.php");
        setlast("Year/05_2_Fire.php");
    ?>
</body>
