<?php

class Post{
  public $title;
  public $author;
  public $published;

  public function __construct($title, $author, $published){
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
  new Post('My first post', 'JW', true),
  new Post('My second post', 'EB', true),
  new Post('My third post', 'QC', true),
  new Post('My fourth post', 'DF', false)
];

// $unpublishedPosts = array_filter($posts, function($post){
//   return ! $post->published;
// });

// $unpublishedPosts = array_filter($posts, function($post){
//   return $post->published;
// });

// $modified = array_map(function($post){
//   return ['title' => $post->title];
// }, $posts);

// $titles = array_column($posts, 'title');

$posts = array_map(function($post){
  return (array) $post;
}, $posts);

$titles = array_column($posts, 'title');

$authors = array_column($posts, 'author', 'title');

var_dump($authors);