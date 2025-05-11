<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Me</title>
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
        <a href="/contact" class="hover:text-blue-600">Contact</a>
        <a href="/about" class="text-blue-600 font-semibold">About</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="pt-32 pb-20 bg-white">
    <div class="container mx-auto px-4 text-center">
      <img src="https://i.ibb.co.com/cSvjK9dX/official-1.jpg" alt="Profile" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
      <h1 class="text-4xl font-bold text-blue-600 mb-2">Sheikh Forid</h1>
      <p class="text-gray-600 text-lg">Web Developer · Laravel Expert · Instructor</p>
    </div>
  </section>

  <!-- About Me Section -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4 max-w-4xl">
      <h2 class="text-3xl font-bold mb-6 text-gray-800 text-center">About Me</h2>
      <p class="text-gray-700 text-lg leading-relaxed mb-6">
        I am a passionate web developer with over 3 years of experience building custom software and systems using Laravel, MySQL, Tailwind CSS, and more.
        I’ve developed inventory systems, ERP software, press management tools, and restaurant POS apps.
        I love solving real-world problems with clean code and practical design.
      </p>
      <p class="text-gray-700 text-lg leading-relaxed">
        I'm also a mentor and trainer, having helped over 80 students become successful web developers. I’m currently working at Nebula IT and constantly exploring new technologies like machine learning and React.
      </p>
    </div>
  </section>

  <!-- Skills Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-4 max-w-5xl">
      <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">My Skills</h2>
      <div class="grid md:grid-cols-3 gap-6 text-center">
        <div class="bg-gray-100 p-6 rounded shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2 text-blue-600">Laravel</h3>
          <p class="text-gray-600">Advanced knowledge of REST APIs, Eloquent, Blade, Auth systems</p>
        </div>
        <div class="bg-gray-100 p-6 rounded shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2 text-blue-600">Tailwind CSS</h3>
          <p class="text-gray-600">Responsive UI design with clean, scalable components</p>
        </div>
        <div class="bg-gray-100 p-6 rounded shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2 text-blue-600">MySQL & PHP</h3>
          <p class="text-gray-600">Efficient DB design and backend logic with performance in mind</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 bg-gray-100 text-gray-500 text-sm mt-10">
    © 2025 My Web Dev Blog. All rights reserved.
  </footer>

</body>
</html>
