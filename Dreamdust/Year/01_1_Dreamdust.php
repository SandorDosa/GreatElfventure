<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
<link rel="stylesheet" type="text/css" href="../../style.css">
<link rel="stylesheet" type="text/css" href="../Dreamdust.css">

    <title>
        Dreamdust Elf Year 1 - Summer
    </title>
</head>

<body>
<h1>
    Turns, Year One
</h1>
<h2>Turn 1 (Year 1, Summer)
</h2>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Dreamdust",2,0,null);
    include '../footer.php';
    echo getarrows(null,"01_2_Dreamdust.php");
    setlast("Year/01_1_Dreamdust.php");?>
</body>
