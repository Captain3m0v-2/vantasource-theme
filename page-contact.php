<?php
/**
 * Template Name: Contact Us
 */
get_header(); ?>

<header class="position-relative overflow-hidden py-5" style="background-color: #0f172a;">
    <div class="container position-relative py-5 mt-5 text-center text-white">
        <h1 class="display-3 fw-800 mb-4">Get in Touch</h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            Have questions about our sourcing services? Reach out to our team. We're here to help you find the perfect manufacturer.
        </p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-md-4" data-aos="fade-up">
                <div class="feature-card text-center">
                    <div class="feature-card-icon mx-auto">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Email</h5>
                    <p class="text-muted mb-2">
                        <a href="mailto:info@vantasource.com" class="text-decoration-none text-primary">info@vantasource.com</a>
                    </p>
                    <p class="text-muted small">Response within 24 hours</p>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card text-center">
                    <div class="feature-card-icon mx-auto">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Phone</h5>
                    <p class="text-muted mb-2">
                        <a href="tel:+1-800-000-0000" class="text-decoration-none text-primary">+1 (800) 000-0000</a>
                    </p>
                    <p class="text-muted small">Monday - Friday, 9AM - 6PM</p>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card text-center">
                    <div class="feature-card-icon mx-auto">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Office</h5>
                    <p class="text-muted mb-2">
                        123 Business Street<br>
                        New York, NY 10001
                    </p>
                    <p class="text-muted small">Available for meetings</p>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title mb-4">Send us a Message</h2>
                
                <form id="contact-form" class="needs-validation">
                    <div class="mb-3">
                        <label for="contact-name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="contact-name" name="name" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="contact-email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="contact-email" name="email" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="contact-phone" class="form-label">Phone Number (Optional)</label>
                        <input type="tel" class="form-control" id="contact-phone" name="phone">
                    </div>
                    
                    <div class="mb-3">
                        <label for="contact-company" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="contact-company" name="company" required>
                    </div>
                    
                    <div class="mb-3">
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
                    
                    <div class="mb-3">
                        <label for="contact-message" class="form-label">Message</label>
                        <textarea class="form-control" id="contact-message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                    <div id="contact-message-status" style="display:none; margin-top: 1rem;" class="alert alert-success">
                        Thank you! We'll get back to you soon.
                    </div>
                </form>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="feature-card h-100 bg-gradient-primary text-white p-5">
                    <h3 class="fw-bold mb-4">Why Contact Us?</h3>
                    
                    <ul class="list-unstyled space-y-3">
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill me-3 mt-1"></i>
                            <span>Get expert guidance on finding the right manufacturer</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill me-3 mt-1"></i>
                            <span>Learn about our pricing and service options</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill me-3 mt-1"></i>
                            <span>Discuss your specific sourcing requirements</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill me-3 mt-1"></i>
                            <span>Request samples from our network of suppliers</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill me-3 mt-1"></i>
                            <span>Explore partnership and affiliate opportunities</span>
                        </li>
                    </ul>
                    
                    <hr class="my-4 border-white border-opacity-25">
                    
                    <h5 class="fw-bold mb-3 text-white">Available Languages</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-white text-dark fw-bold">English</span>
                        <span class="badge bg-white text-dark fw-bold">French</span>
                        <span class="badge bg-white text-dark fw-bold">Arabic</span>
                        <span class="badge bg-white text-dark fw-bold">Hindi</span>
                        <span class="badge bg-white text-dark fw-bold">Chinese</span>
                        <span class="badge bg-white text-dark fw-bold">Spanish</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const data = {
        name: formData.get('name'),
        email: formData.get('email'),
        phone: formData.get('phone'),
        company: formData.get('company'),
        subject: formData.get('subject'),
        message: formData.get('message')
    };
    
    // Send email notification
    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'action=vantasource_contact_form&nonce=<?php echo wp_create_nonce("vantasource_nonce"); ?>&' + Object.keys(data)
            .map(key => encodeURIComponent(key) + '=' + encodeURIComponent(data[key]))
            .join('&')
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            this.reset();
            document.getElementById('contact-message-status').style.display = 'block';
            setTimeout(() => {
                document.getElementById('contact-message-status').style.display = 'none';
            }, 5000);
        }
    });
});
</script>

<?php get_footer(); ?>
