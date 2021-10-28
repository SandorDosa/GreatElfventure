<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dreamdust Elf Year 1 - Winter
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
</head>

<body>
<h2>Turn 3 (Year 1, Winter)
</h2>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Dreamdust",4,null,null);
    include '../footer.php';
    echo getarrows("01_2_Dreamdust.php","01_4_Dreamdust.php");
    setlast("Year/01_3_Dreamdust.php");?>
</body>
