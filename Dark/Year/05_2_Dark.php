<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Dark.css">
    <title>
        Dark Elf Year 5 - Fall
    </title>
</head>

<body>
<h1>Year 5 - Fall</h1>
<p>[File truncated for development purposes]</p>

<?php
        include '../../settarget.php'; 
        settarget("Dark",19,null,null);
        include '../footer.php';
        echo getarrows("05_1_Dark.php","05_3_Dark.php");
        setlast("Year/05_2_Dark.php");
    ?>
</body>
