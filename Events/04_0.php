<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>
        A Peaceful Potluck
    </title>
</head>

<body>
<h1>A Peaceful Potluck</h1>
<p>[File truncated for development purposes]</p>
<p class="center">-FIN-</p>

<?php
if($_SESSION["YEAR"]<4){
    $_SESSION["YEAR"]=4;
}
include "../footer.php";
echo getarrows(null,'../Blade/Bonus/6_Bits and Pieces.php');
settarget("Blade",null,null,7);
echo goback();
setlast("Events/04_0.php");
?>
</body>