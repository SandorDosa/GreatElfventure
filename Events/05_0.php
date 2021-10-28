<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Potluck with a View
    </title>
    <?php include '../firstcontact.php'; ?>
</head>

<body>
<h1>A Potluck with a View</h1>
<p>[File truncated for development purposes]</p>
<?php
if($_SESSION["YEAR"]<5){
    $_SESSION["YEAR"]=5;
}
include "../footer.php";
echo getarrows(null,null);
settarget("Blade",null,null,6);
echo goback();
setlast("Events/05_0.php");
?>
</body>