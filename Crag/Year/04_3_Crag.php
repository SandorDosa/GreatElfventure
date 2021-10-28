<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include'../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Winter, year 4</title>
</head>
<body>
<h1>Winter, Year 4</h1>
<p>[File truncated for development purposes]</p>


<?php
    include '../../settarget.php'; 
    settarget("Crag",16,null,1);
    include '../footer.php';
    echo getarrows("04_2_Crag.php","04_4_Crag.php");
    setlast("Year/04_3_Crag.php");?>
</body>