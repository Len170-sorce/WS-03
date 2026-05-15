<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>

<section class="flex justify-center items-center mt-20 mb-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-6">
        <h2 class="text-4xl font-bold text-center mb-4">Edit Job Listing</h2>
        <form method="POST" action="/listings/<?= $listing->id ?>">
            <input type="hidden" name="_method" value="PUT">
            <h2 class="text-2xl font-bold text-center text-gray-500 mb-8">
                Job Info
            </h2>
            <div class="mb-4">
                <input
                    type="text"
                    name="title"
                    placeholder="Job Title"
                    value="<?= $listing->title ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <textarea
                    name="description"
                    placeholder="Job Description"
                    rows="5"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                ><?= $listing->description ?></textarea>
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="salary"
                    placeholder="Annual Salary"
                    value="<?= $listing->salary ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="requirements"
                    placeholder="Requirements"
                    value="<?= $listing->requirements ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="benefits"
                    placeholder="Benefits"
                    value="<?= $listing->benefits ?>"
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
                    value="<?= $listing->company ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="address"
                    placeholder="Address"
                    value="<?= $listing->address ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="city"
                    placeholder="City"
                    value="<?= $listing->city ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="state"
                    placeholder="State"
                    value="<?= $listing->state ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="phone"
                    placeholder="Phone"
                    value="<?= $listing->phone ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-8">
                <input
                    type="email"
                    name="email"
                    placeholder="Email Address For Applications"
                    value="<?= $listing->email ?>"
                    class="w-full px-4 py-3 border rounded focus:outline-none"
                />
            </div>

            <button
                type="submit"
                class="w-full bg-yellow-500 px-4 py-3 mb-4 rounded font-bold hover:bg-yellow-600 transition duration-300"
                style="color: white !important;"
            >
                Update
            </button>
            <a
                href="/listing/<?= $listing->id ?>"
                class="block text-center w-full bg-red-500 px-4 py-3 rounded font-bold hover:bg-red-600 transition duration-300"
                style="color: white !important;"
            >
                Cancel
            </a>
        </form>
    </div>
</section>

<?= loadPartial('footer'); ?>
