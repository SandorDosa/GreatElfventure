<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Moody Visitor
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<p><b>A Moody Visitor</b></p>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,0);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/01_3_Dark.php#jump","../Year/01_3_Dark.php#jump");
    setlast("Bonus/0_A Moody Visitor.php");?>
</body>
</html>
