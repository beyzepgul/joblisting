<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Job Listing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen">
    <!-- Header Section -->
    <header class="bg-[#022B3A] text-white p-4 flex justify-between items-center">
        <div id="logo" class="flex items-center">
            <img src="your-logo.png" alt="Logo" class="w-8 h-auto mr-2">
            <h1 class="text-lg font-bold">Your Job Website</h1>
        </div>
        <nav class="flex">
            <a href="#" class="text-white text-sm mr-4"><i class="fas fa-user-plus"></i> Register</a>
            <a href="#" class="text-white text-sm"><i class="fas fa-sign-in-alt"></i> Login</a>
        </nav>
    </header>

    <!-- Banner Section -->
    <section class="bg-[#022B3A] text-white p-4 text-center">
        <img src="banner-image.jpg" alt="Banner Image" class="w-full h-auto mb-4">
        <h2 class="text-3xl font-bold mb-4">Find or Post Jobs</h2>
        <button class="bg-[#022B3A] hover:bg-[#034158] text-white font-bold py-2 px-4 rounded-full">
            <i class="fas fa-user-plus"></i> Sign Up
        </button>
    </section>

    <!-- Search Bar Section -->
    <section class="p-4 bg-[#022B3A] text-white">
        <div class="flex flex-wrap items-center space-x-4">
            <input type="text" placeholder="Search for jobs" class="flex-1 p-2 border border-[#4A677D] rounded-l text-[#4A677D] mb-2 sm:mb-0">

            <!-- Job Category Dropdown -->
            <div class="relative w-full sm:w-auto mb-2 sm:mb-0">
                <div class="absolute inset-y-0 left-0 flex items-center px-2 pointer-events-none text-[#4A677D]">
                    <i class="fas fa-briefcase"></i> <!-- Customize with your preferred icon -->
                </div>
                <select class="p-2 pl-8 border border-[#4A677D] rounded text-[#4A677D] w-full sm:w-auto">
                    <option value="" selected disabled>Category</option>
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <!-- Location Dropdown -->
            <div class="relative w-full sm:w-auto mb-2 sm:mb-0">
                <div class="absolute inset-y-0 left-0 flex items-center px-2 pointer-events-none text-[#4A677D]">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <select class="p-2 pl-8 border border-[#4A677D] rounded text-[#4A677D] w-full sm:w-auto">
                    <option value="" selected disabled>Location</option>
                    <option value="location1">Location 1</option>
                    <option value="location2">Location 2</option>
                    <!-- Add more locations as needed -->
                </select>
            </div>

            <!-- Experience Level Dropdown -->
            <div class="relative w-full sm:w-auto mb-2 sm:mb-0">
                <div class="absolute inset-y-0 left-0 flex items-center px-2 pointer-events-none text-[#4A677D]">
                    <i class="fas fa-level-up-alt"></i>
                </div>
                <select class="p-2 pl-8 border border-[#4A677D] rounded text-[#4A677D] w-full sm:w-auto">
                    <option value="" selected disabled>Experience Level</option>
                    <option value="entry">Entry Level</option>
                    <option value="mid">Mid Level</option>
                    <option value="senior">Senior Level</option>
                    <!-- Add more experience levels as needed -->
                </select>
            </div>

            <!-- Search Button -->
            <button class="bg-[#4A677D] hover:bg-[#034158] text-white p-2 rounded-r">
                <i class="fas fa-search"></i> Search
            </button>
        </div>
    </section>
    
    <!-- Job Listing Section -->
    <section class="p-4">
        <!-- Example job listing item -->
        <div class="mb-4 p-4 border border-[#4A677D] rounded">
            <img src="job-image-1.jpg" alt="Job Image" class="w-full h-auto mb-4">
            <h3 class="text-xl font-bold">Job Title</h3>
            <p class="text-gray-600">Company Name | Location</p>
            <p>Description of the job listing goes here.</p>
            <button class="bg-[#022B3A] hover:bg-[#034158] text-white p-2 rounded-full mt-2">
                <i class="fas fa-info-circle"></i> View Details
            </button>
        </div>
        <div class="mb-4 p-4 border border-[#4A677D] rounded">
            <img src="job-image-2.jpg" alt="Job Image" class="w-full h-auto mb-4">
            <h3 class="text-xl font-bold">Job Title</h3>
            <p class="text-gray-600">Company Name | Location</p>
            <p>Description of the job listing goes here.</p>
            <button class="bg-[#022B3A] hover:bg-[#034158] text-white p-2 rounded-full mt-2">
                <i class="fas fa-info-circle"></i> View Details
            </button>
        </div>

        <!-- Repeat the job listing items as needed -->
    </section>

    <!-- Job Details Section (hidden by default) -->
    <section id="jobDetails" class="hidden p-4 bg-[#4A677D]">
        <!-- Job details content goes here -->
        <button class="bg-[#E74C3C] hover:bg-[#C0392B] text-white p-2 rounded-full">
            <i class="fas fa-times"></i> Close
        </button>
        <!-- Previous and Next buttons can be added here -->
    </section>

    <!-- Pagination Section -->
    <section class="p-4 flex justify-center">
        <button class="bg-[#4A677D] hover:bg-[#607D8B] text-[#022B3A] p-2 rounded-l">
            <i class="fas fa-chevron-left"></i> Previous
        </button>
        <span class="mx-4">Page 1 of 5</span>
        <button class="bg-[#4A677D] hover:bg-[#607D8B] text-[#022B3A] p-2 rounded-r">
            Next <i class="fas fa-chevron-right"></i>
        </button>
    </section>

    <!-- Footer Section -->
    <footer class="bg-[#022B3A] text-white p-4 text-center">
        <p>&copy; 2024 Your Job Website. All rights reserved.</p>
    </footer>
</body>
</html>
