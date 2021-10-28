<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Council of a Chronicler
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Council of a Chronicler</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,7);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Dark.php#jump3","../Year/02_2_Dark.php#jump3");
    setlast("Bonus/7_Council of a Chronicler.php");?>
</body>
</html>
