<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Winged Elf Year 2 - Spring
    </title>
</head>

<body>
    <h1>Year 2 - Spring</h1>
    <table style="width:100%">
        <tr>
            <th>Stress</th>
            <td>Economic 0/5</td>
            <td>Morale 0/5</td>
            <td>Property 0/5</td>
            <td>Military 0/6</td>
        </tr>
        <tr>
            <th>Fate Points</th>
            <td>3/3 Refresh</td>
            <td>0 Bonus</td>
        </tr>
        
    </table>
    <p>placeholder</p>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military: </b>placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h2>Results</h2>
    <p><b>Economic:</b> placeholder</p>
    <p><b>Political:</b> placeholder</p>
    <p><b>Military:</b> placeholder</p>
    <p><b>Mental:</b> placeholder</p>
    <h3><a href="../../Events/03_0.php">The Elves Gather for Their Annual Potluck</a></h3>
    <?php
        include '../../settarget.php'; 
        settarget("Winged",9,null,null);
        if($_SESSION["YEAR"]<3){
            $_SESSION["YEAR"] = 3;
        }
        include '../footer.php';
        echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("02_3_Winged.php","03_1_Winged.php");
        setlast("Year/02_4_Winged.php");
    ?>
</body>
