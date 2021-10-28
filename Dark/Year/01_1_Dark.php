<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dark Elf Year 1 - Summer
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Year 1 - Summer</h1>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Dark",2,0,null);
    include '../footer.php';
    echo getarrows(null,"01_2_Dark.php");
    setlast("Year/01_1_Dark.php");?>
</body>
