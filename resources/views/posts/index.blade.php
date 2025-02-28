<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')


@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">

            <h1 class="text-2xl font-bold mb-4">Liste des Articles</h1>
    
            <!-- Bouton pour créer un nouvel article -->
            <a href="{{ route('posts.create') }}"
                class="flex bg-green-600 hover:bg-green-800 text-white font-semibold py-2 px-4 rounded-lg shadow-lg focus:outline-none focus:shadow-outline">
                Créer
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ms-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  </a>
        </div>

        <!-- Vérifie s'il y a des articles -->
        @if ($posts->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200  ">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Titre</th>
                            <th class="px-6 py-3">Auteur</th>
                            <th class="px-6 py-3">Date de création</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <td class="px-6 py-4">{{ $post->id }}</td>
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4">{{ $post->user->name ?? 'Inconnu' }}</td>
                                <!-- Assurez-vous que la relation "user" est définie -->
                                <td class="px-6 py-4">{{ $post->created_at->format('d/m/Y H:i') }}</td>
                                <td class="px-6 py-4 space-x-2">
                                    <a href="{{ route('posts.show', $post->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-sm">Voir</a>
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded text-sm">Modifier</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline"
                                        onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-sm">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        @else
            <p class="text-gray-500">Aucun article disponible.</p>
        @endif
    </div>
@endsection
