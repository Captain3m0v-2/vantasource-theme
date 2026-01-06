# VANTASOURCE Website - Setup & Launch Guide

## 🚀 Quick Start

Your VANTASOURCE sourcing website is now ready! Follow these steps to launch it fully.

### Step 1: Login to WordPress Admin
1. Go to your WordPress admin dashboard
2. Navigate to Appearance → Themes
3. Ensure "Vantasource Theme" is activated

### Step 2: Create Essential Pages

#### Home Page
1. Create a new page and title it "Home"
2. Select **Front Page** template
3. Set this page as the static front page in Settings → Reading

#### Services Page
1. Create a new page titled "Services"
2. Leave template as **Default**
3. Set this to display Services custom post type posts

#### Portfolio Page
1. Create a new page titled "Portfolio" 
2. Leave template as **Default**
3. Set this to display Portfolio custom post type posts

#### About Us Page
1. Create a new page titled "About Us"
2. Select **About Us** template
3. Add your company information and team details

#### Contact Page
1. Create a new page titled "Contact"
2. Select **Contact Us** template
3. Update contact details in the page

#### Request Quote Page
1. Create a new page titled "Get Quote"
2. Select **Request a Quote** template
3. This page is ready to use immediately

### Step 3: Create Navigation Menu

1. Go to Appearance → Menus
2. Create a new menu called "Main Menu"
3. Add these items:
   - Home (link to home page)
   - About (link to about page)
   - Services (custom link)
     - Add sub-items for specific services
   - Portfolio (link to portfolio page)
   - Contact (link to contact page)
   - Get Quote (button-style link to quote page)

4. Assign menu to "Primary Menu" location

### Step 4: Add Sample Content

#### Create Sample Services
1. Go to Services in the admin menu
2. Add service posts like:
   - "Product Sourcing from China"
   - "Quality Control & Inspection"
   - "Global Logistics Management"
   - "Supplier Verification"

3. Add content and featured images for each

#### Create Sample Portfolio Projects
1. Go to Portfolio in the admin menu
2. Add portfolio posts with:
   - Project title
   - Description of the project
   - Featured image
   - Industry category
   - Custom fields: Client Name, Project Date, Results

### Step 5: Configure Forms

The website includes two automatic form handlers:

#### Contact Form (`page-contact.php`)
- **Action**: vantasource_contact_form
- **Sends to**: Admin email
- **Automatically enabled** ✓

#### RFQ Form (`page-quote.php`)
- **Action**: vantasource_rfq
- **Sends to**: Admin email
- **Automatically enabled** ✓

**Email Configuration:**
1. Go to Settings → General
2. Verify "Admin Email Address" is correct
3. Forms will send to this email automatically

### Step 6: Customize Content

#### Update Homepage
1. Edit Home page content
2. Update hero section copy
3. Upload hero background image
4. Customize statistics and features

#### Update About Page
1. Add company mission statement
2. Add team member information
3. Customize process timeline
4. Add company statistics

#### Update Contact Page
1. Update contact information (phone, address, email)
2. Add office location
3. Upload team photo

### Step 7: SEO & Meta Tags

1. Install Yoast SEO or similar plugin
2. Configure basic settings:
   - Site name: VANTASOURCE
   - Tagline: "Global Product Sourcing & Logistics"
   - Site description

3. Optimize each page:
   - Create meta descriptions
   - Add focus keywords
   - Set page titles

### Step 8: Email Setup (Important!)

For forms to work correctly:

1. **WordPress Mail Configuration**
   - Ensure your server can send emails
   - Or use SMTP plugin (WP Mail SMTP, etc.)

2. **Test Forms**
   - Submit test contact form
   - Check admin email receives message
   - Check user gets confirmation email

3. **Email Templates**
   - Contact confirmation email
   - RFQ confirmation email
   - Both are automatic

### Step 9: Additional Features

#### Enable Language Support
1. Users can switch languages from navbar
2. Install translation plugin if needed
3. Supported languages:
   - English (EN)
   - French (FR)
   - Arabic (AR)
   - Hindi (HI)
   - Chinese (ZH)
   - Spanish (ES)

#### Add Testimonials
1. Go to Testimonials in admin
2. Add client testimonials
3. Display on homepage with custom code

#### Social Media Links
1. Edit footer.php
2. Update social media URLs
3. Links appear in footer

### Step 10: Launch Checklist

- [ ] Home page created and set as front page
- [ ] Services page created with sample services
- [ ] Portfolio page created with sample projects
- [ ] About page created with content
- [ ] Contact page with correct contact info
- [ ] Navigation menu created and assigned
- [ ] Admin email verified for forms
- [ ] Test contact form submission
- [ ] Test RFQ form submission
- [ ] Homepage content updated
- [ ] Logo uploaded/customized
- [ ] Hero image updated
- [ ] Footer copyright updated
- [ ] All page links verified working
- [ ] Mobile responsiveness checked
- [ ] Forms send emails correctly
- [ ] SSL certificate enabled (HTTPS)
- [ ] Performance optimized

## 📊 Page Hierarchy

```
Home (Front Page)
├── About Us
├── Services
│   ├── Service 1 (Detail Page)
│   ├── Service 2 (Detail Page)
│   └── Service 3 (Detail Page)
├── Portfolio
│   ├── Project 1 (Case Study)
│   ├── Project 2 (Case Study)
│   └── Project 3 (Case Study)
├── Contact Us
├── Get Quote
└── Blog (Optional)
```

## 🎨 Design Customization

### Change Colors
Edit `/style.css` and update:
- Primary: `#667eea` → your color
- Secondary: `#764ba2` → your color
- Accent: `#3b82f6` → your color

### Change Fonts
Edit `functions.php` line with Google Fonts URL

### Update Logo
Edit `header.php` navbar brand section

### Add Custom CSS
Create child theme or add to style.css

## 🔧 Advanced Customization

### Add New Service Type
1. Edit `functions.php`
2. Add to `vantasource_register_taxonomies()`
3. Add custom template in archive

### Customize Form Fields
1. Edit form in relevant page template
2. Update handler in `functions.php`
3. Update email notifications

### Add Custom Fields to Portfolio
1. Use Advanced Custom Fields (ACF) plugin
2. Or manually add meta fields in functions.php

## 🚨 Troubleshooting

### Forms Not Sending
- Check admin email in Settings → General
- Test with WordPress Mail plugin
- Check server mail configuration

### Pages Not Showing Content
- Ensure correct page template selected
- Check page is published
- Verify menu has correct links

### Images Not Showing
- Upload images via Media Library
- Use full image URLs in content
- Check file permissions

### Navigation Not Working
- Verify menu assigned to Primary Menu location
- Check menu items have correct links
- Clear browser cache

## 📱 Mobile Optimization

Website is fully responsive:
- Mobile: <576px
- Tablet: 576px - 992px
- Desktop: 992px+

Test on:
- iPhone (Safari)
- Android (Chrome)
- iPad (Safari)
- Desktop browsers

## 🔒 Security

The theme includes:
- ✓ NONCE verification on forms
- ✓ Input sanitization
- ✓ Output escaping
- ✓ CSRF protection

Additional recommendations:
- Update WordPress regularly
- Use security plugin (Wordfence, etc.)
- Backup regularly
- Keep plugins updated

## 📈 Performance

Optimize for speed:
1. Enable caching (WP Super Cache)
2. Compress images (Imagify, Smush)
3. Minify CSS/JS
4. Enable GZIP compression
5. Use CDN for static files

Current performance features:
- ✓ Bootstrap 5 CDN
- ✓ Lazy loading for images
- ✓ AOS animations
- ✓ Optimized icons

## 🌐 Domain & Hosting

Before launch:
1. Update domain in Settings → General
2. Set site URL correctly
3. Configure HTTPS/SSL
4. Update email settings
5. Test all functionality

## 📞 Support & Updates

For questions or customization:
1. Review documentation in theme files
2. Check comments in code
3. Refer to Bootstrap docs for styling
4. Use WordPress codex for WordPress functions

## 🎓 File Structure

```
vantasource-theme/
├── front-page.php (Home page)
├── page-about.php (About us)
├── page-contact.php (Contact form)
├── page-quote.php (RFQ form)
├── archive-service.php (Services list)
├── archive-portfolio.php (Portfolio list)
├── single-service.php (Service detail)
├── single-portfolio.php (Case study)
├── 404.php (Error page)
├── header.php (Navigation)
├── footer.php (Footer)
├── index.php (Default template)
├── functions.php (PHP functions)
├── style.css (Styling)
├── custom.js (JavaScript)
├── class-wp-bootstrap-navwalker.php (Menu walker)
├── README.md (Theme documentation)
├── theme.json (Theme configuration)
└── assets/
    └── images/ (Theme images)
```

## ✅ Final Checks

1. **Homepage**
   - [ ] Hero image displays
   - [ ] Statistics visible
   - [ ] Services section shows
   - [ ] CTA buttons work

2. **Forms**
   - [ ] Contact form submits
   - [ ] RFQ form submits
   - [ ] Emails received
   - [ ] Validation works

3. **Navigation**
   - [ ] All links work
   - [ ] Mobile menu works
   - [ ] Dropdowns work
   - [ ] Language switcher visible

4. **Mobile**
   - [ ] Responsive design
   - [ ] Touch-friendly buttons
   - [ ] Images load
   - [ ] Forms work on mobile

5. **Performance**
   - [ ] Page loads quickly
   - [ ] Animations smooth
   - [ ] No console errors
   - [ ] Images optimized

---

**Your VANTASOURCE sourcing website is ready to launch! 🎉**

**Questions?** Check the README.md file or review the template code.

**Ready to add content?** Start with the homepage and work through each page following this guide.

**Good luck! 🚀**
