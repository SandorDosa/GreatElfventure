<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Blade Elf Overview
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<h1>Overview</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../settarget.php'; 
        settarget("Blade",null,1,null);
        include 'footer.php';
        echo getarrows(null,"1_Factions.php");
        echo goback();
    ?>
</body>
</html>
