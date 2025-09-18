<?php
/**
 * Industries Page Template - Ultra-Clean Design
 */

get_header(); ?>

<!-- Industries Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <div class="hero-badge">
                <span>🏭 Industry Expertise</span>
            </div>
            <h1>SOC Compliance Tailored to Your Industry</h1>
            <p class="lead">Every industry has unique compliance challenges. Our specialized approach ensures your SOC implementation addresses industry-specific requirements while accelerating your business growth.</p>
            
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">5+</div>
                    <div class="stat-label">Industries Served</div>
                </div>
                <div class="stat">
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Companies Helped</div>
                </div>
                <div class="stat">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Industry Success Rate</div>
                </div>
            </div>
            
            <div class="hero-cta">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">
                    Discuss Your Industry
                </a>
                <a href="#industries-overview" class="btn btn-ghost btn-lg">
                    Explore Industries
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Industries Overview -->
<section class="section" id="industries-overview">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Industries We Specialize In</h2>
            <p class="section-subtitle">Deep expertise in the most regulated and compliance-critical sectors</p>
        </div>
        
        <div class="services-grid">
            <!-- SaaS Companies -->
            <div class="service-card service-featured animate-on-scroll">
                <div class="service-badge">Most Common</div>
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3>SaaS Companies</h3>
                <p class="service-subtitle">B2B Software Platforms</p>
                <p>From startups to scale-ups, we help SaaS companies achieve SOC 2 compliance that unlocks enterprise revenue and builds customer trust.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Enterprise sales enablement</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Multi-tenant architecture security</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>API security controls</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Cloud infrastructure compliance</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">60+ Companies Served</div>
                    <div class="price-note">Across all SaaS verticals</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/industries/saas'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>

            <!-- FinTech -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="1" x2="12" y2="23"/>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <h3>FinTech</h3>
                <p class="service-subtitle">Financial Services Technology</p>
                <p>Navigate complex financial regulations with SOC compliance that meets banking standards and regulatory requirements.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>PCI DSS alignment</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Banking partnership readiness</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Regulatory compliance support</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Financial data protection</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">25+ Companies Served</div>
                    <div class="price-note">Payment, lending, investing</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/industries/fintech'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>

            <!-- HealthTech -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                </div>
                <h3>HealthTech</h3>
                <p class="service-subtitle">Healthcare Technology</p>
                <p>SOC compliance that aligns with HIPAA requirements and enables partnerships with healthcare organizations.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>HIPAA alignment</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Healthcare partnership readiness</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>PHI protection controls</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Medical device integration</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">15+ Companies Served</div>
                    <div class="price-note">EHR, telemedicine, analytics</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/industries/healthtech'); ?>" class="btn btn-primary">Learn More</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Get Quote</a>
                </div>
            </div>

            <!-- EdTech -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                    </svg>
                </div>
                <h3>EdTech</h3>
                <p class="service-subtitle">Education Technology</p>
                <p>FERPA-aligned SOC compliance for educational platforms serving schools, universities, and learning organizations.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>FERPA compliance alignment</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Student data protection</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Institution partnerships</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Privacy controls for minors</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">12+ Companies Served</div>
                    <div class="price-note">K-12, higher ed, corporate</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Quote</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Learn More</a>
                </div>
            </div>

            <!-- Government/GovTech -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 21h18"/>
                        <path d="M5 21V7l8-4v18"/>
                        <path d="M19 21V11l-6-4"/>
                    </svg>
                </div>
                <h3>GovTech</h3>
                <p class="service-subtitle">Government Technology</p>
                <p>FedRAMP-ready SOC compliance for government contractors and public sector technology providers.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>FedRAMP readiness</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Government contract compliance</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>FISMA alignment</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Public sector partnerships</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">8+ Companies Served</div>
                    <div class="price-note">Federal, state, local</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Quote</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Learn More</a>
                </div>
            </div>

            <!-- Enterprise Software -->
            <div class="service-card animate-on-scroll">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"/>
                        <line x1="7" y1="2" x2="7" y2="22"/>
                        <line x1="17" y1="2" x2="17" y2="22"/>
                        <line x1="2" y1="12" x2="22" y2="12"/>
                        <line x1="2" y1="7" x2="7" y2="7"/>
                        <line x1="2" y1="17" x2="7" y2="17"/>
                        <line x1="17" y1="17" x2="22" y2="17"/>
                        <line x1="17" y1="7" x2="22" y2="7"/>
                    </svg>
                </div>
                <h3>Enterprise Software</h3>
                <p class="service-subtitle">Large-Scale B2B Platforms</p>
                <p>Comprehensive SOC compliance for enterprise software serving Fortune 500 and global organizations.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Fortune 500 readiness</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Global compliance standards</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Multi-region deployments</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Enterprise-grade security</span>
                    </div>
                </div>
                
                <div class="service-pricing">
                    <div class="price">20+ Companies Served</div>
                    <div class="price-note">ERP, CRM, workflow platforms</div>
                </div>
                
                <div class="service-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Quote</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-outline">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industry Success Metrics -->
<section class="section section-light">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Industry-Specific Success Metrics</h2>
            <p class="section-subtitle">Proven results across different industries and compliance requirements</p>
        </div>
        
        <div class="grid grid-3">
            <div class="card card-benefit animate-on-scroll">
                <div class="benefit-icon">💰</div>
                <h3>Revenue Acceleration</h3>
                <p>Average new enterprise revenue within 6 months of SOC compliance across all industries</p>
                <div class="benefit-stat">
                    <span class="stat-number">$750k</span>
                    <span class="stat-label">Average revenue increase</span>
                </div>
            </div>
            
            <div class="card card-benefit animate-on-scroll">
                <div class="benefit-icon">⚡</div>
                <h3>Implementation Speed</h3>
                <p>Industry-optimized processes that deliver compliance faster than generic approaches</p>
                <div class="benefit-stat">
                    <span class="stat-number">40%</span>
                    <span class="stat-label">Faster than industry average</span>
                </div>
            </div>
            
            <div class="card card-benefit animate-on-scroll">
                <div class="benefit-icon">🎯</div>
                <h3>Audit Success Rate</h3>
                <p>Perfect audit pass rate across all industries and compliance frameworks</p>
                <div class="benefit-stat">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">First-time audit pass rate</span>
                </div>
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
            <h2>Ready to get industry-specific SOC compliance?</h2>
            <p>Let's discuss how our specialized approach can accelerate your compliance journey</p>
            
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">
                    Discuss Your Industry
                </a>
                <a href="<?php echo home_url('/our-services'); ?>" class="btn btn-ghost btn-lg">
                    View Our Services
                </a>
            </div>
            
            <div class="cta-trust">
                <p>✅ Industry expertise • ✅ Specialized approach • ✅ Proven results</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>