<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        A Broken Promise
    </title>
</head>

<body>
<h1>A Broken Promise</h1>
<p>Breaker is in serious danger. She's currently sitting less than twenty feet from the biggest bomb she's ever seen and
    trying to hide her intentions from the biggest sociopath she's ever met. Coyote is standing next to her, raising a
    glass of fine wine in honor of their brave hero Breaker, who fought the fire elf leader one on one in order to
    secure the prize. The banquet has been going long into the evening, and a few casks have been taken out of the
    horse. Her heart stops beating every time.</p>
<p>[File truncated for development purposes]</p>
</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,5);
#echo getarrows("../../Events/03_0.php#jump","../../Events/03_0.php#jump");
echo goback();
?>
</body>