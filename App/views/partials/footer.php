<footer class="bg-gradient-to-r from-blue-900 to-blue-700 text-white mt-16 py-6 shadow-inner">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-2xl font-bold tracking-wide">Jobseek</h2>

        <p class="text-sm text-blue-100 mt-2">
            Connecting talented people with great opportunities.
        </p>

        <div class="flex justify-center gap-6 mt-4 text-sm">
            <a href="/" class="hover:text-gray-200 transition">Home</a>
            <a href="/listings" class="hover:text-gray-200 transition">Jobs</a>
            <a href="/auth/login" class="hover:text-gray-200 transition">Login</a>
            <a href="/auth/register" class="hover:text-gray-200 transition">Register</a>
        </div>

        <div class="border-t border-blue-500 mt-5 pt-3 text-xs text-blue-100">
            &copy; <?= date('Y') ?> Jobseek • Built with PHP & Tailwind CSS
        </div>
    </div>
</footer>