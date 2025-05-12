<main>
    <!-- all Posts Section -->
    <section id="latest-posts" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-10">Latest Posts</h3>
            <div class="grid md:grid-cols-3 gap-6">

                @foreach ($posts as $post)
                <!-- Post 1 -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <a wire:navigate href="{{ route('post.details', $post->slug) }}">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                            class="w-full h-auto object-cover">
                    </a>
                    <div class="p-6">
                        <a wire:navigate href="{{ route('post.details', $post->slug) }}" class="hover:underline hover:text-blue-600">
                            <h4 class="text-xl font-semibold mb-2">{{ $post->title }}</h4>
                        </a>

                        <p class="text-gray-600 text-sm mb-4 text-justify">{{ $post->excerpt }}</p>
                        <a wire:navigate href="{{ route('post.details', $post->slug) }}" class="text-blue-600 inline-block">Read more →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
