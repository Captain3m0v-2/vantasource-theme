/**
 * VANTASOURCE - Custom JavaScript
 */

(function($) {
    'use strict';

    // ========================================
    // 1. NAVBAR SCROLL EFFECT
    // ========================================
    $(window).on('scroll', function() {
        const navbar = $('.navbar');
        if ($(this).scrollTop() > 50) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
        }
    });

    // ========================================
    // 2. SMOOTH SCROLLING
    // ========================================
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }
    });

    // ========================================
    // 3. CONTACT FORM HANDLER
    // ========================================
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        
        const form = $(this);
        const formData = {
            action: 'vantasource_contact_form',
            nonce: vantasource_ajax.nonce,
            name: form.find('[name="name"]').val(),
            email: form.find('[name="email"]').val(),
            phone: form.find('[name="phone"]').val(),
            company: form.find('[name="company"]').val(),
            subject: form.find('[name="subject"]').val(),
            message: form.find('[name="message"]').val()
        };

        $.ajax({
            type: 'POST',
            url: vantasource_ajax.ajax_url,
            data: formData,
            success: function(response) {
                if (response.success) {
                    form[0].reset();
                    $('#contact-message-status').fadeIn();
                    setTimeout(() => {
                        $('#contact-message-status').fadeOut();
                    }, 5000);
                }
            }
        });
    });

    // ========================================
    // 4. RFQ FORM HANDLER
    // ========================================
    $('#rfq-form').on('submit', function(e) {
        e.preventDefault();
        
        const form = $(this);
        const formData = new FormData(this);
        formData.append('action', 'vantasource_rfq');
        formData.append('nonce', vantasource_ajax.nonce);

        $.ajax({
            type: 'POST',
            url: vantasource_ajax.ajax_url,
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    form[0].reset();
                    $('#rfq-message-status').fadeIn();
                    setTimeout(() => {
                        $('#rfq-message-status').fadeOut();
                    }, 5000);
                } else {
                    $('#rfq-error-status').fadeIn();
                }
            },
            error: function() {
                $('#rfq-error-status').fadeIn();
            }
        });
    });

    // ========================================
    // 5. LANGUAGE SWITCHER
    // ========================================
    $('.dropdown-item').on('click', function() {
        const lang = $(this).data('lang');
        if (lang) {
            localStorage.setItem('vantasource_lang', lang);
            // Reload page or trigger language switch
            location.reload();
        }
    });

    // ========================================
    // 6. TOOLTIP & POPOVER INITIALIZATION
    // ========================================
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // ========================================
    // 7. LAZY LOAD IMAGES
    // ========================================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => imageObserver.observe(img));
    }

    // ========================================
    // 8. ANIMATION TRIGGERS
    // ========================================
    window.addEventListener('scroll', function() {
        document.querySelectorAll('[data-animate]').forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                el.classList.add('animated');
            }
        });
    });

    // ========================================
    // 9. PORTFOLIO FILTER
    // ========================================
    $('.portfolio-filter').on('click', function(e) {
        e.preventDefault();
        const filter = $(this).data('filter');
        
        if (filter === 'all') {
            $('.portfolio-item').fadeIn();
        } else {
            $('.portfolio-item').fadeOut();
            $('.portfolio-item[data-category="' + filter + '"]').fadeIn();
        }
        
        $(this).addClass('active').siblings().removeClass('active');
    });

    // ========================================
    // 10. COUNTER ANIMATION
    // ========================================
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const counter = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target;
                clearInterval(counter);
            } else {
                element.textContent = Math.floor(start);
            }
        }, 16);
    }

    // Trigger counters on scroll
    window.addEventListener('scroll', function() {
        document.querySelectorAll('.counter').forEach(el => {
            if (!el.dataset.animated && isInViewport(el)) {
                const target = parseInt(el.dataset.target);
                animateCounter(el, target);
                el.dataset.animated = 'true';
            }
        });
    });

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.left <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // ========================================
    // 11. DYNAMIC PRICING TABLE
    // ========================================
    $('.price-tier-toggle').on('change', function() {
        const tier = $(this).is(':checked') ? 'annual' : 'monthly';
        
        $('.price-amount').each(function() {
            const monthlyPrice = $(this).data('monthly');
            const annualPrice = $(this).data('annual');
            
            if (tier === 'annual') {
                $(this).text('$' + annualPrice);
            } else {
                $(this).text('$' + monthlyPrice);
            }
        });
    });

    // ========================================
    // 12. FORM VALIDATION
    // ========================================
    (function() {
        window.addEventListener('load', function() {
            const forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    // ========================================
    // 13. MOBILE MENU CLOSE ON LINK CLICK
    // ========================================
    $('.navbar-collapse a:not([data-bs-toggle])').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    // ========================================
    // 14. BACK TO TOP BUTTON
    // ========================================
    const backToTopBtn = $('<button id="backToTop" class="btn btn-primary rounded-circle" style="position: fixed; bottom: 30px; right: 30px; z-index: 999; display: none; width: 50px; height: 50px;"><i class="bi bi-chevron-up"></i></button>');
    $('body').append(backToTopBtn);

    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 300) {
            backToTopBtn.fadeIn();
        } else {
            backToTopBtn.fadeOut();
        }
    });

    backToTopBtn.on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 'fast');
    });

})(jQuery);
    
    // Initialize language from localStorage or default to English
    let currentLang = localStorage.getItem('vantasource_lang') || 'en';
    
    // Update language display
    function updateLanguageDisplay() {
        const lang = languages[currentLang];
        const dropdownButton = $('.nav-link.dropdown-toggle');
        
        // Clear existing content
        dropdownButton.html('');
        
        // Add flag and language code
        dropdownButton.append(
            $('<span>', {
                class: 'me-1',
                text: lang.flag
            }),
            ' ' + lang.code
        );
        
        // Update page title for demo purposes
        document.title = 'VANTASOURCE - ' + lang.name;
        
        // Show notification (optional)
        showNotification('Language changed to ' + lang.name);
    }
    
    // Set up language switcher
    $('.dropdown-item').on('click', function(e) {
        e.preventDefault();
        
        // Get language code from data attribute or text
        let langCode = $(this).data('lang');
        if (!langCode) {
            // Extract from text if data attribute not set
            const text = $(this).text().trim();
            const match = text.match(/\(([^)]+)\)/);
            if (match) {
                langCode = match[1].toLowerCase();
            }
        }
        
        // Update current language
        if (langCode && languages[langCode]) {
            currentLang = langCode;
            localStorage.setItem('vantasource_lang', langCode);
            updateLanguageDisplay();
            
            // Close dropdown on mobile
            if ($(window).width() < 992) {
                $('#navbarNav').collapse('hide');
            }
        }
    });
    
    // Initialize display
    updateLanguageDisplay();
    
    // =========================================
    // 2. NAVBAR SCROLL EFFECT
    // =========================================
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
    
    // =========================================
    // 3. SMOOTH SCROLL FOR ANCHOR LINKS
    // =========================================
    $('a[href^="#"]').on('click', function(e) {
        if (this.hash !== '') {
            e.preventDefault();
            
            const hash = this.hash;
            const target = $(hash);
            
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800, 'swing');
                
                // Close mobile menu if open
                if ($('#navbarNav').hasClass('show')) {
                    $('#navbarNav').collapse('hide');
                }
            }
        }
    });
    
    // =========================================
    // 4. DROPDOWN HOVER EFFECTS ENHANCEMENT
    // =========================================
    $('.dropdown-item').hover(
        function() {
            $(this).css({
                'transform': 'translateX(8px)',
                'box-shadow': '0 5px 15px rgba(30, 64, 175, 0.3)'
            });
        },
        function() {
            $(this).css({
                'transform': 'translateX(0)',
                'box-shadow': 'none'
            });
        }
    );
    
    // =========================================
    // 5. NOTIFICATION FUNCTION (OPTIONAL)
    // =========================================
    function showNotification(message) {
        // Remove existing notification
        $('.language-notification').remove();
        
        // Create notification
        const notification = $('<div>', {
            class: 'language-notification',
            css: {
                position: 'fixed',
                top: '100px',
                right: '20px',
                background: 'linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%)',
                color: 'white',
                padding: '12px 20px',
                borderRadius: '8px',
                boxShadow: '0 10px 25px rgba(0,0,0,0.2)',
                zIndex: '9999',
                animation: 'slideInRight 0.3s ease-out'
            },
            text: message
        });
        
        // Add to body
        $('body').append(notification);
        
        // Remove after 3 seconds
        setTimeout(function() {
            notification.animate({
                right: '-300px',
                opacity: 0
            }, 300, function() {
                $(this).remove();
            });
        }, 3000);
    }
    
    // =========================================
    // 6. ENSURE DROPDOWN WORKS ON MOBILE
    // =========================================
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown-menu').removeClass('show');
        }
    });
    
    // =========================================
    // 7. INITIALIZE TOOLTIPS (IF ANY)
    // =========================================
    if (typeof $.fn.tooltip !== 'undefined') {
        $('[data-bs-toggle="tooltip"]').tooltip();
    }
    
    // =========================================
    // 8. ADD CSS ANIMATION FOR NOTIFICATION
    // =========================================
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    `;
    document.head.appendChild(style);
    
    console.log('Vantasource scripts initialized successfully');
});