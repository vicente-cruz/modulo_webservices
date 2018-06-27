<table border="0" width="100%">
    <tr>
        <th>Imagem</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Views</th>
        <th>Tempo</th>
        <th>Link</th>
    </tr>
<?php
// WebScraper: um robô que monitora sites e busca informações.
// Ex: Consulta o site da Saraiva para saber se um livro chegou.
// Ex: Consulta periodicamente o valor do Dolar.

//$html = file_get_contents('http://youtube.com');
//echo utf8_decode($html);

// Baixar o script simple_html_dom.php
// 
// Para buscar os elementos desejados, dar "Exibir Código Fonte" e buscar pelo título:
// Ex: "Véia dos gatos"
require 'simple_html_dom.php';
$html = file_get_html('https://www.youtube.com/results?search_query='.filter_input(INPUT_GET,'q'));
$results = $html->find('.yt-lockup');
// echo utf8_decode($html);
// echo "Total:".count($results);

foreach ($results as $video) {
    $imagem = $video->find('.yt-thumb-simple img', 0)->attr['src'];
    $tempo = $video->find('.video-time', 0)->plaintext;
    $link = "https://www.youtube.com".$video->find('.yt-lockup-title a', 0)->href;
    $titulo = $video->find('.yt-lockup-title a', 0)->plaintext;
    $autor = $video->find('.yt-lockup-byline a', 0)->plaintext;
    $views = $video->find('.yt-lockup-meta-info li', 1)->plaintext;
?>
    <tr>
        <td><img src="<?php echo $imagem; ?>" border="0" height="80" /></td>
        <td><?php echo utf8_decode($titulo); ?></td>
        <td><?php echo utf8_decode($autor); ?></td>
        <td><?php echo utf8_decode($views); ?></td>
        <td><?php echo utf8_decode($tempo); ?></td>
        <td><?php echo $link; ?></td>
    </tr>
<?php 
}
?>
</table>