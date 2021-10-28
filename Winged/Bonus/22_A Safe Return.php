<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Safe Return
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>A Safe Return</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,22);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/03_2_Winged.php#2","../Year/03_2_Winged.php#2");
    //setlast("Bonus/12_Help Wanted.php");?>
</body>
</html>