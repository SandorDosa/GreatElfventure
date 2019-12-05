<?php
function getStringYear($year){
    if($year<10){
        $ys = '0'.$year;
    }else{
        $ys = $year;
    }
    return $ys;
}
function getArray($elf){
    $arr = array();
    switch($elf){
        case "Blade":
            $arr[0] = "Aspects";
            $arr[1] = "Factions";
            $arr[2] = "Skills and Stunts";
        break;
        case "River":
            $arr[0] = "Aspects";
            $arr[1] = "Factions";
            $arr[2] = "Skills and Stunts";
            $arr[3] = "A Measure of Hospitality";
        break;
    }
    return $arr;
}
function getBonus($elf,$sequence){
    if(is_null($sequence)){
        return null;
    }else{
        $list = '<ol>';
        $i = 0;
        $arr = getArray($elf);
        while($i<=$sequence){
            $list .= '<li><a href="'.$i.'_'.$elf.'.php">';
            $list .= $arr[$i];
            $list .= '</a></li>';
            $i ++;
        }
        $list .= '</ol>';
        return $list;
    }
}
?>