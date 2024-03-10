<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Job Listing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
    <!-- Salary Range Slider CSS -->
    <style>
        /* Style for the slider */
        input[type="range"] {
            -webkit-appearance: none;
            width: 100%;
            height: 10px;
            border-radius: 5px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            transition: opacity .2s;
            margin-bottom: 8px;
        }

        /* Style for the slider thumb */
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #4A677D;
            cursor: pointer;
        }

        /* Style for the slider thumb on hover */
        input[type="range"]:hover::-webkit-slider-thumb {
            background: #034158;
        }
    </style>
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
            <!-- Search Input -->
            <input type="text" placeholder="Search for jobs" class="flex-1 p-2 border border-[#4A677D] rounded-l mb-2 sm:mb-0 text-[#4A677D]">

            <!-- Advanced Search Button -->
            <button id="toggleAdvancedSearch" class="bg-[#4A677D] hover:bg-[#034158] text-white p-2 rounded-r">
                <i class="fas fa-sliders-h"></i> Advanced Search
            </button>

            <!-- Advanced Search Modal (Initially Hidden) -->
            <div id="advancedSearchModal" class="z-100 hidden z-1 fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
                <!-- Modal Content -->
                <div class="bg-white p-4 rounded max-w-md relative">
                    <!-- Close Button -->
                    <button id="closeModal" class="absolute top-4 right-4 text-[#4A677D] hover:text-[#034158]">
                        <i class="fas fa-times"></i>
                    </button>
                    
                    <!-- Job Category Dropdown -->
                    <div class="mb-4 flex items-center">
                        <label for="jobCategory" class="text-[#4A677D]">Category:</label>
                        <select id="jobCategory" class="ml-20 w-1/2 p-2 border border-[#4A677D] rounded text-[#4A677D]">
                            <option value="" selected disabled>Choose Category</option>
                            <option value="category1">Category 1</option>
                            <option value="category2">Category 2</option>
                            <!-- Add more categories as needed -->
                        </select>
                    </div>

                    <!-- Location Dropdown -->
                    <div class="mb-4 flex items-center">
                        <label for="jobLocation" class="text-[#4A677D]">Location:</label>
                        <select id="jobLocation" class="ml-20 w-1/2 p-2 border border-[#4A677D] rounded text-[#4A677D]">
                            <option value="" selected disabled>Choose Location</option>
                            <option value="location1">Location 1</option>
                            <option value="location2">Location 2</option>
                            <!-- Add more locations as needed -->
                        </select>
                    </div>

                    <!-- Experience Level Dropdown -->
                    <div class="mb-4 flex items-center">
                        <label for="experienceLevel" class="text-[#4A677D]">Experience Level:</label>
                        <select id="experienceLevel" class="ml-10 w-1/2 p-2 border border-[#4A677D] rounded text-[#4A677D]">
                            <option value="" selected disabled> Experience Level</option>
                            <option value="entry">Entry Level</option>
                            <option value="mid">Mid Level</option>
                            <option value="senior">Senior Level</option>
                            <!-- Add more experience levels as needed -->
                        </select>
                    </div>

                    <!-- Job Type Dropdown -->
                    <div class="mb-4 flex items-center">
                        <label for="jobType" class="text-[#4A677D]">Job Type:</label>
                        <select id="jobType" class="ml-24 w-1/2 p-2 border border-[#4A677D] rounded text-[#4A677D]">
                            <option value="" selected disabled>Choose Job Type</option>
                            <option value="fulltime">Full-Time</option>
                            <option value="parttime">Part-Time</option>
                            <option value="contract">Contract</option>
                            <!-- Add more job types as needed -->
                        </select>
                    </div>

                    <!-- Education Level Dropdown -->
                    <div class="mb-4 flex items-center">
                        <label for="educationLevel" class="text-[#4A677D]">Education Level:</label>
                        <select id="educationLevel" class="ml-10 w-1/2 p-2 border border-[#4A677D] rounded text-[#4A677D]">
                            <option value="" selected disabled>Education Level</option>
                            <option value="highschool">High School</option>
                            <option value="associate">Associate's Degree</option>
                            <option value="bachelor">Bachelor's Degree</option>
                            <option value="master">Master's Degree</option>
                            <!-- Add more education levels as needed -->
                        </select>
                    </div>

                    <!-- Salary Range Slider -->
                    <div class="mb-4">
                        <label for="salaryRange" class="text-[#4A677D]">Salary Range:</label>
                        <input type="range" id="salaryRange" min="0" max="150000" step="10000" class="text-[#4A677D]">
                        <div class="flex justify-between">
                            <span id="salaryValue" class="text-[#4A677D]">0</span>
                            <span class="text-[#4A677D]">Php 150,000</span>
                        </div>
                    </div>

                    <!-- Apply Button -->
                    <button class="bg-[#4A677D] hover:bg-[#034158] text-white p-2 rounded">
                        <i class="fas fa-search"></i> Apply
                    </button>
                </div>
            </div>

            <!-- Search Button -->
            <button class="bg-[#4A677D] hover.bg-[#034158] text-white p-2 rounded-r">
                <i class="fas fa-search"></i> Search
            </button>
        </div>
    </section>
    
    <!-- Job Listing Section -->
    <div class="flex m-2">
        <!-- Job Listing Section -->
            <section class="p-4 flex-1">
                <!-- Job listing item -->
                <div class="mb-4 p-4 border border-[#4A677D] rounded">
                    <img src="job-image-1.jpg" alt="Job Image" class="w-full h-auto mb-4">
                    <h3 class="text-xl font-bold">Job Title</h3>
                    <p class="text-gray-600">
                        <i class="fas fa-building"></i>
                        Company Name | 
                        <i class="fas fa-map-marker-alt"></i>
                        Location</p>
                    <p>Description of the job listing goes here.</p>
                    <button class="bg-[#022B3A] hover:bg-[#034158] text-white p-2 rounded-full mt-2 view-details-btn" onclick="toggleJobDetails('jobDetails1')">
                        <i class="fas fa-info-circle"></i> View Details
                    </button>
                </div>
                <!-- Job listing item -->
                <div class="mb-4 p-4 border border-[#4A677D] rounded">
                    <img src="job-image-1.jpg" alt="Job Image" class="w-full h-auto mb-4">
                    <h3 class="text-xl font-bold">Job Title</h3>
                    <p class="text-gray-600">
                        <i class="fas fa-building"></i>
                        Company Name | 
                        <i class="fas fa-map-marker-alt"></i>
                        Location</p>
                    <p>Description of the job listing goes here.</p>
                    <button class="bg-[#022B3A] hover:bg-[#034158] text-white p-2 rounded-full mt-2 view-details-btn" onclick="toggleJobDetails('jobDetails1')">
                        <i class="fas fa-info-circle"></i> View Details
                    </button>
                </div>
            </section>
        
        <!-- Job Details Section (hidden by default) -->
            <section id="jobDetails1" class=" justify-center hidden mt-5 mr-5 w-3/4 mb-4 p-8 border border-[#4A677D] rounded relative">
                <!-- Close button positioned in the upper right corner -->
                <button class="bg-[#fa7159] hover:bg-[#f89887] text-[#723327] p-2 pl-3 pr-3 rounded-full mt-3 mr-3 absolute top-0 right-0" 
                        onclick="toggleJobDetails('jobDetails1')">
                    <i class="fas fa-times p-1"></i>
                </button>
    
                <!-- Job details content goes here -->
                <h2 class="text-2xl font-bold mb-4">Job Title</h2>
                <p class="text-gray-600">
                    <i class="fas fa-building"></i>
                    Company Name | 
                    <i class="fas fa-map-marker-alt"></i>
                    Location
                </p>
                <p class="text-gray-800">
                    <i class="fas fa-calendar"></i> 
                    Posted on: [Date]</p>
                <p class="text-gray-800">
                    <i class="fas fa-briefcase"></i>
                    Job Type: [Full-Time/Part-Time/Contract]</p>
                <p class="text-gray-800">
                    <i class="fas fa-money-bill"></i>
                    Salary: [Salary Range]</p>
                <p class="text-gray-800">
                    <i class="fas fa-level-up-alt"></i>
                    Experience Level: [Entry/Mid/Senior Level]</p>
                <p class="text-gray-800">
                    <i class="fas fa-graduation-cap"></i>
                    Education Level: [Required Education]</p>
                <p class="text-gray-800">
                    <i class="fas fa-tags"></i>
                    Categories: [Category1, Category2, ...]</p>
                <p class="mt-2 pt-2">Description of the job listing goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <p class="text-gray-600 pt-20">
                    <i class="fas fa-globe"></i> 
                    Website | <br>
                    <i class="fas fa-envelope"></i> 
                    Contact
                </p>
                <!-- Apply Button -->
                <div class="pt-10">
                    <button class="bg-[#022B3A] hover:bg-[#034158] text-white p-3 rounded-full block">
                        <i class="fas fa-check"></i> Apply Now
                    </button>
                </div>

            </section>

    </div>

    <!-- Pagination Section -->
    <section class="p-4 flex justify-center">
        <button class="bg-[#022B3A] hover:bg-[#034158] text-white p-2 rounded-l">
            <i class="fas fa-chevron-left"></i> Previous
        </button>
        <span class="mx-4 p-2 ">Page 1 of 5</span>
        <button class="bg-[#022B3A] hover:bg-[#034158] text-white p-2 rounded-r">
            Next <i class="fas fa-chevron-right"></i>
        </button>
    </section>

    <!-- Footer Section -->
    <footer class="bg-[#022B3A] text-white p-4 text-center">
        <p>&copy; 2024 Your Job Website. All rights reserved.</p>
    </footer>

    <script>
        function toggleJobDetails(detailsId) {
            const jobDetailsSection = document.getElementById(detailsId);
            jobDetailsSection.classList.toggle("hidden");
        }
    
        // Slider value display
        const salaryRange = document.getElementById('salaryRange');
        const salaryValue = document.getElementById('salaryValue');
    
        salaryRange.addEventListener('input', () => {
            salaryValue.textContent = salaryRange.value;
        });
    
        // Toggle visibility of advanced search modal
        document.getElementById('toggleAdvancedSearch').addEventListener('click', function () {
            const advancedSearchModal = document.getElementById('advancedSearchModal');
            advancedSearchModal.classList.toggle('hidden');
            advancedSearchModal.style.zIndex = "1000"; // Set a high z-index value
        });
    
        // Close modal button
        document.getElementById('closeModal').addEventListener('click', function () {
            const advancedSearchModal = document.getElementById('advancedSearchModal');
            advancedSearchModal.classList.add('hidden');
        });
    </script>
</body>
</html>
