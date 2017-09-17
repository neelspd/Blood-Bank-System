    <?php
    session_start();
    if(session_destroy())
    {
    header("Location: Login.html");
    }
   session_destroy();
	exit;
    ?>

