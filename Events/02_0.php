<?php session_start(); 
    include '../firstcontact.php';?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A New Year
    </title>
</head>
<h1>A New Year</h1>
<p>[File truncated for development purposes]</p>
<?php
include '../settarget.php';
settarget("Crag",2,0,null);
settarget("Blade",null,null,0);
if($_SESSION["YEAR"]<2){
    $_SESSION["YEAR"]=2;
}
include "../footer.php";
echo getarrows(null,null);
echo goback();
setlast("Events/02_0.php");
?>
</body>
