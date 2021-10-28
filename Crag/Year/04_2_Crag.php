<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include'../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Fall, year 4</title>
</head>
<body>
<h1>Fall, Year 4</h1>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Crag",15,null,1);
    include '../footer.php';
    echo getarrows("04_1_Crag.php","04_3_Crag.php");
    setlast("Year/04_2_Crag.php");?>
</body>