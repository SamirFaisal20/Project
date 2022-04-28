<?php
    session_start();
    if(session_destroy())
    {
        header("location: ../view/deliveryman_login.php");
    }
?>