<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Rude Awakening
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>A Rude Awakening</h1>
<p>[File truncated for development purposes]</p>
<p>-FIN-</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,18);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/03_1_Winged.php#jump-1","../Year/03_1_Winged.php#jump-1");
    setlast("Bonus/18_A Rude Awakening.php");?>
</body>
</html>
