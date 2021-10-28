<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Crag Elf Factions
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<p> The concept of Factions is a curious one among the Crag. One might assume that their seperated Bloodlines would lead
    to factionalization, and to some degree this is true... but not in the same way most would think when speaking of
    factions. In truth, the closer consideration for that concept lies largely in how each individual Crag has handled
    the loss of the Tome, and what they see as the way forward for their people. For most, this is a personally held
    opinion; few would lower themselves to openly voice their concerns so.</p>
<p>[File truncated for development purposes]</p>
<?php
        include '../settarget.php'; 
        settarget("Crag",null,2,null);
        include 'footer.php';
        echo getarrows("0_Aspects.php","2_Stunts and Rituals.php");
        echo goback();
    ?>
</body>
</html>