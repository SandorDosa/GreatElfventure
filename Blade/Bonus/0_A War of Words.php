<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        A War of Words --t
    </title>
</head>
<h1>A War of Words</h1>

<p>Night has fallen on Fort Alfyr, but the training grounds are abuzz with activity. The training grounds are a large
    open area between the two barracks buildings lined with a sandy floor. In the middle of training grounds, Terje
    appears to have set up an improvised ring. The circle is lined with torches, illuminating the field in a flickering
    glow. On one end of the ring, Terje appears to have set up five chairs on a raised platform. The chairs are from the
    mess hall and the platform is made of milk crates, but it works. </p>
<p>[File truncated for development purposes]</p>
<p><span class="center">-FIN-</span></p>


<?php
        include '../footer.php';
        include '../../settarget.php';
        settarget("Blade",null,null,0);
        echo getarrows("../../Events/02_0.php#cont","../../Events/02_0.php#jump");
        #setlast("Bonus/0_A War of Words.php");
    ?>
</body>
</html>