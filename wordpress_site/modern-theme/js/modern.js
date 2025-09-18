/**
 * FDS Modern Theme - Enhanced Interactions
 * Clean, performant JavaScript for modern user experience
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize all modern interactions
    initScrollAnimations();
    initHeaderEffects();
    initCardInteractions();
    initButtonEffects();
    initLazyLoading();
    initContactForms();
    initMobileMenu();
    initCalendlyOverlay();
    
});

/**
 * Modern scroll animations with Intersection Observer
 */
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Staggered animation timing
                setTimeout(() => {
                    entry.target.classList.add('animate-fade-in-up');
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
                
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all animatable elements
    const elements = document.querySelectorAll('.fds-card, .fds-section h2, .fds-section p');
    elements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1), transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
        observer.observe(el);
    });
}

/**
 * Modern header effects on scroll
 */
function initHeaderEffects() {
    const header = document.querySelector('.site-header');
    let lastScrollTop = 0;
    let ticking = false;
    
    function updateHeader() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.98)';
            header.style.backdropFilter = 'blur(20px)';
            header.style.borderBottom = '1px solid rgba(0, 0, 0, 0.1)';
        } else {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
            header.style.borderBottom = '1px solid var(--fds-gray-100)';
        }
        
        lastScrollTop = scrollTop;
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick, { passive: true });
}

/**
 * Enhanced card interactions
 */
function initCardInteractions() {
    const cards = document.querySelectorAll('.fds-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
            this.style.boxShadow = 'var(--fds-shadow-2xl)';
            this.style.borderColor = 'var(--fds-primary)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = 'var(--fds-shadow)';
            this.style.borderColor = 'var(--fds-gray-100)';
        });
        
        // Ripple effect on click
        card.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(59, 130, 246, 0.3)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.pointerEvents = 'none';
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });
    
    // Add ripple animation keyframes
    if (!document.querySelector('#ripple-styles')) {
        const style = document.createElement('style');
        style.id = 'ripple-styles';
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }
}

/**
 * Modern button effects
 */
function initButtonEffects() {
    const buttons = document.querySelectorAll('.fds-btn');
    
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
        
        btn.addEventListener('mousedown', function() {
            this.style.transform = 'translateY(0) scale(0.98)';
        });
        
        btn.addEventListener('mouseup', function() {
            this.style.transform = 'translateY(-2px) scale(1)';
        });
    });
}

/**
 * Performance-focused lazy loading
 */
function initLazyLoading() {
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        img.classList.add('loaded');
                    }
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Preload critical resources
    if ('requestIdleCallback' in window) {
        requestIdleCallback(() => {
            const criticalLinks = document.querySelectorAll('a[href*="calendly"], a[href*="/services"]');
            criticalLinks.forEach(link => {
                const prefetch = document.createElement('link');
                prefetch.rel = 'prefetch';
                prefetch.href = link.href;
                document.head.appendChild(prefetch);
            });
        });
    }
}

/**
 * Modern contact form handling
 */
function initContactForms() {
    const forms = document.querySelectorAll('form[id*="contact"]');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            handleContactSubmission(this);
        });
    });
}

function handleContactSubmission(form) {
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    // Show loading state
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    submitBtn.classList.add('loading');
    
    // Convert FormData to object
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    
    data.action = 'fds_contact_form';
    data.nonce = fds_ajax.nonce;
    
    // Send via fetch API
    fetch(fds_ajax.ajaxurl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(data)
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            showFormMessage(form, 'success', result.data);
            form.reset();
        } else {
            showFormMessage(form, 'error', result.data);
        }
    })
    .catch(error => {
        showFormMessage(form, 'error', 'Sorry, there was an error. Please try again.');
    })
    .finally(() => {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
        submitBtn.classList.remove('loading');
    });
}

function showFormMessage(form, type, message) {
    let messageEl = form.querySelector('.form-message');
    if (!messageEl) {
        messageEl = document.createElement('div');
        messageEl.className = 'form-message';
        form.appendChild(messageEl);
    }
    
    messageEl.className = `form-message ${type}`;
    messageEl.textContent = message;
    messageEl.style.padding = 'var(--fds-space-4)';
    messageEl.style.borderRadius = 'var(--fds-radius-lg)';
    messageEl.style.marginTop = 'var(--fds-space-4)';
    messageEl.style.animation = 'slideInLeft 0.3s ease-out';
    
    if (type === 'success') {
        messageEl.style.background = '#10B981';
        messageEl.style.color = 'white';
    } else {
        messageEl.style.background = '#EF4444';
        messageEl.style.color = 'white';
    }
    
    setTimeout(() => {
        messageEl.style.opacity = '0';
        setTimeout(() => messageEl.remove(), 300);
    }, 5000);
}

/**
 * Mobile menu functionality
 */
function initMobileMenu() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.main-navigation');
    
    if (toggle && nav) {
        toggle.addEventListener('click', function() {
            nav.classList.toggle('mobile-open');
            toggle.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!nav.contains(e.target) && !toggle.contains(e.target)) {
                nav.classList.remove('mobile-open');
                toggle.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        });
        
        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                nav.classList.remove('mobile-open');
                toggle.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        });
    }
}

/**
 * Calendly overlay modal functionality
 */
function initCalendlyOverlay() {
    // Create overlay HTML structure
    const overlayHTML = `
        <div class="calendly-overlay" id="calendly-overlay">
            <div class="calendly-modal">
                <div class="calendly-header">
                    <h3 class="calendly-title">Schedule Your Free Consultation</h3>
                    <button class="calendly-close" id="calendly-close">&times;</button>
                </div>
                <div class="calendly-iframe-container">
                    <div class="calendly-loading" id="calendly-loading">
                        <div class="calendly-spinner"></div>
                        <p>Loading booking calendar...</p>
                    </div>
                    <iframe class="calendly-iframe" id="calendly-iframe" 
                            src="" 
                            style="display: none;"
                            onload="hideCalendlyLoading()">
                    </iframe>
                </div>
            </div>
        </div>
    `;
    
    // Add overlay to page
    document.body.insertAdjacentHTML('beforeend', overlayHTML);
    
    const overlay = document.getElementById('calendly-overlay');
    const modal = overlay.querySelector('.calendly-modal');
    const iframe = document.getElementById('calendly-iframe');
    const closeBtn = document.getElementById('calendly-close');
    
    // Function to show overlay
    function showCalendlyOverlay(calendlyUrl) {
        // Set iframe source
        iframe.src = calendlyUrl + '?embed_domain=' + window.location.hostname + '&embed_type=Inline';
        
        // Show overlay
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        // Focus trap
        setTimeout(() => closeBtn.focus(), 100);
    }
    
    // Function to hide overlay
    function hideCalendlyOverlay() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
        iframe.src = '';
        
        // Reset loading state
        document.getElementById('calendly-loading').style.display = 'flex';
        iframe.style.display = 'none';
    }
    
    // Global function to hide loading (called by iframe onload)
    window.hideCalendlyLoading = function() {
        document.getElementById('calendly-loading').style.display = 'none';
        iframe.style.display = 'block';
    };
    
    // Intercept Calendly links
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a[href*="calendly.com"]');
        if (link) {
            e.preventDefault();
            showCalendlyOverlay(link.href);
        }
    });
    
    // Close overlay events
    closeBtn.addEventListener('click', hideCalendlyOverlay);
    
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) {
            hideCalendlyOverlay();
        }
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && overlay.classList.contains('active')) {
            hideCalendlyOverlay();
        }
    });
    
    // Prevent modal from closing when clicking inside
    modal.addEventListener('click', function(e) {
        e.stopPropagation();
    });
}

/**
 * Utility functions
 */
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

function debounce(func, wait, immediate) {
    let timeout;
    return function() {
        const context = this, args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}