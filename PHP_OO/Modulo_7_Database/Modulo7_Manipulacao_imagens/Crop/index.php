<?php

$imagemOriginal = 'paisagem.jpg';
$width = 600;
$height = 600;

//Coletando as informações da imagem original;
list($originalWidth, $originalHeigth) = getimagesize($imagemOriginal);

//Coletando a proporção da imagem original
$ratio = $originalWidth / $originalHeigth;
$ratioDest = $width / $height;

$finalWidth = 0;
$finalHeigth = 0;
$finalX = 0;
$finalY = 0;

//Altera o tamanho da imagem caso ela seja maior que o máximo
if($ratioDest > $ratio) {
    $finalWidth = $height * $ratio;
    $finalHeigth = $height;
} else {
    $finalHeigth = $width / $ratio;
    $finalWidth = $width;
}

if($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeigth = $width / $ratio;

    $finalY = -(($finalHeigth - $height) / 2);
} else {
    $finalHeigth = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);
}

$imagem = imagecreatetruecolor($width, $height);//Criando a nova imagem
$originalImg = imagecreatefromjpeg($imagemOriginal); //lendo a imagem original

//Copiar imagem diminuida proporcionalmente
imagecopyresampled($imagem, $originalImg, $finalX, $finalY, 0, 0, $finalWidth, $finalHeigth, $originalWidth, $originalHeigth);

header("Content-Type: image/jpeg");
imagejpeg($imagem, null, 100);
