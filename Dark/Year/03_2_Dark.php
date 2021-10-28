<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 3 - Fall
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 3 - Fall</h1>
<p>[File truncated for development purposes]</p>
<?php
    include '../../settarget.php'; 
    settarget("Dark",11,null,null);
    include '../footer.php';
    echo getarrows("03_1_Dark.php","03_3_Dark.php");
    setlast("Year/03_2_Dark.php");?>
</body>
