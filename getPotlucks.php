<?php
#This function builds the table row for potlucks, placing them under their correct host elf type.
function getPotlucks($year){
    $str = "<tr>";
    $ind = 1;
    $arr = array("");
    while ($ind <= $year){
        $arr[$ind] = 'Events/'.getStringYear($ind).'_0.php';
        $ind++;
    }
    #BLADE
    $str .= '<td>';
    if(!is_null($arr[1])){
        $str .= '<ul><li><a href="'.$arr[1].'">Year 1: Goodbye Potluck</a></li>'."\n";
    }
    if(!is_null($arr[2])){
        $str .= '<li><a href="'.$arr[2].'">Year 2: A New Year</a></li>'."\n";
    }
    if(!is_null($arr[7])){
        $str .= '<li><a href="'.$arr[7].'">Year 7: A Potluck Disassembled</a></li>'."\n";
    }
    if(!is_null($arr[10])){
        $str .= '<li><a href="'.$arr[10].'">Year 10: Placeholder Potluck</a></li>'."\n";
    }else{
        $str .= '</ul></td>'."\n";
    }
    #CRAG
    if($_SESSION["CRAG"]>0){
        $str .= '<td>';
        if(!is_null($arr[6])){
            $str .= '<ul><li><a href="'.$arr[6].'">Year 6: Precipitous Potluck</a></li></ul>'."\n";
        }
        $str .= '</td>'."\n";
    }
    #DARK
    $str .= '<td>';
    if(!is_null($arr[9])){
        $str .= '<ul><li><a href="'.$arr[9].'">Year 9: Placeholder Potluck</a></li>'."\n";
    }
    $str .= '</td>'."\n";
    #DREAMDUST
    $str .= '<td>';
    if(!is_null($arr[8])){
        $str .= '<ul><li><a href="'.$arr[8].'">Year 8: Placeholder Potluck</a></li>'."\n";
    }
    $str .= '</td>'."\n";
    #FIRE
    $str .= '<td>';
    if(!is_null($arr[3])){
        $str .= '<ul><li><a href="'.$arr[3].'">Year 3: Summer Potluck</a></li></ul>'."\n";
    }
    $str .= '</td>'."\n";
    #RIVER
    $str .= '<td>';
    if(!is_null($arr[4])){
        $str .= '<ul><li><a href="'.$arr[4].'">Year 4: A Peaceful Potluck</a></li></ul>'."\n";
    }
    $str .= '</td>'."\n";
    #WINGED
    $str .= '<td>';
    if(!is_null($arr[5])){
        $str .= '<ul><li><a href="'.$arr[5].'">Year 5: A Potluck with a View</a></li></ul>'."\n";
    }
    $str .= '</td>'."\n";
    ####
    $str .= "</tr>"."\n";
    return $str;
}