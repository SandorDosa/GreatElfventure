<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Winged Elf Cultural Details
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Winged.css">
</head>

<body>
<h1>100% Pure Flavor Text</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../settarget.php'; 
        settarget("Winged",null,4,null);
        include 'footer.php';
        echo getarrows("3_Leadership.php",null);
        echo goback();
    ?>
</body>
</html>
