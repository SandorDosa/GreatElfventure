<?php
#Generates navigation arrows to the desingated targets.
function getarrows($back,$next){
    $str = 'Current year: '.$_SESSION["YEAR"];
    $str .='<table id="nav"><tr>';
    if(!is_null($back)){
        $str .= '<td><a href="'.$back.'">BACK</a></td>';
    }
    $str .= '<td><a href="./index.php">Go home.</a></td>';
    if(!is_null($next)){
        $str .= '<td><a href="'.$next.'">NEXT</a></td>';
    }
    $str .= '</tr></table>';
    echo "<!-- settarget(".$elf.",".$tar.",".$mtar.",".$btar.") - $str -->\n";
    return $str;
}

#This is the order of the status string.
function elfOrd($ind){
    switch ($ind){
        case 0:
            return "YEAR";
        case 1:
            return "BLADE";
        case 2:
            return "CRAG";
        case 3:
            return "DARK";
        case 4:
            return "DREAMDUST";
        case 5:
            return "FIRE";
        case 6:
            return "RIVER";
        case 7:
            return "WINGED";
        case 8:
            return "B_EXTRA";
        case 9:
            return "C_EXTRA";
        case 10:
            return "DA_EXTRA";
        case 11:
            return "DR_EXTRA";
        case 12: 
            return "F_EXTRA";
        case 13:
            return "R_EXTRA";
        case 14:
            return "W_EXTRA";
        case 15:
            return "B_META";
        case 16:
            return "C_META";
        case 17:
            return "DA_META";
        case 18:
            return "DR_META";
        case 19: 
            return "F_META";
        case 20:
            return "R_META";
        case 21:
            return "W_META";
    }
    return null;
}

#Returns null if given a negative - this permits the status string to contain the null values of unset session variables.
function numfix($var){
    if(is_numeric($var)){
        if($var<0){
            return null;
        }else{
            return $var;
        }
    }else {
        return null;
    }
}

#Gets the current status of all session variables.
function getstatus(){
    $ret = "";
    $i = 0;
    while($i<22){
        if(is_null($_SESSION[elford($i)])){
            $ret .= "-1 ";
        }else{
            $ret.=$_SESSION[elford($i)]." ";
        }
        $i++;
    }
    return $ret;
}

#Sets the status of all session variables.
function setstatus($str){
    $arr = explode(" ",$str);
    $ind = 0;
    while ($ind<22){
        if(!is_null($arr[$ind])){
            if(!is_numeric($arr[$ind])){
                return 1;
            }
        }
        $ind++;
    }
    $ind = 0;
    while ($ind<22){
        $_SESSION[elford($ind)] = numfix($arr[$ind]);
        $ind++;
    }
    return null;
}

#Compares two status strings to see which is greater.
function statuscomp($s1,$s2){
    $arr1 = explode(" ",$s1);
    $arr2 = explode(" ",$s2);
    $ret = 0;
    $ind = 0;
    while ($ind<22){
        if(is_null($arr1[$ind])){
            $arr1[$ind] = -1;
        }
        $ind++;
    }
    $ind = 0;
    while ($ind<22){
        if(is_null($arr2[$ind])){
            $arr2[$ind] = -1;
        }
        $ind++;
    }
    $ind = 0;
    while ($ind<22){
             if($arr1[$ind]<$arr2[$ind]){
                $ret--;
            }else if($arr1[$ind]>$arr2[$ind]){
                $ret++;
             }
        $ind++;
    }
    return $ret;
}
# Function sets last narrative location
function setlast($curr){
    $_SESSION["LAST"] = $curr;
}
# Function returns to narrative from Meta.
function goback(){
    if(is_null($_SESSION["LAST"])){
        return null;
    } else{
        $ret = '<p><a href="../'.$_SESSION["LAST"].'">Return to whence you came</a></p>';
    }
    return $ret;
}


$status = getstatus();

echo "<!-- Begin debug -->\n";
echo "<!--\n" . print_r($_SESSION, TRUE) . "\n-->\n";
echo "<!---->\n";
echo "<!--\n" . print_r($status, TRUE) . "\n-->\n";
echo "<!-- End debug -->\n";
