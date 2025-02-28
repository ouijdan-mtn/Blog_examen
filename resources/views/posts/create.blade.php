@extends('layouts.app')


@section('content')
    <div class="mx-60 ">
        <a href="{{ route('posts.index') }}" class="flex  mt-4 text-indigo-600 hover:text-indigo-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
          </svg>
          Retour à la
            liste des articles</a>
        <section class="mt-4 p-6 bg-white border border-gray-200 rounded-lg shadow-sm  ">
            <h1 class="text-2xl font-bold mb-4">Créer un nouvel article</h1>

            <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Titre :</label>
                    <input type="text" id="title" name="title" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Contenu :</label>
                    <textarea id="content" name="content" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                </div>

                <button type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Créer</button>
            </form>

            
        </section>
    </div>
@endsection
