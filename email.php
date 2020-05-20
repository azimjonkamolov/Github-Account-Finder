<?php

    $results = mail('lampstack@yahoo.com', 'Test Subject', 'Test Discription', 'From: azimjon.6561@gmail.com');

    if($results)
    {
        echo "Done";
    }
    else
    {
        echo "No";
    }

?>