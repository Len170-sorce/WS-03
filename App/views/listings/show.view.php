<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>
<?= loadPartial('top-banner'); ?>

<section class="container mx-auto p-4 mt-4">
    <div class="rounded-lg shadow-md bg-white p-3 flex justify-between items-center mb-4">
        <a class="block p-4 text-blue-700" href="/listings">
            <i class="fa fa-arrow-alt-circle-left"></i>
            Back To Listings
        </a>

        <div class="flex items-center space-x-4 mr-4">
            <a href="/listings/edit/<?= $listing->id ?>" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded">Edit</a>
            <!-- Delete Form -->
            <form method="POST" class="m-0 flex items-center">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">Delete</button>
            </form>
            <!-- End Delete Form -->
        </div>
    </div>

    <div class="rounded-lg shadow-md bg-white mb-4">
        <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $listing->title ?></h2>
            <p class="text-gray-700 text-lg mt-2">
                <?= $listing->description ?>
            </p>
            <ul class="my-4 bg-gray-100 p-4">
                <li class="mb-2"><strong>Salary:</strong> <?= formatSalary($listing->salary) ?></li>
                <li class="mb-2">
                    <strong>Location:</strong> <?= $listing->city ?>, <?= $listing->state ?>
                    <span
                        class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span>
                </li>
                </li>
                    <?php if(!empty($listing->tags)) : ?>
                        <li class="mb-2">
                            <strong>Tags:</strong> <?= $listing->tags ?>
                        </li>
                    <?php endif; ?>
            </ul>
        </div>
    </div>

    <!-- Job Details -->
    <div class="bg-white p-4 mt-4 rounded-lg shadow-md">
        <h3 class="text-xl font-bold mb-4">Job Details</h3>

        <h4 class="text-blue-700 font-semibold mb-2">Job Requirements</h4>
        <p class="mb-4"><?= $listing->requirements ?></p>

        <h4 class="text-blue-700 font-semibold mb-2">Benefits</h4>
        <p><?= $listing->benefits ?></p>
    </div>

    <p class="my-5">
        Put "Job Application" as the subject of your email and attach your resume.
    </p>
    <a
        href="mailto:<?= $listing->email ?>"
        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200 cursor-pointer"
    >
        Apply Now
    </a>
 </section>

<?= loadPartial('bottom-banner'); ?>
<?= loadPartial('footer'); ?>