<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Crag Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<h1>Stunts</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../settarget.php'; 
        settarget("Crag",null,3,null);
        include 'footer.php';
        echo getarrows("1_Factions.php","3_Leadership.php");
        echo goback();
    ?>
</body>
</html>