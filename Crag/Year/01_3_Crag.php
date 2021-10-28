<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Winter, year 1</title>
</head>
<body>
<h2>Winter, Year 1</h2>
<p>[File truncated for development purposes]</p>

<?php
    include '../../settarget.php'; 
    settarget("Crag",4,null,null);
    include '../footer.php';
    echo getarrows("01_2_Crag.php","01_4_Crag.php");
    setlast("Year/01_3_Crag.php");?>
</body>
