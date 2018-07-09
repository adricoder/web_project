<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ATOH Newsletter Form</title>
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div id="newsletterform">
            <div class="wrap">
                <h3>Get Email Update</h3>
                <p>Subscribe to out Newsletter</p>
                <form action="send.php" method="post" id="newsletter" name="newsletter">
                    <input type="email" name="signup-email" id="signup-email" value="" placeholder="Insert email here" />
                    <input type="submit" value="Subscribe" name="signup-button" id="signup-button">
                    <span class="arrow"></span>
                </form>
                <div id="response"></div>
            </div>
        </div>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/lib.js"></script>
    </body>
</html>