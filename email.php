
      <?php 
             if($_POST){
                  $to = "coachseeknz@gmail.com,samyin1990@gmail.com,r3i1i0s4l9j4e9m4@coachseeknz.slack.com"; // this is your Email address
                  $from = $_POST['email']; // this is the sender's Email address
                  $firstname = $_POST['firstname'];
                  $business = $_POST['business'];
                  
                  
                  $subject = "watch the video from webinar page";
                  $subject2 = "Copy of your Demo request submission";
                  $message = $firstname . " from Business: ".$business . " registered webinar," . "\n\n" . "Business name is: ". $_POST['business']."\n\n". " email address is : ". $from;
                  $message2 = "Here is a copy of your request " . $firstname . "\n\n" . $message;
                  $headers = "From:" . $from;
                  $headers2 = "From: noreply@coachseek.com";
                  mail($to,$subject,$message,$headers);
                  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                 
                }
              ?>