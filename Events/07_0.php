<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Potluck Disassembled
    </title>
</head>

<body>
<h1>A Potluck Disassembled</h1>
<p>[File truncated for development purposes]</p>
<p class="center"><a href="#Top">-FIN-</a></p>

<?php
if($_SESSION["YEAR"]<7){
    $_SESSION["YEAR"]=7;
}
include "../footer.php";
echo getarrows(null,null);
#settarget("Blade",null,null,6);
echo goback();
setlast("Events/07_0.php");
?>
</body>