<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Winged Elf Year 1 - Spring
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Year 1 - Spring</h1>
<p>[File truncated for development purposes]</p>
<h3><a href="../../Events/02_0.php">The Elves Gather for Their Annual Potluck</a></h3>

<?php
    include '../../settarget.php'; 
    settarget("Winged",5,null,4);
    if($_SESSION["YEAR"]<2){$_SESSION["YEAR"]=2;}
    include '../footer.php';
    echo getflapstory(null,"../Bonus/4_Spring.php");
    echo getarrows("01_3_Winged.php","02_1_Winged.php");
    setlast("Year/01_4_Winged.php");?>
</body>
