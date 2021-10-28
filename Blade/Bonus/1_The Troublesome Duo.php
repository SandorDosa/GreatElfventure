<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        The Troublesome Duo (Trio?)
    </title>
</head>

<body>
<h1>The Troublesome Duo (Trio?)</h1>
<p>Tsun strode down the palace steps, and then out the main doors to the open Agora square. She glanced at the line of
    bonfires set out front, and then turned and walked along the edge of the Palace, towards a pair of dancers warming
    up with handstands on the far corner of the palace grounds. </p>
<p>[File truncated for development purposes]</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,1);
echo getarrows("../../Events/03_0.php#jump","../../Events/03_0.php#jump");
#setlast("Bonus/1_The Troublesome Duo.php");
?>
</body>