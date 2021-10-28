<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Precipitous Potluck
    </title>
</head>

<body>
<H1>A Precipitous Potluck</H1>
<p>[File truncated for development purposes]</p>

<h2 id="back2"><a href="../Blade/Bonus/9_Bits and Pieces.php">Bits and Pieces</a></h2>
<h2 id="back3"><a href="../Blade/Bonus/11_Open Athlon I.php">Open Athlon I</a></h2>
<?php
if($_SESSION["YEAR"]<6){
    $_SESSION["YEAR"]=6;
}
include "../footer.php";
echo getarrows(null,null);
settarget("Blade",null,null,11);
echo goback();
setlast("Events/06_0.php");
?>
</body>