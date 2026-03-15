<?php
/**
 * Single Employee Profile Template
 */
get_header(); ?>

<div class="container section-space">
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-nav">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo home_url('/employees'); ?>">Our Team</a></li>
                    <li class="breadcrumb-item active">Qureshi</li>
                </ol>
            </nav>
            <h1 class="section-title">Qureshi</h1>
            <h4 class="text-muted mb-3">Product Sourcing Expert and Supply Chain Solutions</h4>
            <div class="d-flex align-items-center mb-4">
                <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/4bc1a37e2e9cd228dd2fe7292a549a39-1742978792042/e2c7c5a5-cb5a-42d5-bc12-a895bb10d505.jpg" alt="Qureshi" class="rounded-circle me-4" style="width:120px;height:120px;object-fit:cover;">
                <div>
                    <p class="mb-1"><strong>Location:</strong> Bangladesh</p>
                    <p class="mb-1"><strong>Languages:</strong> English, French, Arabic, Hindi</p>
                    <a href="https://www.fiverr.com/scm_jasim" target="_blank" class="btn btn-success btn-sm mt-2">View Fiverr Profile</a>
                </div>
            </div>
            <p class="lead">Supply Chain Specialist & Product Sourcing Expert offering global sourcing, supplier research, price negotiation, and supply chain management. Helps businesses source high-quality products, connect with trusted suppliers, analyze budgets, and optimize procurement.</p>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-lg-7">
            <div class="content-section">
                <h3 class="fw-bold mb-3">About Qureshi</h3>
                <ul>
                    <li>Global Sourcing & Supplier Research</li>
                    <li>Price Negotiation</li>
                    <li>Supply Chain Management</li>
                    <li>Procurement & Vendor Management</li>
                </ul>
                <h4 class="fw-bold mt-4 mb-3">Portfolio Highlights</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <img src="https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto,t_portfolio_project_grid/v1/attachments/project_item/attachment/a51302d7ccbf499815aa1c1efcfc61c4-1752423362176/1.jpg" class="img-fluid rounded-3" alt="Portfolio 1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto,t_portfolio_project_grid/v1/attachments/project_item/attachment/b28d68f32573a5f6fa5d2e00bc667336-1752427025489/WhatsApp%20Image%202025-07-13%20at%2011.06.27%20PM.jpeg" class="img-fluid rounded-3" alt="Portfolio 2">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="feature-card bg-light">
                <h5 class="fw-bold mb-3 text-primary">Contact Qureshi</h5>
                <a href="https://www.fiverr.com/scm_jasim" target="_blank" class="btn btn-success w-100 mb-2">Hire on Fiverr</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
