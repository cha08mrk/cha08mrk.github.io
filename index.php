<!DOCTYPE html>
<html>
    <head>
        <title>Matthew Killeen - Web Developer</title>
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script type='text/javascript' src='script.js'></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<!--        sending email-->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
            require 'PHPMailerAutoload.php';
            require 'smtp.php';
    
            $err = "";
            $name = $_POST["name"];
            $email = $_POST["email"];
            $telephone = $_POST["number"];
            $website = $_POST["website"];
            $message = $_POST["message"];

            $mail = new PHPMailer;

            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'matthewkilleen89@gmail.com';                 // SMTP username
            $mail->Password = 'winzip998';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            $mail->SMTPSecure = "ssl"; // sets the prefix to the servier

            $mail->setFrom('matthewkilleen89.com', $name);
            $mail->addAddress('matthewkilleen89@gmail.com', 'Joe User');     // Add a recipient

            $mail->Subject = 'Freelance Website';
            $mail->Body    = 'New message received. Details: <br><br>Name: '.$name.'<br><br>Email: '.$email.'<br><br>Telephone: '.$telephone.'<br><br>Website: '.$website.'<br><br>Message: '.$message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            //This has been tested and works! Don't bother spamming myself for now.
//            if(!$mail->send()) {
//                //echo 'Message could not be sent.';
//                //echo 'Mailer Error: ' . $mail->ErrorInfo;
//            } else {
//                //echo 'Message has been sent';
//            }
        }?>
    
    </head>
    
    <body>
        
        <div class="home-screen">
            <!--   left hand section      -->
            <div class="home-screen-section" id="home-screen-left">
                <div class="home-screen-container">                    
                    <ul class="home-navigation-list" id="nav-signature">
                        <li class="home-navigation-list-item" id="profile-pic">
                            <img class="home-profile-pic" src="Images/Icons/profile_pic.jpg">
                        </li>
                        <li class="home-navigation-list-item" id="signature-name">
                            <h2 class="signature">Matthew Killeen</h2>
                            <h2 class="signature">Freelance Developer</h2>
                        </li>
                        <li class="home-navigation-list-item" id="social-media">
                            <div class="social_media_container">
                                <div class="social_media__individual" id="twitter">
                                    <a href="https://twitter.com/Koppars/" target="_blank"><img class="social_media_image" src="Images/Icons/twitter.jpg" height="42" width="42"></a>
                                </div>
                                <div class="social_media__individual" id="instagram">
                                    <a href="https://www.instagram.com/kopparz" target="_blank"><img class="social_media_image" src="Images/Icons/instagram.jpg" height="42" width="42"></a>
                                </div>
                                <div class="social_media__individual" id="linked_in">
                                    <a href="https://www.linkedin.com/in/matthew-killeen-78708191?trk=nav_responsive_tab_profile" target="_blank"><img class="social_media_image" src="Images/Icons/linked_in.jpg" height="42" width="42"></a>
                                </div>
                            </div>                        
                        </li>
                    </ul>
                    
                    <ul class="home-navigation-list">
                        <li class="home-navigation-list-item">
                            <a class="home-navigation-link" id="portfolio-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="home-navigation-list-item">
                            <a class="home-navigation-link" id="contact-link" href="#contact">Contact</a>
                        </li>
                        <li class="home-navigation-list-item">    
                            <a class="home-navigation-link" id="about-link" href="#about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="home-screen-section" id="contact">
                <div class="contact_container">
                    <h1 class="title" id="contact-title">Get In Touch</h1>
                    <p class="contact-text">If you'd like to get in touch about a potential project please don't hesitate to contact me using the form below, or email me at: </p>
                    <h2 class="contact-email">matthewkilleen89@gmail.com</h2>
                </div>
            </div>
            
            <form id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <div class=form-container>
                    <input  class="form-entry" type="text" name="name" id="name" placeholder="Name*">
                    <input class="form-entry" type="text" name="email" id="email" placeholder="Email Address*">
                    <input class="form-entry" type="number" name="number" id="number" placeholder="Phone Number*">
                    <input class="form-entry" type="text" name="website" id="website" placeholder="Website">
                    <textarea class="form-text-entry" autofocustype="text" id="message" name="message" placeholder="Message"></textarea>
                    <input class="form-submit" type="submit" />
                </div>
            </form>
            
            <!--    About      -->
            <div class="home-screen-section" id="about">
                <h1 class="title hideme" id="about-title">About Me</h1>
                <div class="about-me-container">
                    <p class="about-me-text hideme">I am a freelance developer based in Sheffield, UK.  I have several years' experience working as a software developer in Leeds, working mainly with Java and SQL.  I am also working towards completing a PhD in computational modelling.  I am now a web developer, and am constantly enjoying learning new skills.  I am confident working with: </p>
                    <div class="skills-list-container hideme" id="left-skills">
                        <ul class="skills-list">
                            <li class="skills-list-item">
                                <h3 class="skills-list-item">HTML5</h3>
                                <h3 class="skills-list-item">CSS3</h3>
                                <h3 class="skills-list-item">Javascript</h3>
                                <h3 class="skills-list-item">PHP</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="skills-list-container hideme" id="right-skills">
                        <ul class="skills-list">
                            <li class="skills-list-item">
                                <h3 class="skills-list-item">SQL</h3>
                                <h3 class="skills-list-item">Java</h3>
                                <h3 class="skills-list-item">JSON</h3>
                                <h3 class="skills-list-item">XML</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="skills-container">
                        <div class="skills-section hideme" id="design">
                            <h3 class="skills-title">Design</h3>
                            <p>This is a paragraph about design. I can do it well. Some more things to say go here! More words and things about things that make this seem useful.</p>
                        </div>
                        <div class="skills-section hideme" id="development">
                            <h3 class="skills-title">Developmet</h3>
                            <p>This is a paragraph about development. I can do it well. Some more things to say go here! More words and things about things that make this seem useful</p>
                        </div>
                        <div class="skills-section hideme" id="seo">
                            <h3 class="skills-title">SEO</h3>
                            <p>Search engine optimisation is a powerful tool to help to drive the most possible traffic to your site.  I use industry standard techniques to provide organic SEO, meaning that you don't have to pay to have your site rank higher in search results.</p>
                        </div>
                        <div class="skills-section hideme" id="mobile">
                            <h3 class="skills-title">Responsive Web Design</h3>
                            <p>Due to the increasing use of mobile devices to access your content there is a greater importance than ever on having a responsive design. This means your site will work on all sizes of device. Check out the mobile version of this site for an example!</p>
                        </div>
                        <div class="skills-section hideme" id="ecommerece">
                            <h3 class="skills-title">eCommerce</h3>
                            <p>This is a paragraph about eCommerce. I can do it well. Some more things to say go here! More words and things about things that make this seem useful</p>
                        </div>
                        <div class="skills-section hideme" id="content-management">
                            <h3 class="skills-title">Content Management</h3>
                            <p>This is a paragraph about content management. I can do it well. Some more things to say go here! More words and things about things that make this seem useful</p>
                        </div>
                    </div>
                </div>                
            </div>
            
            <div class="footer">
                <div class="footer-signature-container">
                    <h2 class="footer-signature">Matthew Killeen <br>Freelance Developer</h2>
                    <h3 class="footer-signature">&copy 2016</h3>
                </div>
                <div class="footer-social_media_container">
                    <div class="footer-social-media-individual" id="twitter">
                        <a href="https://twitter.com/Koppars/" target="_blank"><img class="social_media_image" src="Images/Icons/twitter-inverse.jpg" height="42" width="42"></a>
                    </div>
                    <div class="social_media__individual" id="instagram">
                        <a href="https://www.instagram.com/kopparz" target="_blank"><img class="social_media_image" src="Images/Icons/instagram-inverse.jpg" height="42" width="42"></a>
                    </div>
                    <div class="social_media__individual" id="linked_in">
                        <a href="https://www.linkedin.com/in/matthew-killeen-78708191?trk=nav_responsive_tab_profile" target="_blank"><img class="social_media_image" src="Images/Icons/linked-in-inverse.jpg" height="42" width="42"></a>
                    </div>
                </div>   
            </div>
        </div>   
    </body>
</html>