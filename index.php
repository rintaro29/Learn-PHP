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
                <article>
                    <div class="wrapper">
                        <div class="nameArea">
                            <span>名前:</span>
                            <p class="username">
                                Kuroro
                            </p>
                            <time>2024/5/30</time>
                            <p>テストコメント</p>
                        </div>
                    </div>
                </article>
            </section>
            <form class="formWrapper">
                <div>
                    <input type="submit" value="投稿を書き込む">
                    <label>名前:</label>
                    <input type="text">

                </div>
                <div><textarea class="commentTextArea"></textarea></div>
            </form>
        </div>
    </div>
</body>
</html>
