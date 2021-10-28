<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include'../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Winter, year 3</title>
</head>
<body>
<h1>Winter, Year 3</h1>
<p>[File truncated for development purposes]</p>


<?php
    include '../../settarget.php'; 
    settarget("Crag",12,null,null);
    include '../footer.php';
    echo getarrows("03_2_Crag.php","03_4_Crag.php");
    setlast("Year/03_3_Crag.php");?>
</body>