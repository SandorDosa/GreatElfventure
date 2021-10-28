<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 2 - Summer
    </title>
</head>

<body>
<h1>Year 2 - Summer</h1>
<h2>Roleplay Event 2.0: <a href="../../Events/02_0.php">A New Year</a></h2>
<h3 id="jump">Story 2.1.1: <a href="../Bonus/5_A Quick Recap.php">A Quick Recap</a></h3>
<h3 id="jump3">Story 2.1.2: <a href="../Bonus/7_Lost and Found.php">Lost and Found</a></h3>
<h3 id="jump4">Story 2.1.3: <a href="../Bonus/8_A New Discovery.php">A New Discovery</a></h3>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Winged",6,null,8);
        include '../footer.php';
       // echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("01_4_Winged.php","02_2_Winged.php");
        setlast("Year/02_1_Winged.php");
    ?>
</body>
