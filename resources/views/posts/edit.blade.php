<!DOCTYPE html>
<html>
<head>
    <title>Modifier l'article</title>
</head>
<body>
    <h1>Modifier l'article</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}" required>

        <label for="content">Contenu :</label>
        <textarea id="content" name="content" required>{{ $post->content }}</textarea>

        <button type="submit">Mettre à jour</button>
    </form>

    <a href="{{ route('posts.index') }}">Retour à la liste des articles</a>
</body>
</html>
