<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Help Wanted 2
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Help Wanted 2</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,23);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/03_2_Winged.php#3","../Year/03_2_Winged.php#3");
    //setlast("Bonus/12_Help Wanted.php");?>
</body>
</html>