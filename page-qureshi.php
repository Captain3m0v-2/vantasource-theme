


<?php
/*
Template Name: Qureshi Portfolio
Description: Standalone portfolio page for Qureshi, Product Sourcing Expert.
*/
get_header(); ?>

<!-- ================================
    QURESHI PORTFOLIO PAGE
    Section: Header & Profile Summary
==================================== -->
<div class="container section-space">
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="text-center">
                <!-- Breadcrumb Navigation -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-nav justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo home_url('/portfolio'); ?>">Portfolio</a></li>
                        <li class="breadcrumb-item active">Qureshi</li>
                    </ol>
                </nav>
                <!-- Profile Image and Basic Info -->
                <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/4bc1a37e2e9cd228dd2fe7292a549a39-1742978792042/e2c7c5a5-cb5a-42d5-bc12-a895bb10d505.jpg" alt="Qureshi" class="rounded-circle shadow mb-3" style="width:140px;height:140px;object-fit:cover;">
                <h1 class="section-title mt-3">Qureshi</h1>
                <h4 class="text-primary mb-2">Product Sourcing Expert & Supply Chain Solutions</h4>
                <p class="lead text-muted mb-4">Bangladesh | English, French, Arabic, Hindi</p>
                <!-- Action Buttons: Fiverr, Gig, ResearchGate -->
                <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
                    <a href="https://www.fiverr.com/scm_jasim" target="_blank" class="btn btn-success btn-lg">Hire on Fiverr (Profile)</a>
                    <a href="https://www.fiverr.com/s/8zZwoqp" target="_blank" class="btn btn-primary btn-lg">View Qureshi's Gig</a>
                    <a href="https://www.researchgate.net/profile/Md-Qureshi" target="_blank" class="btn btn-info btn-lg text-white">ResearchGate Profile</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================
        Section: About Qureshi & Portfolio Highlights
    ================================ -->
    <div class="row g-5 align-items-stretch">
        <!-- About Qureshi -->
        <div class="col-lg-6 mb-4">
            <div class="bg-white p-4 rounded-4 shadow-sm h-100">
                <h3 class="fw-bold mb-3 text-primary">About Qureshi</h3>
                <p>Supply Chain Specialist & Product Sourcing Expert offering global sourcing, supplier research, price negotiation, and supply chain management. Helps businesses source high-quality products, connect with trusted suppliers, analyze budgets, and optimize procurement.</p>
                <ul class="list-unstyled mt-4">
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Global Sourcing & Supplier Research</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Price Negotiation</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Supply Chain Management</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Procurement & Vendor Management</li>
                </ul>
            </div>
        </div>
        <!-- Portfolio Highlights -->
        <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded-4 shadow-sm h-100">
                <h4 class="fw-bold mb-3">Portfolio Highlights</h4>
                <div class="row g-3">
                    <div class="col-6">
                        <img src="https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto,t_portfolio_project_grid/v1/attachments/project_item/attachment/a51302d7ccbf499815aa1c1efcfc61c4-1752423362176/1.jpg" class="img-fluid rounded-3 shadow" alt="Portfolio 1">
                    </div>
                    <div class="col-6">
                        <img src="https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto,t_portfolio_project_grid/v1/attachments/project_item/attachment/b28d68f32573a5f6fa5d2e00bc667336-1752427025489/WhatsApp%20Image%202025-07-13%20at%2011.06.27%20PM.jpeg" class="img-fluid rounded-3 shadow" alt="Portfolio 2">
                    </div>
                </div>
                <div class="mt-4">
                    <a href="mailto:info@yourcompany.com" class="btn btn-outline-primary w-100">Contact Qureshi</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================
        Section: Featured Gigs
    ================================ -->
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <div class="bg-white p-4 rounded-4 shadow-sm">
                <h3 class="fw-bold mb-4 text-primary text-center">Featured Gigs</h3>
                <div class="row justify-content-center">
                    <!-- Example Gig Card -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="https://fiverr-res.cloudinary.com/videos/so_0.890383,t_main1,q_auto,f_auto/txtdqyq2q1c38r342gb5/be-your-product-sourcing-and-trusted-supply-chain-expert-agent.png" class="card-img-top" alt="Gig Thumbnail">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-2">Reliable Product Sourcing Agent</h5>
                                <p class="text-muted small mb-3">China, Alibaba, 1688 | Verified Supplier Research, Price Negotiation, Logistics Terms</p>
                                <a href="https://www.fiverr.com/s/8zZwoqp" target="_blank" class="btn btn-primary btn-sm w-100">View Gig</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more gigs here as needed -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
