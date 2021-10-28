<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Surtian Flight
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../Fire/Fire.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">

</head>

<body>
<h1>A Surtian Flight</h1>
<p>[File truncated for development purposes]</p>
<p>-FIN-</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,14);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Winged.php#jump4","../Year/02_3_Winged.php#jump4");
    setlast("Bonus/14_A Surtian Flight.php");?>
</body>
</html>
