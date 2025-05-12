<main>
    <div class="container mx-auto px-4 pt-32 pb-16 grid md:grid-cols-3 gap-8">

        <!-- Left Column (Main Content) -->
        <article class="md:col-span-2 space-y-6">
            <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{  $post->title }}"
                class="w-full rounded-lg shadow-lg">
            <div class="prose max-w-none prose-blue">
                {!! $post->body !!}
            </div>
        </article>

        <!-- Right Column (Sidebar) -->
        <aside class="space-y-6">

            <!-- Popular Posts Card -->
            <div class="bg-white rounded-lg shadow-md p-5">
                <h3 class="text-xl font-bold mb-4 border-b pb-2">Popular Posts</h3>
                <ul class="space-y-3">
                    @foreach ($posts as $latestPost)
                    <li><a wire:navigate href="{{ route('post.details', $latestPost->slug) }}"
                            class="text-blue-600 hover:underline">{{ $latestPost->title }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Categories Card -->
            <div class="bg-white rounded-lg shadow-md p-5">
                <h3 class="text-xl font-bold mb-4 border-b pb-2">Categories</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach ($categories as $category)
                    <a wire:navigate href="{{ route('category', $category->slug) }}" class="text-sm px-3 py-1 {{ $category->text_class }}rounded-ful">{{
                        $category->name }}</a>
                    @endforeach
                </div>
            </div>

            <!-- Recent Posts Card -->
            {{-- <div class="bg-white rounded-lg shadow-md p-5">
                <h3 class="text-xl font-bold mb-4 border-b pb-2">Recent Posts</h3>
                <ul class="space-y-3">
                    <li><a href="/blog/tailwind-responsive"
                            class="text-gray-700 hover:text-blue-600 hover:underline">Responsive Layouts with
                            Tailwind</a></li>
                    <li><a href="/blog/api-authentication" class="text-gray-700 hover:text-blue-600 hover:underline">API
                            Authentication with Laravel Sanctum</a></li>
                </ul>
            </div> --}}

        </aside>

    </div>

    <!-- Related Posts Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-bold mb-6">Related Posts</h3>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($related_posts as $related_post)
                <div class="bg-white p-4 rounded-lg shadow hover:shadow-md">
                    <a wire:navigate href="{{ route('post.details', $post->slug) }}">
                        <img src="{{ asset('storage/' . $related_post->image) }}" alt="{{ $related_post->title }}"
                        class="w-full h-auto object-cover rounded-md mb-3">
                    </a>
                    <a wire:navigate class="hover:underline hover:text-blue-600" href="{{ route('post.details', $related_post->slug) }}">
                        <h4 class="font-semibold text-lg mb-2">{{ $related_post->title }}</h4>
                    </a>
                    <a wire:navigate href="{{  route('post.details', $related_post->slug) }}" class="text-blue-600 text-md hover:underline">Read more →</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main>
