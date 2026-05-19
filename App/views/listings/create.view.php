<?php require basePath('App/views/partials/head.php'); ?>
<?php require basePath('App/views/partials/navbar.php'); ?>

<section class="create-job-section">

    <div class="create-job-container">

        <!-- HEADER -->
        <div class="create-job-header">

            <span class="create-job-badge">
                <i class="fa-solid fa-briefcase"></i>
                Job Portal
            </span>

            <h1>Create Job Listing</h1>

            <p>
                Post a professional job listing and find the perfect candidate.
            </p>

        </div>

        <!-- FORM CARD -->
        <div class="create-job-card">

            <form method="POST" action="/listings">

                <!-- SECTION -->
                <div class="form-section">

                    <div class="form-section-title">
                        <i class="fa-solid fa-file-lines"></i>
                        Job Information
                    </div>

                    <div class="form-grid">

                        <div class="form-group full-width">
                            <label>Job Title</label>

                            <input
                                type="text"
                                name="title"
                                placeholder="Ex. Senior Frontend Developer"
                                value="<?= $listing['title'] ?? '' ?>">
                        </div>

                        <div class="form-group full-width">
                            <label>Job Description</label>

                            <textarea
                                name="description"
                                rows="5"
                                placeholder="Describe the job role..."><?= $listing['description'] ?? '' ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Salary</label>

                            <input
                                type="text"
                                name="salary"
                                placeholder="$70,000"
                                value="<?= $listing['salary'] ?? '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Tags</label>

                            <input
                                type="text"
                                name="tags"
                                placeholder="PHP, Laravel, MySQL"
                                value="<?= $listing['tags'] ?? '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Requirements</label>

                            <input
                                type="text"
                                name="requirements"
                                placeholder="2+ years experience"
                                value="<?= $listing['requirements'] ?? '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Benefits</label>

                            <input
                                type="text"
                                name="benefits"
                                placeholder="Health Insurance"
                                value="<?= $listing['benefits'] ?? '' ?>">
                        </div>

                    </div>

                </div>

                <!-- COMPANY SECTION -->
                <div class="form-section">

                    <div class="form-section-title">
                        <i class="fa-solid fa-building"></i>
                        Company Information
                    </div>

                    <div class="form-grid">

                        <div class="form-group full-width">
                            <label>Company Name</label>

                            <input
                                type="text"
                                name="company"
                                placeholder="Company Name"
                                value="<?= $listing['company'] ?? '' ?>">
                        </div>

                        <div class="form-group full-width">
                            <label>Address</label>

                            <input
                                type="text"
                                name="address"
                                placeholder="Company Address"
                                value="<?= $listing['address'] ?? '' ?>">
                        </div>

                        <div class="form-group">
                            <label>City</label>

                            <input
                                type="text"
                                name="city"
                                placeholder="City"
                                value="<?= $listing['city'] ?? '' ?>">
                        </div>

                        <div class="form-group">
                            <label>State</label>

                            <input
                                type="text"
                                name="state"
                                placeholder="State"
                                value="<?= $listing['state'] ?? '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>

                            <input
                                type="text"
                                name="phone"
                                placeholder="+63 9123456789"
                                value="<?= $listing['phone'] ?? '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Email</label>

                            <input
                                type="email"
                                name="email"
                                placeholder="company@email.com"
                                value="<?= $listing['email'] ?? '' ?>">
                        </div>

                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="create-job-actions">

                    <button type="submit" class="save-job-btn">
                        <i class="fa-solid fa-check"></i>
                        Publish Job
                    </button>

                    <a href="/" class="cancel-job-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</section>

<?php require basePath('App/views/partials/footer.php'); ?>