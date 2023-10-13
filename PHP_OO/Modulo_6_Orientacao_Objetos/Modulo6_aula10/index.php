<?php 

/*
    protected --> Os objetos do tipo protected só podem ser utilizados por classes que tem relação com os objetos e na própria classe, como por exemplo em uma classe herdada/extendida; 

    Obs.: A classe pai geralmente deve ter todos os atributos como protected, para somente as classes filhas conseguirem acessar.
*/

class Post {
     private $id;
     private $likes;

     public function getId(){
        return $this->id;
     }

     protected function setId($id){
        $this->id = $id;
     }

     public function getLikes(){
        return $this->likes;
     }

     protected function setLikes($likes){
        $this->likes = $likes;
     }
}

class Foto extends Post {
    private $url;

    public function __construct($id){
        $this->setId($id);
    }

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $this->url = $url;
    }

    //É possível reescrever os métodos nas classes filhas
    public function setLikes_modificado($likes){
        $this->setLikes($likes);
        echo "Adicionado $likes likes ao post!<br><br>";
    }
}

$foto = new Foto(20);
$foto->setLikes_modificado(12);
$foto->setUrl("www.foto.com");

echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();