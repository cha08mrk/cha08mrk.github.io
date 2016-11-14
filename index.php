<!DOCTYPE html>
<html>
    <head>
        <title>Matthew Killeen - Web Developer</title>
        
        <link rel="stylesheet" media="only screen and (max-width : 761px)" href="small.css">
        <link rel="stylesheet" media="only screen and (min-width : 760px)" href="medium.css">
        
<!--        <link rel="stylesheet" href="main.css">-->
        
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
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
            
            <div class="homepage-hero-module">
                <video autoplay loop class="fillWidth">
                    <source src="Videos/MP4/White-Keyboard.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
<!--                        <source src="Videos/WEBM/White-Keyboard.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.-->
                </video>
            </div>
            
            <!--landing page-->
            <div class="landing-page" id="landing-page">
                <div class="landing-page-content" >
                    <h1 class="landing-page-title">Matthew Killeen</h1>
                    <h2 class="landing-page-title" id="second">Freelance Web Developer and Web Designer</h2>
                    <div class="landing-page-links">
                        <a class="landing-page-link"  id="landing-page-read-more" href="#about">Read more</a>
                        <a class="landing-page-link" id="landing-page-together" href="#contact">Let's work together</a>
                    </div>
                </div>
            </div>
            
            <!--navigation bar-->
            <div class="home-screen-section" id="home-screen-left">
                <div class="home-screen-container">                    
                    <ul class="home-navigation-list" id="nav-signature">
                        <li class="home-navigation-list-item" id="profile-pic">
                            <a href="#landing-page">
                                <img class="home-profile-pic" src="Images/Icons/profile_pic.jpg">
                            </a>
                        </li>
                        <li class="home-navigation-list-item" id="signature-name">
                            <h2 class="signature">Matthew Killeen</h2>
                            <h2 class="signature" id="second-line">Freelance Developer</h2>
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
                    
                    <ul class="home-navigation-list" id="bottom">
                        <li class="home-navigation-list-item-links">
                            <a class="home-navigation-link" id="portfolio-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="home-navigation-list-item-links">
                            <a class="home-navigation-link" id="contact-link" href="#contact">Contact</a>
                        </li>
                        <li class="home-navigation-list-item-links">    
                            <a class="home-navigation-link" id="about-link" href="#about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!--Portfolio-->
            <div class="home-screen-section" id="portfolio">
                <h1 class="title" id="portfolio-title">Portfolio</h1>
                <div class="portfolio-image-row">
                    <img class="portfolio-image-large glow" src="Images/Portfolio/cup-of-coffee-1280537.jpg">
                    <img class="portfolio-image-large glow" src="Images/Portfolio/background.jpg">
                </div>
                <div class="portfolio-image-row">
                    <img class="portfolio-image-large glow" src="Images/Portfolio/background.jpg">
                    <img class="portfolio-image-large glow" src="Images/Portfolio/cup-of-coffee-1280537.jpg">                    
                </div>
            </div>
            
            <!--Contact-->
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
                    <input class="form-entry" type="number" name="number" id="number" placeholder="Number*">
                    <input class="form-entry" type="text" name="website" id="website" placeholder="Website">
                    <textarea class="form-text-entry" autofocustype="text" id="message" name="message" placeholder="Message*"></textarea>
                    <input class="form-submit" type="submit" />
                </div>
            </form>
            
            <!--About-->
            <div class="home-screen-section" id="about">
                <h1 class="title hideme" id="about-title">About Me</h1>
                <div class="about-me-container">
                    <p class="about-me-text hideme">I am a freelance developer based in Sheffield, UK.  I have been working in software since graduating in 2012. I initially worked as a software engineer in Leeds, working mainly with Java and SQL.  I am also working towards completing a PhD in computational modelling, and am now a web developer.  I am constantly enjoying learning new skills, and I am confident working with: </p>
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
                            <p>Your website is uniquely designed to make your idea a reality. I create each site individually to match your needs, making it original, maintanable and scalable.</p>
                        </div>
                        <div class="skills-section hideme" id="development">
                            <h3 class="skills-title">Development</h3>
                            <p>I develop custom sites to give a great user experience.  It will be efficient and engaging, and will be tested across a whole range of devices and browsers to give the best possible interface. </p>
                        </div>
                        <div class="skills-section hideme" id="seo">
                            <h3 class="skills-title">SEO</h3>
                            <p>Search engine optimisation is a powerful tool to help to drive the most possible traffic to your site.  I use industry standard techniques to provide organic SEO, meaning that you don't have to pay extra to have your site rank higher in search results.</p>
                        </div>
                        <div class="skills-section hideme" id="mobile">
                            <h3 class="skills-title">Responsive Web Design</h3>
                            <p>Due to the increasing use of mobile devices to access your content there is a greater importance than ever on having a responsive design. This means your site will respond in order to work on all sizes of device. Check out the mobile version of this site for an example!</p>
                        </div>
                        <div class="skills-section hideme" id="ecommerece">
                            <h3 class="skills-title">eCommerce</h3>
                            <p>This is a paragraph about eCommerce. I can do it well. Some more things to say go here! More words and things about things that make this seem useful</p>
                        </div>
                        <div class="skills-section hideme" id="content-management">
                            <h3 class="skills-title">Content Management</h3>
                            <p>This is a paragraph about content management. I can do it well. Some more things to say go here! More words and things about things that make this seem useful</p>
                        </div>
                      <div class="skills-section hideme" id="advice">
                            <h3 class="skills-title">Advice</h3>
                            <p>I also offer advice on all kinds of services, such as hosting, domain names, spellchecking and copywriting.  If you have any questions, don't hesitate to ask.</p>
                        </div>
                      <div class="skills-section hideme" id="rate">
                            <h3 class="skills-title">Rates</h3>
                            <p>Whilst I am building up my client base, I am currently offering very competitive rates for my work.  In my free time, I also work pro-bono helping to build and maintain an internet presence for charitable organisations.</p>
                        </div>
                    </div>
                </div>                
            </div>
            
            <!--Footer-->
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