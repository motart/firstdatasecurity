/**
 * FDS Ultra-Clean Header JavaScript
 * Creates an incredibly smooth, modern header experience
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    function ready(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    // Initialize header functionality
    ready(function() {
        initCleanHeader();
        initSmoothScrolling();
        initMobileMenu();
        initActiveMenuStates();
        initHeaderAnimations();
    });

    function initCleanHeader() {
        const header = document.querySelector('.fds-clean-header');
        if (!header) return;

        let lastScrollY = window.scrollY;
        let ticking = false;

        function updateHeader() {
            const scrollY = window.scrollY;
            
            // Add scrolled class for styling
            if (scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Hide/show header on scroll (optional - ultra clean UX)
            if (scrollY > lastScrollY && scrollY > 200) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }

            lastScrollY = scrollY;
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

    function initSmoothScrolling() {
        // Smooth scroll for anchor links
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                
                const target = document.querySelector(href);
                if (!target) return;
                
                e.preventDefault();
                
                const headerHeight = document.querySelector('.fds-clean-header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    function initMobileMenu() {
        const toggle = document.querySelector('.fds-mobile-toggle');
        const menu = document.querySelector('.fds-mobile-menu');
        
        if (!toggle || !menu) return;

        toggle.addEventListener('click', function() {
            const isActive = toggle.classList.contains('active');
            
            toggle.classList.toggle('active');
            menu.classList.toggle('active');
            
            // Animate menu items
            if (!isActive) {
                const menuItems = menu.querySelectorAll('.fds-nav-item');
                menuItems.forEach((item, index) => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateX(-20px)';
                    
                    setTimeout(() => {
                        item.style.transition = 'all 0.3s ease';
                        item.style.opacity = '1';
                        item.style.transform = 'translateX(0)';
                    }, index * 100 + 100);
                });
            }
            
            // Prevent body scroll when menu is open
            document.body.style.overflow = isActive ? '' : 'hidden';
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                toggle.classList.remove('active');
                menu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Close menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                toggle.classList.remove('active');
                menu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    function initActiveMenuStates() {
        const navLinks = document.querySelectorAll('.fds-nav-link');
        const currentPath = window.location.pathname;
        
        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;
            
            if (linkPath === currentPath || 
                (currentPath === '/' && linkPath === '/home')) {
                link.classList.add('active');
            }
        });
    }

    function initHeaderAnimations() {
        // Add subtle hover effects to navigation items
        const navItems = document.querySelectorAll('.fds-nav-item');
        
        navItems.forEach(item => {
            const link = item.querySelector('.fds-nav-link');
            if (!link) return;

            item.addEventListener('mouseenter', function() {
                // Add ripple effect
                createRipple(link);
            });
        });

        // CTA button hover effect
        const ctaButton = document.querySelector('.fds-cta-button');
        if (ctaButton) {
            ctaButton.addEventListener('click', function(e) {
                createRipple(this, e);
            });
        }
    }

    function createRipple(element, event = null) {
        const ripple = document.createElement('span');
        const rect = element.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        
        let x, y;
        if (event) {
            x = event.clientX - rect.left - size / 2;
            y = event.clientY - rect.top - size / 2;
        } else {
            x = rect.width / 2 - size / 2;
            y = rect.height / 2 - size / 2;
        }
        
        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            left: ${x}px;
            top: ${y}px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            pointer-events: none;
            transform: scale(0);
            animation: ripple 0.6s ease-out;
        `;
        
        element.style.position = 'relative';
        element.style.overflow = 'hidden';
        element.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    }

    // Add CSS for ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .fds-nav-link, .fds-cta-button {
            position: relative;
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Performance optimization - debounce scroll events
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Add smooth transitions for better UX
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });

})();