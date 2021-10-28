<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Blade Elf Year 0 - Spring
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<h1>Year 0 - Spring</h1>
<p>[File truncated for development purposes]</p>
<p><b>Roleplaying Opportunity:</b> <a href="01_0.php">Goodbye Potluck!</a> Summer Year 0 to be resolved after the
    roleplaying event. </p>

<?php
        include '../../settarget.php'; 
        settarget("Blade",1,0,null);
        include '../footer.php';
        echo getarrows("00_3_Blade.php","../../Events/01_0.php"); 
        if($_SESSION["YEAR"]<1){
            $_SESSION["YEAR"]=1;
        }
        setlast("Year/00_4_Blade.php");
    ?>
</body>
