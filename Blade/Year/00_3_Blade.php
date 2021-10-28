<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Blade Elf Year 0 - Winter
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<p><i>This is a sample of what a turn generally looks like, using what the Blade Elves were up to when you first arrived
        at Fort Alfyr as an example. Of course, this may not be the exact format we use and things like dice rollers are
        still in the air, but this should give you an idea of what things are like. An actual turn would be more
        streamlined, but I am explaining it as I go.</i></p>
<h1>Year 0 - Winter</h1>
<p>[File truncated for development purposes]</p>


<?php
        include '../../settarget.php'; 
        settarget("Blade",0,0,null);
        include '../footer.php';
        echo getarrows(null,"00_4_Blade.php");
        setlast("Year/00_3_Blade.php");
    ?>
</body>
