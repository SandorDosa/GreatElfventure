<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Homeward Rambles
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<p><b>Homeward Rambles</b></p>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<!--INSERT INK BATH HERE!-->
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,1);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Dark.php#jump","../Year/02_1_Dark.php#jump");
    setlast("Bonus/1_Homeward Rambles.php");?>
</body>
</html>
