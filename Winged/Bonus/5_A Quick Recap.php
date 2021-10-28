<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Quick Recap
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <link rel="stylesheet" type="text/css" href="../../Blade/NPC.css">
</head>

<body>
<h1>A Quick Recap</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,5);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Winged.php#jump","../Year/02_1_Winged.php#jump");
    setlast("Bonus/5_A Quick Recap.php");?>
</body>
</html>
