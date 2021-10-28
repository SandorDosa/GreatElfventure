<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 3 - Summer
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 3 - Summer</h1>
<h2>Roleplay Event 3.0: <a href="../../Events/03_0.php">Firey Speeches and Brimstone Buffets</a></h2>
<p>[File truncated for development purposes]</p>
<?php
    include '../../settarget.php'; 
    settarget("Dark",10,null,null);
    include '../footer.php';
    echo getarrows("02_4_Dark.php","03_2_Dark.php");
    setlast("Year/03_1_Dark.php");?>
</body>
