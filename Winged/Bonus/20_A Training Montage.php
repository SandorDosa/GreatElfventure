<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Training Montage
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>A Training Montage</h1>
<p>[File truncated for development purposes]</p>


<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,20);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/03_1_Winged.php#jump2","../Year/03_1_Winged.php#jump2");
    #setlast("");?>
</body>
</html>
