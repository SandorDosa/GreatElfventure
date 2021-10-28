<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Plucky Magic Hacker
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>Plucky Magic Hacker</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,9);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Dark.php#jump5","../Year/02_2_Dark.php#jump5");
    setlast("Bonus/9_Plucky Magic Hacker.php");?>
</body>
</html>
