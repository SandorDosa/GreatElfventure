<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Dreamdust Elf Year 2 - Winter
    </title>

    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
</head>

<body>
<h1>Turn 7 (Year 2, Winter)</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dreamdust",8,null,null);
        include '../footer.php';
        echo getarrows("02_2_Dreamdust.php","02_4_Dreamdust.php");
        setlast("Year/02_3_Dreamdust.php");
    ?>
</body>
