@extends('layouts.app')

@section('title', 'Chris - Developer Portfolio')

@section('content')
<!-- Navigation -->
<nav class="fixed top-0 w-full bg-white shadow-sm z-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="#home" class="text-xl font-bold text-gray-900">Chris</a>
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="text-gray-600 hover:text-gray-900 transition">About</a>
                <a href="#projects" class="text-gray-600 hover:text-gray-900 transition">Projects</a>
                <a href="#skills" class="text-gray-600 hover:text-gray-900 transition">Skills</a>
                <a href="#contact" class="text-gray-600 hover:text-gray-900 transition">Contact</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center justify-center pt-16 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <div class="mb-8">
            <!-- Profile Picture Placeholder -->
            <img src="{{ asset('images/profile.jpg') }}" 
                 alt="Profile Picture" 
                 class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-blue-500 shadow-lg">
        </div>
        <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-4">
            Hi, I'm <span class="text-blue-600">Chris</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 mb-8">
            Full Stack Developer | Laravel Enthusiast | Problem Solver
        </p>
        <div class="flex gap-4 justify-center">
            <a href="#projects" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                View My Work
            </a>
            <a href="#contact" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
                Get In Touch
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white px-4">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12">About Me</h2>
        <div class="text-lg text-gray-700 space-y-4">
            <p>
                I'm a passionate developer with experience in building web applications using modern technologies. 
                I love creating clean, efficient, and user-friendly solutions.
            </p>
            <p>
                Currently focusing on Laravel, Vue.js, and exploring new technologies to expand my skill set.
            </p>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-gray-50 px-4">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12">My Projects</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Project Name 1</h3>
                    <p class="text-gray-600 mb-4">Brief description of your project goes here.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Vue.js</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Project Name 2</h3>
                    <p class="text-gray-600 mb-4">Brief description of your project goes here.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">PHP</span>
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">JavaScript</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <div class="h-48 bg-gradient-to-br from-pink-400 to-pink-600"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Project Name 3</h3>
                    <p class="text-gray-600 mb-4">Brief description of your project goes here.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">MySQL</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Tailwind</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-white px-4">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12">Skills</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Backend -->
            <div>
                <h3 class="text-2xl font-semibold mb-4 text-blue-600">Backend</h3>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                        PHP & Laravel
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                        MySQL Database
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                        RESTful APIs
                    </li>
                </ul>
            </div>

            <!-- Frontend -->
            <div>
                <h3 class="text-2xl font-semibold mb-4 text-purple-600">Frontend</h3>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                        HTML, CSS, JavaScript
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                        Tailwind CSS
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                        Vue.js (Learning)
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-50 px-4">
    <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">Get In Touch</h2>
        <p class="text-lg text-gray-600 mb-8">
            I'm always open to new opportunities and collaborations.
        </p>
        <div class="flex gap-4 justify-center flex-wrap">
            <a href="mailto:your.email@example.com" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                Email Me
            </a>
            <a href="https://github.com/yourusername" target="_blank" class="border-2 border-gray-800 text-gray-800 px-6 py-3 rounded-lg hover:bg-gray-800 hover:text-white transition">
                GitHub
            </a>
            <a href="https://linkedin.com/in/yourusername" target="_blank" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition">
                LinkedIn
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-8 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <p>&copy; {{ date('Y') }} Chris. All rights reserved.</p>
    </div>
</footer>
@endsection