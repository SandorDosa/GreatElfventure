<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Forgotten Testimony
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <link rel="stylesheet" type="text/css" href="../../Blade/NPC.css">
</head>

<body>
<h1>A Forgotten Testimony</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,6);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Winged.php#jump2","../Year/02_1_Winged.php#jump2");
    setlast("Bonus/6_A Forgotten Testimony.php");?>
</body>
</html>
