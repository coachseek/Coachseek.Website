
      <?php 
             if($_POST){
                  $to = "coachseeknz@gmail.com,samyin1990@gmail.com,r3i1i0s4l9j4e9m4@coachseeknz.slack.com"; // this is your Email address
                  $from = $_POST['email']; // this is the sender's Email address
                  $firstname = $_POST['firstname'];
                  $business = $_POST['business'];
                  $lastname = $_POST['lastname'];
                  $phone = $_POST['phone'];
                  $subject = "request health check from ebook page";
                  $subject2 = "Copy of your health request request submission";
                  $message = $firstname . " ". $lastname ." from Business: ".$business . " request health check," . "\n\n" . "Business name is: ". $_POST['business']."\n\n". "phone number is : ".$phone ."\n\n". " email address is : ". $from;
                  $message2 = "Here is a copy of your request " . $firstname . "\n\n" . $message;
                  $headers = "From:" . $from;
                  $headers2 = "From: noreply@coachseek.com";
                  mail($to,$subject,$message,$headers);
                  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                 
                }
              ?>