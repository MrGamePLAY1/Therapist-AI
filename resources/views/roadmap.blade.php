<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radley:ital@0;1&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/splash.css') }}">
    <title>Roadmap</title>
    <style>

    </style>
</head>

<body class="roadmap-page"> 
    @include('navbar')
    <div class="roadmap-hero-section">
        <div class="roadmap-hero-content">
            <h1>Our Roadmap</h1>
            <p>See what's coming next in our journey.</p>
        </div>
    </div>
    <div class="roadmap-section">
        <h2>Roadmap</h2>
        <div class="roadmap-timeline">
            <div class="roadmap-item">
                <h3>Q1 2025</h3>
                <p>Release of the initial version of our product with basic features.</p>
            </div>
            <div class="roadmap-item">
                <h3>Q2 2025</h3>
                <p>Introduction of new AI-powered features and improvements to the user interface.</p>
            </div>
            <div class="roadmap-item">
                <h3>Q3 2025</h3>
                <p>Expansion to new markets and localization for different languages.</p>
            </div>
            <div class="roadmap-item">
                <h3>Q4 2025</h3>
                <p>Launch of mobile applications for iOS and Android platforms.</p>
            </div>
        </div>
    </div>
</body>

</html>
