<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Your Job Website</title>
    <!-- Include Font Awesome CSS (you can link to it on a CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header Section -->
    <header class="bg-[#022B3A] text-white p-4 flex justify-between items-center">
        <div id="logo" class="flex items-center">
            <img src="your-logo.png" alt="Logo" class="w-8 h-auto mr-2">
            <h1 class="text-lg font-bold">Your Job Website</h1>
        </div>
        <nav class="flex">
            <a href="#" class="text-white text-sm"><i class="fas fa-user-plus"></i> Register</a>
        </nav>
    </header>

    <div class="flex-grow">
        
    <!-- Login Form Section -->
    <section class=" p-4 mx-auto mt-8 bg-white rounded-md shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-[#022B3A] mb-4 text-center">Login</h2>
        <form action="#" method="post" class="space-y-4">
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm text-[#4A5568]">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-[#CBD5E0] rounded">
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-sm text-[#4A5568]">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-[#CBD5E0] rounded">
            </div>

            <!-- Login Button -->
            <button type="submit" class="bg-[#022B3A] text-white py-2 px-4 rounded-full hover:bg-[#034158] w-full">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>
        <!-- Forgot Password Link -->
        <a href="#" class="text-[#4A5568] mt-4 text-sm text-center block">Forgot Password?</a>
        <!-- Register Link -->
        <p class="mt-1 text-[#4A5568] text-center">Don't have an account? <a href="#" class="text-[#022B3A]">Register</a></p>
    </section>
    </div>

    <!-- Footer Section -->
    <footer class="bg-[#022B3A] text-white p-4 text-center">
        <p>&copy; 2024 Your Job Website. All rights reserved.</p>
    </footer>
</body>
</html>
