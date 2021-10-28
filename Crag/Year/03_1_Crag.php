<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include'../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Summer, year 3</title>
</head>
<body>
<h1>Summer, Year 3</h1>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Crag",10,null,null);
    include '../footer.php';
    echo getarrows("02_4_Crag.php","03_2_Crag.php");
    setlast("Year/03_1_Crag.php");?>
</body>


