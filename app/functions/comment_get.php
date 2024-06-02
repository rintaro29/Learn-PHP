<?php 
// コメントの配列を定義
$comment_array=array();

$sql ="SELECT * FROM comment";
$statement = $pdo->prepare($sql);
$statement->execute();
$comment_array= $statement;
// var_dump($comment_array->fetchAll());
