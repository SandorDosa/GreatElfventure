<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Spring, Year 1
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Spring Year 1: Turn 4</h1>
<p>[File truncated for development purposes]</p>
<?php
#Update bonus sequence
include '../../settarget.php';
settarget("Winged", null, null, 4);
#Footer content
include '../footer.php';
echo getflapstory("../Year/01_4_Winged.php", null);
echo getarrows("3_Winter.php", getflapnext($_SESSION["W_EXTRA"], 4, "5_Second Summer.php"));
setlast("Bonus/4_Spring.php"); ?>
</body>
</html>
