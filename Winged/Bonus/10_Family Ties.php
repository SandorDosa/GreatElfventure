<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Family Ties
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Family Ties</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,10);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Winged.php#jump2","../Year/02_2_Winged.php#jump2");
    setlast("Bonus/10_Family Ties.php");?>
</body>
</html>
