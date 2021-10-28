<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Friend in Need
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>A Friend in Need</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,21);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/03_2_Winged.php#1","../Year/03_2_Winged.php#1");
    //setlast("Bonus/10_Family Ties.php");?>
</body>
</html>