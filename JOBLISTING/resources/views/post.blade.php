<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Your Job Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col bg-gray-100 min-h-screen">
    <!-- Header Section -->
    <header class="bg-[#022B3A] text-white p-4 flex justify-between items-center">
        <div id="logo" class="flex items-center">
            <img src="your-logo.png" alt="Logo" class="w-8 h-auto mr-2">
            <h1 class="text-lg font-bold">Your Job Website</h1>
        </div>
        <nav class="flex">
            <p class="text-white text-bold mr-5">Welcome User</p>
            <a href="#" class="text-white text-sm mr-5"><i class="fas fa-list"></i> Manage Listings</a>
            <a href="#" class="text-white text-sm"><i class="fas fa-door-open"></i> Logout</a>
        </nav>
        
    </header>

    <!-- Modal for Edit Form -->
    <div class=" inset-0 flex items-center justify-center mt-10 mb-10">
        <div class=" bg-white p-8 rounded-md w-full max-w-4xl">
            <!-- Job Application Form -->
            <form class="space-y-4 relative">
                <!-- Form content goes here -->
                <h2 class="text-2xl font-bold mb-4">Post a Job</h2>
                <div class="flex">
                    <div class="mx-4">
                        <!-- Job Title-->
                        <div>
                            <label class="block text-gray-700">Job Title:</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                        <!-- Additional Job Details -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700">Job Type:</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700">Salary Range:</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700">Experience Level:</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700">Education Level:</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded">
                            </div>
                        </div>
                        
                    </div>
                    <div class="mx-4">
                        <!-- Company and Location -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700">Company Name:</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700">Location:</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded">
                            </div>
                        </div>
                        
                        <!-- Additional Job Details -->
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Contact Information -->
                            <div>
                                <label class="block text-gray-700">Contact Information:</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded">
                            </div>
                            <!-- Website Information -->
                            <div>
                                <label class="block text-gray-700">Website Link:</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded">
                            </div>
                        </div>
                        <!-- Application Link -->
                        <div>
                            <label class="block text-gray-700">Application Link:</label>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded">
                        </div> 
                    </div>
                </div>
                <div>
                <div class="mx-4">
                    <!-- Job Description -->
                    <div>
                        <label class="block text-gray-700">Job Description:</label>
                        <textarea class="w-full p-2 border border-gray-300 rounded"></textarea>
                    </div>
                </div>
                    
                </div>
                <!-- Submit Button -->
                <button type="submit" class="bg-[#022B3A] hover:bg-[#034158] text-white py-2 px-4 rounded-full mt-2 w-full mt-20">
                    Post
                </button>
            </form>
        </div>
    </div>
    
    <!-- Footer Section -->
    <footer class="bg-[#022B3A] text-white p-4 text-center">
        <p>&copy; 2024 Your Job Website. All rights reserved.</p>
    </footer>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>
