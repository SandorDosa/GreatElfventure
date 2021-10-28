<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../NPC.css">
    <title>
        A Man and a Dog
    </title>
</head>

<body>
<h1>A Man and a Dog</h1>
<p>The time has come.</p>
<p>[File truncated for development purposes]</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,7);
echo getarrows("6_Bits and Pieces.php","../../Events/04_0.php#jump");
#setlast("Bonus/7_A Man and a Dog.php");
?>
</body>