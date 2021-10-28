<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Spring, year 1</title>
</head>
<body>
<h2>Spring, Year 1</h2>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/02_0.php">The Elves Gather for Their Annual Potluck</a></h3>

<?php
    include '../../settarget.php'; 
    settarget("Crag",5,null,null);
    if($_SESSION["YEAR"]<2){$_SESSION["YEAR"]=2;}
    include '../footer.php';
    echo getarrows("01_2_Crag.php","02_1_Crag.php");
    setlast("Year/01_4_Crag.php");?>
</body>
