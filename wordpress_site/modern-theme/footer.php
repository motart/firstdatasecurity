    </div><!-- #content -->

    <footer class="site-footer" role="contentinfo">
        <div class="fds-container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/soc2-fast-lane')); ?>">SOC 2 Fast-Lane</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/soc2-managed')); ?>">SOC 2 Type II Managed</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/trust-center-setup')); ?>">Trust Center Setup</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/pentest-coordination')); ?>">Pen-test Coordination</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/vciso-services')); ?>">vCISO Services</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/cmmc-readiness')); ?>">CMMC Level 2</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Federal Services</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/csf-governance-quickstart')); ?>">CSF 2.0 Governance</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/cmmc-readiness')); ?>">CMMC 2.0 Assessment</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/fedramp-readiness')); ?>">FedRAMP Readiness</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/federal')); ?>">Federal Market</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Company</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/resources')); ?>">Resources</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        <li style="margin-bottom: var(--fds-space-2);"><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Connect</h4>
                    <p style="margin-bottom: var(--fds-space-4);">
                        <strong>Email:</strong><br>
                        <a href="mailto:info@firstdatasecurity.com">info@firstdatasecurity.com</a>
                    </p>
                    <p style="margin-bottom: var(--fds-space-4);">
                        <strong>Schedule:</strong><br>
                        <a href="https://calendly.com/firstdatasecurity/free-consultation" class="calendly-trigger">Book a 20-min Consultation</a>
                    </p>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/company/first-data-security/" target="_blank" rel="noopener" aria-label="LinkedIn" style="display: inline-flex; align-items: center; gap: var(--fds-space-2); margin-right: var(--fds-space-4);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            LinkedIn
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> First Data Security. All rights reserved. | Governance-first cybersecurity for the modern enterprise.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    <!-- Modern interaction enhancements -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enhanced scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);
        
        // Observe cards and sections
        document.querySelectorAll('.fds-card, .fds-section').forEach(el => {
            observer.observe(el);
        });
        
        // Modern button hover effects
        document.querySelectorAll('.fds-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Smooth header transition on scroll
        let lastScrollTop = 0;
        const header = document.querySelector('.site-header');
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.backdropFilter = 'blur(20px)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            }
            
            lastScrollTop = scrollTop;
        }, { passive: true });
        
        // Enhanced card interactions
        document.querySelectorAll('.fds-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
                this.style.boxShadow = 'var(--fds-shadow-2xl)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = 'var(--fds-shadow)';
            });
        });
        
        // Lazy loading for images
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
    });
    </script>
    
    <!-- Performance optimizations -->
    <script>
    // Preload critical resources
    if ('requestIdleCallback' in window) {
        requestIdleCallback(() => {
            // Preload key pages
            const importantLinks = document.querySelectorAll('a[href*="calendly"], a[href*="/services"], a[href*="/soc2"]');
            importantLinks.forEach(link => {
                const prefetch = document.createElement('link');
                prefetch.rel = 'prefetch';
                prefetch.href = link.href;
                document.head.appendChild(prefetch);
            });
        });
    }
    </script>
</body>
</html>