    </main><!-- #main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section footer-about">
                    <h3>First Data Security</h3>
                    <p>Turn SOC compliance into your fastest sales enabler. We help SaaS companies close more enterprise deals by getting SOC 1, SOC 2, and SOC 3 compliant — fast, repeatable, and audit-ready.</p>
                    <div class="footer-social">
                        <a href="https://linkedin.com/company/first-data-security" aria-label="LinkedIn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://twitter.com/firstdatasec" aria-label="Twitter">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="<?php echo home_url('/services/soc-1'); ?>">SOC 1 Readiness</a></li>
                        <li><a href="<?php echo home_url('/services/soc-2'); ?>">SOC 2 Type I & II</a></li>
                        <li><a href="<?php echo home_url('/services/soc-3'); ?>">SOC 3 Public Reports</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>">All Services</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Industries</h3>
                    <ul>
                        <li><a href="<?php echo home_url('/industries/saas'); ?>">SaaS Companies</a></li>
                        <li><a href="<?php echo home_url('/industries/fintech'); ?>">Fintech SaaS</a></li>
                        <li><a href="<?php echo home_url('/industries/healthtech'); ?>">HealthTech SaaS</a></li>
                        <li><a href="<?php echo home_url('/case-studies'); ?>">Case Studies</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="<?php echo home_url('/resources'); ?>">Guides & Checklists</a></li>
                        <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                        <li><a href="<?php echo home_url('/faq'); ?>">FAQ</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; <?php echo date('Y'); ?> First Data Security. All rights reserved.</p>
                    <div class="footer-legal">
                        <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>
                        <a href="<?php echo home_url('/terms-of-service'); ?>">Terms of Service</a>
                        <a href="<?php echo home_url('/data-processing-addendum'); ?>">DPA</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cookie Notice -->
    <div id="cookie-notice" class="cookie-notice" style="display: none;">
        <div class="cookie-notice-content">
            <p>We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. <a href="<?php echo home_url('/privacy-policy'); ?>">Learn more</a></p>
            <button id="accept-cookies" class="btn btn-accent">Accept</button>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Cookie Notice Script -->
<script>
(function() {
    const cookieNotice = document.getElementById('cookie-notice');
    const acceptButton = document.getElementById('accept-cookies');
    
    if (!localStorage.getItem('cookies-accepted')) {
        cookieNotice.style.display = 'block';
    }
    
    acceptButton.addEventListener('click', function() {
        localStorage.setItem('cookies-accepted', 'true');
        cookieNotice.style.display = 'none';
    });
})();
</script>

<style>
.cookie-notice {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: var(--fds-dark);
    color: var(--fds-white);
    padding: 1rem;
    z-index: 1000;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
}

.cookie-notice-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    gap: 1rem;
}

.cookie-notice p {
    margin: 0;
    flex: 1;
}

.cookie-notice a {
    color: var(--fds-accent);
}

@media (max-width: 767px) {
    .cookie-notice-content {
        flex-direction: column;
        text-align: center;
    }
}
</style>

</body>
</html>