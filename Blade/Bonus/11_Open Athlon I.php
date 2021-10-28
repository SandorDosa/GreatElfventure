<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Open Athlon I
    </title>
</head>

<body>
<h1>Open Athlon I</h1>
<p>The Athlon! By longstanding tradition, held every twenty years, it is an event where all Crag, regardless of origin,
    bloodline, or specialty, may come together to demonstrate their prowess through numerous competitions and trials.
    The only Crag who may not participate are the Named, those Crag whose actions and accomplishments have marked them
    as the physical embodiment of one of the great virtues of their people. This is because the Athlon is meant to
    demonstrate the capabilities of the common Crag; It is a celebration, not of individual achievement, but rather a
    demonstration to all of how far the Crag have progressed along their Path, an inspirational event to remind all who
    observe of what the Crag can hope to achieve in the quest for Perfection. Although, of course, those who excel at
    the trials cannot but help to gain the attention of those who observe them....</p>
<p>[File truncated for development purposes]</p>

<p class="center"><a href="#top">-FIN-</a></p>
<hr/>


<?php
    include "../footer.php";
    include '../../settarget.php';
    settarget("Blade",null,null,11);
    echo getarrows("9_Bits and Pieces.php","../../Events/06_0.php#jump");
    #setlast("Bonus/11_Open Athlon I.php");
    ?>
</body>