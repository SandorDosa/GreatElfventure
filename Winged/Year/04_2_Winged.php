<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 4 - Fall
    </title>
</head>

<body>
<h1>Year 4 - Fall</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Winged",15,null,null);
        include '../footer.php';
        echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("04_1_Winged.php","04_3_Winged.php");
        setlast("Year/04_2_Winged.php");
    ?>
</body>
