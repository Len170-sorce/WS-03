<?php 
use Framework\Session;
?>
<section class="container mx-auto my-6">
    <div class="bg-surface border border-steel rounded-xl p-6 flex items-center justify-between flex-wrap gap-4">
        <div>
            <h2 class="text-xl font-bold mb-1 text-white">
                Looking to hire?
            </h2>
            <p class="text-blue-300 text-base m-0">
                Post your job listing now and find the perfect candidate.
            </p>
        </div>
        <?php if (Session::has('user')) : ?>
        <a href="/listings/create"
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold text-sm px-4 py-2 rounded transition duration-300 no-underline">
            <i class="fa fa-edit"></i> Post a Job
        </a>
        <?php endif; ?>
    </div>
</section>