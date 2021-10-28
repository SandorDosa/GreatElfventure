<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Stupid, Awkward Dream
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>A Stupid, Awkward Dream</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<!--INSERT INK BATH HERE!-->
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,12);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_4_Dark.php#jump","../Year/02_4_Dark.php#jump");
    setlast("Bonus/12_A Stupid, Awkward Dream.php");?>
</body>
</html>
