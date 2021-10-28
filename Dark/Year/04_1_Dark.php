<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
    <title>
        Dark Elf Year 4 - Summer
    </title>
</head>

<body>
<h1>Year 4 - Summer</h1>
<h2>Roleplay Event 4.0.1: <a href="../../Events/04_0.php">A Peaceful Potluck</a></h2>
<h3>Roleplay Event 4.0.2: <a href="../../Blade/Bonus/4_Bits and Pieces.php">Bits and Pieces</a></h3>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dark",14,null,null);
        include '../footer.php';
        echo getarrows("03_4_Dark.php","04_2_Dark.php");
        setlast("Year/04_1_Dark.php");
    ?>
</body>
