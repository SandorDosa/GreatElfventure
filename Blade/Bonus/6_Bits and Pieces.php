<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../Crag/Crag.css">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Bits and Pieces
    </title>
</head>

<body>

<h2>The Hunger's Vigil</h2>
<p>The Hunger is enduring an absolutely horrifying six days. The Dog is attempting to destroy him, mind and soul, at all
    times. His sanity must remain intact until the full moon for there to be any chance of saving him.</p>
<p>[File truncated for development purposes]</p>

<p class="center"><a href="#top">-FIN-</a></p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,6);
echo getarrows("../../Events/04_0.php#jump","7_A Man and a Dog.php");
#setlast("Bonus/4_Bits and Pieces.php");
?>
</body>