<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
<link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
    <title>
        Dreamdust Elf Year 1 - Fall
    </title>
</head>

<body>
<h2>Turn 2 (Year 1, Fall)
</h2>
<p>[File truncated for development purposes]</p>

</p>
<?php
    include '../../settarget.php'; 
    settarget("Dreamdust",3,null,0);
    include '../footer.php';
    echo getarrows("01_1_Dreamdust.php","01_3_Dreamdust.php");
    setlast("Year/01_2_Dreamdust.php");?>    
</body>
