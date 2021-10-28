<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 5 - Summer
    </title>
</head>

<body>
<h1>Year 5 - Summer</h1>
<h2>Roleplay Event 5.0: <a href="../../Events/05_0.php">A Potluck with a View</a></h2>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Winged",18,null,null);
        include '../footer.php';
        echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("04_4_Winged.php","05_2_Winged.php");
        setlast("Year/05_1_Winged.php");
    ?>
</body>
