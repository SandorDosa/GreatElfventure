<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A New Discovery
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <link rel="stylesheet" type="text/css" href="../../Blade/NPC.css">
</head>

<body>
<h1>A New Discovery</h1>
<p>[File truncated for development purposes]</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,8);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Winged.php#jump4","../Year/02_1_Winged.php#jump4");
    setlast("Bonus/8_A New Discovery.php");?>
</body>
</html>
