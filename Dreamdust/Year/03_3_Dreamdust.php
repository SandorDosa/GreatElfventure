<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
    <title>
        Dreamdust Elf Year 3 - Winter
    </title>
</head>

<body>
<h1>Year 3 - Winter</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dreamdust",12,null,null);
        include '../footer.php';
        echo getarrows("03_2_Dreamdust.php","03_4_Dreamdust.php");
        setlast("Year/03_3_Dreamdust.php");
    ?>
</body>
