<main class="bg-gray-100">
    <!-- Category Hero -->
    <section class="pt-20 pb-10 bg-white text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-2">{{ $category->name }}</h1>
        <p class="text-gray-600">All posts related to {{ $category->name }}</p>
    </section>

    <!-- Posts Grid -->
    <section class="container mx-auto px-4 py-10">
        @if($posts->count() > 0)
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($posts as $post)
            <!-- Blog Post Card -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                <a wire:navigate href="{{ route('post.details', $post->slug) }}">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-auto object-cover rounded-t">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Understanding Laravel Routing</h3>
                    <p class="text-gray-600 text-sm mb-4">A beginner-friendly explanation of Laravel routing and its
                        power.</p>
                    <a wire:navigate href="{{ route('post.details', $post->slug) }}" class="text-blue-600 hover:underline">Read More
                        →</a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center block">No posts found</h3>
        @endif
    </section>
</main>
