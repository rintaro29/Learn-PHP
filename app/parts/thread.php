<?php

include("app/functions/comment_add.php");
include("app/functions/comment_get.php");


?>

<div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>タイトル</span>
                <h1>２チャンネル掲示板作成</h1>
            </div>
           <?php include("commentSection.php"); ?>
           <?php include("commentForm.php"); ?>

          
        </div>
    </div>