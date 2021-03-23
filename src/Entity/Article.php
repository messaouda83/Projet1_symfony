<?php
//src/Entity/Article.php
namespace App\Entity;

class Article {
Private $auhtor;
Private $content;
Private $title;

function getAuthor() {

    return $this->author;

}

function setAuthor() {

    $this->author=$author;
}

function getContent(){

    return $this->content;
}
function setContent() {

    $this->content=$content;
}
function getTitle(){

    return $this->title;
}
function setTitle(){

    $this->title=$title;
}
}