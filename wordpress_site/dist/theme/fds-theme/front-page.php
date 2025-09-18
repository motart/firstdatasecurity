<?php
/**
 * The front page template file
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Close enterprise deals faster with SOC compliance</h1>
            <p>FDS gets SaaS teams SOC 1/2/3 audit-ready without slowing engineering. Turn compliance into your fastest sales enabler.</p>
            <div class="hero-cta">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">Book a 15-min fit call</a>
                <a href="<?php echo home_url('/resources/soc-2-playbook'); ?>" class="btn btn-ghost btn-lg">Download SOC 2 Playbook</a>
            </div>
        </div>
    </div>
</section>

<!-- Logo Strip -->
<section class="logo-strip">
    <div class="container">
        <p class="text-center mb-4" style="color: var(--fds-neutral-500); font-size: 0.875rem;">Trusted by fast-growing SaaS companies</p>
        <div class="logo-strip-inner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-placeholder-1.svg" alt="Client Logo" height="40">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-placeholder-2.svg" alt="Client Logo" height="40">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-placeholder-3.svg" alt="Client Logo" height="40">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-placeholder-4.svg" alt="Client Logo" height="40">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-placeholder-5.svg" alt="Client Logo" height="40">
        </div>
    </div>
</section>

<!-- Value Pillars -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why engineering teams choose FDS</h2>
            <p class="section-subtitle">We've built the only SOC compliance process that actually accelerates your sales cycle</p>
        </div>
        
        <div class="grid grid-3">
            <div class="card">
                <div class="card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--fds-accent);">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="10,6 14,10 10,14"/>
                    </svg>
                </div>
                <h3>Speed to Readiness</h3>
                <p>Get SOC 2 Type I in 30-45 days, Type II in 90-120 days. Our proven playbooks eliminate months of research and guesswork.</p>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--fds-accent);">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3>Revenue Enablement</h3>
                <p>Close enterprise deals 60% faster. Our compliance certificates become your strongest sales asset for enterprise buyers.</p>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--fds-accent);">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3>Engineer-Friendly</h3>
                <p>Zero slowdown to feature velocity. We handle the compliance heavy lifting while your team keeps shipping.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="section" style="background-color: var(--fds-neutral-50);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">From zero to SOC compliant in 4 steps</h2>
            <p class="section-subtitle">Our battle-tested process gets you audit-ready without the typical compliance chaos</p>
        </div>
        
        <div class="process-steps">
            <div class="process-step">
                <div class="process-number">1</div>
                <h3 class="process-title">Assess</h3>
                <p class="process-description">15-min fit call + 48-hour gap analysis. We identify exactly what you need for your compliance goals.</p>
            </div>
            
            <div class="process-step">
                <div class="process-number">2</div>
                <h3 class="process-title">Implement</h3>
                <p class="process-description">Deploy our proven policy framework, risk register, and control mappings. No reinventing the wheel.</p>
            </div>
            
            <div class="process-step">
                <div class="process-number">3</div>
                <h3 class="process-title">Evidence</h3>
                <p class="process-description">Automated evidence collection and documentation. Auditor-ready from day one.</p>
            </div>
            
            <div class="process-step">
                <div class="process-number">4</div>
                <h3 class="process-title">Audit-Ready</h3>
                <p class="process-description">Clean handoff to your chosen auditor. We've done the heavy lifting—they just verify and certify.</p>
            </div>
        </div>
    </div>
</section>

<!-- What You Get -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">What you get with FDS</h2>
            <p class="section-subtitle">Everything you need for SOC compliance, delivered as battle-tested templates</p>
        </div>
        
        <div class="grid grid-2">
            <div class="deliverables-list">
                <h3>Policy & Framework</h3>
                <ul class="checklist">
                    <li>Complete ISMS policy kit (15+ policies)</li>
                    <li>Risk assessment & treatment framework</li>
                    <li>SOC 2 control mapping to your tech stack</li>
                    <li>Incident response playbooks</li>
                    <li>Employee security training program</li>
                </ul>
            </div>
            
            <div class="deliverables-list">
                <h3>Evidence & Audit Prep</h3>
                <ul class="checklist">
                    <li>Automated evidence collection scripts</li>
                    <li>Risk register with mitigations</li>
                    <li>Vendor management framework</li>
                    <li>Penetration testing coordination</li>
                    <li>Auditor selection & handoff</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section" style="background-color: var(--fds-neutral-50);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Trusted by engineering leaders</h2>
        </div>
        
        <div class="grid grid-3">
            <div class="testimonial">
                <div class="testimonial-quote">
                    "FDS got us SOC 2 compliant in 6 weeks. We closed our biggest enterprise deal the following month. ROI was instant."
                </div>
                <div class="testimonial-author">Sarah Chen</div>
                <div class="testimonial-company">CTO, DataFlow SaaS</div>
            </div>
            
            <div class="testimonial">
                <div class="testimonial-quote">
                    "Finally, compliance that doesn't slow us down. My engineering team could keep shipping features throughout the entire process."
                </div>
                <div class="testimonial-author">Marcus Rodriguez</div>
                <div class="testimonial-company">VP Engineering, CloudSync</div>
            </div>
            
            <div class="testimonial">
                <div class="testimonial-quote">
                    "Security questionnaires went from 2-week ordeals to 1-day checkbox exercises. Game changer for our sales cycle."
                </div>
                <div class="testimonial-author">Jennifer Park</div>
                <div class="testimonial-company">Head of Compliance, SecureAPI</div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study Previews -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Success stories</h2>
            <p class="section-subtitle">See how SaaS teams use SOC compliance to accelerate revenue</p>
        </div>
        
        <div class="grid grid-2">
            <div class="case-study-preview card">
                <div class="case-study-meta">
                    <span class="case-study-industry">SaaS • Series B</span>
                    <span class="case-study-timeline">45 days</span>
                </div>
                <h3>How CloudSync doubled enterprise revenue with SOC 2</h3>
                <p>Series B SaaS company reduced sales cycle from 9 months to 4 months by leading with compliance. $2.4M ARR impact in year one.</p>
                <div class="case-study-results">
                    <div class="result-metric">
                        <div class="metric-value">60%</div>
                        <div class="metric-label">Faster deal closure</div>
                    </div>
                    <div class="result-metric">
                        <div class="metric-value">$2.4M</div>
                        <div class="metric-label">Additional ARR</div>
                    </div>
                </div>
                <a href="<?php echo home_url('/case-studies/cloudsync-soc2-revenue'); ?>" class="btn btn-ghost">Read Case Study</a>
            </div>
            
            <div class="case-study-preview card">
                <div class="case-study-meta">
                    <span class="case-study-industry">Fintech • Seed</span>
                    <span class="case-study-timeline">35 days</span>
                </div>
                <h3>Seed-stage fintech's SOC 1 pathway to enterprise</h3>
                <p>Early-stage fintech unlocked banking partnerships with SOC 1 compliance. From 0 to $500K ARR in enterprise deals.</p>
                <div class="case-study-results">
                    <div class="result-metric">
                        <div class="metric-value">3</div>
                        <div class="metric-label">Bank partnerships</div>
                    </div>
                    <div class="result-metric">
                        <div class="metric-value">$500K</div>
                        <div class="metric-label">New ARR</div>
                    </div>
                </div>
                <a href="<?php echo home_url('/case-studies/payflow-soc1-banking'); ?>" class="btn btn-ghost">Read Case Study</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to turn compliance into revenue?</h2>
        <p>Book a 15-minute fit call to see if FDS is right for your SaaS team</p>
        <div class="cta-buttons">
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">Book a 15-min fit call</a>
            <a href="<?php echo home_url('/resources/soc-2-playbook'); ?>" class="btn btn-ghost btn-lg" style="color: white; border-color: white;">Download SOC 2 Playbook</a>
        </div>
    </div>
</section>

<style>
.hero-content {
    max-width: 800px;
    margin: 0 auto;
}

.hero-cta {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 2rem;
}

.card-icon {
    margin-bottom: 1rem;
}

.checklist {
    list-style: none;
    padding: 0;
}

.checklist li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.checklist li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: var(--fds-accent);
    font-weight: bold;
}

.case-study-preview {
    text-align: left;
}

.case-study-meta {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
    font-size: 0.875rem;
    color: var(--fds-neutral-500);
}

.case-study-results {
    display: flex;
    gap: 2rem;
    margin: 1.5rem 0;
}

.result-metric {
    text-align: center;
}

.metric-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--fds-primary);
}

.metric-label {
    font-size: 0.875rem;
    color: var(--fds-neutral-500);
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 2rem;
}

@media (max-width: 767px) {
    .hero h1 {
        font-size: 2rem;
    }
    
    .hero-cta {
        flex-direction: column;
        align-items: center;
    }
    
    .case-study-results {
        justify-content: space-around;
    }
}
</style>

<?php get_footer(); ?>