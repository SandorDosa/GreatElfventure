<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Dreamdust Elf Year 2 - Fall
    </title>

    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
</head>
<body>
<h1>Turn 6 (Year 2, Fall)</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dreamdust",7,null,null);
        include '../footer.php';
        echo getarrows("02_1_Dreamdust.php","02_3_Dreamdust.php");
        setlast("Year/02_2_Dreamdust.php");
    ?>
</body>
