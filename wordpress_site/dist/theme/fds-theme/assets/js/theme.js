/**
 * First Data Security Theme JavaScript
 */

(function() {
    'use strict';

    // DOM Ready
    function ready(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    // Mobile Menu Toggle
    function initMobileMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        const mainNav = document.querySelector('.main-nav');
        
        if (menuToggle && mainNav) {
            menuToggle.addEventListener('click', function() {
                mainNav.classList.toggle('is-open');
                menuToggle.classList.toggle('is-active');
                
                // Update aria-expanded
                const isOpen = mainNav.classList.contains('is-open');
                menuToggle.setAttribute('aria-expanded', isOpen);
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!menuToggle.contains(e.target) && !mainNav.contains(e.target)) {
                    mainNav.classList.remove('is-open');
                    menuToggle.classList.remove('is-active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    }

    // FAQ Accordion
    function initFAQ() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(function(question) {
            question.addEventListener('click', function() {
                const faqItem = this.parentNode;
                const answer = faqItem.querySelector('.faq-answer');
                const isOpen = faqItem.classList.contains('is-open');
                
                // Close all other FAQ items
                document.querySelectorAll('.faq-item').forEach(function(item) {
                    if (item !== faqItem) {
                        item.classList.remove('is-open');
                        const otherAnswer = item.querySelector('.faq-answer');
                        if (otherAnswer) {
                            otherAnswer.style.maxHeight = null;
                        }
                    }
                });
                
                // Toggle current FAQ item
                if (isOpen) {
                    faqItem.classList.remove('is-open');
                    answer.style.maxHeight = null;
                } else {
                    faqItem.classList.add('is-open');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
    }

    // Smooth Scrolling for Anchor Links
    function initSmoothScrolling() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                if (href === '#') return;
                
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    const headerHeight = document.querySelector('.site-header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Form Handling
    function initForms() {
        // Contact Form
        const contactForm = document.querySelector('#contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                handleFormSubmission(this, 'contact');
            });
        }

        // Lead Magnet Forms
        const leadForms = document.querySelectorAll('.lead-magnet-form');
        leadForms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                handleFormSubmission(this, 'lead_magnet');
            });
        });
    }

    function handleFormSubmission(form, type) {
        const submitButton = form.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        
        // Show loading state
        submitButton.textContent = 'Sending...';
        submitButton.disabled = true;
        
        // Prepare form data
        const formData = new FormData(form);
        formData.append('action', type === 'contact' ? 'fds_contact' : 'fds_lead_magnet');
        formData.append('fds_nonce', fds_ajax.nonce);
        
        // Submit form
        fetch(fds_ajax.ajaxurl, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Show success message
            showNotification('Thank you! Your message has been sent successfully.', 'success');
            form.reset();
            
            // For lead magnets, redirect to download
            if (type === 'lead_magnet') {
                const magnet = formData.get('magnet');
                setTimeout(() => {
                    window.location.href = '/wp-content/themes/fds-theme/assets/downloads/' + magnet + '.pdf';
                }, 1000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showNotification('Sorry, there was an error sending your message. Please try again.', 'error');
        })
        .finally(() => {
            // Reset button
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        });
    }

    // Notification System
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <span class="notification-message">${message}</span>
                <button class="notification-close" aria-label="Close notification">&times;</button>
            </div>
        `;
        
        // Add styles if not already present
        if (!document.querySelector('#notification-styles')) {
            const styles = document.createElement('style');
            styles.id = 'notification-styles';
            styles.textContent = `
                .notification {
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    max-width: 400px;
                    padding: 1rem;
                    border-radius: 0.5rem;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                    z-index: 1000;
                    transform: translateX(100%);
                    transition: transform 0.3s ease-in-out;
                }
                .notification.show {
                    transform: translateX(0);
                }
                .notification-success {
                    background-color: #10B981;
                    color: white;
                }
                .notification-error {
                    background-color: #EF4444;
                    color: white;
                }
                .notification-info {
                    background-color: #3B82F6;
                    color: white;
                }
                .notification-content {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }
                .notification-close {
                    background: none;
                    border: none;
                    color: inherit;
                    font-size: 1.5rem;
                    cursor: pointer;
                    margin-left: 1rem;
                }
            `;
            document.head.appendChild(styles);
        }
        
        document.body.appendChild(notification);
        
        // Show notification
        requestAnimationFrame(() => {
            notification.classList.add('show');
        });
        
        // Close button functionality
        const closeButton = notification.querySelector('.notification-close');
        closeButton.addEventListener('click', () => {
            closeNotification(notification);
        });
        
        // Auto close after 5 seconds
        setTimeout(() => {
            if (document.body.contains(notification)) {
                closeNotification(notification);
            }
        }, 5000);
    }

    function closeNotification(notification) {
        notification.classList.remove('show');
        setTimeout(() => {
            if (document.body.contains(notification)) {
                document.body.removeChild(notification);
            }
        }, 300);
    }

    // Lazy Loading for Images
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            imageObserver.unobserve(img);
                        }
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    // Animation on Scroll
    function initScrollAnimations() {
        if ('IntersectionObserver' in window) {
            const animationObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                animationObserver.observe(el);
            });
        }
    }

    // Header Scroll Effect
    function initHeaderScroll() {
        const header = document.querySelector('.site-header');
        let lastScrollY = window.scrollY;
        
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            
            if (currentScrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            // Hide header when scrolling down, show when scrolling up
            if (currentScrollY > lastScrollY && currentScrollY > 200) {
                header.classList.add('header-hidden');
            } else {
                header.classList.remove('header-hidden');
            }
            
            lastScrollY = currentScrollY;
        });
    }

    // Counter Animation
    function initCounters() {
        const counters = document.querySelectorAll('.counter');
        
        const countUp = (el) => {
            const target = parseInt(el.dataset.target);
            const duration = parseInt(el.dataset.duration) || 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.textContent = Math.floor(current).toLocaleString();
            }, 16);
        };
        
        if ('IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                        entry.target.classList.add('counted');
                        countUp(entry.target);
                    }
                });
            });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });
        }
    }

    // Copy to Clipboard
    function initCopyToClipboard() {
        const copyButtons = document.querySelectorAll('[data-copy]');
        
        copyButtons.forEach(button => {
            button.addEventListener('click', () => {
                const textToCopy = button.dataset.copy;
                
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(textToCopy).then(() => {
                        showNotification('Copied to clipboard!', 'success');
                    });
                } else {
                    // Fallback for older browsers
                    const textarea = document.createElement('textarea');
                    textarea.value = textToCopy;
                    document.body.appendChild(textarea);
                    textarea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textarea);
                    showNotification('Copied to clipboard!', 'success');
                }
            });
        });
    }

    // Initialize everything when DOM is ready
    ready(function() {
        initMobileMenu();
        initFAQ();
        initSmoothScrolling();
        initForms();
        initLazyLoading();
        initScrollAnimations();
        initHeaderScroll();
        initCounters();
        initCopyToClipboard();
    });

    // Expose functions globally if needed
    window.FDSTheme = {
        showNotification: showNotification
    };

})();