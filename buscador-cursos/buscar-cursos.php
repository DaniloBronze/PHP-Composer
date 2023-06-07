<?php 
require "vendor/autoload.php";

use Montero\BuscadorDeCursos\Buscador\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    'verify' => false,
    'base_uri' => 'https://cursos.dankicode.com/'
]);

$crawler = new Crawler();
$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos');

foreach ($cursos as $curso){
    echo $curso . PHP_EOL;
}
?>