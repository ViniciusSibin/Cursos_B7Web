<?php
/* 
    Typed Properties
    A partir da versão 7.4 do PHP é possível proteger os itens de propriedade de uma classe para que seja possível inserir somente um tipo de dado, colocando o tipo antes do nome da propriedade, por exemplo: 
        public int $likes = 0;
*/

class Post {
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function __construct(){
        echo 'teste';
    }

    public function aumentarLike(){
        $this->likes ++;
    }
}

$post1 = new Post();

$post1->aumentarLike();
$post1->comments = ["top", "muito bom", "você é foda"];
$post1->author = "Vinicius Sibin";

echo "<h3>POST 1</h3>Likes: " . $post1->likes . "<br>Autor: " . $post1->author . "<hr>";

$post2 = new Post();

$post2->aumentarLike();
$post2->comments = ["top", "muito bom", "você é foda"];
$post2->author = "Danilo Machado";

echo "<h3>POST 2</h3>Likes: " . $post2->likes . "<br>Autor: " . $post2->author . "<hr>";