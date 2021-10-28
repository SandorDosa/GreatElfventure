<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Winter, year 2</title>
</head>
<body>

<h1>Spring, Year 2</h1>
<p>[File truncated for development purposes]</p>

<h3><a href="../../Events/03_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<?php
    include '../../settarget.php'; 
    settarget("Crag",9,null,null);
    if($_SESSION["YEAR"]<3){$_SESSION["YEAR"]=3;}
    include '../footer.php';
    echo getarrows("02_3_Crag.php","03_1_Crag.php");
    setlast("Year/02_4_Crag.php");?>
</body>
