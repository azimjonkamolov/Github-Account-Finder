<?php

    if(isset($_POST['submit']))
    {

        // $to = $_POST['to'];
        // $from = $_POST['from'];
        $to = "reciversemail@email.com";
        $from = "From: sendersemail@gmail.com"; // IN LOCALHOST ONLY REGISTERED PERSONS EMAIL CAN BE HERE
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