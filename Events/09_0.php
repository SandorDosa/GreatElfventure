<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Placeholder Potluck
    </title>
</head>

<body>

<p>[File truncated for development purposes]</p>


<?php
if($_SESSION["YEAR"]<9){
    $_SESSION["YEAR"]=9;
}
include "../footer.php";
echo getarrows(null,null);
#settarget("Blade",null,null,6);
echo goback();
setlast("Events/09_0.php");
?>
</body>