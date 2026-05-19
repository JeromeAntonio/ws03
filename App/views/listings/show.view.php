<?php require basePath('App/views/partials/head.php'); ?>
<?php require basePath('App/views/partials/navbar.php'); ?>
<?php require basePath('App/views/partials/top-banner.php'); ?>

<section class="job-details-hero">

    <div class="job-details-container">

        <!-- TOP CARD -->

        <div class="job-details-card">

            <?= loadPartial('message') ?>

            <!-- TOP ACTIONS -->

            <div class="job-details-top">

                <a class="back-btn" href="/listings">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back To Listings
                </a>

                <?php if (Framework\Authorization::isOwner($listing['user_id'])) : ?>

                    <div class="job-action-buttons">

                        <a
                            href="/listings/edit/<?= $listing['id'] ?>"
                            class="edit-job-btn">

                            <i class="fa-solid fa-pen"></i>
                            Edit

                        </a>

                        <form
                            method="POST"
                            action="/listings/delete/<?= $listing['id'] ?>">

                            <input
                                type="hidden"
                                name="_method"
                                value="DELETE">

                            <button
                                type="submit"
                                class="delete-job-btn">

                                <i class="fa-solid fa-trash"></i>
                                Delete

                            </button>

                        </form>

                    </div>

                <?php endif; ?>

            </div>

            <!-- JOB CONTENT -->

            <div class="job-details-content">

                <div class="job-title-badge">
                    Featured Opportunity
                </div>

                <h1>
                    <?= $listing['title'] ?>
                </h1>

                <p class="job-main-description">
                    <?= $listing['description'] ?>
                </p>

                <!-- INFO GRID -->

                <div class="job-info-grid">

                    <!-- SALARY -->

                    <div class="job-info-item">

                        <div class="job-info-icon salary-icon">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </div>

                        <div>
                            <span>Salary</span>

                            <h3>
                                <?= formatSalary($listing['salary']) ?>
                            </h3>
                        </div>

                    </div>

                    <!-- LOCATION -->

                    <div class="job-info-item">

                        <div class="job-info-icon location-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <span>Location</span>

                            <h3>
                                <?= $listing['city'] ?>,
                                <?= $listing['state'] ?>
                            </h3>
                        </div>

                    </div>

                    <!-- TAGS -->

                    <?php if (!empty($listing['tags'])) : ?>

                        <div class="job-info-item full-width">

                            <div class="job-info-icon tag-icon">
                                <i class="fa-solid fa-tags"></i>
                            </div>

                            <div>
                                <span>Technologies</span>

                                <h3>
                                    <?= $listing['tags'] ?>
                                </h3>
                            </div>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <!-- DETAILS SECTION -->

        <div class="details-grid">

            <!-- REQUIREMENTS -->

            <div class="details-box">

                <h2>
                    <i class="fa-solid fa-circle-check"></i>
                    Requirements
                </h2>

                <p>
                    <?= $listing['requirements'] ?>
                </p>

            </div>

            <!-- BENEFITS -->

            <div class="details-box">

                <h2>
                    <i class="fa-solid fa-gift"></i>
                    Benefits
                </h2>

                <p>
                    <?= $listing['benefits'] ?>
                </p>

            </div>

        </div>

        <!-- APPLY BOX -->

        <div class="apply-box">

            <h2>
                Ready to Apply?
            </h2>

            <p>
                Put "Job Application" as the subject of your email and attach your resume.
            </p>

            <a
                href="mailto:<?= $listing['email'] ?>"
                class="apply-btn">

                <i class="fa-solid fa-paper-plane"></i>
                Apply Now

            </a>

        </div>

    </div>

</section>


<?php require basePath('App/views/partials/footer.php'); ?>