    <?php 
      $Path=$_SERVER['REQUEST_URI'];
      if($_POST){
        $to = "coachseeknz@gmail.com,samyin1990@gmail.com,r3i1i0s4l9j4e9m4@coachseeknz.slack.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $websitePackage = $_POST['websitepackage'];
        $phone = $_POST['phone'];
        $leavemessage = $_POST['leavemessage'];
        $subject = "website Request from ". $Path." page";
        $subject2 = "Copy of your website request submission";
        $message = $name . " request a website " . $websitePackage . " package " . "\n\n" . " name is: " . $_POST['name'] . "\n\n" . " email address is : " . $from . "\n\n" . " phone number is: " . $phone . "\n\n message is :  " . $leavemessage;
        $message2 = "Here is a copy of your request " . $name . "\n\n" . $message;
        $headers = "From:" . $from;
        $headers2 = "From: noreply@coachseek.com";
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      }
    ?>