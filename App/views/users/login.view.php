<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>

<div class="flex justify-center items-center mt-20 mb-20 px-4">
    <div class="bg-white p-8 rounded-lg shadow-md w-full" style="max-width: 420px;">
        <h2 class="text-2xl text-center font-bold mb-6 text-blue-900">Login</h2>
        <?= loadPartial('errors', [
            'errors' => $errors ?? []
        ]) ?>

        <form method="POST" action="/auth/login">
            <div class="mb-4">
                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                />
            </div>
            <div class="mb-4">
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                />
            </div>
            <button
                type="submit"
                class="w-full bg-blue-700 hover:bg-blue-600 text-white font-bold px-4 py-2 rounded focus:outline-none transition duration-300">
                Login
            </button>

            <p class="mt-4 text-sm text-gray-500">
                Don't have an account?
                <a class="text-blue-700 font-semibold hover:underline" href="/auth/register">Register</a>
            </p>
        </form>
    </div>
</div>

<?= loadPartial('footer'); ?>