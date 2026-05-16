<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>

<section class="flex justify-center items-center mt-20 mb-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-6">
        <h2 class="text-4xl font-bold text-center mb-4">Create Job Listing</h2>
        <form method="POST" action="/listings">
            <h2 class="text-2xl font-bold text-center text-gray-500 mb-8">
                Job Info
            </h2>
            <?= loadPartial('errors', [
                'errors' => $errors ?? []
            ]) ?>
            <div class="mb-4">
                <input
                    type="text"
                    name="title"
                    placeholder="Job Title"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900" value="<?= $listing['title'] ?? '' ?>"
                />
            </div>
            <div class="mb-4">
                <textarea
                    name="description"
                    placeholder="Job Description"
                    rows="5"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                ><?= $listing['description'] ?? '' ?></textarea>
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="salary"
                    placeholder="Annual Salary"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['salary'] ?? '' ?>" 
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="requirements"
                    placeholder="Requirements"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['requirements'] ?? '' ?>" 
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="benefits"
                    placeholder="Benefits"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['benefits'] ?? '' ?>" 
                />
            </div>

            <div class="mb-4">
                <input
                    type="text"
                    name="tags"
                    placeholder="Tags"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['tags'] ?? '' ?>" 
                />
            </div>

            <h2 class="text-2xl font-bold text-center text-gray-500 mb-8 mt-10">
                Company Info & Location
            </h2>
            <div class="mb-4">
                <input
                    type="text"
                    name="company"
                    placeholder="Company Name"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['company'] ?? '' ?>" 
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="address"
                    placeholder="Address"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['address'] ?? '' ?>" 
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="city"
                    placeholder="City"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['city'] ?? '' ?>" 
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="state"
                    placeholder="State"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['state'] ?? '' ?>" 
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="phone"
                    placeholder="Phone"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['phone'] ?? '' ?>" 
                />
            </div>
            <div class="mb-8">
                <input
                    type="email"
                    name="email"
                    placeholder="Email Address For Applications"
                    class="w-full px-4 py-3 border rounded focus:outline-none text-gray-900"
                    value="<?= $listing['email'] ?? '' ?>" 
                />
            </div>

            <button
                type="submit"
                class="w-full bg-green-500 px-4 py-3 mb-4 rounded font-bold hover:bg-green-600 transition duration-300"
                style="color: white !important;"
            >
                Save
            </button>
            <a
                href="/listings"
                class="block text-center w-full bg-red-500 px-4 py-3 rounded font-bold hover:bg-red-600 transition duration-300"
                style="color: white !important;"
            >
                Cancel
            </a>
        </form>
    </div>
</section>

<?= loadPartial('bottom-banner'); ?>
</body>
</html>