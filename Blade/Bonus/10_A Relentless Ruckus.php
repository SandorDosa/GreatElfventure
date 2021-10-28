<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        A Relentless Ruckus
    </title>
</head>

<body>
<h1 id="top">A Relentless Ruckus</h1>
<p>Stone chips and powder erupt into the street as two figures plow through the wall which separates most of Eparchy
    from it’s dedicated Lowlanders quarter. Still managing to keep her feet even through a wall, Bryti keeps her
    ironclad grasp… until Echo finally manages to push her into another wall, this one made of decidedly non-decorative,
    foot thick stone. Moving at considerable speed, she impacts the stone with a resounding <i>clang</i>.</p>
<p>[File truncated for development purposes]</p>
<p class="center">-FIN-</p>
<?php
    include "../footer.php";
    include '../../settarget.php';
    settarget("Blade",null,null,10);
    echo getarrows("../../Events/06_0.php#back","../../Events/06_0.php#back");
    #setlast("Bonus/4_Bits and Pieces.php");
    ?>
</body>