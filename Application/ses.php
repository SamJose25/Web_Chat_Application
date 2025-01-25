<?php
    
    session_start();
    session_destroy();
    echo "<br>".$_SESSION['id'] ;
    echo "<br>".$_SESSION['email'];
?>