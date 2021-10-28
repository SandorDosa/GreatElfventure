<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Winter, Year 1
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Winter Year 1: Turn 3</h1>
<p>[File truncated for development purposes]</p>
<?php
#Update bonus sequence
include '../../settarget.php';
settarget("Winged", null, null, 3);
#Footer content
include '../footer.php';
echo getflapstory("../Year/01_3_Winged.php", null);
echo getarrows("1_Fall.php", getflapnext($_SESSION["W_EXTRA"], 3, "4_Spring.php"));
setlast("Bonus/3_Winter.php"); ?>
</body>
</html>
