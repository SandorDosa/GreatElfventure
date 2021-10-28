<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Blade Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<h1>Stunts</h1>
<h2>Military Discipline</h2>
<p>[File truncated for development purposes]</p>

<?php
        include '../settarget.php'; 
        settarget("Blade",null,3,null);
        include 'footer.php';
        echo getarrows("2_Leadership.php",null);
        echo goback();
    ?>
</body>
</html>