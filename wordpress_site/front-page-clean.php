<?php
/**
 * Ultra-Clean Front Page Template
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <h1>Close enterprise deals faster with SOC compliance</h1>
            <p class="lead">FDS gets SaaS teams SOC 1/2/3 audit-ready without slowing engineering. Turn compliance into your fastest sales enabler.</p>
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
        <p style="text-align: center; margin-bottom: 2rem; color: #64748B; font-size: 0.9rem; font-weight: 500;">Trusted by fast-growing SaaS companies</p>
        <div class="logo-strip-inner">
            <div style="width: 120px; height: 40px; background: #E2E8F0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #94A3B8; font-size: 0.8rem; font-weight: 600;">Client Logo</div>
            <div style="width: 120px; height: 40px; background: #E2E8F0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #94A3B8; font-size: 0.8rem; font-weight: 600;">Client Logo</div>
            <div style="width: 120px; height: 40px; background: #E2E8F0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #94A3B8; font-size: 0.8rem; font-weight: 600;">Client Logo</div>
            <div style="width: 120px; height: 40px; background: #E2E8F0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #94A3B8; font-size: 0.8rem; font-weight: 600;">Client Logo</div>
            <div style="width: 120px; height: 40px; background: #E2E8F0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #94A3B8; font-size: 0.8rem; font-weight: 600;">Client Logo</div>
        </div>
    </div>
</section>

<!-- Value Pillars -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">Why engineering teams choose FDS</h2>
            <p class="section-subtitle">We've built the only SOC compliance process that actually accelerates your sales cycle</p>
        </div>
        
        <div class="grid grid-3">
            <div class="card animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="10,6 14,10 10,14"/>
                    </svg>
                </div>
                <h3>Speed to Readiness</h3>
                <p>Get SOC 2 Type I in 30-45 days, Type II in 90-120 days. Our proven playbooks eliminate months of research and guesswork.</p>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3>Revenue Enablement</h3>
                <p>Close enterprise deals 60% faster. Our compliance certificates become your strongest sales asset for enterprise buyers.</p>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
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
<section class="section section-light">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">From zero to SOC compliant in 4 steps</h2>
            <p class="section-subtitle">Our battle-tested process gets you audit-ready without the typical compliance chaos</p>
        </div>
        
        <div class="process-steps">
            <div class="process-step animate-on-scroll">
                <div class="process-number">1</div>
                <h3 class="process-title">Assess</h3>
                <p class="process-description">15-min fit call + 48-hour gap analysis. We identify exactly what you need for your compliance goals.</p>
            </div>
            
            <div class="process-step animate-on-scroll">
                <div class="process-number">2</div>
                <h3 class="process-title">Implement</h3>
                <p class="process-description">Deploy our proven policy framework, risk register, and control mappings. No reinventing the wheel.</p>
            </div>
            
            <div class="process-step animate-on-scroll">
                <div class="process-number">3</div>
                <h3 class="process-title">Evidence</h3>
                <p class="process-description">Automated evidence collection and documentation. Auditor-ready from day one.</p>
            </div>
            
            <div class="process-step animate-on-scroll">
                <div class="process-number">4</div>
                <h3 class="process-title">Audit-Ready</h3>
                <p class="process-description">Clean handoff to your chosen auditor. We've done the heavy lifting—they just verify and certify.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">Trusted by engineering leaders</h2>
        </div>
        
        <div class="grid grid-3">
            <div class="testimonial animate-on-scroll">
                <div class="testimonial-quote">
                    "FDS got us SOC 2 compliant in 6 weeks. We closed our biggest enterprise deal the following month. ROI was instant."
                </div>
                <div class="testimonial-author">Sarah Chen</div>
                <div class="testimonial-company">CTO, DataFlow SaaS</div>
            </div>
            
            <div class="testimonial animate-on-scroll">
                <div class="testimonial-quote">
                    "Finally, compliance that doesn't slow us down. My engineering team could keep shipping features throughout the entire process."
                </div>
                <div class="testimonial-author">Marcus Rodriguez</div>
                <div class="testimonial-company">VP Engineering, CloudSync</div>
            </div>
            
            <div class="testimonial animate-on-scroll">
                <div class="testimonial-quote">
                    "Security questionnaires went from 2-week ordeals to 1-day checkbox exercises. Game changer for our sales cycle."
                </div>
                <div class="testimonial-author">Jennifer Park</div>
                <div class="testimonial-company">Head of Compliance, SecureAPI</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="animate-on-scroll">
            <h2>Ready to turn compliance into revenue?</h2>
            <p>Book a 15-minute fit call to see if FDS is right for your SaaS team</p>
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">Book a 15-min fit call</a>
                <a href="<?php echo home_url('/resources/soc-2-playbook'); ?>" class="btn btn-ghost btn-lg">Download SOC 2 Playbook</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>