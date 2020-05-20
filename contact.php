<?php

  if(isset($_POST['submit']))
  {

    $to      = 'azimjon.6561@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@yourdomain.com' . "\r\n" .
       'Reply-To: webmaster@yourdomain.com';
    
    mail($to, $subject, $message, $headers);

      // $sender = "name of sender: " . $_POST['sender'];
      // $sender .= "email of sender: " . $_POST['email'];
      // $subject = "subject of sender" . $_POST['subject'];
      // $message = "message of sender" . $_POST['message'];
      // $headers = $sender;
      // $reciver = $_POST['reciver'];
      // $to = $reciver;
      // $body = $message;

      // $mailsent = mail($to, $subject, $body, $headers);

      // echo $mailsent;
?>

    
    <?php
      // if($mailsent)
      // {
    ?>
      <!-- <script>
        function myFunction() {
          alert("Thank you for contacting us!");
        }
      </script> -->
    <?php
      // }
      // else
      // {
    ?>
      <!-- <script>
        function myFunction() {
          alert("Message sending failed Sorry!");
        }
      </script> -->
    <?php
      // }
    ?>

<?php

  }

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <h2>Contact Us</h2>
              <p>Feel free to shout us by feeling the contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal" name="theform" action="" method="post">
                    <div class="form-group">
                      <label for="exampleInputName2">Name</label>
                      <input type="text" name="sender" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Subject</label>
                      <input type="text" name="subject" class="form-control" id="exampleInputEmail2" placeholder="About the meeting">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Your Message</label>
                     <textarea  class="form-control" name="message" rows=5 placeholder="Description"></textarea> 
                    </div>
                    <input type="submit" onclick="myFunction()" name="submit" Value="Send Message" class="btn btn-success">

                    <input type="hidden" class="form-control" id="exampleInputEmail2" name="reciver" value="azimjonkamolov@zohomail.com">
                  </form>

                  <!-- <button onclick="myFunction()">Try it</button> -->

                  <hr>
                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                  </ul>

                  <br><br>
                  <a href="index.html" class="btn btn-default">Back to the main page</a>
                </div>
              </div>
            </div>
        </div>
      </section>

      