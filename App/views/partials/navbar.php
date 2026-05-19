<?php 
use Framework\Session;
?>
<header class="bg-blue-900 text-white sticky top-0 z-10">
    <div class="container mx-auto px-4 flex justify-between items-center h-11">

        <div class="flex items-center gap-3">
            <div class="bg-blue-700 w-8 h-8 rounded-lg flex items-center justify-center shrink-0">
                <i class="fa fa-briefcase text-white"></i>
            </div>
            <h1 class="m-0 font-bold text-xl tracking-tight">
                <a href="/" class="no-underline">
                    <span class="text-white">Job</span><span class="text-blue-400">Seek</span>
                </a>
            </h1>
        </div>

        <nav class="flex items-center gap-3">
            <?php if (Session::has('user')) : ?>

                <span class="text-blue-300 text-sm font-medium border-r border-blue-700 pr-4">
                    Welcome, <?php echo Session::get('user')['name']; ?>
                </span>

                <form method="POST" action="/auth/logout" class="flex items-center m-0">
                    <button type="submit"
                        class="text-white text-sm font-semibold bg-blue-700 hover:bg-blue-600 border border-blue-700 rounded px-4 py-2 cursor-pointer transition duration-300">
                        Logout
                    </button>
                </form>

                <a href="/listings/create"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded font-bold text-sm transition duration-300">
                    <i class="fa fa-edit"></i> Post a Job
                </a>

            <?php else: ?>

                <a href="/auth/login"
                    class="text-white text-sm font-semibold bg-blue-700 hover:bg-blue-600 rounded px-4 py-2 transition duration-300">
                    Login
                </a>

                <a href="/auth/register"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded font-bold text-sm transition duration-300">
                    Register
                </a>

            <?php endif; ?>
        </nav>

    </div>
</header>