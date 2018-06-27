<?php
session_start();
require "instagramapi/Instagram.php";
require "inconfig.php";

if (isset($_SESSION['in_access_token']) && ( ! (empty($_SESSION['in_access_token'])))) {
//    echo "Logado";
    $instagram->setAccessToken($_SESSION['in_access_token']);
    $res = $instagram->getUser();
    echo "Meu nome: ".$res->data->full_name."<br/>";
    
    $fotos = $instagram->getUserMedia('self',4);
    foreach ($fotos->data as $foto) {
        $link = $foto->link;
        $img = $foto->images->low_resolution->url;
        $legenda = ( ! empty($foto->caption->text) ? $foto->caption->text : "");
        
        echo "<a href='".$link."' target=_blank>"
                . "<img src='".$img."' border=0 />"
                . "<br/>".utf8_decode($legenda).""
             ."</a><br/><br/>";
    }
}
else {
    $loginUrl = $instagram->getLoginUrl();
    echo "<a href='".$loginUrl."'>Login com Instagram</a>";
}