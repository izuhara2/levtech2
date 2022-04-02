<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>Blog Name</h1>
        <form action = "/posts" method="POST">
            {{ csrf_field() }}
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="title">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="記事を入力してください"></textarea>　
            </div>
            <input type="submit" value="store"/> 
        </form>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>