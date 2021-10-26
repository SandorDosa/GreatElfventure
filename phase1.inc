<?php
# This include handles the entire table generation for when the crag elves are not in the list.

echo '<div class="w3-panel w3-dark-gray">'."\n";
    echo '<table class="w3-table w3-striped w3-grey" style="width:100%" id="special">'."\n";
        echo '<tr class="w3-black">'."\n"; // six columns
            echo '<th>Blade Elves</th>'."\n";
            echo '<th>Dark Elves</th>'."\n";
            echo '<th>Dreamdust Elves</th>'."\n";
            echo '<th>Fire Elves</th>'."\n";
            echo '<th>River Elves</th>'."\n";
            echo '<th>Winged Elves</th>'."\n";
        echo '</tr>'."\n";
        echo '<tr>'."\n";
            echo '<td>'.getList("Blade",$_SESSION["BLADE"]).'</td>'."\n";
            echo '<td>'.getList("Dark",$_SESSION["DARK"]).'</td>'."\n";
            echo '<td>'.getList("Dreamdust",$_SESSION["DREAMDUST"]).'</td>'."\n";
            echo '<td>'.getList("Fire",$_SESSION["FIRE"]).'</td>'."\n";
            echo '<td>'.getList("River",$_SESSION["RIVER"]).'</td>'."\n";
            echo '<td>'.getList("Winged",$_SESSION["WINGED"]).'</td>'."\n";
        echo '</tr>'."\n";

    include 'getPotlucks.php';
    echo getPotlucks($_SESSION["YEAR"]);

        echo '<tr>'."\n";
            echo '<td>'.getMeta("Blade",$_SESSION["B_META"]).'</td>'."\n";
            echo '<td>'.getMeta("Dark",$_SESSION["DA_META"]).'</td>'."\n";
            echo '<td>'.getMeta("Dreamdust",$_SESSION["DR_META"]).'</td>'."\n";
            echo '<td>'.getMeta("Fire",$_SESSION["F_META"]).'</td>'."\n";
            echo '<td>'.getMeta("River",$_SESSION["R_META"]).'</td>'."\n";
            echo '<td>'.getMeta("Winged",$_SESSION["W_META"]).'</td>'."\n";
        echo '</tr>'."\n";
        echo '<tr><td colspan="6">'."\n";
            echo '<h3>Bonus Documents></h3>'."\n";
        echo '</tr>'."\n";
        echo '<tr>'."\n";
            echo '<td>'.getBonus("Blade",$_SESSION["B_EXTRA"]).'</td>'."\n";
            echo '<td>'.getBonus("Dark",$_SESSION["DA_EXTRA"]).'</td>'."\n";
            echo '<td>'.getBonus("Dreamdust",$_SESSION["DR_EXTRA"]).'</td>'."\n";
            echo '<td>'.getBonus("Fire",$_SESSION["F_EXTRA"]).'</td>'."\n";
            echo '<td>'.getBonus("River",$_SESSION["R_EXTRA"]).'</td>'."\n";
            echo '<td>'.getBonus("Winged",$_SESSION["W_EXTRA"]).'</td>'."\n";
        echo '</tr>'."\n";
    echo '</table>'."\n";
    echo '<div class=\'w3-card w3-light-grey\'>'."\n";
        echo '<a href="Great Cookbook.php">Great Elfventure Great Cookbook</a>'."\n";
    echo '</div>'."\n";
echo '</div>'."\n";
