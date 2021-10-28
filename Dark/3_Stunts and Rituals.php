<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dark Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<h1>Stunts</h1>
<p>[File truncated for development purposes]</p>

<?php
    include '../settarget.php'; 
    settarget("Dark",null,null,null);
    include 'footer.php';
    echo getarrows("2_Leadership.php",null);
    echo goback();?>
</body>
</html>
