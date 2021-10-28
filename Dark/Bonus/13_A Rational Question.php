<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Rational Question
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>A Rational Question</h1>

<p><i>[Some short while after the Potluck, in some corner of Surt - Greg has Opinions at Ink]</i></p>
<p>[File truncated for development purposes]</p>
<p>Fin.</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,13);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/03_1_Dark.php#jump","../Year/03_1_Dark.php#jump");
    setlast("Bonus/13_A Rational Question.php");?>
</body>
</html>
