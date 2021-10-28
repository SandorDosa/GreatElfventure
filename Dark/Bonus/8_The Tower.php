<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        The Tower
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
    <style>
        p {
            font-style: italic;
        }
    </style>
</head>

<body>
<h1>The Tower</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,8);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Dark.php#jump4","../Year/02_2_Dark.php#jump4");
    setlast("Bonus/8_The Tower.php");?>
</body>
</html>
