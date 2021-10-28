<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <?php include'../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Winter, year 2</title>
</head>
<body>
<h1>Winter, Year 2</h1>
<p>[File truncated for development purposes]</p>


<?php
    include '../../settarget.php'; 
    settarget("Crag",8,null,1);
    include '../footer.php';
    echo getarrows("02_2_Crag.php","02_4_Crag.php");
    setlast("Year/02_3_Crag.php");?>
</body>
