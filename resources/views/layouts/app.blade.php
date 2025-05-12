<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'My Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="text-gray-800 bg-white">
    <!-- Header / Navigation -->
    <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a wire:navigate href="{{ route('home') }}" class="text-2xl font-bold text-blue-600 italic">Learn With Farid</a>
            <nav class="space-x-6">
                <a wire:navigate href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                @foreach ($categories as $item)
                    <a wire:navigate href="{{route('category', $item->slug)}}" class="text-gray-700 hover:text-blue-600">{{ $item->name }}</a>
                @endforeach
                <a href="{{ route('posts') }}" class="text-gray-700 hover:text-blue-600">Latest Posts</a>
                <a href="/about" wire:navigate class="text-gray-700 hover:text-blue-600">About</a>
            </nav>
        </div>
    </header>

    <!-- Page Content -->
    <main class="min-h-screen pt-10">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="text-center py-6 bg-white text-gray-500 text-sm">
        © 2025 My Web Dev Blog. All rights reserved.
    </footer>
    @livewireScripts
</body>

</html>
