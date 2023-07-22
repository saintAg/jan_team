<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Booking</title>
        <link rel="stylesheet" href="../../public/css/style.css">
    </head>
    <body class="body">
        <div class="l-wrapper">
            <header class="header">
                <div class="wrapper">
                    <div class="header__logo">
                        <img src="" alt="">
                    </div>
                    <div class="header__buttons">
                        <?php // if($_SESSION) { ?>
                        <a href="/index/signin" class="btn"><?php echo 'Sign In';?></a>
                        <a href="/index/signup" class="btn"><?php echo 'Sign Up';?></a>
                        <?php //} else{ ?>
                        <span class="btn"><?php echo 'Hello User';?></span>
                            <a href="/index/exit" class="btn"><?php echo 'Exit';?></a>
                        <?php //} ?>
                    </div>
                </div>
            </header>
            <main class="main">
                <?php include_once '../view/pages/' . $page . '_view.php'; ?>
            </main>
            <footer class="footer">
                <div class="wrapper">
                    <div class="footer-top">
                        <div class="footer__logo">
                            <img src="" alt="">
                        </div>
                        <address class="footer__address">
                            <ul>
                                <li>Name Surname</li>
                                <li>Name Surname</li>
                                <li>Name Surname</li>
                                <li>Name Surname</li>
                                <li>Name Surname</li>
                                <li>Name Surname</li>
                            </ul>
                        </address>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer__copyright">
                            <?php echo '© 2023, Level Up jan-2023';?>
                        </div>
                        <div class="footer__created">
                            <?php echo 'Сайт створили: Mi4kire and Co';?>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>