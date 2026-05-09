<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="flex justify-center items-center mt-20 mb-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-6">
        <h2 class="text-4xl font-bold text-center mb-4">Create Job Listing</h2>
        <form method="POST" action="/listings">
            <h2 class="text-2xl font-bold text-center text-gray-500 mb-8">
                Job Info
            </h2>
            <div class="mb-4">
                <input
                    type="text"
                    name="title"
                    placeholder="Job Title"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <textarea
                    name="description"
                    placeholder="Job Description"
                    rows="5"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                ></textarea>
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="salary"
                    placeholder="Annual Salary"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="requirements"
                    placeholder="Requirements"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="benefits"
                    placeholder="Benefits"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
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
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="address"
                    placeholder="Address"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="city"
                    placeholder="City"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="state"
                    placeholder="State"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="phone"
                    placeholder="Phone"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-8">
                <input
                    type="email"
                    name="email"
                    placeholder="Email Address For Applications"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>

            <button
                type="submit"
                class="w-full bg-yellow-500 px-4 py-3 mb-4 rounded font-bold hover:bg-yellow-600 transition duration-300"
                style="color: white !important;"
            >
                Post Listing
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

<?php loadPartial('footer'); ?>