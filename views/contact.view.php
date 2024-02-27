<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
    <main class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-pink-400 to-blue-400">
        <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <form action="/send_email.php" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" required></textarea>
                </div>
                <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Send Message</button>
            </form>
        </div>
    </main>
<?php require('partials/footer.php') ?>