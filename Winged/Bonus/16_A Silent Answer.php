<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Silent Answer
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>A Silent Answer</h1>
<p>[File truncated for development purposes]</p>
<p>-FIN-</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,16);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_4_Winged.php#jump","../Year/02_4_Winged.php#jump");
    setlast("Bonus/16_A Silent Answer.php");?>
</body>
</html>
