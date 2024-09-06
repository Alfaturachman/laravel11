<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md">
        <h3 class="mb-1 text-3xl tracking-light font-bold text-gray-900 hover:underline">{{ $post['title'] }}</h3>
        <div class="text-base text-gray-500">
            <a href="#" rel="noopener noreferrer">{{ $post['author'] }}</a> | 1 Januari 2024
        </div>
        <p class="py-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline" rel="noopener noreferrer">&laquo; Back to posts</a>
    </article>

</x-layout>