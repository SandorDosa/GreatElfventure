<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Fire.css">
    <title>
        Fire Elf Year 2 - Spring
    </title>
</head>

<body>
<p><strong>Spring, Year 2</strong></p>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Fire",9,null,10);
        if($_SESSION["YEAR"]<3){
            $_SESSION["YEAR"] = 3;
        }
        include '../footer.php';
        echo getarrows("02_3_Fire.php","03_1_Fire.php");
        setlast("Year/02_4_Fire.php");
    ?>
</body>
