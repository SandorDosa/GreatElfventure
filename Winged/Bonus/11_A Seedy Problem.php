<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Seedy Problem
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>A Seedy Problem</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,11);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Winged.php#jump","../Year/02_3_Winged.php#jump");
    setlast("Bonus/11_A Seedy Problem.php");?>
</body>
</html>
