<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Winged Elf Year 2 - Summer
    </title>
</head>

<body>
    <h1>Year 2 - Summer</h1>
    <h2>Roleplay Event 2.0: <a href="../../Events/02_0.php">A New Year</a></h2>
    <p>placeholder</p>
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
    
    <?php
        include '../../settarget.php'; 
        settarget("Winged",6,null,null);
        include '../footer.php';
        echo getflapstory(null,"../Bonus/????.php");
        echo getarrows("01_4_Winged.php","02_2_Winged.php");
        setlast("Year/02_1_Winged.php");
    ?>
</body>
