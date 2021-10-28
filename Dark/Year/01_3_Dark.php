<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 1 - Winter
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 1 - Winter</h1>
<p>[File truncated for development purposes]</p>
<?php
    include '../../settarget.php'; 
    settarget("Dark",4,null,0);
    include '../footer.php';
    echo getarrows("01_2_Dark.php","01_4_Dark.php");
    setlast("Year/01_3_Dark.php");?>
</body>
