<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
    <title>
        Dreamdust Elf Year 4 - Fall
    </title>
</head>

<body>
<h1>Year 4 - Fall</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dreamdust",15,null,null);
        include '../footer.php';
        echo getarrows("04_1_Dreamdust.php","04_3_Dreamdust.php");
        setlast("Year/04_2_Dreamdust.php");
    ?>
</body>
