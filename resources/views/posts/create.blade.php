<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>投稿フォーム</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>title</h2>
                <input type="text" name=post[title] placeholder="タイトル" value={{ old('post.title' )}}>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>body</h2>
                <textarea name=post[body] placeholder="投稿文">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category">
                @foreach ($categories as $category)
                <label><input type="radio" name="post[category_id]" value={{ $category->id }}>{{ $category->name }}</label>
                @endforeach
            </div>
            <input type="submit" value="投稿する">
        </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>