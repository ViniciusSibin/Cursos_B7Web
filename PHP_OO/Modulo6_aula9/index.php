<?php

class Post {
     private $id;
     private $likes;

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
}

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl("www.foto.com");

echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();