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
                  <form class="form-horizontal" name="theform" action="email.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputName2">To:</label>
                      <input type="text" name="to" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">From:</label>
                      <input type="email" name="from" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Subject:</label>
                      <input type="text" name="subject" class="form-control" id="exampleInputEmail2" placeholder="About the meeting">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Message:</label>
                     <textarea  class="form-control" name="message" rows=5 placeholder="Description"></textarea> 
                    </div>

                    <!-- <input type="hidden" class="form-control" id="exampleInputEmail2" name="reciver" value="azimjonkamolov@zohomail.com"> -->

                    <input type="submit" onclick="myFunction()" name="submit" Value="Send Message" class="btn btn-success">

                    
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

      