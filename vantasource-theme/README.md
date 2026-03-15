# Vantasource Theme

Professional WordPress theme for a global sourcing and logistics business. Built with Bootstrap 5.3, WooCommerce styling, AOS animations, and custom contact/quote workflows.

**Version:** 1.3+  
**Author:** Vantasource Team  
**License:** GPL v2 or later

## Features

- Responsive front page with hero, trust stats, services, process timeline, and CTAs.
- Custom contact form (product link + file upload) with AJAX handling and email notifications.
- WooCommerce shop archive (`archive-product.php`) with product count, ordering, and “coming soon” empty-state messaging.
- Portfolio archive repurposed as “Our Team” layout plus case-study single.
- WhatsApp/WeChat contact details and floating WhatsApp action.
- AOS scroll animations, refined navbar styling, Bootstrap Icons.

## Templates

- `front-page.php` – Landing page with hero/stats/services/process/CTA.
- `page-about.php` – Story, expertise, stats, timeline.
- `page-contact.php` – Gradient hero, contact form (link/upload), WhatsApp/WeChat card.
- `page-quote.php` – RFQ flow.
- `archive-product.php` – WooCommerce shop archive with ordering and empty state.
- `archive-portfolio.php` – Our Team listing.
- `archive-service.php` / `single-service.php` – Service catalog and detail.
- `single-portfolio.php` – Case study detail.
- `page-login.php`, `page-blog.php` – Auth/blog layouts.
- `404.php`, `header.php`, `footer.php`, `class-wp-bootstrap-navwalker.php`, `custom.js`, `style.css`, `theme.json`.

## Setup

1. Install/activate the theme in `/wp-content/themes/vantasource-theme/`.
2. Create pages and assign templates:
   - Home → Front Page
   - About → About
   - Contact → Contact
   - Quote → Request a Quote
   - Shop → WooCommerce shop page
3. Configure menus and set Home as the static front page.

## Forms & Email

- Contact handler: product link + reference image upload; nonce + sanitize + escape.
- RFQ handler: server-side validation; ensure WordPress mail is configured.

## Dependencies

- WordPress 5.8+
- Bootstrap 5.3 (CDN), Bootstrap Icons
- jQuery, AOS (Animate On Scroll)
- WooCommerce for shop/archive-product template

## Notes

- Stylesheet versioning is bumped in `functions.php` for cache busting.
- Assets live in `assets/`; images in `assets/images/`.
