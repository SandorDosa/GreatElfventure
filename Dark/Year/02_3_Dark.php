<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 2 - Winter
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 2 - Winter</h1>
<p>[File truncated for development purposes]</p>
<?php
    include '../../settarget.php'; 
    settarget("Dark",8,null,11);
    include '../footer.php';
    echo getarrows("02_2_Dark.php","02_4_Dark.php");
    setlast("Year/02_3_Dark.php");?>
</body>
