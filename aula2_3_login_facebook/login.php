<!DOCTYPE html>
<html>
    <head>
        <title>Aula 2 - Login Facebook</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width
                                      ,initial-scale=1.0
                                      ,user-scalable=no
                                      ,shrink-to-fit=no" />
        <link rel="stylesheet" href="../../assets/bootstrap4/css/bootstrap.min.css" />
    </head>
    <body>
        <?php
        require 'fb.php';
        
        $helper = $fb->getRedirectLoginHelper();
        
        $permissions = array('email');
        $loginUrl = $helper->getLoginUrl
                ('http://localhost/cursophp/modulo_webservices/aula2_3_login_facebook/callback.php'
                , $permissions);
        ?>
        
        <a href="<?php echo htmlspecialchars($loginUrl); ?>">Fazer login com Facebook</a>
        
        <script type="text/javascript" src="../../assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../assets/bootstrap4/js/bootstrap.min.js"></script>
    </body>
</html>