<?php session_start(); ?>
<!DOCTYPE html>

<head><?php include '../../header.php'; ?>
    <title>
        A Wild Ride
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>A Wild Ride</h1>
    <p>placeholder</p>
    <p class="center">-FIN-</p>
    <?php 
        include '../footer.php';
        echo getarrows("../Year/04_4_River.php#back","16_A Surtian Confusion.php");
        setlast("Bonus/15_A Wild Ride.php");
    ?>
</body>
</html>
