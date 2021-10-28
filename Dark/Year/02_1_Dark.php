<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Dark Elf Year 2 - Summer
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<?php include '../../header.php'; ?>
<h1>Year 2 - Summer</h1>
<h2>Roleplay Event 2.0: <a href="../../Events/02_0.php">A New Year</a></h2>
<p>[File truncated for development purposes]</p>
<?php
    include '../../settarget.php'; 
    settarget("Dark",6,null,3);
    include '../footer.php';
    echo getarrows("01_4_Dark.php","02_2_Dark.php");
    setlast("Year/02_1_Dark.php");?>
</body>
