<?PHP session_start(); 
session_start();
if(!$_SESSION['logged']) { 
    header("Location: ../"); 
    exit;
}
?>
<!doctype html>
<html class="home-bg">
    <head>
        <title>PunchCard - Help</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link rel="stylesheet" href="../css/vallenato.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../css/buttons.css" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Orbitron:900' rel='stylesheet' type='text/css'>
        <link href="../skdslider/skdslider.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script src="../src/vallenato.js" type="text/javascript"></script>
        <script src="../src/jquery-ui.min.js"></script>
        <script src="../skdslider/skdslider.js"></script>
        <script src="../src/init.js"></script>
    </head>
    <body>
        <?PHP include '../php/navigation.php' ?>
        <div id="content">
            <div class="skdslider">
                <div id="mobile-button">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="slider-shadow"></div>
                <div class="header"><br><br>
                    <h1>PunchCard</h1>
                    <p>The automated timesheet management system</p>
                </div>
                <ul id="slider" class="slides">
                    <li>
                        <img src="../res/slide3.jpg" />
                    </li>
                    <li>
                        <img src="../res/slide4.jpg" />
                        <div class="header">
                        </div>
                    </li>
                    <li>
                        <img src="../res/slide5.jpg" />
                        <div class="header">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="section help">
                <h1>Help</h1>
                <hr>
                <p>
                    To use PunchCard, log in with your registered email address and password that you created. You will be taken to the home page where most of your actions will be done. Simply click "Punch In" when you arrive at work and your clock will start. When you are ready to leave work, log in and click "Punch Out." Your entire shift will be recorded and a report can be generated as you see fit. That's it! Your hectic schedule is recorded with just the click of a button. No more remembering what times you worked; PunchCard has your back!
                </p>
                
                <h3>Frequently Asked Questions</h3>
                <p>
                    Listed below are some frequently asked questions (FAQs) about PunchCard.
If you are unable to find an answer for your question, please visit the Help or About
pages for further information about the application and how to contact us.
                </p>
                <div id="accordion-container"> 
                    <h2 class="accordion-header">
                        How can I get a login to use PunchCard?
                    </h2> 
                    <div class="accordion-content"> 
                        <p>
                            Your supervisor must request an account to be made for you. Once a request has been
received, you will receive an e-mail on how to set your password and finish setting up
your personal account.
                        </p> 
                    </div>
                    <h2 class="accordion-header">
                        I work unusual hours and PunchCard won't let me log the time. What do I do?
                    </h2> 
                    <div class="accordion-content"> 
                        <p>
                            PunchCard is designed to operate within usual business hours. This helps enforce
honesty when logging hours. However, upon request, your specific account can be
allowed to punch in/out during odd hours of the day. In order to enable this feature, 
have your supervisor contact the team through the Help page.
                        </p> 
                    </div>
                    <h2 class="accordion-header">
                        I forgot to punch out. Now what?
                    </h2> 
                    <div class="accordion-content"> 
                        <p>
                            Don't worry. Everyone makes mistakes. PunchCard allows for manual adjustment of
hours from a supervisor or system administrator. In order to accurately reflect
your hours after forgetting to log out, please contact your supervisor.
                        </p> 
                    </div>
                    <h2 class="accordion-header">
                        How does my supervisor see my hours?
                    </h2> 
                    <div class="accordion-content"> 
                        <p>
                            At the end of a payment period, your supervisor is notified through an e-mail.
The e-mail reminds them to approve your hours through a digital 
signature, similar to the current process. The supervisor can log into 
their profile, view your hours, and approve them to move on in the work flow. 
The work flow remains the same, but allows for faster access for everyone.
                        </p> 
                    </div>
                    <h2 class="accordion-header">
                        I'm not always by a desktop computer. Can I log my hours anyway?
                    </h2> 
                    <div class="accordion-content"> 
                        <p>
                            Absolutely! All that PunchCard requires is Internet access. Special formatting 
has been applied to the website so you are able to view PunchCard on laptops, 
tablets, and several models of smartphones. This allows for mobility and some 
flexibility for the various jobs that students fulfill.
                        </p> 
                    </div>
                </div>
                <br><br>
                <h2 class="contact"><i class="fa fa-envelope"></i> Contact <a href="mailto:support@punchcard.cf">support@punchcard.cf</a> for help with PunchCard</h2>
            </div>
        </div>
        <div id="footer">
            &copy; 2014 - Arnaud Crowther, Amanda Labelle, Eric Maul, Alex Osbourn
        </div>
        <div id="liveDay" class="hidden"></div>
        <h3 id="liveTime" class="hidden"></h3>
    </body>
</html>