<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Winged Elf Creation Myth
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="Winged.css">
</head>

<body>
<h1>How the Flappies Got Their Wings, a Creation Myth</h1>
<p>[File truncated for development purposes]</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,0);
    #Footer content
    include 'footer.php';
    echo getarrows("../Year/01_3_Winged.php#jump","../Year/01_3_Winged.php#jump");
    echo goback();?>
</body>
</html>
