<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category - Web Development</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-white shadow-md fixed top-0 w-full z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="/" class="text-2xl font-bold text-blue-600">MyBlog</a>
      <nav class="space-x-6">
        <a href="/" class="hover:text-blue-600">Home</a>
        <a href="/about" class="hover:text-blue-600">About</a>
        <a href="/contact" class="hover:text-blue-600">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Category Hero -->
  <section class="pt-32 pb-10 bg-white text-center">
    <h1 class="text-4xl font-bold text-blue-600 mb-2">Web Development</h1>
    <p class="text-gray-600">All posts related to Web Development</p>
  </section>

  <!-- Posts Grid -->
  <section class="container mx-auto px-4 py-10">
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Blog Post Card -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/600x400/?code" alt="Post" class="w-full h-48 object-cover rounded-t">
        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Understanding Laravel Routing</h3>
          <p class="text-gray-600 text-sm mb-4">A beginner-friendly explanation of Laravel routing and its power.</p>
          <a href="/post/1" class="text-blue-600 hover:underline">Read More →</a>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/600x400/?programming" alt="Post" class="w-full h-48 object-cover rounded-t">
        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Tailwind CSS Tips & Tricks</h3>
          <p class="text-gray-600 text-sm mb-4">Improve your frontend with these simple but effective Tailwind tricks.</p>
          <a href="/post/2" class="text-blue-600 hover:underline">Read More →</a>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/600x400/?web" alt="Post" class="w-full h-48 object-cover rounded-t">
        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">MySQL Joins Explained</h3>
          <p class="text-gray-600 text-sm mb-4">Learn inner, left, right joins and when to use them in projects.</p>
          <a href="/post/3" class="text-blue-600 hover:underline">Read More →</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 bg-gray-100 text-gray-500 text-sm">
    © 2025 My Web Dev Blog. All rights reserved.
  </footer>

</body>
</html>
