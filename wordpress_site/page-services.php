<?php
/**
 * Services Page Template - Ultra-Clean Design
 */

get_header(); ?>

<!-- Services Hero Section -->
<section class="hero services-hero">
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <div class="hero-badge">
                <span>🚀 Proven SOC Compliance Solutions</span>
            </div>
            <h1>Transform compliance into your competitive advantage</h1>
            <p class="lead">Stop losing enterprise deals to compliance roadblocks. Our battle-tested SOC services help SaaS companies close bigger deals faster while keeping engineering teams productive.</p>
            
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Companies Served</div>
                </div>
                <div class="stat">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Audit Pass Rate</div>
                </div>
                <div class="stat">
                    <div class="stat-number">60%</div>
                    <div class="stat-label">Faster Deal Close</div>
                </div>
            </div>
            
            <div class="hero-cta">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">
                    Book a Strategy Call
                </a>
                <a href="#services-overview" class="btn btn-ghost btn-lg">
                    Explore Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section" id="services-overview">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Our Service Portfolio</h2>
            <p class="section-subtitle">End-to-end SOC compliance solutions designed for fast-growing SaaS companies</p>
        </div>
        
        <div class="services-grid">
            <!-- SOC 2 Fast-Lane -->
            <div class="service-card service-featured animate-on-scroll">
                <div class="service-badge">Most Popular</div>
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <h3>SOC 2 Fast-Lane</h3>
                <p class="service-subtitle">Type I Readiness in 30-45 Days</p>
                <p>Perfect for SaaS companies that need SOC 2 compliance fast to unlock enterprise deals. Get audit-ready without slowing down your engineering team.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>30-45 day implementation</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>All 5 Trust Service Criteria</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Auditor-ready evidence</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Trust center setup</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">Starting at $25,000</div>
                    <div class="price-note">Fixed-price engagement</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/services/soc-2'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>

            <!-- SOC 2 Type II Managed -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12,6 12,12 16,14"/>
                    </svg>
                </div>
                <h3>SOC 2 Type II Managed</h3>
                <p class="service-subtitle">Complete Compliance Program</p>
                <p>Comprehensive SOC 2 Type II implementation with ongoing evidence collection. Ideal for mature companies seeking long-term compliance excellence.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>90-180 day full implementation</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Continuous monitoring</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Vendor risk management</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Annual maintenance</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">Starting at $45,000</div>
                    <div class="price-note">Includes ongoing support</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/services/soc-2'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>

            <!-- Trust Center + Sales Enablement -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4"/>
                        <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"/>
                        <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"/>
                    </svg>
                </div>
                <h3>Trust Center + Sales Enablement</h3>
                <p class="service-subtitle">Turn Security into Sales Asset</p>
                <p>Transform security questionnaires from 2-week ordeals into 1-day checkbox exercises. Accelerate your enterprise sales cycle.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Professional trust center</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Questionnaire automation</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Sales team training</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Compliance documentation</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">Starting at $15,000</div>
                    <div class="price-note">One-time setup</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>

            <!-- vCISO Services -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3>vCISO Services</h3>
                <p class="service-subtitle">Fractional Security Leadership</p>
                <p>Experienced security leadership without the full-time cost. Strategic guidance to build and maintain your security program as you scale.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Security strategy & roadmap</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Risk assessments</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Incident response planning</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Board-level reporting</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">$8,000/month</div>
                    <div class="price-note">Flexible engagement</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>

            <!-- SOC 1 Readiness -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3>SOC 1 Readiness</h3>
                <p class="service-subtitle">Financial Controls Focus</p>
                <p>Essential for service organizations affecting client financial reporting. Get SOC 1 Type I or Type II reports for customer requirements.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Financial controls assessment</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Control design & implementation</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Evidence documentation</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Auditor coordination</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">Starting at $20,000</div>
                    <div class="price-note">Type I or Type II</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/services/soc-1'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>

            <!-- SOC 3 Public Reports -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 1v6m0 6v6m11-7h-6m-6 0H1"/>
                    </svg>
                </div>
                <h3>SOC 3 Public Reports</h3>
                <p class="service-subtitle">Marketing-Ready Compliance</p>
                <p>Public SOC 3 reports for marketing and business development. Perfect for website display and competitive differentiation.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Public distribution ready</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Marketing asset creation</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Website integration</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Sales presentation ready</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">Starting at $10,000</div>
                    <div class="price-note">Add-on to SOC 2</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/services/soc-3'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose FDS -->
<section class="section section-light">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Why Engineering Teams Choose FDS</h2>
            <p class="section-subtitle">We're the only compliance provider that actually accelerates your business</p>
        </div>
        
        <div class="grid grid-3">
            <div class="card card-benefit animate-on-scroll">
                <div class="benefit-icon">🚀</div>
                <h3>Speed to Market</h3>
                <p>Get SOC 2 Type I in 30-45 days, not 12-18 months. Start closing enterprise deals this quarter.</p>
                <div class="benefit-stat">
                    <span class="stat-number">10x</span>
                    <span class="stat-label">Faster than traditional approaches</span>
                </div>
            </div>
            
            <div class="card card-benefit animate-on-scroll">
                <div class="benefit-icon">💰</div>
                <h3>Revenue Impact</h3>
                <p>Transform compliance into a sales enabler. Our clients see immediate revenue acceleration.</p>
                <div class="benefit-stat">
                    <span class="stat-number">$200k+</span>
                    <span class="stat-label">Average new revenue within 90 days</span>
                </div>
            </div>
            
            <div class="card card-benefit animate-on-scroll">
                <div class="benefit-icon">⚡</div>
                <h3>Zero Slowdown</h3>
                <p>Your engineering team maintains 100% velocity. We handle compliance so you focus on building.</p>
                <div class="benefit-stat">
                    <span class="stat-number">0%</span>
                    <span class="stat-label">Impact on development productivity</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Process -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Our Proven Implementation Process</h2>
            <p class="section-subtitle">Battle-tested methodology with 100% audit pass rate</p>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-marker">1</div>
                <div class="timeline-content">
                    <h3>Strategy & Assessment</h3>
                    <p class="timeline-duration">Week 1</p>
                    <p>15-minute fit call + comprehensive gap analysis. We map your exact compliance requirements and create a custom roadmap.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Gap analysis report, implementation roadmap, fixed-price quote
                    </div>
                </div>
            </div>
            
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-marker">2</div>
                <div class="timeline-content">
                    <h3>Foundation Setup</h3>
                    <p class="timeline-duration">Weeks 2-3</p>
                    <p>Deploy our proven policy framework, risk register, and control mappings. No reinventing the wheel.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Complete policy suite, risk assessment, control framework
                    </div>
                </div>
            </div>
            
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-marker">3</div>
                <div class="timeline-content">
                    <h3>Control Implementation</h3>
                    <p class="timeline-duration">Weeks 3-5</p>
                    <p>Implement technical and administrative controls with automated evidence collection systems.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Operational controls, monitoring systems, evidence automation
                    </div>
                </div>
            </div>
            
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-marker">4</div>
                <div class="timeline-content">
                    <h3>Audit Readiness</h3>
                    <p class="timeline-duration">Weeks 6-8</p>
                    <p>Final documentation, auditor selection, and seamless audit execution. We've done the heavy lifting.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Audit-ready package, trust center, SOC 2 certificate
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Guarantee -->
<section class="guarantee-section">
    <div class="container">
        <div class="guarantee-content animate-on-scroll">
            <div class="guarantee-icon">🛡️</div>
            <h2>100% Success Guarantee</h2>
            <p>We're so confident in our process that we guarantee results. If you don't pass your audit on the first try, we'll refund your entire investment.</p>
            
            <div class="guarantee-stats">
                <div class="guarantee-stat">
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Successful Implementations</div>
                </div>
                <div class="guarantee-stat">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">First-Time Audit Pass Rate</div>
                </div>
                <div class="guarantee-stat">
                    <div class="stat-number">0</div>
                    <div class="stat-label">Refunds Requested</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="animate-on-scroll">
            <h2>Ready to turn compliance into competitive advantage?</h2>
            <p>Book a 15-minute strategy call to see which service is right for your SaaS company</p>
            
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">
                    Book Strategy Call
                </a>
                <a href="<?php echo home_url('/resources'); ?>" class="btn btn-ghost btn-lg">
                    Download Free Resources
                </a>
            </div>
            
            <div class="cta-trust">
                <p>✅ 15-minute call • ✅ No sales pressure • ✅ Custom roadmap included</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>