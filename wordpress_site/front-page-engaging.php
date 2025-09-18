<?php
/**
 * Ultra-Engaging Front Page Template - Sticky & Conversion-Focused
 */

get_header(); ?>

<!-- Hero Section with Urgency -->
<section class="hero">
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <div class="hero-badge">
                <span>🚀 Close Enterprise Deals 60% Faster</span>
            </div>
            <h1>Turn SOC compliance into your fastest revenue driver</h1>
            <p class="lead">Stop losing enterprise deals to competitors who are already SOC compliant. FDS gets SaaS teams audit-ready in 30-45 days without slowing engineering velocity.</p>
            
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">30-45</div>
                    <div class="stat-label">Days to SOC 2 Type I</div>
                </div>
                <div class="stat">
                    <div class="stat-number">60%</div>
                    <div class="stat-label">Faster Deal Close</div>
                </div>
                <div class="stat">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Audit Pass Rate</div>
                </div>
            </div>
            
            <div class="hero-cta">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg pulse-btn">
                    🎯 Book a 15-min Revenue Call
                </a>
                <a href="<?php echo home_url('/resources/soc-2-playbook'); ?>" class="btn btn-ghost btn-lg">
                    📚 Free SOC 2 Playbook
                </a>
            </div>
            
            <div class="hero-proof">
                <p>✅ Trusted by 200+ SaaS companies • ⚡ 30-day money-back guarantee</p>
            </div>
        </div>
    </div>
</section>

<!-- Urgent Problem Statement -->
<section class="problem-section">
    <div class="container">
        <div class="problem-content animate-on-scroll">
            <h2>Stop losing $50k+ enterprise deals to compliance roadblocks</h2>
            <div class="problem-grid">
                <div class="problem-item">
                    <div class="problem-icon">❌</div>
                    <h3>"We need SOC 2 before we can move forward"</h3>
                    <p>Enterprise buyers won't even consider vendors without compliance certifications</p>
                </div>
                <div class="problem-item">
                    <div class="problem-icon">⏰</div>
                    <h3>"This will take 12-18 months to implement"</h3>
                    <p>Traditional compliance consultants slow you down with endless documentation</p>
                </div>
                <div class="problem-item">
                    <div class="problem-icon">💸</div>
                    <h3>"We lost another enterprise deal"</h3>
                    <p>Competitors with SOC compliance are winning the deals you should be closing</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Logo Strip with Social Proof -->
<section class="logo-strip">
    <div class="container">
        <p style="text-align: center; margin-bottom: 2rem; color: #0F172A; font-size: 1rem; font-weight: 600;">Join 200+ SaaS companies closing more enterprise deals</p>
        <div class="logo-strip-inner">
            <div class="client-logo">TechFlow SaaS</div>
            <div class="client-logo">DataSync Pro</div>
            <div class="client-logo">CloudVault</div>
            <div class="client-logo">SecureAPI</div>
            <div class="client-logo">DevTools Inc</div>
        </div>
        <div class="social-proof-banner">
            <span>🏆 97% of our clients close their first enterprise deal within 90 days</span>
        </div>
    </div>
</section>

<!-- Solution with ROI Calculator -->
<section class="solution-section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>The only SOC compliance process that accelerates revenue</h2>
            <p class="section-subtitle">While others slow you down with red tape, we turn compliance into your competitive advantage</p>
        </div>
        
        <div class="roi-calculator animate-on-scroll">
            <h3>🧮 Quick ROI Calculator</h3>
            <div class="calc-inputs">
                <div class="calc-input">
                    <label>Average Enterprise Deal Size:</label>
                    <input type="number" id="deal-size" value="50000" placeholder="50000">
                </div>
                <div class="calc-input">
                    <label>Deals Lost to Compliance Issues (per quarter):</label>
                    <input type="number" id="lost-deals" value="3" placeholder="3">
                </div>
            </div>
            <div class="calc-result">
                <div class="calc-output">
                    <strong>Quarterly Revenue Impact: <span id="revenue-impact">$150,000</span></strong>
                </div>
                <div class="calc-savings">
                    <span>FDS Investment: $15,000 | ROI: <strong><span id="roi-percent">900%</span></strong></span>
                </div>
            </div>
        </div>
        
        <div class="grid grid-3">
            <div class="card card-highlight animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <h3>Lightning Fast Implementation</h3>
                <p>SOC 2 Type I in 30-45 days, Type II in 90-120 days. Start winning enterprise deals this quarter, not next year.</p>
                <div class="card-benefit">💰 Average client sees $200k+ in new revenue within 90 days</div>
            </div>
            
            <div class="card card-highlight animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4"/>
                        <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"/>
                        <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"/>
                    </svg>
                </div>
                <h3>Sales Team's Best Friend</h3>
                <p>Transform security questionnaires from 2-week ordeals into 1-day checkbox exercises. Close deals faster.</p>
                <div class="card-benefit">🎯 60% reduction in sales cycle length</div>
            </div>
            
            <div class="card card-highlight animate-on-scroll">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3>Zero Engineering Slowdown</h3>
                <p>Your team keeps shipping features while we handle the compliance heavy lifting. No productivity loss.</p>
                <div class="card-benefit">⚡ Maintain 100% development velocity</div>
            </div>
        </div>
    </div>
</section>

<!-- Process with Timeline -->
<section class="section section-light">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>From zero to enterprise-ready in 4 simple steps</h2>
            <p class="section-subtitle">Our battle-tested process has helped 200+ SaaS companies win their first enterprise deals</p>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-marker">1</div>
                <div class="timeline-content">
                    <h3>Assess & Quote (Week 1)</h3>
                    <p>15-min fit call + 48-hour gap analysis. Get your exact roadmap and fixed-price quote.</p>
                    <div class="timeline-deliverable">✅ Custom compliance roadmap delivered</div>
                </div>
            </div>
            
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-marker">2</div>
                <div class="timeline-content">
                    <h3>Rapid Implementation (Weeks 2-4)</h3>
                    <p>Deploy our proven frameworks, policies, and automated controls. No reinventing the wheel.</p>
                    <div class="timeline-deliverable">✅ All SOC 2 controls implemented</div>
                </div>
            </div>
            
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-marker">3</div>
                <div class="timeline-content">
                    <h3>Evidence Collection (Weeks 3-6)</h3>
                    <p>Automated evidence gathering and documentation. Auditor-ready from day one.</p>
                    <div class="timeline-deliverable">✅ Audit evidence package ready</div>
                </div>
            </div>
            
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-marker">4</div>
                <div class="timeline-content">
                    <h3>Audit & Certificate (Weeks 6-8)</h3>
                    <p>Seamless handoff to your chosen auditor. We've done the heavy lifting—they verify and certify.</p>
                    <div class="timeline-deliverable">🏆 SOC 2 certificate in hand</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials with Specific Results -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2>Real results from SaaS leaders like you</h2>
        </div>
        
        <div class="grid grid-3">
            <div class="testimonial testimonial-featured animate-on-scroll">
                <div class="testimonial-result">$2.3M in new revenue</div>
                <div class="testimonial-quote">
                    "FDS got us SOC 2 compliant in 6 weeks. We closed our biggest enterprise deal the following month—$2.3M ARR. The ROI was instant and massive."
                </div>
                <div class="testimonial-author">Sarah Chen</div>
                <div class="testimonial-company">CTO, DataFlow SaaS (Series B)</div>
            </div>
            
            <div class="testimonial testimonial-featured animate-on-scroll">
                <div class="testimonial-result">4x faster sales cycles</div>
                <div class="testimonial-quote">
                    "Security questionnaires went from 2-week nightmares to 1-day checkbox exercises. Our enterprise sales velocity increased 4x."
                </div>
                <div class="testimonial-author">Marcus Rodriguez</div>
                <div class="testimonial-company">VP Sales, CloudSync (Series A)</div>
            </div>
            
            <div class="testimonial testimonial-featured animate-on-scroll">
                <div class="testimonial-result">Zero dev slowdown</div>
                <div class="testimonial-quote">
                    "My engineering team shipped 12 features during our compliance process. FDS handled everything without disrupting our roadmap."
                </div>
                <div class="testimonial-author">Jennifer Park</div>
                <div class="testimonial-company">VP Engineering, SecureAPI</div>
            </div>
        </div>
    </div>
</section>

<!-- Urgency and Scarcity -->
<section class="urgency-section">
    <div class="container">
        <div class="urgency-content animate-on-scroll">
            <div class="urgency-badge">⚡ Limited Availability</div>
            <h2>Only 5 implementation slots available this quarter</h2>
            <p>We intentionally limit our client load to ensure white-glove service and guaranteed results. Book your slot before your competitors do.</p>
            
            <div class="urgency-stats">
                <div class="urgency-stat">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Slots Remaining</div>
                </div>
                <div class="urgency-stat">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Days Average Response</div>
                </div>
                <div class="urgency-stat">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Success Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA with Risk Reversal -->
<section class="cta-section">
    <div class="container">
        <div class="animate-on-scroll">
            <h2>Ready to turn compliance into your competitive advantage?</h2>
            <p>Join 200+ SaaS companies using SOC compliance to close enterprise deals faster</p>
            
            <div class="guarantee-box">
                <h3>🛡️ 100% Risk-Free Guarantee</h3>
                <p>If you don't close at least one enterprise deal within 90 days of certification, we'll refund your entire investment. That's how confident we are in our process.</p>
            </div>
            
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-accent btn-lg pulse-btn">
                    🚀 Book Your Revenue Call Now
                </a>
                <a href="<?php echo home_url('/resources/soc-2-playbook'); ?>" class="btn btn-ghost btn-lg">
                    📚 Download Free Playbook
                </a>
            </div>
            
            <div class="cta-trust">
                <p>✅ 15-minute call • ✅ No sales pressure • ✅ Instant ROI calculator</p>
            </div>
        </div>
    </div>
</section>

<script>
// ROI Calculator functionality
document.addEventListener('DOMContentLoaded', function() {
    const dealSizeInput = document.getElementById('deal-size');
    const lostDealsInput = document.getElementById('lost-deals');
    const revenueImpactEl = document.getElementById('revenue-impact');
    const roiPercentEl = document.getElementById('roi-percent');
    
    function calculateROI() {
        const dealSize = parseInt(dealSizeInput.value) || 0;
        const lostDeals = parseInt(lostDealsInput.value) || 0;
        const quarterlyImpact = dealSize * lostDeals;
        const fdsInvestment = 15000;
        const roi = Math.round((quarterlyImpact / fdsInvestment) * 100);
        
        revenueImpactEl.textContent = `$${quarterlyImpact.toLocaleString()}`;
        roiPercentEl.textContent = `${roi}%`;
    }
    
    dealSizeInput.addEventListener('input', calculateROI);
    lostDealsInput.addEventListener('input', calculateROI);
    
    // Pulse button animation
    setInterval(function() {
        document.querySelectorAll('.pulse-btn').forEach(btn => {
            btn.style.animation = 'none';
            setTimeout(() => btn.style.animation = 'pulse 2s infinite', 10);
        });
    }, 5000);
});
</script>

<?php get_footer(); ?>