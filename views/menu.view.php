<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
    <main class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-pink-400 to-blue-400">
        <!-- Modern Grooming Treatments Menu -->
        <div class="bg-white p-6 rounded shadow-md max-w-md w-full">
            <h2 class="text-3xl font-bold mb-6">Grooming Treatments</h2>

            <div class="grid grid-cols-1 gap-4">
                <!-- Treatment Card 1 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Basic Grooming</h3>
                    <p class="text-gray-600">Our essential grooming package</p>
                    <p class="text-green-600 font-bold text-xl mt-2">£30</p>
                </div>

                <!-- Treatment Card 2 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Full Grooming</h3>
                    <p class="text-gray-600">The ultimate grooming experience</p>
                    <p class="text-green-600 font-bold text-xl mt-2">£50</p>
                </div>

                <!-- Treatment Card 3 -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Nail Clipping</h3>
                    <p class="text-gray-600">Keep your pet's nails in top shape</p>
                    <p class="text-green-600 font-bold text-xl mt-2">£15</p>
                </div>

                <!-- Add more treatment cards as needed -->
            </div>
        </div>
    </main>
<?php require('partials/footer.php') ?>