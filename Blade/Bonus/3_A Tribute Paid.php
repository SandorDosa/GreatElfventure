<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        A Tribute Paid
    </title>
</head>

<body>
<h1>A Tribute Paid</h1>
<p>Ten miles outside Riverhaven, year 3</p>
<p>[File truncated for development purposes]</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,3);
echo getarrows("../../Events/03_0.php#jump","../../Events/03_0.php#jump");
echo goback();
?>
</body>