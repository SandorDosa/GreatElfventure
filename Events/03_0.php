<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Summer Potluck - Firey Speeches and Brimstone Buffets
    </title>
</head>

<body>
<h1>Firey Speeches and Brimstone Buffets</h1>
<p>[File truncated for development purposes]</p>
<?php
if($_SESSION["YEAR"]<3){
    $_SESSION["YEAR"]=3;
}
include "../footer.php";
echo getarrows(null,null);
echo goback();
setlast("Events/03_0.php");
?>
</body>