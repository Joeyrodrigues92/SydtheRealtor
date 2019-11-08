<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Sydnie L. Rodrigues</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- CSS-->
        <link rel="stylesheet" href="../assets/style/contact.css">
        <!-- Font-->
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id=outContainer>
            <!-- <div class="container"> -->
                <div class="row top">
                    <div class="col leftHeader">
                        <div id="sydName">
                            <h1 id="name">Sydnie L. Rodrigues</h1>
                            <p id="title">Real Estate Agent</p>
                        </div>
                    </div>
                    <div class="col rightHeader">
                        <div id="logoDiv">
                            <img class="logo"  src="../assets/images/remax.jpg">
                            <p id="logoText">New Millennium Group</p>
                        </div>
                    </div>  
                </div>
                <div style="border: solid 2px blue;" class="Wrap">
                    <div class="container">
                        <div class="row oneRow">
                           <!-- <div class="col">
                                <h2>Phone Number:</h2>
                                <h2>Email</h2>
                                <h2>Instagram</h2>
                           </div>
                            <div class="col">
                                <h2>Office Address</h2>
                                <h2>Office Number</h2>
                            </div> -->
                            <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>
                        </div>
                    </div>
                        <div class="row"></div>
                    </div>
                </div>
                <div id="footer">
                    <div id="rowOne" class="row">
                        <div class="col">
                        </div>
                        <div id="colList" class="col">
                            <div id="hrefList">
                                <h4 id="quickLinks">Quick Links</h4>
                                <ul>
                                    <li class="footerList" >Prefered Contacts</li>
                                    <li class="footerList" >Home Value</li>
                                    <li class="footerList" >Listings</li>
                                    <li class="footerList" >Contact</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div id="footerLogo">
                                <img class="logo footLogo" src="../assets/images/logoWhite.png">
                                <p style="margin-bottom: 0px;" id="logoTextFoot">New Millennium Group</p>
                                <p style="margin-bottom: 0px;" id="logoTextFoot">1042 N Broad St , Hillside, NJ 07205</p>
                                <p id="logoTextFoot">908.282.1234 </p>
                            </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div style="background-color:rgb(36, 89, 248);" class="row">
                        <div class="col">
                            <div id="socialIconDiv">
                                <img class="socialIcon" src="../assets/images/ig.png">
                                <img class="socialIcon" src="../assets/images/email.png">
                            </div>
                        </div> 
                    </div>
                </div>
            <!-- </div> -->
        </div>
        
        <script src="" async defer></script>
    </body>
</html>