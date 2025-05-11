<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
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
        <a href="/contact" class="text-blue-600 font-semibold">Contact</a>
      </nav>
    </div>
  </header>

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
              <p><a href="mailto:info@myblog.com" class="text-blue-600 hover:underline">info@myblog.com</a></p>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Phone</h3>
              <p>+880 123-456-789</p>
            </div>
          </div>

          <!-- Contact Form -->
          <form action="#" method="POST" class="space-y-4">
            <div>
              <label class="block text-sm font-semibold">Name</label>
              <input type="text" name="name" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-semibold">Email</label>
              <input type="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-semibold">Subject</label>
              <input type="text" name="subject" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-semibold">Message</label>
              <textarea name="message" rows="4" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div>
              <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">Send Message</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Latest Posts Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Latest Posts</h2>
      <div class="grid md:grid-cols-3 gap-6">

        <!-- Post Card 1 -->
        <div class="bg-gray-50 rounded-lg shadow p-5">
          <img src="https://source.unsplash.com/random/400x250?webdev" alt="Post Image" class="w-full h-48 object-cover rounded mb-4">
          <h3 class="text-xl font-semibold mb-2"><a href="/blog/tailwind-tips" class="hover:text-blue-600">Tailwind CSS Tips for Beginners</a></h3>
          <p class="text-gray-600 text-sm">Get started with Tailwind and build responsive layouts fast.</p>
        </div>

        <!-- Post Card 2 -->
        <div class="bg-gray-50 rounded-lg shadow p-5">
          <img src="https://source.unsplash.com/random/400x250?laravel" alt="Post Image" class="w-full h-48 object-cover rounded mb-4">
          <h3 class="text-xl font-semibold mb-2"><a href="/blog/laravel-auth" class="hover:text-blue-600">Mastering Laravel Authentication</a></h3>
          <p class="text-gray-600 text-sm">A deep dive into Laravel's auth system and custom guards.</p>
        </div>

        <!-- Post Card 3 -->
        <div class="bg-gray-50 rounded-lg shadow p-5">
          <img src="https://source.unsplash.com/random/400x250?api" alt="Post Image" class="w-full h-48 object-cover rounded mb-4">
          <h3 class="text-xl font-semibold mb-2"><a href="/blog/rest-api-design" class="hover:text-blue-600">Designing RESTful APIs</a></h3>
          <p class="text-gray-600 text-sm">Best practices for building APIs in Laravel and Node.js.</p>
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
