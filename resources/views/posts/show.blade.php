<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-100 text-gray-800 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-2xl w-full">
        <h1 class="text-3xl font-bold text-blue-600 mb-4">{{ $post->title }}</h1>
        <p class="text-gray-700 text-lg mb-6">{{ $post->content }}</p>

        <div class="flex space-x-4">
            <a href="{{ route('posts.edit', $post) }}"
               class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition">
                Modifier
            </a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                    Supprimer
                </button>
            </form>
        </div>

        <div class="mt-6">
            <a href="{{ route('posts.index') }}"
               class="text-blue-500 hover:underline">
                ← Retour à la liste des articles
            </a>
        </div>
    </div>

</body>
</html>
