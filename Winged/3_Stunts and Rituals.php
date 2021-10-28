<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Winged Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Winged.css">
</head>

<body>
<h1>Stunts</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../settarget.php'; 
        settarget("Winged",null,4,null);
        include 'footer.php';
        echo getarrows("2_Leadership.php","4_Details.php");
        echo goback();
    ?>
</body>
</html>