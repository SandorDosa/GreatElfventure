<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        An Unwelcome Visitor
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>An Unwelcome Visitor</h1>
<p>[File truncated for development purposes]</p>
<p>-FIN-</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,15);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_4_Winged.php#jump2","../Year/02_4_Winged.php#jump2");
    setlast("Bonus/15_An Unwelcome Visitor.php");?>
</body>
</html>
