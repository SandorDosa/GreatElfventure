<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Dreamdust Elf Year 3 - Summer
    </title>

    <link rel="stylesheet" type="text/css" href="../Dreamdust.css">
</head>

<body>
<h1>Year 3 - Summer</h1>
<h2>Roleplay Event 2.0: <a href="../../Events/03_0.php">Dreamdusty Speeches and Brimstone Buffets</a></h2>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dreamdust",10,null,null);
        settarget("Blade",null,null,3);
        include '../footer.php';
        echo getarrows("02_4_Dreamdust.php","03_2_Dreamdust.php");
        setlast("Year/03_1_Dreamdust.php");
    ?>
</body>
