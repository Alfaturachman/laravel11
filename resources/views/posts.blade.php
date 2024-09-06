<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

@foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post['slug'] }}">
            <h3 class="mb-1 text-3xl tracking-light font-bold text-gray-900 hover:underline">{{ $post['title'] }}</h3>
        </a>
        <div class="text-base text-gray-500">
            <a href="#" rel="noopener noreferrer">{{ $post['author'] }}</a> | 1 Januari 2024
        </div>
        <p class="py-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline" rel="noopener noreferrer">Read more &raquo;</a>
    </article>
@endforeach

</x-layout>