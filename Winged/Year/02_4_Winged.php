<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 2 - Spring
    </title>
</head>

<body>
<h1>Year 2 - Spring</h1>
<p id="jump"> Anasatri receives <a href="../Bonus/16_A Silent Answer.php">a silent answer.</a></p>
<h3 id="jump3">Event 2.4.2: <a href="../Bonus/17_A Need to Know.php">A Need to Know</a></h3>
<h3><a href="../../Events/03_0.php">The Elves Gather for Their Annual Potluck</a></h3>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Winged",9,null,17);
        if($_SESSION["YEAR"]<3){
            $_SESSION["YEAR"] = 3;
        }
        include '../footer.php';
        //echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("02_3_Winged.php","03_1_Winged.php");
        setlast("Year/02_4_Winged.php");
    ?>
</body>
