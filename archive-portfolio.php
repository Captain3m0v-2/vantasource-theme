<?php
/**
 * Portfolio Archive Template
 */
get_header(); ?>

<header class="position-relative overflow-hidden" style="background: radial-gradient(circle at 14% 18%, rgba(99,102,241,0.35), transparent 26%), radial-gradient(circle at 84% 12%, rgba(59,130,246,0.3), transparent 24%), linear-gradient(115deg, #0b1226 0%, #101c38 60%, #0b1226 100%);">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(7,11,24,0.65) 0%, rgba(7,11,24,0.6) 55%, rgba(7,11,24,0.75) 100%);"></div>
    <div class="container position-relative py-5" style="z-index:1;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-white">
                <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-2 rounded-pill" style="background: rgba(255,255,255,0.14);">
                    <span class="badge bg-primary rounded-pill">Team</span>
                    <span class="small text-white-50">People behind the work</span>
                </div>
                <h1 class="display-4 fw-bold mb-2" style="color: #ffffff; text-shadow: 0 4px 18px rgba(0,0,0,0.3);">Our Team</h1>
                <p class="lead mb-0" style="color: rgba(255,255,255,0.95); text-shadow: 0 2px 12px rgba(0,0,0,0.25);">Meet the sourcing specialists who manage factories, quality, and logistics for our clients.</p>
            </div>
            <div class="col-lg-4 text-lg-end text-white-50">
                <div class="d-inline-flex flex-column align-items-lg-end align-items-start gap-1 px-3 py-3 rounded-4" style="background: rgba(255,255,255,0.12); backdrop-filter: blur(6px);">
                    <span class="small text-uppercase fw-semibold" style="color: rgba(255,255,255,0.85);">Ready to start?</span>
                    <a class="btn btn-light btn-sm rounded-pill px-3 fw-semibold text-primary" href="<?php echo home_url('/quote'); ?>">Request a quote</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-5" style="background: #f7f9fc;">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary fw-bold text-uppercase small mb-1">Our team</p>
            <h2 class="fw-bold mb-2">Meet our experts</h2>
            <p class="text-muted mb-0">The specialists who manage sourcing, QC, and logistics across regions.</p>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 shadow-sm border-0 text-center">
                    <div class="ratio ratio-1x1">
                        <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/4bc1a37e2e9cd228dd2fe7292a549a39-1742978792042/e2c7c5a5-cb5a-42d5-bc12-a895bb10d505.jpg" class="w-100 h-100 object-fit-cover" alt="Qureshi">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-1">Qureshi</h5>
                        <p class="text-primary mb-2">Product Sourcing Expert & Supply Chain Solutions</p>
                        <p class="text-muted small mb-3">Bangladesh | English, French, Arabic, Hindi</p>
                        <a href="<?php echo home_url('/qureshi'); ?>" class="btn btn-outline-primary btn-sm mb-2 w-100">View Profile</a>
                        <a href="https://www.fiverr.com/scm_jasim" target="_blank" class="btn btn-success btn-sm w-100">Hire on Fiverr</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0 text-center">
                    <div class="ratio ratio-1x1">
                        <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?q=80&w=800&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Al Amin Shakinion">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-1">Al Amin Shakinion</h5>
                        <p class="text-primary mb-2">Sourcing & Supplier Relations Lead</p>
                        <p class="text-muted small mb-3">Bangladesh | English, Bengali</p>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-sm w-100">Work with Al Amin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
