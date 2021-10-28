<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include'../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Spring, year 3</title>
</head>
<body>
<h1>Spring, Year 3</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/04_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
    include '../../settarget.php'; 
    settarget("Crag",13,null,2);
    if($_SESSION["YEAR"]<4){$_SESSION["YEAR"]=4;}
    include '../footer.php';
    echo getarrows("03_3_Crag.php","04_1_Crag.php");
    setlast("Year/03_4_Crag.php");?>
</body>