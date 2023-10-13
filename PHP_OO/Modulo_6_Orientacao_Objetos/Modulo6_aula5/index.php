<?php
/* 
    Método construtor
    O construtor, é um método que é executado sempre que é criado um novo objeto. 
    Caso tenha parâmetros no método construtor, deve-se passar os parâmetros ao criar o o onjeto.
*/

class Post {
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function __construct($qtdLikes){
        $this->likes = $qtdLikes;
    }

    public function aumentarLike(){
        $this->likes ++;
    }
}

$post1 = new Post(5);
$post2 = new Post(3);


echo "<h3>POST 1</h3>Likes: " . $post1->likes;
echo "<h3>POST 2</h3>Likes: " . $post2->likes;
?>

<pre class="language-php"><code><?php class Filme { public $genero; public $classificacao; public $atores = []; public function __construct($g, $c) { $this->genero = $g; $this->classificacao = $c; } } $filme = new Filme('Comédida', 16); print_r( $filme ); ?></code></pre> <p> Analise o código acima e marque a alternativa correta.</p>