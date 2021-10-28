<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Possible Connection
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../Fire/Fire.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">

</head>

<body>
<h1>A Possible Connection</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,13);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Winged.php#jump3","../Year/02_3_Winged.php#jump3");
    setlast("Bonus/13_A Possible Connection.php");?>
</body>
</html>
