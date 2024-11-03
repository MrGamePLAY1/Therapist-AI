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

<body class="splash-page"> <!-- Add a class to the body -->
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <h1 class="radley-regular">Therapist AI</h1>
            <p class="radley-regular">Providing compassionate, AI-powered mental health support, accessible anytime and anywhere. Join us to explore ways to improve your mental well-being.</p>
            <a href="{{ url('/home') }}" class="hero-button">Get Started</a>
        </div>
    </div>
</body>

</html>
