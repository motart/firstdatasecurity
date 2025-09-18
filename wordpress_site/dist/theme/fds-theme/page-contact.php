<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<section class="page-hero">
    <div class="container">
        <div class="hero-content text-center">
            <h1>Get SOC compliant fast</h1>
            <p>Book a 15-minute fit call to see if FDS is right for your SaaS team</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid grid-2" style="gap: 4rem; align-items: start;">
            <div class="contact-info">
                <h2>Ready to accelerate your enterprise sales?</h2>
                <p>We help SaaS companies get SOC compliant in weeks, not months. Here's what to expect:</p>
                
                <div class="contact-steps">
                    <div class="contact-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>15-minute fit call</h3>
                            <p>We'll discuss your compliance goals, timeline, and tech stack to see if we're a good match.</p>
                        </div>
                    </div>
                    
                    <div class="contact-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>48-hour gap analysis</h3>
                            <p>If we move forward, we'll audit your current state and create a detailed roadmap.</p>
                        </div>
                    </div>
                    
                    <div class="contact-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>SOC compliance in 30-120 days</h3>
                            <p>Depending on your needs (Type I/II), we'll get you audit-ready fast.</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-details">
                    <h3>Prefer to reach out directly?</h3>
                    <div class="contact-item">
                        <strong>Email:</strong> hello@firstdatasecurity.com
                    </div>
                    <div class="contact-item">
                        <strong>Phone:</strong> +1 (555) SOC-FAST
                    </div>
                    <div class="contact-item">
                        <strong>Location:</strong> Sacramento, CA (serving US clients)
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container">
                <form id="contact-form" class="contact-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company" class="form-label">Company *</label>
                        <input type="text" id="company" name="company" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="role" class="form-label">Role *</label>
                        <select id="role" name="role" class="form-select" required>
                            <option value="">Select your role</option>
                            <option value="CTO">CTO</option>
                            <option value="VP Engineering">VP Engineering</option>
                            <option value="Head of Compliance">Head of Compliance</option>
                            <option value="Head of Security">Head of Security</option>
                            <option value="CEO/Founder">CEO/Founder</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="arr_bracket" class="form-label">ARR Bracket</label>
                        <select id="arr_bracket" name="arr_bracket" class="form-select">
                            <option value="">Select ARR range</option>
                            <option value="<$1M">Under $1M</option>
                            <option value="$1M-$5M">$1M - $5M</option>
                            <option value="$5M-$20M">$5M - $20M</option>
                            <option value="$20M+">$20M+</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="timing" class="form-label">Compliance Timeline *</label>
                        <select id="timing" name="timing" class="form-select" required>
                            <option value="">When do you need to be compliant?</option>
                            <option value="ASAP">ASAP (0-30 days)</option>
                            <option value="Q1">This quarter</option>
                            <option value="Q2">Next quarter</option>
                            <option value="Later">6+ months out</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="compliance_type" class="form-label">Compliance Type</label>
                        <select id="compliance_type" name="compliance_type" class="form-select">
                            <option value="">What type of SOC do you need?</option>
                            <option value="SOC 2 Type I">SOC 2 Type I</option>
                            <option value="SOC 2 Type II">SOC 2 Type II</option>
                            <option value="SOC 1">SOC 1</option>
                            <option value="SOC 3">SOC 3</option>
                            <option value="Not sure">Not sure yet</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Additional Details</label>
                        <textarea id="message" name="message" class="form-textarea" rows="4" placeholder="Tell us about your specific compliance needs or challenges..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        Book My Fit Call
                    </button>
                    
                    <p class="form-disclaimer">
                        We typically respond within 2 hours during business hours. All information is kept confidential.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section" style="background-color: var(--fds-neutral-50);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently asked questions</h2>
        </div>
        
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    Do you work with companies outside the US?
                </div>
                <div class="faq-answer">
                    Currently, we focus exclusively on US-based SaaS companies. This allows us to provide specialized expertise around US compliance frameworks and work efficiently within US time zones.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    What's the minimum company size you work with?
                </div>
                <div class="faq-answer">
                    We typically work with SaaS companies that have at least $500K ARR or are actively pursuing enterprise deals. Earlier-stage companies can still benefit from our SOC 2 playbook download.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    How much does SOC compliance cost?
                </div>
                <div class="faq-answer">
                    Total cost varies based on your current state and compliance goals. Our services typically range from $15K-$50K, plus auditor fees ($8K-$25K). We'll give you exact pricing after the gap analysis.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    Can you guarantee we'll pass the audit?
                </div>
                <div class="faq-answer">
                    While no one can guarantee audit outcomes, our clients have a 98% first-time pass rate. We've refined our process through dozens of successful SOC engagements.
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.page-hero {
    background: linear-gradient(135deg, var(--fds-primary) 0%, var(--fds-dark) 100%);
    color: var(--fds-white);
    padding: 4rem 0;
    text-align: center;
}

.page-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: var(--fds-white);
}

.page-hero p {
    font-size: 1.125rem;
    opacity: 0.9;
}

.contact-steps {
    margin: 2rem 0;
}

.contact-step {
    display: flex;
    align-items: flex-start;
    margin-bottom: 2rem;
}

.step-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: var(--fds-primary);
    color: var(--fds-white);
    border-radius: 50%;
    font-weight: 700;
    margin-right: 1rem;
    flex-shrink: 0;
}

.step-content h3 {
    margin: 0 0 0.5rem 0;
    font-size: 1.125rem;
}

.step-content p {
    margin: 0;
    color: var(--fds-neutral-500);
}

.contact-details {
    background-color: var(--fds-neutral-50);
    padding: 1.5rem;
    border-radius: var(--fds-border-radius);
    margin-top: 2rem;
}

.contact-details h3 {
    margin-bottom: 1rem;
}

.contact-item {
    margin-bottom: 0.5rem;
    color: var(--fds-neutral-500);
}

.contact-form-container {
    background-color: var(--fds-white);
    padding: 2rem;
    border-radius: var(--fds-border-radius-xl);
    box-shadow: var(--fds-shadow-lg);
    border: 1px solid var(--fds-neutral-200);
}

.form-disclaimer {
    margin-top: 1rem;
    font-size: 0.875rem;
    color: var(--fds-neutral-500);
    text-align: center;
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

@media (max-width: 767px) {
    .page-hero h1 {
        font-size: 2rem;
    }
    
    .contact-form-container {
        padding: 1.5rem;
    }
}
</style>

<?php get_footer(); ?>