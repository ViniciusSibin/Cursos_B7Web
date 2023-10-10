<?php
/* 
    Diferença entre classe e objeto
    Classe: É o que engloba todos os objetos, por exemplo, o ser humano, ele é feito de vários objetos como cabeça, pescoço, ombros, braços, ....

    Objeto: é a abstração dos itens de algo, por exemplo, Computador: Monitor, mouse, teclado e gabinete.
*/

class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
}

$post1 = new Post();

$post1->likes = 2;
$post1->comments = ["top", "muito bom", "você é foda"];
$post1->author = "Vinicius Sibin";

echo "<h3>POST 1</h3>Likes: " . $post1->likes . "<br>Autor: " . $post1->author . "<hr>";

$post2 = new Post();

$post2->likes = 5;
$post2->comments = ["top", "muito bom", "você é foda"];
$post2->author = "Danilo Machado";

echo "<h3>POST 2</h3>Likes: " . $post2->likes . "<br>Autor: " . $post2->author . "<hr>";