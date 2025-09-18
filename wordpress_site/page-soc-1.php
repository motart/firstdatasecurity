<?php
/**
 * SOC 1 Readiness Page Template - Ultra-Clean Design
 */

get_header(); ?>

<!-- SOC 1 Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <div class="hero-badge">
                <span>📊 Financial Controls Compliance</span>
            </div>
            <h1>SOC 1 Readiness for Financial Reporting Controls</h1>
            <p class="lead">Essential for service organizations affecting client financial reporting. Get SOC 1 Type I or Type II reports to meet customer requirements and demonstrate control effectiveness over financial processes.</p>
            
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Day Implementation</div>
                </div>
                <div class="stat">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Audit Pass Rate</div>
                </div>
                <div class="stat">
                    <div class="stat-number">$20k+</div>
                    <div class="stat-label">Starting Investment</div>
                </div>
            </div>
            
            <div class="hero-cta">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">
                    Get SOC 1 Quote
                </a>
                <a href="#soc1-overview" class="btn btn-ghost btn-lg">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="section" id="soc1-overview">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>SOC 1 vs SOC 2: Understanding the Difference</h2>
            <p class="section-subtitle">While SOC 2 focuses on security controls, SOC 1 specifically addresses financial reporting controls</p>
        </div>
        
        <div class="grid grid-2">
            <div class="card animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3>SOC 1 Focus Areas</h3>
                <p>Controls relevant to financial statement audits and client financial reporting processes.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Revenue recognition controls</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Data integrity and accuracy</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Change management</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Access controls for financial data</span>
                    </div>
                </div>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4"/>
                        <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"/>
                        <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"/>
                    </svg>
                </div>
                <h3>Who Needs SOC 1</h3>
                <p>Service organizations that provide services affecting their clients' financial reporting.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Payroll service providers</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Claims processing companies</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Financial data processors</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>SaaS platforms with financial impact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="section section-light">
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

<!-- Implementation Process -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Our SOC 1 Implementation Process</h2>
            <p class="section-subtitle">Structured approach ensuring comprehensive financial control coverage</p>
        </div>
        
        <div class="process-steps">
            <div class="process-step animate-on-scroll">
                <div class="process-number">1</div>
                <div class="process-content">
                    <h3 class="process-title">Financial Controls Assessment</h3>
                    <p class="process-description">Comprehensive review of your financial processes and identification of relevant controls for client financial reporting.</p>
                </div>
            </div>
            
            <div class="process-step animate-on-scroll">
                <div class="process-number">2</div>
                <div class="process-content">
                    <h3 class="process-title">Control Design & Implementation</h3>
                    <p class="process-description">Design and implement controls that ensure accuracy and completeness of financial data processing.</p>
                </div>
            </div>
            
            <div class="process-step animate-on-scroll">
                <div class="process-number">3</div>
                <div class="process-content">
                    <h3 class="process-title">Evidence Documentation</h3>
                    <p class="process-description">Comprehensive documentation of control activities and evidence collection for auditor review.</p>
                </div>
            </div>
            
            <div class="process-step animate-on-scroll">
                <div class="process-number">4</div>
                <div class="process-content">
                    <h3 class="process-title">Audit Coordination</h3>
                    <p class="process-description">Seamless coordination with your auditor for efficient SOC 1 examination and reporting.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="animate-on-scroll">
            <h2>Ready to achieve SOC 1 compliance?</h2>
            <p>Get a fixed-price quote for your SOC 1 Type I or Type II implementation</p>
            
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg">
                    Get SOC 1 Quote
                </a>
                <a href="<?php echo home_url('/our-services'); ?>" class="btn btn-ghost btn-lg">
                    View All Services
                </a>
            </div>
            
            <div class="cta-trust">
                <p>✅ 15-minute consultation • ✅ Fixed-price delivery • ✅ 100% audit pass guarantee</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>