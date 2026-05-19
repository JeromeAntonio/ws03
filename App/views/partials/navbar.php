<?php

use Framework\Session;
?>

<header class="main-navbar">

    <div class="container mx-auto navbar-wrapper">

        <!-- LOGO -->

        <h1>

            <a href="/" class="logo">

                <span class="logo-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </span>

                Jobseek

            </a>

        </h1>

        <!-- NAV -->

        <nav>

            <?php if (Session::has('user')) : ?>

                <div class="nav-auth-area">

                    <div class="welcome-user">

                        <span class="welcome-dot"></span>

                        Welcome,
                        <?= Session::get('user')['name'] ?>

                    </div>

                    <a href="/listings/create"
                        class="post-job-btn">

                        <i class="fa-solid fa-plus"></i>

                        Post Job

                    </a>

                    <form method="POST" action="/auth/logout">

                        <button
                            type="submit"
                            class="logout-btn">

                            <i class="fa-solid fa-right-from-bracket"></i>

                            Logout

                        </button>

                    </form>

                </div>

            <?php else: ?>

                <div class="nav-guest-area">

                    <a href="/auth/login" class="login-btn">
                        Login
                    </a>

                    <a href="/auth/register" class="register-btn">
                        Register
                    </a>

                </div>

            <?php endif; ?>

        </nav>

    </div>

</header>