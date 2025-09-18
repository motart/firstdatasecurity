    </div><!-- #content -->

    <footer class="site-footer" role="contentinfo">
        <div class="fds-container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?php echo esc_url(home_url('/services/soc2-fast-lane')); ?>">SOC 2 Fast-Lane</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/soc2-managed')); ?>">SOC 2 Type II Managed</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/trust-center')); ?>">Trust Center Setup</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/pentest-coordination')); ?>">Pen-test Coordination</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/vciso')); ?>">vCISO Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/cmmc-level2')); ?>">CMMC Level 2</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Company</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Resources</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                        <li><a href="<?php echo esc_url(home_url('/case-studies')); ?>">Case Studies</a></li>
                        <li><a href="<?php echo esc_url(home_url('/whitepapers')); ?>">Whitepapers</a></li>
                        <li><a href="<?php echo esc_url(home_url('/compliance-guides')); ?>">Compliance Guides</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p>
                        <strong>Email:</strong><br>
                        <a href="mailto:info@firstdatasecurity.com">info@firstdatasecurity.com</a>
                    </p>
                    <p>
                        <strong>Schedule Consultation:</strong><br>
                        <a href="https://calendly.com/firstdatasecurity/free-consultation" target="_blank" rel="noopener">Book a 20-min Fit Check</a>
                    </p>
                    <div class="social-links" style="margin-top: 1rem;">
                        <a href="https://linkedin.com/company/firstdatasecurity" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> First Data Security. All rights reserved. | Helping organizations achieve compliance excellence through governance-first cybersecurity.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    <!-- Enhanced interaction script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enhanced card hover effects
        const cards = document.querySelectorAll('.fds-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
                this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)';
            });
        });
        
        // Smooth scrolling for anchor links
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add loading animation to external links
        const externalLinks = document.querySelectorAll('a[href^="http"]');
        externalLinks.forEach(link => {
            link.addEventListener('click', function() {
                const originalText = this.textContent;
                this.textContent = 'Opening...';
                setTimeout(() => {
                    this.textContent = originalText;
                }, 2000);
            });
        });
        
        // Intersection observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe all sections for animation
        const sections = document.querySelectorAll('.fds-section');
        sections.forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(section);
        });
    });
    </script>
</body>
</html>