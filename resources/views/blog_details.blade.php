<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog Details</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-white shadow-md fixed top-0 w-full z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="/" class="text-2xl font-bold text-blue-600">MyBlog</a>
      <nav class="space-x-6">
        <a href="/" class="hover:text-blue-600">Home</a>
        <a href="/#categories" class="hover:text-blue-600">Categories</a>
        <a href="/#latest-posts" class="hover:text-blue-600">Blog</a>
        <a href="/about" class="hover:text-blue-600">About</a>
      </nav>
    </div>
  </header>

  <!-- Content -->
  <main class="container mx-auto px-4 pt-32 pb-16 grid md:grid-cols-3 gap-8">

    <!-- Left Column (Main Content) -->
    <article class="md:col-span-2 space-y-6">
      <h1 class="text-4xl font-bold">Getting Started with Laravel</h1>
      <img src="https://images.unsplash.com/photo-1581092919535-3c4d9f8e6f8f?auto=format&fit=crop&w=800&q=80" alt="Laravel" class="w-full rounded-lg shadow-lg">
      <div class="prose max-w-none prose-blue">
        <p>Laravel is one of the most popular PHP frameworks. It provides a clean and elegant syntax while offering robust features for building modern web applications.</p>
        <p>In this post, we’ll look at how to get started with Laravel including setting up your environment, creating a project, and understanding the folder structure.</p>
        <h2>Why Laravel?</h2>
        <ul>
          <li>Elegant syntax</li>
          <li>Built-in tools like migrations, seeders, and Artisan CLI</li>
          <li>Robust routing and middleware support</li>
        </ul>
        <h2>Installation</h2>
        <p>Use Composer to create a new Laravel project:</p>
        <pre><code>composer create-project laravel/laravel blog</code></pre>
        <p>Happy coding!</p>
      </div>
    </article>

   <!-- Right Column (Sidebar) -->
<aside class="space-y-6">

    <!-- Popular Posts Card -->
    <div class="bg-white rounded-lg shadow-md p-5">
      <h3 class="text-xl font-bold mb-4 border-b pb-2">Popular Posts</h3>
      <ul class="space-y-3">
        <li><a href="/blog/tailwind-responsive" class="text-blue-600 hover:underline">Responsive Layouts with Tailwind</a></li>
        <li><a href="/blog/laravel-deploy" class="text-blue-600 hover:underline">Deploy Laravel on cPanel</a></li>
      </ul>
    </div>

    <!-- Categories Card -->
    <div class="bg-white rounded-lg shadow-md p-5">
      <h3 class="text-xl font-bold mb-4 border-b pb-2">Categories</h3>
      <div class="flex flex-wrap gap-2">
        <a href="/category/laravel" class="text-sm px-3 py-1 bg-blue-100 text-blue-700 rounded-full hover:bg-blue-200">Laravel</a>
        <a href="/category/tailwind" class="text-sm px-3 py-1 bg-green-100 text-green-700 rounded-full hover:bg-green-200">Tailwind CSS</a>
        <a href="/category/react" class="text-sm px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full hover:bg-yellow-200">React</a>
      </div>
    </div>

    <!-- Recent Posts Card -->
    <div class="bg-white rounded-lg shadow-md p-5">
      <h3 class="text-xl font-bold mb-4 border-b pb-2">Recent Posts</h3>
      <ul class="space-y-3">
        <li><a href="/blog/tailwind-responsive" class="text-gray-700 hover:text-blue-600 hover:underline">Responsive Layouts with Tailwind</a></li>
        <li><a href="/blog/api-authentication" class="text-gray-700 hover:text-blue-600 hover:underline">API Authentication with Laravel Sanctum</a></li>
      </ul>
    </div>

  </aside>

  </main>

  <!-- Related Posts Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-4">
      <h3 class="text-2xl font-bold mb-6">Related Posts</h3>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gray-100 p-4 rounded-lg shadow hover:shadow-md">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80" class="w-full h-40 object-cover rounded-md mb-3">
          <h4 class="font-semibold text-lg mb-2">Using Tailwind with Laravel</h4>
          <a href="/blog/tailwind-laravel" class="text-blue-600 text-sm hover:underline">Read more →</a>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow hover:shadow-md">
          <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=600&q=80" class="w-full h-40 object-cover rounded-md mb-3">
          <h4 class="font-semibold text-lg mb-2">Deploy Laravel on Shared Hosting</h4>
          <a href="/blog/shared-hosting" class="text-blue-600 text-sm hover:underline">Read more →</a>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow hover:shadow-md">
          <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=600&q=80" class="w-full h-40 object-cover rounded-md mb-3">
          <h4 class="font-semibold text-lg mb-2">Laravel API Best Practices</h4>
          <a href="/blog/api-best-practices" class="text-blue-600 text-sm hover:underline">Read more →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 bg-gray-50 text-gray-500 text-sm">
    © 2025 My Web Dev Blog. All rights reserved.
  </footer>

</body>
</html>
