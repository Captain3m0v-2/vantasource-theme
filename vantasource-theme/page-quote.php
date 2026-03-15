<?php
/**
 * Template Name: Request a Quote
 */
get_header(); ?>

<header class="position-relative overflow-hidden py-5" style="background-color: #0f172a;">
    <div class="container position-relative py-5 mt-5 text-center text-white">
        <h1 class="display-3 fw-800 mb-4">Request Your Quote</h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            Tell us about your product and get detailed quotations from verified manufacturers within 2-4 days.
        </p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title mb-4">How Our RFQ Process Works</h2>
                
                <div class="space-y-4">
                    <div class="d-flex gap-3">
                        <div style="min-width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">1</div>
                        <div>
                            <h5 class="fw-bold mb-1">Submit Your Requirements</h5>
                            <p class="text-muted small">Provide detailed specifications about your product, quantity, and timeline.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-3">
                        <div style="min-width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">2</div>
                        <div>
                            <h5 class="fw-bold mb-1">We Find the Best Suppliers</h5>
                            <p class="text-muted small">Our team searches our network to identify 2-3 best-fit manufacturers.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-3">
                        <div style="min-width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">3</div>
                        <div>
                            <h5 class="fw-bold mb-1">Receive Quotations</h5>
                            <p class="text-muted small">Get detailed pricing, MOQ info, and delivery terms from verified suppliers.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-3">
                        <div style="min-width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">4</div>
                        <div>
                            <h5 class="fw-bold mb-1">Choose & Proceed</h5>
                            <p class="text-muted small">We'll help you select the best option and manage the entire process.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title mb-4">Request a Quote</h2>
                
                <form id="rfq-form" class="needs-validation">
                    <input type="hidden" name="action" value="vantasource_rfq">
                    <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('vantasource_nonce'); ?>">
                    
                    <!-- Contact Information -->
                    <fieldset class="mb-4">
                        <h6 class="fw-bold text-uppercase mb-3" style="color: #667eea; font-size: 0.85rem; letter-spacing: 1px;">Contact Information</h6>
                        
                        <div class="mb-3">
                            <label for="rfq-name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="rfq-name" name="name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="rfq-email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="rfq-email" name="email" required>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="rfq-phone" class="form-label">Phone (Optional)</label>
                                <input type="tel" class="form-control" id="rfq-phone" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="rfq-company" class="form-label">Company Name *</label>
                                <input type="text" class="form-control" id="rfq-company" name="company" required>
                            </div>
                        </div>
                    </fieldset>
                    
                    <!-- Product Details -->
                    <fieldset class="mb-4">
                        <h6 class="fw-bold text-uppercase mb-3" style="color: #667eea; font-size: 0.85rem; letter-spacing: 1px;">Product Details</h6>
                        
                        <div class="mb-3">
                            <label for="rfq-product-name" class="form-label">Product Name/Description *</label>
                            <input type="text" class="form-control" id="rfq-product-name" name="product_name" placeholder="e.g., Stainless Steel Water Bottles" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="rfq-category" class="form-label">Product Category *</label>
                            <select class="form-select" id="rfq-category" name="category" required>
                                <option selected disabled>Select category...</option>
                                <option>Electronics</option>
                                <option>Textiles & Apparel</option>
                                <option>Home & Kitchen</option>
                                <option>Toys & Games</option>
                                <option>Cosmetics & Personal Care</option>
                                <option>Industrial Equipment</option>
                                <option>Automotive Parts</option>
                                <option>Other</option>
                            </select>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="rfq-quantity" class="form-label">Desired Quantity *</label>
                                <input type="number" class="form-control" id="rfq-quantity" name="quantity" min="1" placeholder="Units" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="rfq-timeline" class="form-label">Timeline *</label>
                                <select class="form-select" id="rfq-timeline" name="timeline" required>
                                    <option selected disabled>Select timeline...</option>
                                    <option>ASAP (1-2 months)</option>
                                    <option>3-4 months</option>
                                    <option>5-6 months</option>
                                    <option>Flexible</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="rfq-specifications" class="form-label">Key Specifications/Requirements</label>
                            <textarea class="form-control" id="rfq-specifications" name="specifications" rows="3" placeholder="Materials, colors, features, certifications needed, etc."></textarea>
                        </div>
                    </fieldset>
                    
                    <!-- Budget & Sourcing Preferences -->
                    <fieldset class="mb-4">
                        <h6 class="fw-bold text-uppercase mb-3" style="color: #667eea; font-size: 0.85rem; letter-spacing: 1px;">Budget & Preferences</h6>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="rfq-budget-min" class="form-label">Budget Range (Min) *</label>
                                <input type="number" class="form-control" id="rfq-budget-min" name="budget_min" placeholder="USD" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="rfq-budget-max" class="form-label">Budget Range (Max) *</label>
                                <input type="number" class="form-control" id="rfq-budget-max" name="budget_max" placeholder="USD" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="rfq-origin" class="form-label">Preferred Manufacturing Origin</label>
                            <select class="form-select" id="rfq-origin" name="origin">
                                <option selected>No preference</option>
                                <option>China</option>
                                <option>Vietnam</option>
                                <option>India</option>
                                <option>Bangladesh</option>
                                <option>Thailand</option>
                                <option>Indonesia</option>
                                <option>USA</option>
                                <option>EU</option>
                                <option>Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="rfq-incoterm" class="form-label">Preferred Incoterm *</label>
                            <select class="form-select" id="rfq-incoterm" name="incoterm" required>
                                <option selected disabled>Select incoterm...</option>
                                <option>DDP (Door to Door)</option>
                                <option>FOB (Free on Board)</option>
                                <option>CIF (Cost, Insurance, Freight)</option>
                                <option>Not sure</option>
                            </select>
                        </div>
                    </fieldset>
                    
                    <!-- Additional Information -->
                    <div class="mb-3">
                        <label for="rfq-notes" class="form-label">Additional Notes</label>
                        <textarea class="form-control" id="rfq-notes" name="notes" rows="3" placeholder="Any other information that would help us find the best supplier..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">Submit RFQ</button>
                    <p class="text-muted small text-center">* Required fields</p>
                    
                    <div id="rfq-message-status" style="display:none; margin-top: 1rem;" class="alert alert-success">
                        Your RFQ has been submitted successfully! We'll get back to you within 24 hours with supplier options.
                    </div>
                    <div id="rfq-error-status" style="display:none; margin-top: 1rem;" class="alert alert-danger">
                        There was an error submitting your request. Please try again.
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('rfq-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            document.getElementById('rfq-message-status').style.display = 'block';
            this.reset();
            setTimeout(() => {
                document.getElementById('rfq-message-status').style.display = 'none';
            }, 5000);
        } else {
            document.getElementById('rfq-error-status').style.display = 'block';
        }
    })
    .catch(error => {
        document.getElementById('rfq-error-status').style.display = 'block';
    });
});
</script>

<?php get_footer(); ?>
