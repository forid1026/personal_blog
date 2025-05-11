<main>

    <!-- Contact Section -->
    <section class="pt-32 pb-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-3xl font-bold mb-6 text-center text-blue-600">Contact Us</h2>
                <div class="grid md:grid-cols-2 gap-10">

                    <!-- Contact Info -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-semibold text-lg">Address</h3>
                            <p>123 Developer Street<br>Dhaka, Bangladesh</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Email</h3>
                            <p><a href="mailto:info@myblog.com"
                                    class="text-blue-600 hover:underline">info@myblog.com</a></p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Phone</h3>
                            <p>+880 123-456-789</p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <form wire:submit.prevent="submit" class="space-y-4" novalidate>
                        @if (session()->has('success'))
                            <p class="text-green-600 text-sm font-semibold bg-green-100 rounded p-2">{{ session('success') }}</p>
                        @endif
                        <div>
                            <label class="block text-sm font-semibold" for="name">Name</label>
                            <input type="text" id="name" wire:model="name" name="name" required
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold" for="email">Email</label>
                            <input type="email" id="email" wire:model="email" name="email" required
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold" for="subject">Subject</label>
                            <input type="text" id="subject" wire:model="subject" name="subject" required
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('subject') border-red-500 @enderror">
                            @error('subject') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold" for="message">Message</label>
                            <textarea id="message" wire:model="message" name="message" rows="4"
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('message') border-red-500 @enderror"></textarea>
                            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">Send
                                Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Latest Posts Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Latest Posts</h2>
            <div class="grid md:grid-cols-3 gap-6">

                @foreach ($posts as $post)
                <!-- Post 1 -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <a href="{{ route('post.details', $post->slug) }}">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                            class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <a href="{{ route('post.details', $post->slug) }}" class="hover:underline hover:text-blue-600">
                            <h4 class="text-xl font-semibold mb-2">{{ $post->title }}</h4>
                        </a>

                        <p class="text-gray-600 text-sm mb-4 text-justify">{{ $post->excerpt }}</p>
                        <a href="{{ route('post.details', $post->slug) }}" class="text-blue-600 inline-block">Read more
                            →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


</main>