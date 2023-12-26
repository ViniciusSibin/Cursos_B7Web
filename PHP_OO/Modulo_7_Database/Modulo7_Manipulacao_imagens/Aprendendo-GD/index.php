<?php 
$imagem = imagecreatetruecolor(300, 300); // Cria um quadrado

$cor = imagecolorallocate($imagem, 255 , 0, 0); //Adiciona a cor vermelha ao quadrado;
imagefill($imagem, 0, 0, $cor); 

header("Content-Type: image/png"); //Utilizado para transformar o documento atual (Navegador) em uma imagem.

imagepng($imagem, null); // Cria a imagem de fato (Imagem, local que será salva, qualidade de 0 a 100 (Para png não precisa));