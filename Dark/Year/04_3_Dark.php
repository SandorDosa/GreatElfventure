<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
    <title>
        Dark Elf Year 4 - Winter
    </title>
</head>

<body>
<h1>Year 4 - Winter</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dark",16,null,null);
        include '../footer.php';
        echo getarrows("04_2_Dark.php","04_4_Dark.php");
        setlast("Year/04_3_Dark.php");
    ?>
</body>
