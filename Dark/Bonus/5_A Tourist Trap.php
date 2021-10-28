<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Tourist Trap
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../Blade/NPC.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>A Tourist Trap</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,5);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Dark.php#jump","../Year/02_2_Dark.php#jump");
    setlast("Bonus/5_A Tourist Trap.php");?>
</body>
</html>
