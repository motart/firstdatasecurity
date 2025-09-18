/**
 * First Data Security - Main JavaScript
 * Enhanced interactions and animations
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile menu functionality
    initMobileMenu();
    
    // Enhanced card interactions
    initCardAnimations();
    
    // Smooth scrolling
    initSmoothScrolling();
    
    // Intersection observer for animations
    initScrollAnimations();
    
    // Form enhancements
    initFormEnhancements();
    
    // Performance optimizations
    initPerformanceOptimizations();
});

/**
 * Mobile menu initialization
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
        
        // Close menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                nav.classList.remove('mobile-open');
                toggle.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        });
    }
}

/**
 * Enhanced card animations
 */
function initCardAnimations() {
    const cards = document.querySelectorAll('.fds-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
            this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.15)';
            this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)';
        });
        
        // Add click ripple effect
        card.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });
}

/**
 * Smooth scrolling for anchor links
 */
function initSmoothScrolling() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            
            if (target) {
                const headerHeight = document.querySelector('.site-header')?.offsetHeight || 0;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Scroll-triggered animations
 */
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Stagger animations for child elements
                const children = entry.target.querySelectorAll('.fds-card, .process-step');
                children.forEach((child, index) => {
                    setTimeout(() => {
                        child.classList.add('animate-in');
                    }, index * 100);
                });
            }
        });
    }, observerOptions);
    
    // Observe sections and cards
    const elements = document.querySelectorAll('.fds-section, .fds-card, .process-step');
    elements.forEach(el => {
        el.classList.add('animate-ready');
        observer.observe(el);
    });
}

/**
 * Form enhancements
 */
function initFormEnhancements() {
    // Contact form handling
    const contactForm = document.getElementById('fds-contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', handleContactForm);
    }
    
    // Add floating labels
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        if (input.type !== 'checkbox' && input.type !== 'submit') {
            addFloatingLabel(input);
        }
    });
    
    // Real-time validation
    const emailInputs = document.querySelectorAll('input[type="email"]');
    emailInputs.forEach(input => {
        input.addEventListener('blur', validateEmail);
    });
}

/**
 * Handle contact form submission
 */
function handleContactForm(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    const submitButton = form.querySelector('button[type="submit"]');
    const messages = document.getElementById('form-messages');
    const originalText = submitButton.textContent;
    
    // Show loading state
    submitButton.textContent = 'Sending...';
    submitButton.disabled = true;
    submitButton.classList.add('loading');
    
    // Convert FormData to object
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    
    // Add nonce for security
    data.action = 'fds_contact_form';
    data.nonce = fds_ajax.nonce;
    
    // Send to WordPress
    fetch(fds_ajax.ajaxurl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showMessage(messages, 'success', data.data);
            form.reset();
        } else {
            showMessage(messages, 'error', data.data);
        }
    })
    .catch(error => {
        showMessage(messages, 'error', 'Sorry, there was an error sending your message. Please try again.');
    })
    .finally(() => {
        submitButton.textContent = originalText;
        submitButton.disabled = false;
        submitButton.classList.remove('loading');
    });
}

/**
 * Show form messages
 */
function showMessage(container, type, message) {
    const className = type === 'success' ? 'success-message' : 'error-message';
    const bgColor = type === 'success' ? '#d4edda' : '#f8d7da';
    const textColor = type === 'success' ? '#155724' : '#721c24';
    const borderColor = type === 'success' ? '#c3e6cb' : '#f5c6cb';
    
    container.innerHTML = `
        <div class="${className}" style="
            padding: 1rem; 
            background: ${bgColor}; 
            color: ${textColor}; 
            border: 1px solid ${borderColor}; 
            border-radius: 8px;
            margin-top: 1rem;
            animation: slideIn 0.3s ease-out;
        ">
            ${message}
        </div>
    `;
    
    container.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

/**
 * Add floating labels to inputs
 */
function addFloatingLabel(input) {
    const parent = input.parentElement;
    const label = parent.querySelector('label');
    
    if (label && !parent.classList.contains('floating-label')) {
        parent.classList.add('floating-label');
        
        input.addEventListener('focus', () => {
            parent.classList.add('focused');
        });
        
        input.addEventListener('blur', () => {
            if (!input.value) {
                parent.classList.remove('focused');
            }
        });
        
        // Check initial value
        if (input.value) {
            parent.classList.add('focused');
        }
    }
}

/**
 * Email validation
 */
function validateEmail(e) {
    const email = e.target.value;
    const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    const parent = e.target.parentElement;
    
    parent.classList.remove('valid', 'invalid');
    
    if (email) {
        if (isValid) {
            parent.classList.add('valid');
        } else {
            parent.classList.add('invalid');
        }
    }
}

/**
 * Performance optimizations
 */
function initPerformanceOptimizations() {
    // Lazy load images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Preload critical resources
    const criticalLinks = document.querySelectorAll('a[href*="calendly"]');
    criticalLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            const preload = document.createElement('link');
            preload.rel = 'prefetch';
            preload.href = link.href;
            document.head.appendChild(preload);
        }, { once: true });
    });
    
    // Debounce scroll events
    let scrollTimeout;
    window.addEventListener('scroll', () => {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }
        scrollTimeout = setTimeout(handleScroll, 10);
    });
}

/**
 * Handle scroll events
 */
function handleScroll() {
    const header = document.querySelector('.site-header');
    if (header) {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
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