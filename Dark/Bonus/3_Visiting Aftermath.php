<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Visiting Aftermath
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<p><b>Visiting Aftermath</b></p>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<!--INSERT INK BATH HERE!-->
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,3);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Dark.php#jump3","../Year/02_1_Dark.php#jump3");
    setlast("Bonus/3_Visiting Aftermath.php");?>
</body>
</html>
