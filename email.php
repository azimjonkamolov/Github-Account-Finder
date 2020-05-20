<?php

    if(isset($_POST['submit']))
    {

        // $to = $_POST['to'];
        // $from = $_POST['from'];
        $to = "azimjonkamolov@zohomail.com";
        $from = "From: azimjon.6561@gmail.com";
        $subject = $_POST['subject'];
        $message = "<h1>" . $_POST['from'] . "</h1><br>";
        $message .= $_POST['message'];

        $results = mail($to, $subject, $message, $from);

        // $results = mail('$to', '$subject', '$message', '$from');

        if($results)
        {
            echo "Done";
        }
        else
        {
            echo "No";
        }

        echo $message;

    }

    

?>