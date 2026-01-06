# Vantasource Theme

Professional WordPress theme for a global sourcing and logistics business. Built on Bootstrap 5 with WooCommerce styling, AOS animations, and custom contact/quote workflows.

## Key Features

- Responsive Bootstrap 5 layout with tailored hero, trust stats, services, and process timeline on the front page.
- Custom contact form (product link + file upload) with AJAX handling and email notifications.
- WooCommerce archive template (`archive-product.php`) with counts, ordering, and a “coming soon” empty-state.
- Team/portfolio archive repurposed as “Our Team” layout.
- WhatsApp/WeChat contact details and floating WhatsApp action.
- AOS scroll animations and refined navbar styling.

## Templates

- `front-page.php` – Hero, trust stats, services, process, CTA.
- `page-about.php` – Story, expertise, stats, timeline.
- `page-contact.php` – Gradient hero, contact form (link/upload), WhatsApp/WeChat card.
- `page-quote.php` – RFQ flow.
- `archive-product.php` – WooCommerce shop archive with ordering and empty-state messaging.
- `archive-portfolio.php` – Our Team listing.
- `archive-service.php` – Service catalog; `single-service.php` for details.
- `single-portfolio.php` – Case study detail.
- `page-login.php`, `page-blog.php` – Auth/blog layouts.

## Setup

1. Install/activate the theme in `/wp-content/themes/vantasource-theme/`.
2. Create pages and assign:
   - Home → Front Page template
   - About → About template
   - Contact → Contact template
   - Quote → Request a Quote template
   - Shop → WooCommerce shop page
3. Configure menus and set the Home page as static front page.

## Forms & Email

- Contact handler: product link + reference image upload; sanitize/escape + nonce checks.
- RFQ handler: server-side validation; ensure WP mail is configured.

## Notes

- CSS versioning handled in `functions.php` for cache busting.
- Uses Bootstrap Icons and AOS via CDN.

**Version:** 1.3+
