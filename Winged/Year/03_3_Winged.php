<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 3 - Winter
    </title>
</head>

<body>
<h1>Year 3 - Winter</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Winged",12,null,26);
        include '../footer.php';
       // echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("03_2_Winged.php","03_4_Winged.php");
        setlast("Year/03_3_Winged.php");
    ?>
</body>