<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Summer, Year 2</title>
</head>
<h2>Summer, Year 2</h2>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Crag",6,null,null);
    include '../footer.php';
    echo getarrows("01_4_Crag.php","02_2_Crag.php");
    setlast("Year/02_1_Crag.php");?>
</body>
