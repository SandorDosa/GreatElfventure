<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Dark Place
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>A Dark Place</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<!--INSERT INK BATH HERE!-->
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,4);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Dark.php#back","../Year/02_2_Dark.php#back");
    setlast("Bonus/4_A Dark Place.php");?>
</body>
</html>
