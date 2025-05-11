<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Web Dev Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="text-gray-800 bg-white">

  <!-- Header / Navigation -->
  <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="/" class="text-2xl font-bold text-blue-600">MyBlog</a>
      <nav class="space-x-6">
        <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="#categories" class="text-gray-700 hover:text-blue-600">Categories</a>
        <a href="#latest-posts" class="text-gray-700 hover:text-blue-600">Latest Posts</a>
        <a href="/about" class="text-gray-700 hover:text-blue-600">About</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="h-screen bg-gradient-to-br from-blue-100 to-blue-300 flex items-center justify-center text-center px-4 pt-24">
    <div>
      <h1 class="text-4xl md:text-5xl font-bold mb-6">Welcome to My Web Development Blog</h1>
      <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-xl mx-auto">I share practical tips, tutorials, and experiences in Laravel, Tailwind CSS, APIs, and more.</p>
      <a href="#latest-posts" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Read Latest Posts</a>
    </div>
  </section>

  <!-- Category Section -->
  <section id="categories" class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-10">Categories</h2>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="/category/laravel" class="px-6 py-2 bg-blue-100 text-blue-700 rounded-full hover:bg-blue-200 transition">Laravel</a>
        <a href="/category/tailwind" class="px-6 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition">Tailwind CSS</a>
        <a href="/category/deployment" class="px-6 py-2 bg-purple-100 text-purple-700 rounded-full hover:bg-purple-200 transition">Deployment</a>
        <a href="/category/react" class="px-6 py-2 bg-yellow-100 text-yellow-700 rounded-full hover:bg-yellow-200 transition">React</a>
        <a href="/category/api" class="px-6 py-2 bg-red-100 text-red-700 rounded-full hover:bg-red-200 transition">REST API</a>
      </div>
    </div>
  </section>

  <!-- Latest Posts Section -->
  <section id="latest-posts" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
      <h3 class="text-3xl font-bold text-center mb-10">Latest Posts</h3>
      <div class="grid md:grid-cols-3 gap-6">

        <!-- Post 1 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1581092919535-3c4d9f8e6f8f?auto=format&fit=crop&w=600&q=80" alt="Laravel Post" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2">Getting Started with Laravel</h4>
            <p class="text-gray-600 text-sm mb-4">Learn the basics of Laravel setup and project structure.</p>
            <a href="/blog/laravel-intro" class="text-blue-600 inline-block">Read more →</a>
          </div>
        </div>

        <!-- Post 2 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?tailwindcss,design" alt="Tailwind Post" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2">Responsive Layouts with Tailwind</h4>
            <p class="text-gray-600 text-sm mb-4">Master responsive design techniques using Tailwind CSS.</p>
            <a href="/blog/tailwind-responsive" class="text-blue-600 inline-block">Read more →</a>
          </div>
        </div>

        <!-- Post 3 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?cpanel,server" alt="Deployment Post" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2">Deploy Laravel on cPanel</h4>
            <p class="text-gray-600 text-sm mb-4">Step-by-step deployment guide for your Laravel projects.</p>
            <a href="/blog/laravel-deploy" class="text-blue-600 inline-block">Read more →</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 bg-white text-gray-500 text-sm">
    © 2025 My Web Dev Blog. All rights reserved.
  </footer>

</body>
</html>
