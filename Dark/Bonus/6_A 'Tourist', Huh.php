<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A 'Tourist,' Huh?
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
</head>

<body>
<h1>A 'Tourist,' Huh?</h1>
<p>[File truncated for development purposes]</p>
<p class="center">(Fin)</p>
<?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Dark",null,null,6);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_2_Dark.php#jump2","../Year/02_2_Dark.php#jump2");
    setlast("Bonus/6_A 'Tourist', Huh.php");?>
</body>
</html>
