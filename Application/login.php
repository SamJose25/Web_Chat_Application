<?php
    session_start();

    if(isset($_SESSION['id']))
    {
      echo "<script>location.href='Chat_Home.php'</script>";
    }
    else
    {
      echo "<script>location.href='CHAT_APPLICATION_INDEX.php'</script>";
    }
?>