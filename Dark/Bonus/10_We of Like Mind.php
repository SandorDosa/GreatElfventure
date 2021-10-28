<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        We of Like Mind
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>We of Like Mind</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,10);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_3_Dark.php#jump","../Year/02_3_Dark.php#jump");
    setlast("Bonus/10_We of Like Mind.php");?>
</body>
</html>
