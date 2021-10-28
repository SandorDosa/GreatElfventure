<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Crag Elf Leadership
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<h1>Leadership</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../settarget.php'; 
        settarget("Crag",null,3,null);
        include 'footer.php';
        echo getarrows("2_Stunts and Rituals.php",null);
        echo goback();
    ?>
</body>
</html>