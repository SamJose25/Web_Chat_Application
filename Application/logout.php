<?php

   
    session_start();
   
    // print_r($_SESSION);

    // session_unset();
    // alternative way to empty session data

    $_SESSION['id']    = "";

    session_destroy();

    echo "<script>location.href='CHAT_APPLICATION_Index.php';</script>";
?>
