<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
</head>

<body>
    <h1>投稿一覧</h1>
    <table>
        <tr>
            <th>タイトル</th>
            <th>本文</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td><h5>{{ $post->title }}</h5></td>
                <td><h5>{{ $post->content }}</h5></td>
            </tr>
        @endforeach
    </table>
</body>

</html>