<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radley:ital@0;1&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/splash.css') }}">
    <title>About Us - Therapist AI</title>
</head>
<body class="about-page">
    @include('navbar')
    <div class="about-hero-section">
        <div class="about-hero-content">
            <h1>About Us</h1>
            <p>Discover how Therapist AI is bridging the gap in accessible mental health support.</p>
        </div>
    </div>

    <div class="about-section">
        <h2>Our Mission</h2>
        <p>Therapist AI is dedicated to providing compassionate, AI-powered mental health support that is accessible anytime and anywhere. Our goal is to leverage technology to create a space where individuals can find affordable and effective therapy solutions tailored to their needs.</p>
        
        <div class="mission-statement">
            <p>We believe in a world where mental health support is available to everyone, regardless of financial means, location, or schedule constraints.</p>
        </div>

        <h2>Our Story</h2>
        <p>Founded with Irish roots and values of compassion, connection, and community, Therapist AI began with a simple mission: to make mental health support accessible to everyone. We recognized that many people face barriers to traditional therapy, whether due to cost, location, or stigma.</p>
        <p>Drawing from the Irish tradition of storytelling and healing, we've created a platform that offers a safe space for people to express themselves and find guidance in their journey toward better mental health.</p>
        
        <div class="content-divider"></div>
        
        <center><h2>Our Values</h2></center>
        <div class="values-grid">
            <div class="value-card">
                <h3>Compassion</h3>
                <p>We approach mental health with empathy and understanding, creating a judgment-free space for all users.</p>
            </div>
            <div class="value-card">
                <h3>Accessibility</h3>
                <p>We believe everyone deserves access to mental health support, regardless of financial or geographical constraints.</p>
            </div>
            <div class="value-card">
                <h3>Innovation</h3>
                <p>We leverage cutting-edge AI technology while maintaining the human touch that makes therapy effective.</p>
            </div>
        </div>
    </div>
</body>
</html>