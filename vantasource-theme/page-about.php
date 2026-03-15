<?php
/**
 * Template Name: About Us
 */
get_header(); ?>

<header class="position-relative overflow-hidden" style="background: radial-gradient(circle at 12% 18%, rgba(59,130,246,0.28), transparent 26%), radial-gradient(circle at 88% 12%, rgba(16,185,129,0.18), transparent 24%), linear-gradient(115deg, #0a1226 0%, #0f1f3d 60%, #0a1226 100%);">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(7,11,24,0.75) 0%, rgba(7,11,24,0.6) 60%, rgba(7,11,24,0.85) 100%);"></div>
    <div class="container py-5 mt-5 position-relative" style="z-index: 1;">
        <div class="row align-items-center g-4">
            <div class="col-lg-7 text-white" data-aos="fade-right">
                <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-2 rounded-pill" style="background: rgba(255,255,255,0.1);">
                    <span class="badge bg-primary rounded-pill">About</span>
                    <span class="small text-white-50">Trusted sourcing partner</span>
                </div>
                <h1 class="display-4 fw-bold mb-3" style="color: #ffffff;">We make global sourcing fast, transparent, and reliable.</h1>
                <p class="lead text-white mb-4" style="color: rgba(255,255,255,0.9) !important;">From factory vetting to last-mile delivery, we orchestrate every step so brands can scale with confidence.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="<?php echo esc_url( home_url('/quote/') ); ?>" class="btn btn-primary rounded-pill px-4">Start a project</a>
                    <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="btn btn-outline-light rounded-pill px-4">Explore services</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="card bg-white border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1 small">Verified factories</p>
                                <h3 class="fw-bold mb-0">500+</h3>
                            </div>
                            <div>
                                <p class="text-muted mb-1 small">QC pass rate</p>
                                <h3 class="fw-bold mb-0">99.8%</h3>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted mb-1 small">Regions covered</p>
                                <h3 class="fw-bold mb-0">12+</h3>
                            </div>
                            <div>
                                <p class="text-muted mb-1 small">Support</p>
                                <h3 class="fw-bold mb-0">24/7</h3>
                            </div>
                        </div>
                    </div>
                    <div class="ratio ratio-16x9 bg-light">
                        <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=1600&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Operations">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-3">Who we are</h2>
                <p class="text-muted mb-3">VANTASOURCE is a sourcing command center for brands that demand speed, transparency, and quality. We pair deep factory relationships with on-the-ground teams who speak your language and the factory's.</p>
                <p class="text-muted mb-4">We audit suppliers, negotiate terms, coordinate QC, and orchestrate freight so your team can focus on brand, product, and customers.</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-patch-check-fill text-primary"></i>
                            <span class="fw-semibold">Direct factory access</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-shield-lock-fill text-primary"></i>
                            <span class="fw-semibold">Audits & escrow</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-translate text-primary"></i>
                            <span class="fw-semibold">Multilingual teams</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-graph-up-arrow text-primary"></i>
                            <span class="fw-semibold">Cost transparency</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="ratio ratio-16x9">
                        <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1600&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Team at work">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <p class="text-uppercase text-primary fw-semibold mb-1 small">What we deliver</p>
                <h2 class="fw-bold mb-0">End-to-end sourcing, without surprises</h2>
            </div>
            <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="btn btn-outline-primary rounded-pill">See all services</a>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="feature-card h-100">
                    <div class="feature-card-icon"><i class="bi bi-globe"></i></div>
                    <h5 class="fw-bold mb-2">Global supplier network</h5>
                    <p class="text-muted">Curated, audited factories across Asia with negotiated terms and clear SLAs.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card h-100">
                    <div class="feature-card-icon"><i class="bi bi-shield-check"></i></div>
                    <h5 class="fw-bold mb-2">Quality and compliance</h5>
                    <p class="text-muted">In-line inspections, lab testing coordination, and compliance checks for every batch.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card h-100">
                    <div class="feature-card-icon"><i class="bi bi-truck"></i></div>
                    <h5 class="fw-bold mb-2">Logistics orchestration</h5>
                    <p class="text-muted">FOB/DDP shipping, customs support, and milestone tracking until warehouse delivery.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-uppercase text-primary fw-semibold mb-2 small">Process</p>
            <h2 class="fw-bold mb-1">How we work</h2>
            <p class="text-muted mb-0">A clear path from brief to delivery.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-up">
                        <h5 class="timeline-title">1. Requirement deep dive</h5>
                        <p class="timeline-description">We capture specs, target cost, certifications, and delivery windows to set clear sourcing criteria.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                        <h5 class="timeline-title">2. Supplier shortlist</h5>
                        <p class="timeline-description">A curated list of best-fit factories with risk scoring, sample timelines, and comparative quotes.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                        <h5 class="timeline-title">3. Samples and approval</h5>
                        <p class="timeline-description">Sample production, lab tests if needed, and a go/no-go decision backed by data.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                        <h5 class="timeline-title">4. Production oversight</h5>
                        <p class="timeline-description">Inline and pre-shipment inspections with photo/video evidence and issue resolution protocols.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                        <h5 class="timeline-title">5. Logistics and delivery</h5>
                        <p class="timeline-description">We manage export docs, book freight, clear customs, and track to your warehouse or 3PL.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-3">Global footprint</h2>
                <p class="text-muted mb-3">Teams on the ground in China, Vietnam, India, and Bangladesh keep production moving and communication clear.</p>
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-2"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Factory audits and QC in-region</li>
                    <li class="mb-2"><i class="bi bi-people-fill text-primary me-2"></i>Local language buyers and inspectors</li>
                    <li class="mb-2"><i class="bi bi-shield-lock-fill text-primary me-2"></i>Compliance-first sourcing</li>
                </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ratio ratio-16x9 rounded-3 overflow-hidden bg-light">
                    <img src="https://images.unsplash.com/photo-1503389152951-9f343605f61e?q=80&w=1600&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Global map">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8" data-aos="fade-right">
                <h2 class="fw-bold mb-2">Ready to build your next product?</h2>
                <p class="text-muted mb-0">Tell us what you need. We will send a tailored sourcing plan within 24 hours.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="<?php echo esc_url( home_url('/quote/') ); ?>" class="btn btn-primary rounded-pill px-4 py-2">Request a quote</a>
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-outline-secondary rounded-pill px-4 py-2 ms-2">Talk to us</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
