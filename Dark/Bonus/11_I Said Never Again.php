<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        I Said Never Again
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
    <style>
        p#i {
            font-style: italic;
        }
    </style>
</head>

<body>
<h1>I Said Never Again</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,11);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Dark.php#jump2","../Year/02_3_Dark.php#jump2");
    setlast("Bonus/11_I Said Never Again.php");?>
</body>
</html>
