<?php 
    session_start(); 
    include '../firstcontact.php';
?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        The Potluck
    </title>
</head>

<body>
<p>Dusk has fallen on Fort Álfyr. The fort is abuzz with activity. The great potluck, for the past few hours, has been a
    great success. The subtle tension that has been running through the fort for the last few months has faded away.
    People are relaxed, smiling, chatting with each other. Caravans have been loaded, bags have been packed, the animals
    have been fed. The months of being stuck in too small a space are finally over. Friends from different groups of
    elves are saying goodbye. Enemies are avoiding each other. Any and all food that can’t be packed for transport is
    being cooked or otherwise prepared and eaten. You have been with your people for most of the evening, but have a
    formal invitation to a dinner for just a handful of the leaders of the various groups.</p>
<p>[File truncated for development purposes]</p>

<?php
        if(is_null($_SESSION["YEAR"]) or $_SESSION["YEAR"]<=1){
            $_SESSION["YEAR"] = 1;
            $_SESSION["BLADE"] = 1;
            $_SESSION["DARK"] = 1;
            $_SESSION["DREAMDUST"] = 1;
            $_SESSION["FIRE"] = 1;
            $_SESSION["RIVER"] = 1;
            $_SESSION["WINGED"] = 1;
        }
        include '../footer.php';
        echo getarrows(null,null);
        echo goback();
        setlast("Events/01_0.php");
    ?>
</body>
</html>
