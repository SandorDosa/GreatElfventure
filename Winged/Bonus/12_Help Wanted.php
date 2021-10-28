<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Help Wanted
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Help Wanted</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,12);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Winged.php#jump2","../Year/02_3_Winged.php#jump2");
    setlast("Bonus/12_Help Wanted.php");?>
</body>
</html>
