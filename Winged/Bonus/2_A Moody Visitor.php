<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Moody Visitor
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<p><b>A Moody Visitor</b></p>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,0);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/01_3_Winged.php#jump","../Year/01_3_Winged.php#jump");
    setlast("Bonus/2_A Moody Visitor.php");?>
</body>
</html>
