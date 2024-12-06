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
                <h3>Phase 1: Immediate Enhancements</h3>
                <p>
                    <li>Release of the initial version of our product with basic features.</li>
                    <li>Ability to create a profile.</li>
                    <li>Emergency Support Links.</li>
                </p>
            </div>
            <div class="roadmap-item">
                    <h3>Phase 2: Personalization & Interactivity</h3>
                    <p>
                        <li>Guided Meditation & Breathing Exercises.</li>
                        <li>Development of a mood tracking with analytics.</li>
                        <li>Progress Badges and Achievements.</li>
                    </p>
            </div>
            <div class="roadmap-item">
                <h3>Phase 3: Community & Engagement</h3>
                <p>
                    <li>Weekly checkin prompts..</li>
                    <li>Community spotlights.</li>
                    <li>Seasonal Wellness Challenges.</li>
                </p>
            </div>
            <div class="roadmap-item">
                <h3>Phase 4: Future Innovations</h3>
                <p>
                    <li>Peer Support Forum Integration. (Social Club)</li>
                    <li>Real-Time Sentiment Analysis.</li>
                    <li>Session Logs for Reflection.</li>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
