<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Winged Elf Year 1 - Fall
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Year 1 - Fall</h1>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Winged",3,null,1);
    include '../footer.php';
    echo getflapstory(null,"../Bonus/1_Fall.php");
    echo getarrows("01_1_Winged.php","01_3_Winged.php");
    setlast("Year/01_2_Winged.php");?>
</body>
