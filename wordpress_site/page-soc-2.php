<?php
/**
 * SOC 2 Type I & II Page Template - Ultra-Clean Design
 */

get_header(); ?>

<!-- SOC 2 Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <div class="hero-badge">
                <span>🔒 Security & Trust Service Controls</span>
            </div>
            <h1>SOC 2 Type I & II Compliance Solutions</h1>
            <p class="lead">The gold standard for security compliance. Transform complex SOC 2 requirements into streamlined, business-enabling processes that unlock enterprise revenue while protecting your organization.</p>
            
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Day Type I Delivery</div>
                </div>
                <div class="stat">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Trust Service Criteria</div>
                </div>
                <div class="stat">
                    <div class="stat-number">$35k+</div>
                    <div class="stat-label">Starting Investment</div>
                </div>
            </div>
            
            <div class="hero-cta">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">
                    Get SOC 2 Quote
                </a>
                <a href="#soc2-overview" class="btn btn-ghost btn-lg">
                    Explore Options
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service Options -->
<section class="section" id="soc2-overview">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>SOC 2 Implementation Options</h2>
            <p class="section-subtitle">Choose the approach that best fits your timeline and business needs</p>
        </div>
        
        <div class="grid grid-2">
            <div class="card service-featured animate-on-scroll">
                <div class="service-badge">Most Popular</div>
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <h3>SOC 2 Type I Fast-Track</h3>
                <p class="service-subtitle">Point-in-time compliance in 6-8 weeks</p>
                <p>Perfect for SaaS companies needing immediate SOC 2 compliance to unlock enterprise deals. Get audit-ready without slowing down engineering.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>45-day implementation timeline</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>All 5 Trust Service Criteria</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Professional trust center</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Sales enablement ready</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">Starting at $35,000</div>
                    <div class="price-note">Fixed-price engagement</div>
                </div>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12,6 12,12 16,14"/>
                    </svg>
                </div>
                <h3>SOC 2 Type II Comprehensive</h3>
                <p class="service-subtitle">Operational effectiveness over time</p>
                <p>Complete SOC 2 Type II program with ongoing evidence collection and continuous monitoring for long-term compliance excellence.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>12-16 week implementation</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>6-12 month observation period</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Continuous monitoring system</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Ongoing advisory support</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">Starting at $55,000</div>
                    <div class="price-note">Includes ongoing support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Service Criteria -->
<section class="section section-light">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Trust Service Criteria Coverage</h2>
            <p class="section-subtitle">Comprehensive approach to all five SOC 2 criteria</p>
        </div>
        
        <div class="grid grid-3">
            <div class="card animate-on-scroll">
                <div class="card-icon">🔒</div>
                <h3>Security</h3>
                <p>Access controls, system configurations, and data protection measures to prevent unauthorized access.</p>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="card-icon">⚡</div>
                <h3>Availability</h3>
                <p>System monitoring, backup procedures, and incident response to ensure consistent system availability.</p>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="card-icon">🎯</div>
                <h3>Processing Integrity</h3>
                <p>Data accuracy controls, error detection, and validation procedures for complete and accurate processing.</p>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="card-icon">🤐</div>
                <h3>Confidentiality</h3>
                <p>Data classification, encryption protocols, and secure disposal procedures for sensitive information.</p>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="card-icon">🛡️</div>
                <h3>Privacy</h3>
                <p>Consent management, data minimization, and individual rights processes for personal information.</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="section">
    <div class="container">
        <div class="animate-on-scroll">
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="animate-on-scroll">
            <h2>Transform SOC 2 compliance into competitive advantage</h2>
            <p>Get a custom roadmap and fixed-price quote for your SOC 2 implementation</p>
            
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">
                    Get SOC 2 Quote
                </a>
                <a href="<?php echo home_url('/our-services'); ?>" class="btn btn-ghost btn-lg">
                    View All Services
                </a>
            </div>
            
            <div class="cta-trust">
                <p>✅ 15-minute strategy call • ✅ Custom roadmap included • ✅ 100% audit pass guarantee</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>