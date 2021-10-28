<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Winged Elf Overview
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Winged.css">
</head>

<body>
<h1>Overview</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../settarget.php'; 
        settarget("Winged",null,1,null);
        include 'footer.php';
        echo getarrows(null,"1_Factions.php");
        echo goback();
    ?>
</body>
</html>
