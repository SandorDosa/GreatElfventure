<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Winged Elf Year 1 - Winter
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
</head>

<body>
<h1>Year 1 - Winter</h1>
<p>[File truncated for development purposes]</p>


<?php
    include '../../settarget.php'; 
    settarget("Winged",4,null,3);
    include '../footer.php';
    echo getflapstory(null,"../Bonus/3_Winter.php");
    echo getarrows("01_2_Winged.php","01_4_Winged.php");
    setlast("Year/01_3_Winged.php");?>
</body>
