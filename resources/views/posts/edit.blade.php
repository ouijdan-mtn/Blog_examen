@extends('layouts.app')


<title>{{ $post->title }}</title>
@section('content')
    <div class="mx-60">
        <a href="{{ route('posts.index') }}" class="flex text-indigo-600 hover:text-indigo-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
          </svg>Retour à la liste des
            articles</a>
        <div class=" px-6 py-4 bg-white border border-gray-200 rounded-lg shadow-sm mt-4">
            <div>


                <h1 class="text-2xl font-bold mb-4">Modifier l'article</h1>

                <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Titre :</label>
                        <input type="text" id="title" name="title" value="{{ $post->title }}" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Contenu :</label>
                        <textarea id="content" name="content" required
                            class="mt-1 block w-full h-30 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $post->content }}</textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Mettre
                            à jour</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
