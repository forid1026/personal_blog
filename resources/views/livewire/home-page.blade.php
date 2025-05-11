<main>

    <!-- Hero Section -->
    <section
        class="h-screen bg-gradient-to-br from-blue-100 to-blue-300 flex items-center justify-center text-center px-4 pt-24">
        <div>
            <h1 class="text-4xl md:text-4xl font-bold mb-6">Welcome to My Web Development Blog</h1>
            <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-xl mx-auto">I share practical tips, tutorials, and
                experiences in Laravel, Livewire, Tailwind CSS, APIs, and more.</p>
            <a href="#latest-posts" wire:navigate
                class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Read
                Latest Posts</a>
        </div>
    </section>

    <!-- Category Section -->
    <section id="categories" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Categories</h2>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach ($categories as $category)
                <a href="{{ route('category', $category->slug) }}" wire:navigate
                    class="px-6 py-2 {{ $category->text_class }} rounded-full transition">{{
                    $category->name }}</a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Latest Posts Section -->
    <section id="latest-posts" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-10">Latest Posts</h3>
            <div class="grid md:grid-cols-3 gap-6">

                @foreach ($posts as $post)
                <!-- Post 1 -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <a href="{{ route('post.details', $post->slug) }}" wire:navigate>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                            class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <a href="{{ route('post.details', $post->slug) }}" wire:navigate
                            class="hover:underline hover:text-blue-600">
                            <h4 class="text-xl font-semibold mb-2">{{ $post->title }}</h4>
                        </a>

                        <p class="text-gray-600 text-sm mb-4 text-justify">{{ $post->excerpt }}</p>
                        <a href="{{ route('post.details', $post->slug) }}" wire:navigate
                            class="text-blue-600 inline-block">Read more →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
