<?php

include_once("./app/database/connect.php");

if(isset($_POST["submitButton"])){
    $username=$_POST["username"];
    var_dump($username);
    $body=$_POST["body"];
    var_dump($body);
}

$comment_array=array();

$sql ="SELECT * FROM comment";
$statement = $pdo->prepare($sql);
$statement->execute();
$comment_array= $statement;
// var_dump($comment_array->fetchAll());


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2チャンネル掲示板</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <h1 class="title">2チャンネル掲示板</h1>
        <hr>
    </header>

    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>タイトル</span>
                <h1>２チャンネル掲示板作成</h1>
            </div>
            <section>
                <?php foreach($comment_array as $comment): ?>
                <article>
                    <div class="wrapper">
                        <div class="nameArea">
                            <span>名前:</span>
                            <p class="username">
                            <?php echo $comment["username"]; ?>
                            </p>
                            <time><?php echo $comment["post_date"]; ?></time>
                        </div>
                        <p class="comment"><?php echo $comment["body"]; ?></p>

                    </div>
                </article>
                <?php endforeach ?>
            </section>
            <form class="formWrapper" method="POST">
                <div>
                    <input type="submit" value="投稿を書き込む" name="submitButton">
                    <label>名前:</label>
                    <input type="text"  name="username">

                </div>
                <div><textarea class="commentTextArea" name="body"></textarea></div>
            </form>
        </div>
    </div>
</body>
</html>
