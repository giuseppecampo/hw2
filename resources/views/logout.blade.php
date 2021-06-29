<?php

    
    session_start();
    
    session_destroy();
    return redirect("login");
    exit;

?>