
      <?php 
             if($_POST){
                  $to = "coachseeknz@gmail.com,samyin1990@gmail.com"; // this is your Email address
                  $from = $_POST['email']; // this is the sender's Email address
                  $firstname = $_POST['firstname'];
                  $business = $_POST['business'];
                  $sport = $_POST['sport'];
                  $phone = $_POST['phone'];
                  $subject = "watch the video from webinar page";
                  $subject2 = "Copy of your Demo request submission";
                  $message = $firstname . " from sport: ".$sport . " registered webinar," . "\n\n" . "Business name is: ". $_POST['business']."\n\n". "phone number is : ".$phone ."\n\n". " email address is : ". $from;
                  $message2 = "Here is a copy of your request " . $firstname . "\n\n" . $message;
                  $headers = "From:" . $from;
                  $headers2 = "From:" . $to;
                  mail($to,$subject,$message,$headers);
                  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                 
                }
              ?>