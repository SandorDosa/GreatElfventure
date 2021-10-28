<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Operation Birdcage
    </title>
</head>

<body>
<h1>Operation Birdcage</h1>
<h2>DAY 1</h2>
<p>[File truncated for development purposes]</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,4);
echo getarrows("../../Events/03_0.php#jump","../../Events/03_0.php#jump");
echo goback();
?>
</body>