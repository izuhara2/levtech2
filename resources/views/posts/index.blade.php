<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
<<<<<<< HEAD
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
=======
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

>>>>>>> refs/remotes/origin/master
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
<<<<<<< HEAD
            @foreach ($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
=======
            @foreach ($test as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
>>>>>>> refs/remotes/origin/master
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
<<<<<<< HEAD
            {{ $posts->links() }}
        </div>
    </body>
=======
            {{ $test->links() }}
        </div>
    </body>
</html>
>>>>>>> refs/remotes/origin/master
