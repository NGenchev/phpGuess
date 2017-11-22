<?php
$num = 696;
DEFINE("MIN", 1);
DEFINE("MAX", 1000);
function guess($x)
{
    global $num;
    if($x > $num) return -1;
    elseif($x < $num) return 1;
    else return 0;
}

    $num = $i;
    $result = 2;
    $x = MAX/2;
    $counter = 0;
    $range = array(1, 1000);
    while($result != 0)
    {
        $counter++;
        $result = guess($x);
        if($result == -1)
        {
            $range[1] = $x;
            $x = (int)(($range[0]+$range[1])/2);
            //echo "Counter $counter -1 - x = $x <BR>";
        }
        elseif($result == 1)
        {
            $range[0] = $x;
            $x = (int)(($range[0]+$range[1])/2);
            //echo "Counter $counter +1 - x = $x <BR>";
        }
        else break;
    }
    $counter--;
    echo "Guess number ($x) from $counter guess."; 
?>
