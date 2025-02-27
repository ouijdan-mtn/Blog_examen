<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')


@section('content')
<div class="container">
    <h1 class="mb-4">Liste des Articles</h1>

    <!-- Bouton pour créer un nouvel article -->
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Créer un nouvel article</a>

    <!-- Vérifie s'il y a des articles -->
    @if ($posts->count() > 0)
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name ?? 'Inconnu' }}</td> <!-- Assurez-vous que la relation "user" est définie -->
                        <td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucun article disponible.</p>
    @endif
</div>
@endsection
