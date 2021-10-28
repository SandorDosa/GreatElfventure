<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Lost and Found
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <link rel="stylesheet" type="text/css" href="../../Blade/NPC.css">
</head>

<body>
<h1>Lost and Found</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,7);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Winged.php#jump3","../Year/02_1_Winged.php#jump3");
    setlast("Bonus/7_Lost and Found.php");?>
</body>
</html>
