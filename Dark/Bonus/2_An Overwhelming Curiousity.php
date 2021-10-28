<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        An Overwhelming Curiousity
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<p><b>An Overwhelming Curiousity</b></p>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<!--INSERT INK BATH HERE!-->
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,2);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Dark.php#jump2","../Year/02_1_Dark.php#jump2");
    setlast("Bonus/2_An Overwhelming Curiousity.php");?>
</body>
</html>
