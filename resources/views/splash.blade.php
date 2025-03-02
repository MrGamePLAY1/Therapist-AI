<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radley:ital@0;1&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/splash.css') }}">
    <title>Therapist AI</title>
</head>

<body class="splash-page"> 
    @include('navbar')
    
    <main>
        <section class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <h1 class="radley-regular">Therapist AI</h1>
                    <p class="hero-tagline radley-regular">Compassionate, AI-powered mental health support</p>
                    <p class="hero-description">Accessible anytime and anywhere. Join us to explore ways to improve your mental well-being in a safe, private space.</p>
                    <div class="cta-container">
                        <a href="{{ url('/chat') }}" class="hero-button primary-cta">Get Started</a>
                        <a href="{{ url('/about') }}" class="hero-button secondary-cta">Learn More</a>
                    </div>
                </div>
                <div class="hero-image">
                    <!-- You could add an image here representing mental health/therapy -->
                </div>
            </div>
        </section>

        <section class="features-section">
            <div class="container">
                <h2 class="section-title">How Therapist AI Helps</h2>
                
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <!-- Icon placeholder -->
                        </div>
                        <h3>24/7 Support</h3>
                        <p>Access therapeutic conversations whenever you need them, day or night.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <!-- Icon placeholder -->
                        </div>
                        <h3>Complete Privacy</h3>
                        <p>Your conversations remain confidential and secure at all times.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <!-- Icon placeholder -->
                        </div>
                        <h3>Evidence-Based</h3>
                        <p>Techniques grounded in proven therapeutic approaches.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h2 class="section-title">Resources & Articles</h2>
                
                <div class="article-grid">
                    <article class="article-card">
                        <div class="article-image">
                            <!-- Image placeholder -->
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">Understanding Anxiety</h3>
                            <p class="article-text">Learn about common anxiety triggers and effective coping strategies.</p>
                            <a href="#" class="article-link">Read more</a>
                        </div>
                    </article>
                    
                    <article class="article-card">
                        <div class="article-image">
                            <!-- Image placeholder -->
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">Mindfulness Practices</h3>
                            <p class="article-text">Simple mindfulness exercises you can incorporate into your daily routine.</p>
                            <a href="#" class="article-link">Read more</a>
                        </div>
                    </article>
                    
                    <article class="article-card">
                        <div class="article-image">
                            <!-- Image placeholder -->
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">Building Resilience</h3>
                            <p class="article-text">Strategies to develop emotional resilience and manage stress effectively.</p>
                            <a href="#" class="article-link">Read more</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="testimonial-section">
            <div class="container">
                <h2 class="section-title">What Users Say</h2>
                
                <div class="testimonial-slider">
                    <div class="testimonial">
                        <p class="testimonial-text">"Therapist AI has been a valuable resource during times when I needed someone to talk to but couldn't access traditional therapy."</p>
                        <p class="testimonial-author">- Anonymous User</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h3>Therapist AI</h3>
                </div>
                
                <div class="footer-links">
                    <div class="link-group">
                        <h4>About</h4>
                        <ul>
                            <li><a href="#">Our Approach</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    
                    <div class="link-group">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Articles</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Crisis Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="disclaimer-text">Disclaimer: Therapist AI is not a replacement for professional mental health treatment. Your conversations are private and secure.</p>
                <p class="copyright">&copy; 2025 Therapist AI. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
