<?php  

/* 
    O encapsulamento, nada mais é, que proteger as propriedades da classe de objetos externas
*/


class Post {
    private int $id;
    private int $likes = 0;
    private array $comments = [];
    private string $author;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getLikes(){
        return $this->likes;
    }

    public function setLikes($likes){
        $this->likes = $likes;
    }

    public function getComments(){
        return $this->comments;
    }

    public function setComments($comments){
        $this->comments = $comments;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function aumentarLike(){
        $this->likes ++;
    }
}

$post1 = new Post();
$post1->setAuthor('Vinicius');

$post2 = new Post(3);
$post2->setAuthor('Gabriela');


echo "<h3>POST 1</h3>Likes: " . $post1->getAuthor();
echo "<h3>POST 2</h3>Likes: " . $post2->getAuthor();
?>