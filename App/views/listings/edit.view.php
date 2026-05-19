<?php require basePath('App/views/partials/head.php'); ?>
<?php require basePath('App/views/partials/navbar.php'); ?>

<section class="create-job-section">

    <div class="create-job-container">

        <!-- HEADER -->

        <div class="create-job-header">

            <div class="create-job-badge">
                <i class="fa-solid fa-pen-to-square"></i>
                Update Your Listing
            </div>

            <h1>Edit Job Listing</h1>

            <p>
                Update your job posting and keep your opportunity fresh for applicants.
            </p>

        </div>

        <!-- FORM CARD -->

        <div class="create-job-card">

            <?= loadPartial('errors', ['errors' => $errors ?? []]) ?>

            <form
                method="POST"
                action="/listings/<?= $listing['id'] ?>">

                <input
                    type="hidden"
                    name="_method"
                    value="PUT">

                <!-- JOB INFO -->

                <div class="form-section">

                    <h2 class="form-section-title">

                        <i class="fa-solid fa-briefcase"></i>

                        Job Information

                    </h2>

                    <div class="form-grid">

                        <!-- TITLE -->

                        <div class="form-group full-width">

                            <label>Job Title</label>

                            <input
                                type="text"
                                name="title"
                                placeholder="Enter job title"
                                value="<?= $listing['title'] ?? '' ?>" />

                        </div>

                        <!-- DESCRIPTION -->

                        <div class="form-group full-width">

                            <label>Job Description</label>

                            <textarea
                                name="description"
                                rows="5"
                                placeholder="Describe the role and responsibilities"><?= $listing['description'] ?? '' ?></textarea>

                        </div>

                        <!-- SALARY -->

                        <div class="form-group">

                            <label>Annual Salary</label>

                            <input
                                type="text"
                                name="salary"
                                placeholder="$85,000"
                                value="<?= $listing['salary'] ?? '' ?>" />

                        </div>

                        <!-- TAGS -->

                        <div class="form-group">

                            <label>Tags / Technologies</label>

                            <input
                                type="text"
                                name="tags"
                                placeholder="PHP, Laravel, MySQL"
                                value="<?= $listing['tags'] ?? '' ?>" />

                        </div>

                        <!-- REQUIREMENTS -->

                        <div class="form-group full-width">

                            <label>Requirements</label>

                            <input
                                type="text"
                                name="requirements"
                                placeholder="Required skills and experience"
                                value="<?= $listing['requirements'] ?? '' ?>" />

                        </div>

                        <!-- BENEFITS -->

                        <div class="form-group full-width">

                            <label>Benefits</label>

                            <input
                                type="text"
                                name="benefits"
                                placeholder="Health insurance, bonuses, remote work"
                                value="<?= $listing['benefits'] ?? '' ?>" />

                        </div>

                    </div>

                </div>

                <!-- COMPANY INFO -->

                <div class="form-section">

                    <h2 class="form-section-title">

                        <i class="fa-solid fa-building"></i>

                        Company Information

                    </h2>

                    <div class="form-grid">

                        <!-- COMPANY -->

                        <div class="form-group full-width">

                            <label>Company Name</label>

                            <input
                                type="text"
                                name="company"
                                placeholder="Company name"
                                value="<?= $listing['company'] ?? '' ?>" />

                        </div>

                        <!-- ADDRESS -->

                        <div class="form-group full-width">

                            <label>Address</label>

                            <input
                                type="text"
                                name="address"
                                placeholder="Street address"
                                value="<?= $listing['address'] ?? '' ?>" />

                        </div>

                        <!-- CITY -->

                        <div class="form-group">

                            <label>City</label>

                            <input
                                type="text"
                                name="city"
                                placeholder="City"
                                value="<?= $listing['city'] ?? '' ?>" />

                        </div>

                        <!-- STATE -->

                        <div class="form-group">

                            <label>State</label>

                            <input
                                type="text"
                                name="state"
                                placeholder="State"
                                value="<?= $listing['state'] ?? '' ?>" />

                        </div>

                        <!-- PHONE -->

                        <div class="form-group">

                            <label>Phone</label>

                            <input
                                type="text"
                                name="phone"
                                placeholder="Phone number"
                                value="<?= $listing['phone'] ?? '' ?>" />

                        </div>

                        <!-- EMAIL -->

                        <div class="form-group">

                            <label>Application Email</label>

                            <input
                                type="email"
                                name="email"
                                placeholder="Email address"
                                value="<?= $listing['email'] ?? '' ?>" />

                        </div>

                    </div>

                </div>

                <!-- ACTIONS -->

                <div class="create-job-actions">

                    <button class="save-job-btn">

                        <i class="fa-solid fa-floppy-disk"></i>

                        Update Listing

                    </button>

                    <a
                        href="/listings/listing/<?= $listing['id'] ?>"
                        class="cancel-job-btn">

                        <i class="fa-solid fa-xmark"></i>

                        Cancel

                    </a>

                </div>

            </form>

        </div>

    </div>

</section>

<?php require basePath('App/views/partials/footer.php'); ?>