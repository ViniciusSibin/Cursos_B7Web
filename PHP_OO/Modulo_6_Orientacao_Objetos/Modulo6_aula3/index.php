<?php
/* 
    Diferença entre métodos e propriedades
    Propriedades: São as caracteristicas que uma classe tem, existem vários tipos, alguns são: public, private e protected.

    Metodos: São as tarefas que podem ser executadas através do próprio objeto.
*/

class Post {
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentarLike(){
        $this->likes ++;
    }
}

$post1 = new Post();

$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->comments = ["top", "muito bom", "você é foda"];
$post1->author = "Vinicius Sibin";

echo "<h3>POST 1</h3>Likes: " . $post1->likes . "<br>Autor: " . $post1->author . "<hr>";

$post2 = new Post();

$post2->aumentarLike();
$post2->comments = ["top", "muito bom", "você é foda"];
$post2->author = "Danilo Machado";

echo "<h3>POST 2</h3>Likes: " . $post2->likes . "<br>Autor: " . $post2->author . "<hr>";