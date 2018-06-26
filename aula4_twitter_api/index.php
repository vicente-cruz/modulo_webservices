<?php
session_start();
require 'twconfig.php';
require 'twitteroauth/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

if (isset($_SESSION['tw_access_token']) && ( ! empty($_SESSION['tw_access_token']))) {
//    echo "Logado!";
    $connection = new TwitterOAuth
            (CONSUMER_KEY
            ,CONSUMER_SECRET
            ,$_SESSION['tw_access_token']['oauth_token']
            ,$_SESSION['tw_access_token']['oauth_token_secret']);
//    $connection->setProxy(
//        ['CURLOPT_PROXY' => '10.76.64.14'
//        ,'CURLOPT_PROXYUSERPWD' => ''
//        ,'CURLOPT_PROXYPORT' => 3128
//    ]);
    
//    $user = $connection->get("account/verify_credentials");
//    var_dump($user);
//    echo "NOME: ".$user->name;
    
    if (isset($_POST['tw_msg']) && ( ! empty($_POST['tw_msg']))) {
        $connection->post('statuses/update', array
            ('status' => $_POST['tw_msg'])
        );
        echo "Tweet publicado com sucesso.";
    }
    
    echo "<a href='logout.php'>Sair</a>";
}
else {
    echo "<a href='login.php'>Login com Twitter</a>";
}
?>
<form method="POST">
    Insira um Tweet:<br/>
    <input type="text" name="tw_msg" /><br/><br/>
    
    <input type="submit" value="Enviar" />
</form>