<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Need to Know
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Need to Know</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,17);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_4_Winged.php#jump3","../Year/02_4_Winged.php#jump3");
    setlast("Bonus/17_A Need to Know.php");?>
</body>
</html>
