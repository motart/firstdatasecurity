<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="fds-container">
        <!-- Hero Section -->
        <section class="fds-hero" style="background: linear-gradient(135deg, #0066cc 0%, #004499 100%);">
            <div class="fds-container">
                <h1>Get Started Today</h1>
                <p class="fds-hero-subtitle">Ready to achieve compliance readiness? Let's discuss your cybersecurity governance needs and create a roadmap for success.</p>
            </div>
        </section>

        <!-- Contact Options -->
        <section class="fds-section">
            <div class="fds-container">
                <div class="wp-block-columns fds-grid-2">
                    <div class="wp-block-column fds-card">
                        <h2>📅 Schedule a Consultation</h2>
                        <p>Book a 20-minute fit check to discuss your specific compliance needs and explore how our services can accelerate your cybersecurity readiness.</p>
                        
                        <h3>What We'll Cover:</h3>
                        <ul>
                            <li>Current security posture assessment</li>
                            <li>Compliance requirements and timeline</li>
                            <li>Service recommendations and roadmap</li>
                            <li>Implementation timeline and investment</li>
                            <li>Next steps and engagement options</li>
                        </ul>
                        
                        <a href="https://calendly.com/firstdatasecurity/free-consultation" class="wp-block-button__link" target="_blank" rel="noopener" style="display: inline-block; margin-top: 1rem;">Book Your Fit Check</a>
                    </div>
                    
                    <div class="wp-block-column fds-card">
                        <h2>📧 Contact Information</h2>
                        <p>Prefer to reach out directly? We're here to help with any questions about our services or compliance requirements.</p>
                        
                        <div style="margin: 2rem 0;">
                            <h4>Email</h4>
                            <p><a href="mailto:info@firstdatasecurity.com">info@firstdatasecurity.com</a></p>
                            
                            <h4>Response Time</h4>
                            <p>We respond to all inquiries within 24 hours during business days.</p>
                            
                            <h4>Business Hours</h4>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM EST<br>
                            Emergency incidents: 24/7 for vCISO clients</p>
                        </div>
                        
                        <div class="social-links" style="margin-top: 2rem;">
                            <h4>Connect With Us</h4>
                            <a href="https://linkedin.com/company/firstdatasecurity" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 0.5rem; margin-right: 1rem;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section class="fds-section" style="background-color: #f8f9fa;">
            <div class="fds-container">
                <div class="wp-block-columns">
                    <div class="wp-block-column" style="flex-basis: 60%;">
                        <div class="fds-card">
                            <h2>💬 Send Us a Message</h2>
                            <p>Have specific questions or want to discuss your compliance needs? Fill out the form below and we'll get back to you within 24 hours.</p>
                            
                            <form id="fds-contact-form" style="margin-top: 2rem;">
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                                    <div>
                                        <label for="contact-name" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Name *</label>
                                        <input type="text" id="contact-name" name="name" required style="width: 100%; padding: 0.75rem; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;">
                                    </div>
                                    <div>
                                        <label for="contact-email" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email *</label>
                                        <input type="email" id="contact-email" name="email" required style="width: 100%; padding: 0.75rem; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;">
                                    </div>
                                </div>
                                
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                                    <div>
                                        <label for="contact-company" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Company</label>
                                        <input type="text" id="contact-company" name="company" style="width: 100%; padding: 0.75rem; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;">
                                    </div>
                                    <div>
                                        <label for="contact-service" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Service Interest</label>
                                        <select id="contact-service" name="service" style="width: 100%; padding: 0.75rem; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;">
                                            <option value="">Select a service</option>
                                            <option value="soc2-fast-lane">SOC 2 Fast-Lane (Type I)</option>
                                            <option value="soc2-managed">SOC 2 Type II Managed</option>
                                            <option value="trust-center">Trust Center Setup</option>
                                            <option value="pentest-coordination">Pen-test Coordination</option>
                                            <option value="vciso">vCISO Services</option>
                                            <option value="cmmc-level2">CMMC Level 2</option>
                                            <option value="general">General Inquiry</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div style="margin-bottom: 1rem;">
                                    <label for="contact-message" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Message *</label>
                                    <textarea id="contact-message" name="message" rows="5" required style="width: 100%; padding: 0.75rem; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem; resize: vertical;" placeholder="Tell us about your compliance needs, timeline, and any specific questions..."></textarea>
                                </div>
                                
                                <div style="margin-bottom: 1rem;">
                                    <label style="display: flex; align-items: center; gap: 0.5rem;">
                                        <input type="checkbox" required style="margin: 0;">
                                        <span>I agree to receive communications from First Data Security regarding my inquiry. We respect your privacy and will never share your information.</span>
                                    </label>
                                </div>
                                
                                <button type="submit" class="wp-block-button__link" style="border: none; cursor: pointer; display: inline-block;">Send Message</button>
                            </form>
                            
                            <div id="form-messages" style="margin-top: 1rem;"></div>
                        </div>
                    </div>
                    
                    <div class="wp-block-column" style="flex-basis: 35%;">
                        <div class="fds-card">
                            <h3>🚀 Why Choose First Data Security?</h3>
                            <ul>
                                <li><strong>Proven Results:</strong> 100+ successful compliance implementations</li>
                                <li><strong>Fixed Timelines:</strong> Predictable delivery schedules</li>
                                <li><strong>Expert Team:</strong> Former auditors and compliance professionals</li>
                                <li><strong>Comprehensive Service:</strong> From fast-lane audits to ongoing vCISO support</li>
                            </ul>
                            
                            <h3 style="margin-top: 2rem;">⚡ Fast Response</h3>
                            <p>We understand compliance deadlines are firm. That's why we respond to all inquiries within 24 hours and can start most engagements within 1-2 weeks.</p>
                            
                            <h3 style="margin-top: 2rem;">🎯 Free Assessment</h3>
                            <p>Every consultation includes a complimentary high-level assessment of your current security posture and compliance readiness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="fds-section">
            <div class="fds-container">
                <h2 style="text-align: center;">❓ Frequently Asked Questions</h2>
                <div class="wp-block-columns fds-grid-2">
                    <div class="wp-block-column fds-card">
                        <h3>How quickly can you start an engagement?</h3>
                        <p>Most engagements can begin within 1-2 weeks of initial consultation. SOC 2 Fast-Lane programs typically start within one week due to the time-sensitive nature.</p>
                        
                        <h3>Do you work with specific auditing firms?</h3>
                        <p>We're auditor-agnostic and work with your chosen CPA firm. Our auditor concierge service coordinates with any qualified SOC 2 auditor to ensure smooth delivery.</p>
                        
                        <h3>What if we're not ready for a full engagement?</h3>
                        <p>We offer consultation-only services and can provide roadmaps and assessments to help you prepare for future compliance initiatives.</p>
                    </div>
                    
                    <div class="wp-block-column fds-card">
                        <h3>Can you help with multiple compliance frameworks?</h3>
                        <p>Yes! Our governance-first approach creates foundations that support SOC 2, ISO 27001, CMMC, and other frameworks simultaneously, maximizing your compliance investment.</p>
                        
                        <h3>What's included in the initial consultation?</h3>
                        <p>Our 20-minute fit check includes current state assessment, requirement analysis, service recommendations, timeline estimates, and next steps—all at no cost.</p>
                        
                        <h3>Do you provide ongoing support after implementation?</h3>
                        <p>Absolutely. We offer managed Type II services, ongoing vCISO support, and maintenance packages to ensure continued compliance success.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="fds-section fds-card fds-cta">
            <div class="fds-container" style="text-align: center;">
                <h3>Ready to Start Your Compliance Journey?</h3>
                <p>Don't let compliance requirements slow down your growth. Get expert guidance and proven results with our governance-first approach.</p>
                <a href="https://calendly.com/firstdatasecurity/free-consultation" class="wp-block-button__link" target="_blank" rel="noopener" style="margin-top: 1rem;">Book Your Free Consultation</a>
            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('fds-contact-form');
    const messages = document.getElementById('form-messages');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const submitButton = form.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        
        // Show loading state
        submitButton.textContent = 'Sending...';
        submitButton.disabled = true;
        
        // Simulate form submission (replace with actual form handler)
        setTimeout(() => {
            messages.innerHTML = '<div style="padding: 1rem; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 8px;">Thank you for your message! We\'ll get back to you within 24 hours.</div>';
            form.reset();
            submitButton.textContent = originalText;
            submitButton.disabled = false;
            
            // Scroll to messages
            messages.scrollIntoView({ behavior: 'smooth' });
        }, 2000);
    });
});
</script>

<style>
@media (max-width: 768px) {
    #fds-contact-form div[style*="grid-template-columns"] {
        grid-template-columns: 1fr !important;
    }
}
</style>

<?php get_footer(); ?>