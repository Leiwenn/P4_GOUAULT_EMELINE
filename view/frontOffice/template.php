<!DOCTYPE html>
<html lang="fr">
    <head>
        <script type="text/javascript" src="public/tarteaucitron/tarteaucitron.js"></script>
        <script type="text/javascript">
            tarteaucitron.init({
                "privacyUrl": "", /* Privacy policy url => A REDIGER cf .txt */
                "hashtag": "#tarteaucitron",
                "cookieName": "tarteaucitron", /* Cookie name */
                "orientation": "middle",
                "showAlertSmall": true,
                "cookieslist": true,
                "adblocker": false,
                "DenyAllCta" : true,
                "AcceptAllCta" : true,
                "highPrivacy": true,
                "handleBrowserDNTRequest": false,
                "removeCredit": false,
                "moreInfoLink": true,
                "useExternalCss": false,
                "readmoreLink": "/cookiespolicy", /* Change the default readmore link pointing to tarteaucitron.io */
                "mandatory": false
            });
            (tarteaucitron.job = tarteaucitron.job || []).push('facebook');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f2c3a49501.js"></script>
        <link rel="stylesheet" type="text/css" href="public/css/styleFrontOffice.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <title> <?= $title ?> </title>
    </head>

    <body>
        <div class="container-fluid">
            
            <?= $header ?>

            <?= $content ?>
            
            <?= $footer ?>
            
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>