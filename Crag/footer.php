<?php
echo 'Current year:', $_SESSION["YEAR"];
function getarrows($back,$next){
    $str ='<table style="width:100%"><tr>';
    if(!is_null($back)){
        $str .= '<td><a href="'.$back.'">BACK</a></td>';
    }
    $str .= '<td><a href="../../index.php">Go home.</a></td>';
    if(!is_null($next)){
        $str .= '<td><a href="'.$next.'">NEXT</a></td>';
    }
    $str .= '</tr></table>';
    return $str;
}
function setlast($curr){
    $_SESSION["LAST"] = 'Crag/'.$curr;
}
?>
