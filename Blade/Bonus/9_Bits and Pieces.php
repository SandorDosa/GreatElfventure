<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Bits and Pieces
    </title>
</head>

<body>
<h1 id="top">Bits and Pieces</h1>
<p>[File truncated for development purposes]</p>

<p class="center"><a href="#top">-FIN-</a></p>
<hr/>

<?php
    include "../footer.php";
    include '../../settarget.php';
    settarget("Blade",null,null,9);
    echo getarrows("../../Events/06_0.php#jump","11_Open Athlon I.php");
    #setlast("Bonus/4_Bits and Pieces.php");
    ?>
</body>