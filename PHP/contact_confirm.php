<!DOCTYPE html>
<html>

<head>
 <!-- linking our .css file to our index page, so our webpage knows what style to use -->
 <link rel="stylesheet" type="text/css" href="style.css">

 <!-- Here is where we link Bootstrap 4 from MaxCDN -->
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- I created a 'heading' section to hold my links, picture, and basic information.  In many websites
    this is the same on every page -->
    <section class="heading">
        <div id="bio">

            <img id="myimg" src="images/mypic.jpg" alt="Profile Picture of Anthony Greenwood" height="200px">

            <div id="myinfo">
                Anthony Greenwood <br>
                4578 S. Clearview St. Holladay, UT, 84117 <br>
                (385)499-0190 <br>
                Anthony.Greenwood@utah.edu <br>
            </div>

            <!-- Links -->
            <div>
                <ul>
                    <li id="headlinks">
                        <a href="index.php">Home</a>
                    </li>

                    <li id="headlinks">
                        <a href="refpage.php">References</a>
                    </li>

                    <li id="headlinks">
                        <a href="contact_page.php">Contact</a>
                    </li>

                    <li id="headlinks">
                        <a href="files/Resume_AnthonyGreenwood2020.pdf">Download Resume PDF</a>
                    </li>

                    <li id="headlinks">
                        <a href="files/WebDevCapstoneRubric.pdf">Rubric</a>
                    </li>

                    <li id="headlinks">
                        <a href="https://www.linkedin.com/in/anthony-greenwood-09751058/">LinkedIn</a>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!-- I created a 'content' section to hold all the information for this page. This is where the stuff unique
    to each page in a website is usually kept -->
    <section class = "content">
        
        <?php 
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $visitor_phone = $_POST['phone'];
        $message = $_POST['message'];

        $email_from = "donotreply@anthony.slccwebdev.com";
        $email_subject = "New Form submission";
        $email_body = "You have received a new message from the user " . $name . 
                        "\r\n Visitor's Email: " . $visitor_email .  
                        "\r\n Visitor's Phone: " . $visitor_phone .          
                        "\r\n Visitor's Message: \r\n " . $message;

        $to = "anthony.greenwood@utah.edu";
        $headers = "From: $email_from \r\n";

        $sent1 = mail($to, $email_subject, $email_body, $headers);

        $confirmation_subject = "Thanks for contacting us";
        $confirmation_body = "Hello $name,\n". 
            "Thank you for contacting us, we will be in touch shortly. Do not reply to this email.";
            
        $sent2 = mail($visitor_email, $confirmation_subject, $confirmation_body, $headers);
           

        echo "submission message status: " . $sent1;
        echo "<br> confirmation message status" . $sent2;
        ?>

    <p>Thank you for your contact submission, I will respond as soon as possible.</p>
    </section>

</body>

</html>