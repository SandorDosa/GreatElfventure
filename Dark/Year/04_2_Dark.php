<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
    <title>
        Dark Elf Year 4 - Fall
    </title>
</head>

<body>
<h1>Year 4 - Fall</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dark",15,null,null);
        include '../footer.php';
        echo getarrows("04_1_Dark.php","04_3_Dark.php");
        setlast("Year/04_2_Dark.php");
    ?>
</body>
