<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include'../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Fall, year 2</title>
</head>
<body>
<h1>Fall, Year 2</h1>
<p>[File truncated for development purposes]</p>


<?php
    include '../../settarget.php'; 
    settarget("Crag",7,null,null);
    include '../footer.php';
    echo getarrows("02_1_Crag.php","02_3_Crag.php");
    setlast("Year/02_2_Crag.php");?>
</body>
