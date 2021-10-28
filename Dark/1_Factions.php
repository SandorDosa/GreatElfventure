<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dark Elf Factions
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<h1>Factions</h1>
<p>[File truncated for development purposes]</p>

<?php
    include '../settarget.php'; 
    settarget("Dark",null,2,null);
    include 'footer.php';
    echo getarrows("0_Aspects.php","2_Leadership.php");
    echo goback();?>
</body>
</html>
