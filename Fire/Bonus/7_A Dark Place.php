<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Dark Place
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
</head>

<body>
<h1>A Dark Place</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Fire",null,null,7);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Fire.php#back","../Year/02_2_Fire.php#back");
    setlast("Bonus/7_A Dark Place.php");?>
</body>
</html>
