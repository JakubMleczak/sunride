<?php

if ($status == 'complete'){
    
    include('currentprojects/agendaC.php');
    
} elseif ($status == 'progress'){
    
    include('currentprojects/agendaP.php');
    
} else {
    
    include('currentprojects/agendaN.php');
    
}

?>