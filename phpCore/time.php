<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
$placeThing = 1601424000;

                   // 7 days; 24 hours; 60 mins; 60 secs
echo 'Now:       '. date('Y-m-d')  ."<br>"."</br>"; 
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."<br>"."</br>";
// or using strtotime():
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."<br>"."</br>";
echo 'till then: '. date('Y-m-d', $nextWeek - date('Y-m-d') - $placeThing) ."<br>"."</br>";

function time_elapsed_A($secs){
    $bit = array(
        'y' => $secs / 31556926 % 12,
        'w' => $secs / 604800 % 52,
        'd' => $secs / 86400 % 7,
        'h' => $secs / 3600 % 24,
        'm' => $secs / 60 % 60,
        's' => $secs % 60
        );
       
    foreach($bit as $k => $v)
        if($v > 0)$ret[] = $v . $k;
       
    return join(' ', $ret);
    }
    $oldtime = 1601424000;
    echo "time_elapsed_A: ".time_elapsed_A($oldtime - time())."\n";
?>