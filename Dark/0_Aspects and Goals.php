<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dark Elf Overview
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<h1>Overview</h1>
<p>[File truncated for development purposes]</p>

<?php
    #Update bonus sequence
    include '../settarget.php'; 
    settarget("Dark",null,1,null);
    #Footer content
    include 'footer.php';
    echo getarrows(null,"1_Factions.php");
    echo goback();?>
</body>
</html>
