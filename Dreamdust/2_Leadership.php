<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        River Elf Leadership
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Dreamdust.css">
</head>

<body>
<h1>Leadership</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../settarget.php'; 
        settarget("Dreamdust",null,3,null);
        include 'footer.php';
        echo getarrows("1_Factions.php","3_Stunts and Rituals.php");
        echo goback();
    ?>
</body>
</html>
