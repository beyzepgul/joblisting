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
    <div class="flex-grow w-5/6 mx-auto">
        <!-- Manage Listings Section -->
        <section class="p-4 mx-auto mt-8 bg-white rounded-md shadow-md w-full">
            <h2 class="text-2xl font-bold text-[#022B3A] mb-4">Manage Listings</h2>
            <!-- Gray horizontal line -->
            <hr class="border-gray-300 mb-4">
            <div class="space-y-4 ">
                <!-- Example job listing with toggle and edit button -->
                <div class="flex justify-between items-center pr-10">
                    <div>
                        <h3 class="cursor-pointer text-[#022B3A]" onclick="toggleJobDetails('jobDetails1')">Senior Web Developer
                            <i class="fa-solid fa-caret-down pl-2"></i>
                        </h3>                    
                    </div>
                    <div>
                        <a href="#" class="text-[#4A5568] text-sm mr-2" onclick="openEditModal('jobDetails1')"><i class="fas fa-edit"></i> Edit</a>
                        <a href="#" class="text-[#4A5568] text-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                    </div>
                </div>
                <!-- Job Details Section -->
                <section id="jobDetails1" class="justify-center hidden mt-5 mr-5 p-10 w-full mb-4 border rounded bg-[#f1f5f9]">
                    <h3 class="text-2xl font-bold">Senior Web Developer</h3>
                    <!-- Job details content goes here -->
                    <p class="text-gray-600">
                        <i class="fas fa-building"></i>
                        Company Name &bull; 
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
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Duis semper ex tempus massa lacinia, eu luctus nunc volutpat. Cras et purus non nunc cursus mollis. Morbi in libero vel neque scelerisque suscipit. Nulla eu pretium massa. Curabitur at egestas nunc. Fusce sit amet nunc in libero venenatis dignissim.</p>

                    <p class="text-gray-600 pt-20">
                        <i class="fas fa-globe"></i> 
                        Website | <br>
                        <i class="fas fa-envelope"></i> 
                        Contact
                    </p>
                </section>
                <!-- Gray horizontal line -->
            <hr class="border-gray-300 mb-4">
            </div>
        </section>
    </div>

    <!-- Modal for Edit Form -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center hidden backdrop-sepia-0 bg-[#022B3A]/50">
        <div class="modal-content bg-white p-8 rounded-md w-full max-w-4xl">
            <!-- Job Application Form -->
            <form class="space-y-4 relative">
                <!-- Close button for the modal -->
                <button class="bg-[#022B3A] hover:bg-gray-700 text-white p-1 pl-2 pr-2 rounded-full absolute top-0 right-0" onclick="closeEditModal('editModal')">
                    <i class="fas fa-times p-1"></i>
                </button>
                <!-- Form content goes here -->
                <h2 class="text-2xl font-bold mb-4">Edit Job</h2>
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
                    Submit Application
                </button>
            </form>
        </div>
    </div>



    <!-- JavaScript to handle toggling and modal functionality -->
    <script>
        function toggleJobDetails(jobId) {
            var jobDetails = document.getElementById(jobId);
            jobDetails.classList.toggle('hidden');
        }

        function openEditModal(jobId) {
            var editModal = document.getElementById('editModal');
            editModal.classList.remove('hidden');
            // Add logic to populate form fields based on job details
        }

        function closeEditModal(jobId) {
            var editModal = document.getElementById('editModal');
            editModal.classList.add('hidden');
        }
    </script>
    <!-- Footer Section -->
    <footer class="bg-[#022B3A] text-white p-4 text-center">
        <p>&copy; 2024 Your Job Website. All rights reserved.</p>
    </footer>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>
