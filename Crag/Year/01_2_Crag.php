<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
<body>

<h2>Fall, Year 1</h2>
<p>[File truncated for development purposes]</p>

<h3 id="jump">Roleplay Event 01.2: <a href="../Bonus/0_A Seeker to Eschaton.php"
                                      alt="linked here because unreadable gibberish above.">A Seeker to Eschaton</a>
</h3>

<?php
    include '../../settarget.php'; 
    settarget("Crag",3,0,0);
    include '../footer.php';
    echo getarrows("01_1_Crag.php","01_3_Crag.php");
    setlast("Year/01_2_Crag.php");
    ?>
</body>
