<!DOCTYPE html>
<html>
<head>
    <title>Créer un article</title>
</head>
<body>
    <h1>Créer un nouvel article</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Contenu :</label>
        <textarea id="content" name="content" required></textarea>

        <button type="submit">Créer</button>
    </form>

    <a href="{{ route('posts.index') }}">Retour à la liste des articles</a>
</body>
</html>

