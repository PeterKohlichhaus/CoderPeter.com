<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="noindex" name="robots"/>
        <meta content="Coder Peter is a portfolio website showcasing projects and web development skills by Peter Köhlichhaus." name="description"/>
        <!-- Open Graph -->
        <meta content="1285372951535365" property="fb:app_id"/>
        <meta content="en_US" property="og:locale"/>
        <meta content="sv_SE" property="og:locale:alternate"/>
        <meta content="website" property="og:type"/>
        <meta content="Coder Peter" property="og:title"/>
        <meta content="Coder Peter is a portfolio website showcasing projects and web development skills by Peter Köhlichhaus." property="og:description"/>
        <meta content="https://coderpeter.com/" property="og:url"/>
        <meta content="Coder Peter" property="og:site_name"/>
        <meta content="https://coderpeter.com/images/fb-preview.png" property="og:image"/>
        <meta content="1200" property="og:image:width"/>
        <meta content="630" property="og:image:height"/>
        <!-- Twitter -->
        <meta content="summary" name="twitter:card"/>
        <meta content="Coder Peter is a portfolio website showcasing projects and web development skills by Peter Köhlichhaus." name="twitter:description"/>
        <meta content="Coder Peter" name="twitter:title"/>
        <meta content="@coderpeter" name="twitter:site"/>
        <title>
            Coder Peter
        </title>
        <link href="https://coderpeter.com" rel="canonical"/>
        <link href="https://coderpeter.com" hreflang="en-us" rel="alternate"/>
        <style type="text/css"><?php echo file_get_contents('critical.css');?></style>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet"/>
        <!-- Animate.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- My styles -->
        <link href="/stylesheets/style.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap social -->
        <link href="/stylesheets/bootstrap-social.css" rel="stylesheet" type="text/css"/>

        <!-- Schema.org -->
        <script type="application/ld+json">
            {
          "@context": "http://www.schema.org",
          "@type": "person",
          "name": "Peter Köhlichhaus",
          "jobTitle": "Fullstack web developer",
          "url": "https://coderpeter.com",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Söderljungsgatan 8",
            "addressLocality": "Borås",
            "addressRegion": "Västra Götaland",
            "postalCode": "50762",
            "addressCountry": "Sweden"
          },
          "email": "info@coderpeter.com",
          "telephone": "+46728501682",
          "birthDate": "1994-06-05"
        }
        </script>
    </head>
    <body>
        <!--         <a class="skip-to-main" href="#maincontent">
            Skip to main content
        </a> -->

        <?php
//     //bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )
//     $headers = 'From: Coder Peter <info@coderpeter.com>' . "\r\n" .
// 'Reply-To: info@coderpeter.com' . "\r\n" .
// 'X-Mailer: PHP/' . phpversion();
//         mail('peter.kohlichhaus@gmail.com', 'heheee', 'hello', $headers,  '-f info@coderpeter.com');

/*

require 'phpmailer/vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.gandi.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@coderpeter.com';                 // SMTP username
$mail->Password = 't3h_FISH';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('info@coderpeter.com', 'Coder Peter');
$mail->addAddress('peter.kohlichhaus@gmail.com', 'Peter Köhlichhaus');     // Add a recipient
#$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@coderpeter.com', 'Coder Peter');
#$mail->addCC('cc@example.com');
#$mail->addBCC('bcc@example.com');

#$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
#$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent';
}*/

?>
        <header class="header page-header">
            <div class="header__text">
                <div class="container">
                    <h1>
                        Hi, I'm Peter Köhlichhaus
                        <span class="header__occupation">
                            Fullstack web developer
                        </span>
                    </h1>
                    <p class="header__about">
                        I'm a young geek from Borås, Sweden who enjoys computers, music and video games.
                    Coding is my passion and I take pride in creating beautiful and professional websites that are intuitive for the user. By writing clean, modularized code that is shared through Git, I make it easy for other developers to modify my code. I will continue to learn even more about coding, to make sure the right tools and techniques are optimal for each project.
                    </p>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="process">
                <div class="process__container">
                    <div class="process__content row">
                        <div class="process__icon-wrapper col-sm-4 text-center">
                            <i class="process__icon ion-code">
                            </i>
                        </div>
                        <article class="process__text col-sm-8">
                            <h3 class="process__title">
                                Code
                            </h3>
                            <p class="process__description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non odio elementum, porta sem a, suscipit orci. Morbi suscipit eros tellus, in consequat ante consequat sed. Nulla in massa erat. Nunc sed cursus nulla. Etiam tristique luctus ultrices. Quisque maximus.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
            <hr class="process-seperator"/>
            <div class="process">
                <div class="process__container">
                    <div class="process__content row">
                        <div class="process__icon-wrapper col-sm-4 col-sm-push-8 text-center">
                            <i class="process__icon ion-university">
                            </i>
                        </div>
                        <article class="process__text col-sm-8 col-sm-pull-4">
                            <h3 class="process__title">
                                Knowledge
                            </h3>
                            <p class="process__description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non odio elementum, porta sem a, suscipit orci. Morbi suscipit eros tellus, in consequat ante consequat sed. Nulla in massa erat. Nunc sed cursus nulla. Etiam tristique luctus ultrices. Quisque maximus.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
            <hr class="process-seperator"/>
            <div class="process">
                <div class="process__container">
                    <div class="process__content row">
                        <div class="process__icon-wrapper col-sm-4 text-center">
                            <i class="process__icon ion-ios-flask">
                            </i>
                        </div>
                        <article class="process__text col-sm-8">
                            <h3 class="process__title">
                                Research
                            </h3>
                            <div class="process__description-wrapper">
                                <p class="process__description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non odio elementum, porta sem a, suscipit orci. Morbi suscipit eros tellus, in consequat ante consequat sed. Nulla in massa erat. Nunc sed cursus nulla. Etiam tristique luctus ultrices. Quisque maximus.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <hr class="process-seperator"/>
            <div class="process">
                <div class="process__container">
                    <div class="process__content row">
                        <div class="process__icon-wrapper col-sm-4 col-sm-push-8 text-center">
                            <i class="process__icon ion-paintbrush">
                            </i>
                        </div>
                        <article class="process__text col-sm-8 col-sm-pull-4">
                            <h3 class="process__title">
                                Design
                            </h3>
                            <p class="process__description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non odio elementum, porta sem a, suscipit orci. Morbi suscipit eros tellus, in consequat ante consequat sed. Nulla in massa erat. Nunc sed cursus nulla. Etiam tristique luctus ultrices. Quisque maximus.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h2 class="contact__title">
                            Contact
                        </h2>
                        <p class="contact__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non odio elementum, porta sem a, suscipit orci.
                        </p>
                    </div>
                    <div class="col-sm-5 contact__form-wrapper">
                        <form class="contact__form">
                            <input class="contact__input form-control" name="name" placeholder="Name" type="text"/>
                            <input class="contact__input form-control" name="email" placeholder="Email" type="email"/>
                            <textarea class="contact__input contact__input--textarea form-control" name="message" placeholder="Message">
                            </textarea>
                            <button class="contact__input contact__input--button btn" type="submit">
                                Send
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <address class="col-sm-9" style="margin-bottom: 0;">
                                <ul style="padding: 0 15px; margin-bottom: 0; width: 280px;">
                                    <li class="contact__info-row row">
                                        <p class="contact__label col-xs-5">
                                            EMAIL
                                        </p>
                                        <p class="contact__info col-xs-7">
                                            info@coderpeter.com
                                        </p>
                                    </li>
                                    <li class="contact__info-row row">
                                        <p class="contact__label col-xs-5">
                                            PHONE
                                        </p>
                                        <p class="contact__info col-xs-7">
                                            +46.123.123.123
                                        </p>
                                    </li>
                                    <li class="contact__info-row row">
                                        <p class="contact__label col-xs-5">
                                            LOCATION
                                        </p>
                                        <p class="contact__info col-xs-7">
                                            Borås, Sweden
                                        </p>
                                    </li>
                                </ul>
                            </address>
                            <div class="row">
                                 <ul class="contact__social col-sm-3">
                                    <li class="col-sm-4">
                                        <a class="btn btn-social-icon btn-md btn-twitter">
                                            <span class="fa fa-twitter">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a class="btn btn-social-icon btn-md btn-facebook">
                                            <span class="fa fa-facebook">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a class="btn btn-social-icon btn-md btn-github">
                                            <span class="fa fa-github">
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Defer Javascript -->
        <script type="text/javascript">
            function downloadJSAtOnload() {
                var element = document.createElement("script");
                element.src = "javascripts/defer.js";
                document.body.appendChild(element);
            }
            if (window.addEventListener)
                window.addEventListener("load", downloadJSAtOnload, false);
            else if (window.attachEvent)
                window.attachEvent("onload", downloadJSAtOnload);
            else window.onload = downloadJSAtOnload;
        </script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
    </body>
</html>
