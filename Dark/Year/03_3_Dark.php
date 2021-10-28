<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 3 - Winter
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 3 - Winter</h1>
<p>[File truncated for development purposes]</p>
<?php
    include '../../settarget.php'; 
    settarget("Dark",12,null,null);
    include '../footer.php';
    echo getarrows("03_2_Dark.php","03_4_Dark.php");
    setlast("Year/03_3_Dark.php");?>
</body>
