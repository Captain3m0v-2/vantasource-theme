<?php
/**
 * Template Name: Contact Us
 */
get_header(); ?>

<header class="position-relative overflow-hidden" style="background: radial-gradient(circle at 14% 18%, rgba(99,102,241,0.35), transparent 26%), radial-gradient(circle at 84% 12%, rgba(59,130,246,0.32), transparent 24%), linear-gradient(120deg, #0d1b3a 0%, #132a55 60%, #0d1b3a 100%);">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(7,11,24,0.82) 0%, rgba(7,11,24,0.7) 55%, rgba(7,11,24,0.9) 100%);"></div>
    <div class="container py-5 position-relative" style="z-index: 1;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-white">
                <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-2 rounded-pill" style="background: rgba(255,255,255,0.1);">
                    <span class="badge bg-primary rounded-pill">Contact</span>
                    <span class="small text-white-50">Global sourcing, local response</span>
                </div>
                <h1 class="display-4 fw-bold mb-3" style="color: #ffffff;">Talk to our sourcing team</h1>
                <p class="lead mb-0" style="color: rgba(255,255,255,0.92);">Share your product needs, timelines, and target costs. We will reply within 24 hours with a tailored plan.</p>
            </div>
            <div class="col-lg-4 text-lg-end text-white-50">
                <div class="d-inline-flex flex-column align-items-lg-end align-items-start gap-1 px-3 py-2 rounded-3" style="background: rgba(255,255,255,0.08);">
                    <span class="small text-uppercase fw-semibold">Response time</span>
                    <span class="h4 fw-bold text-white mb-0">Under 24h</span>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-5" style="background: #f7f9fc;">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-md-3" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="feature-card-icon mx-auto mb-3"><i class="bi bi-envelope"></i></div>
                        <h5 class="fw-bold mb-2">Email</h5>
                        <p class="text-muted mb-2"><a href="mailto:info@vantasource.com" class="text-decoration-none text-primary">info@vantasource.com</a></p>
                        <p class="text-muted small mb-0">Response within 24 hours</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="feature-card-icon mx-auto mb-3"><i class="bi bi-telephone"></i></div>
                        <h5 class="fw-bold mb-2">Phone</h5>
                        <p class="text-muted mb-2"><a href="tel:+1-800-000-0000" class="text-decoration-none text-primary">+1 (800) 000-0000</a></p>
                        <p class="text-muted small mb-0">Mon - Fri, 9AM - 6PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="feature-card-icon mx-auto mb-3"><i class="bi bi-geo-alt"></i></div>
                        <h5 class="fw-bold mb-2">Office</h5>
                        <p class="text-muted mb-2">123 Business Street<br>New York, NY 10001</p>
                        <p class="text-muted small mb-0">Meetings by appointment</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="feature-card-icon mx-auto mb-3"><i class="bi bi-whatsapp"></i></div>
                        <h5 class="fw-bold mb-2">WhatsApp / WeChat</h5>
                        <p class="text-muted mb-2">
                            <a href="https://wa.me/8801831555639" class="text-decoration-none text-success">+8801831555639</a>
                        </p>
                        <p class="text-muted small mb-0">Reach us on WhatsApp or WeChat</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h2 class="fw-bold mb-0">Send us a message</h2>
                            <span class="badge bg-primary text-white">Avg. reply &lt; 24h</span>
                        </div>
                        <form id="contact-form" class="needs-validation" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="contact-name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="contact-name" name="name" placeholder="Your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contact-email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="contact-email" name="email" placeholder="you@company.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contact-phone" class="form-label">Phone (optional)</label>
                                    <input type="tel" class="form-control" id="contact-phone" name="phone" placeholder="+1 000 000 0000">
                                </div>
                                <div class="col-md-6">
                                    <label for="contact-company" class="form-label">Company</label>
                                    <input type="text" class="form-control" id="contact-company" name="company" placeholder="Company name" required>
                                </div>
                                <div class="col-12">
                                    <label for="contact-subject" class="form-label">Subject</label>
                                    <select class="form-select" id="contact-subject" name="subject" required>
                                        <option selected disabled>Select a subject...</option>
                                        <option>General Inquiry</option>
                                        <option>Request a Quote</option>
                                        <option>Become a Supplier</option>
                                        <option>Partnership Opportunity</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="contact-message" class="form-label">Message</label>
                                    <textarea class="form-control" id="contact-message" name="message" rows="5" placeholder="Share your product, target cost, and timeline" required></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="product-link" class="form-label">Product link (optional)</label>
                                    <input type="url" class="form-control" id="product-link" name="product_link" placeholder="https://example.com/product">
                                </div>
                                <div class="col-12">
                                    <label for="reference-image" class="form-label">Reference image (optional)</label>
                                    <input type="file" class="form-control" id="reference-image" name="reference_image" accept="image/*">
                                    <small class="text-muted">Attach a product photo or inspiration image to speed up sourcing.</small>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                    <div id="contact-message-status" style="display:none; margin-top: 1rem;" class="alert alert-success mb-0">
                                        Thank you! We will get back to you soon.
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left">
                <div class="card border-0 shadow-sm h-100" style="background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 60%, #2563eb 100%); color: #ffffff;">
                    <div class="card-body p-4 p-lg-5 text-white">
                        <p class="text-uppercase fw-semibold small mb-2" style="color: rgba(255,255,255,0.85);">Why teams choose us</p>
                        <h3 class="fw-bold mb-4" style="color: #ffffff;">Clear answers, fast actions.</h3>
                        <ul class="list-unstyled mb-4" style="color: rgba(255,255,255,0.9);">
                            <li class="d-flex align-items-start mb-2"><i class="bi bi-check-circle-fill text-white me-3 mt-1" style="color: rgba(255,255,255,0.9) !important;"></i><span>Factory-vetted options with QC checkpoints.</span></li>
                            <li class="d-flex align-items-start mb-2"><i class="bi bi-check-circle-fill text-white me-3 mt-1" style="color: rgba(255,255,255,0.9) !important;"></i><span>Pricing transparency and logistics guidance.</span></li>
                            <li class="d-flex align-items-start mb-2"><i class="bi bi-check-circle-fill text-white me-3 mt-1" style="color: rgba(255,255,255,0.9) !important;"></i><span>Multilingual teams in-region.</span></li>
                            <li class="d-flex align-items-start"><i class="bi bi-check-circle-fill text-white me-3 mt-1" style="color: rgba(255,255,255,0.9) !important;"></i><span>Samples, certifications, and compliance support.</span></li>
                        </ul>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-white text-dark fw-semibold">English</span>
                            <span class="badge bg-white text-dark fw-semibold">French</span>
                            <span class="badge bg-white text-dark fw-semibold">Arabic</span>
                            <span class="badge bg-white text-dark fw-semibold">Hindi</span>
                            <span class="badge bg-white text-dark fw-semibold">Chinese</span>
                            <span class="badge bg-white text-dark fw-semibold">Spanish</span>
                        </div>
                        <p class="mb-0" style="color: rgba(255,255,255,0.9);">Prefer to talk now? Call us at <a class="text-white fw-semibold" href="tel:+1-800-000-0000">+1 (800) 000-0000</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const contactForm = document.getElementById('contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(contactForm);
        formData.append('action', 'vantasource_contact_form');
        formData.append('nonce', '<?php echo wp_create_nonce("vantasource_nonce"); ?>');

        fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                contactForm.reset();
                const statusEl = document.getElementById('contact-message-status');
                if (statusEl) {
                    statusEl.style.display = 'block';
                    setTimeout(() => {
                        statusEl.style.display = 'none';
                    }, 5000);
                }
            }
        });
    });
}
</script>

<?php get_footer(); ?>
