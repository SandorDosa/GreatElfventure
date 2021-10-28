<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Surtian Flight
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../Winged/Winged.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
</head>

<body>
<h1>A Surtian Flight</h1>

<p>[File truncated for development purposes]</p>
<p>-FIN-</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Fire",null,null,9);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Fire.php#jump","../Year/02_3_Fire.php#jump");
    setlast("Bonus/9_A Surtian Flight.php");?>
</body>
</html>
