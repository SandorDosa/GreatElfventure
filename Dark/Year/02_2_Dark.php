<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 2 - Fall
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 2 - Fall</h1>
<h3 id="back">Story: 2.2.1: <a href="../Bonus/4_A Dark Place.php">A Dark Place</a></h3>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Dark",7,null,9);
    include '../footer.php';
    echo getarrows("02_1_Dark.php","02_3_Dark.php");
    setlast("Year/02_2_Dark.php");?>
</body>
