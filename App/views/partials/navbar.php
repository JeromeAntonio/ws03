<?php

use Framework\Session;
?>
<!-- Nav -->
<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex
    justify-between items-center">

        <h1>
            <a href="/"
                class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-3 rounded-lg text-3xl font-bold transition duration-300 shadow-md inline-block">
                Jobseek
            </a>
        </h1>

        <nav class="space-x-4">
            <?php if (Session::has('user')) : ?>
                <div class="flex justify-between
                items-center gap-4">

                    <div>Welcome <?= Session::get('user')['name'] ?></div>

                    <form method="POST" action="/auth/logout">
                        <button type="submit"
                            class="text-white inline
                        hover:underline">Logout</button>
                    </form>
                    <a
                        href="/listings/create"
                        class="bg-yellow-500
                         hover:bg-yellow-600 text-black
                        px-4 py-2 rounded
                        hover:shadow-md transition
                       duration-300"><i class="fa
                        fa-edit"></i> Post a Job</a>
                </div>

            <?php else: ?>
                <a href="/auth/login"
                    class="bg-white text-blue-900 px-4 py-2 rounded hover:bg-gray-200 transition duration-300 font-semibold">
                    Login
                </a>

                <a href="/auth/register"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 font-semibold">
                    Register
                </a>

            <?php endif; ?>
        </nav>
    </div>

</header>