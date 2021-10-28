<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dreamdust Elf Overview
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Dreamdust.css">
</head>

<body>
<h1>Overview</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../settarget.php'; 
    settarget("Dreamdust",null,1,null);
    #Footer content
    include 'footer.php';
    echo getarrows(null,"1_Factions.php");
    echo goback();?>
</body>
</html>
