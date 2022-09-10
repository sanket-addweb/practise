<?php
session_start();

if(isset($_SESSION['count_page'])){
    $_SESSION['count_page']+=1;
    echo 'You are visited this page '.$_SESSION['count_page'].' times.';
}
else{
    $_SESSION['count_page']=1;
    
}

?>