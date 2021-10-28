<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <title>
        Winged Elf Year 2 - Winter
    </title>
</head>

<body>
<h1>Year 2 - Winter</h1>
<h3 id="jump">Event 2.3.1: <a href="../Bonus/11_A Seedy Problem.php">A Seedy Problem</a></h3>
<h3 id="jump2">Event 2.3.2: <a href="../Bonus/12_Help Wanted.php">Help Wanted</a></h3>
<h3 id="jump3">Event 2.3.3: <a href="../Bonus/13_A Possible Connection.php">A Possible Connection</a></h3>
<h3 id="jump4">Roleplay Event 2.3.1: <a href="../Bonus/14_A Surtian Flight.php">A Surtian Flight</a></h3>
<p>[File truncated for development purposes]</p>
<?php
        include '../../settarget.php'; 
        settarget("Winged",8,null,14);
        include '../footer.php';
        //echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("02_2_Winged.php","02_4_Winged.php");
        setlast("Year/02_3_Winged.php");
    ?>
</body>
