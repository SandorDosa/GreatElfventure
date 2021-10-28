<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
    <title>
        Dreamdust Elf Year 3 - Fall
    </title>
</head>

<body>
<h1>Year 3 - Fall</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dreamdust",11,null,null);
        include '../footer.php';
        echo getarrows("03_1_Dreamdust.php","03_3_Dreamdust.php");
        setlast("Year/03_2_Dreamdust.php");
    ?>
</body>
