<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        A Pair of Monsters
    </title>
</head>

<body>
<h1>A Pair of Monsters</h1>
<p>Terror hauls herself up the canyon wall. She’s thirty feet above the path, and climbing fast, aiming for an isolated
    ledge she spotted from well below.</p>
<p>[File truncated for development purposes]</p>

<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,8);
echo getarrows("../../Events/05_0.php#jump","../../Events/05_0.php#jump");
#setlast("Bonus/8_A Pair of Monsters.php");
?>
</body>
